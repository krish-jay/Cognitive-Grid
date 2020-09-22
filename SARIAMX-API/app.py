from flask import Flask, jsonify
import pickle
import pickle as pckl
import pandas as pd
import datetime as dt
from statsmodels.tsa.statespace.sarimax import SARIMAX
from sklearn.cluster import SpectralClustering
import numpy as np
import csv
from shapely.geometry import MultiPoint, Point
from sklearn.preprocessing import StandardScaler
from io import StringIO
import ipfshttpclient

model = {}
values_array = []
#client = ipfshttpclient.connect('/ip4/127.0.0.1/tcp/5001')
#total_cosumption = client.add('AEP_hourly.csv')
#individual_consumption = client.add('DATA.csv')

#blockchain_address = 'http://127.0.0.1:8545'
#web3 = Web3(HTTPProvider(blockchain_address))
#web3.eth.defaultAccount = web3.eth.accounts[0]
#deployed_contract_address = '0xbB77BE216eC53FA3ef1813616D17A5E4eb31ef12'
#contract_abi = []
#contract = web3.eth.contract(address=deployed_contract_address, abi=contract_abi)


# --------------------CLUSTER ELEMENTS FETCHING-------------------------------
def cluster_indices(clust_num, labels_array):
    return np.where(labels_array == clust_num)[0]


# --------------------CENTROID CALCULATION------------------------------------
def cluster_centroid(arr):
    a = []
    for t in arr:
        a.append(values_array[t])
    points = MultiPoint(a)
    return points.centroid.distance(Point(0, 0))


def parser(x):
    return dt.datetime.strptime(x, '%Y-%m-%d %H:%M:%S')


def dump_tsa_model():
    # get ipfs hash as argument
    # bytes to csv
    #s = str(client.cat(total_cosumption['Hash']), 'utf-8')
   # data_csv = StringIO(s)

    series = pd.read_csv('Hourly_Consumption.csv', header=0, parse_dates=[0], index_col=0, squeeze=True, date_parser=parser)
    values = [x for x in series.values]
    sarimax = SARIMAX(values)
    model_fit = sarimax.fit(disp=False)
    pckl.dump(model_fit, open('model.pkl', 'wb'))


def dump_cluster_model():
    # ------------------------DATA PREPARATION----------------------------------------

    # get ipfs hash as argument
    # bytes to csv
    #s = str(client.cat(individual_consumption['Hash']), 'utf-8')
   # data_csv = StringIO(s)

    values = pd.read_csv('DATA.CSV')
    formatted_values = StandardScaler().fit_transform(values)

    with open("DATA.csv") as csvfile:
        reader = csv.reader(csvfile, quoting=csv.QUOTE_NONNUMERIC)
        for row in reader:
            values_array.append(row)

    # ------------------------MODEL FITTING-------------------------------------------

    _spectral_model = SpectralClustering(n_clusters=3, affinity='rbf')
    label_rbf = _spectral_model.fit_predict(formatted_values)

    cluster_0 = cluster_indices(0, label_rbf)
    cluster_1 = cluster_indices(1, label_rbf)
    cluster_2 = cluster_indices(2, label_rbf)

    d0 = cluster_centroid(cluster_0)
    d1 = cluster_centroid(cluster_1)
    d2 = cluster_centroid(cluster_2)

    if d0 > d1:
        if d0 > d2:
            if d2 > d1:
                dump_cluster_model.high = cluster_0
                dump_cluster_model.moderate = cluster_2
                dump_cluster_model.low = cluster_1
            else:
                dump_cluster_model.high = cluster_0
                dump_cluster_model.moderate = cluster_1
                dump_cluster_model.low = cluster_2
        else:
            dump_cluster_model.high = cluster_2
            dump_cluster_model.moderate = cluster_0
            dump_cluster_model.low = cluster_1
    elif d1 > d2:
        if d2 > d0:
            dump_cluster_model.high = cluster_1
            dump_cluster_model.moderate = cluster_2
            dump_cluster_model.low = cluster_0
        else:
            dump_cluster_model.high = cluster_1
            dump_cluster_model.moderate = cluster_0
            dump_cluster_model.low = cluster_2
    elif d0 > d1:
        dump_cluster_model.high = cluster_2
        dump_cluster_model.moderate = cluster_0
        dump_cluster_model.low = cluster_1
    else:
        dump_cluster_model.high = cluster_2
        dump_cluster_model.moderate = cluster_1
        dump_cluster_model.low = cluster_0


# load_model
dump_tsa_model()
sarimax_model = pickle.load(open('model.pkl', 'rb'))

dump_cluster_model()
spectral_model = pickle.load(open('model.pkl', 'rb'))

# app
app = Flask(__name__)


# routes
@app.route('/tsa', methods=['POST'])
def predict():
    dump_tsa_model()
    result = sarimax_model.forecast(steps=10)

    # array to json
    output = {'1st_hour': int(result[0]),
              '2nd_hour': int(result[1]),
              '3rd_hour': int(result[2]),
              '4th_hour': int(result[3]),
              '5th_hour': int(result[4]),
              }

    return jsonify(output)


@app.route('/dc', methods=['POST'])
def cluster():
    dump_cluster_model()
    output = {'High Users': dump_cluster_model.high.tolist(),
              'Moderate Users': dump_cluster_model.moderate.tolist(),
              'Low Users': dump_cluster_model.low.tolist(),
              }
    return jsonify(output)


if __name__ == '__main__':
    app.run(port=5000, debug=True)
