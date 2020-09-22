
 <?php include'inc/header.php'; ?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Analysis</h1>
           
          </div>
          <?php 
          //users
          $us=mysqli_query($conn,"SELECT * FROM users");
          $users=mysqli_num_rows($us);
          //load
          $loa=mysqli_query($conn,"SELECT * FROM mwload ORDER BY time DESC");
          $i=0;
          while($asa=mysqli_fetch_array($loa)){
            if($i==0){
              $load=$asa['mw'];
            }$i++;
          }
          //battery
          $bat=mysqli_query($conn,"SELECT * FROM battery ORDER BY time  DESC");
          
          $per=0;
          $bcount=0;
          while($asa=mysqli_fetch_array($bat)){
            $batteryid=$asa['battery_id'];
            $i=0;
          $batter=mysqli_query($conn,"SELECT * FROM battery WHERE battery_id='$batteryid' ORDER BY time DESC");
          while($as=mysqli_fetch_array($batter)){
            if($i==0){
              $percent=$as['percentage'];
              $per=$per+$percent;
              $bcount++;
            } $i++;
          }
          }

          $battery=round($per/$bcount);

          //usage
          $read=0;
         
          $b=mysqli_query($conn,"SELECT * FROM usages ORDER BY time DESC");
          while($sa=mysqli_fetch_array($b)){
            $meterid=$sa['meter_id'];
          $meter=mysqli_query($conn,"SELECT * FROM usages WHERE meter_id='$meterid' ORDER BY time DESC");
           $i=0;
          while($as=mysqli_fetch_array($meter)){
            if($i==0){
              $reading=$as['reading'];
              $read=$read+$reading; 
            } $i++;
          }
          }

          ?>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-12 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Predicted Consumption</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo$load;?> W</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-md-12 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Predicted Peak Hour</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">8-10 PM</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-history fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
          </div>

          <!-- Content Row -->


          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Clusters (Consumer Levels)</h6>
                </div>
                <div class="card-body">
                 
               <h4 class="small font-weight-bold">High Users<span class="float-right">30%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Low Users<span class="float-right">10%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Low Users<span class="float-right">60%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              
          
                 

                 
                  
                  
                  
                
                </div>
              </div>

              <!-- Color System -->
              

            </div>

            <!-- Donut Chart -->
            <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Production and Consumption Chart</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4">
                    <canvas id="myPieChart"></canvas>
                   
                  </div>
                 
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Cognitive 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
 <?php include'inc/footer.php'; ?>