<?php
include 'inc/db.php';
$bill=$_GET['refer'];
$sql=mysqli_query($conn,"SELECT * FROM users WHERE meterid='$bill'");
while($a=mysqli_fetch_array($sql)){
    $name=$a['name'];
    $type=$a['type'];
    if($type==0){
      $type="Consumer";
    }else if($type==1){
      $type="Prosumer";
    }else if($type==2){
      $type="Adminstrator";
    }
     $address=$a['address'];
      $level=$a['level'];
      if($level==0){
      $level="Low level";
    }else if($level==1){
      $level="Moderate";
    }else if($level==2){
      $level="High Level";
    }
      $meter=mysqli_query($conn,"SELECT * FROM usages WHERE meter_id='$bill' ORDER BY time DESC");
           $i=0;
          while($as=mysqli_fetch_array($meter)){
            if($i==0){
              $reading=$as['reading'];
            } $i++;
          }
}

require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->set_option('isHtml5ParserEnabled', true);
$dompdf->set_option('defaultFont', 'Courier');
$html="<style>
#customers {
  font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5f64d4;
  color: white;
}
</style><table  id='customers'>
<tr><th colspan=2><center><img src='img/bill.png' style='max-width:100px;;'></center></th></tr>
<tr><td colspan=2><center>Cognitive Grid</center></td>
<tr><td colspan=2><center>Bill Of this month</center></td></tr>
<tr><th>Consumer name</th><td>".$name."</td></tr>
<tr><th>Meter ID</th><td>".$bill."</td></tr>
<tr><th>Type</th><td>".$type."</td></tr>
<tr><th>Level</th><td>".$level."</td></tr>
<tr><th>Reading</th><td>".$reading."</td></tr>
<tr><td colspan=2><center>Your Bill Amount</center></td></tr>
<tr><th>Unit</th><td>".round($reading/100)."</td></tr>
<tr><th>Unit per Utilzation</th><td>".$level." (User)</td></tr>
<tr><th>Price</th><td> Rs ". ($reading*2) ."</td></tr>

<tr><td colspan=2><center>Status</center></td></tr>
<tr><th>Status</th><td>Unpaid</td></tr>
</table>";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4','portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("bill-$bill", array("Attachment"=>0));
?>