<!DOCTYPE html>
<html lang="en">
<?php $filename=basename($_SERVER['PHP_SELF'],'.php');
session_start();
if(isset($_SESSION['user']))
{

}else{
  header("location:login");
}
 include 'inc/db.php';
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cognitive Grid -  <?php echo ucwords($filename);?></title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cognitive</div>
      </a>

      <?php include 'inc/nav.php'; ?>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ucwords($_SESSION['user']);?></span>
                <img class="img-profile rounded-circle" src="img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <style type="text/css">
          input[datalist]
{
  margin-left:auto;
    margin-right:auto;

    max-width: 500px;
    background: #D2E9FF;
    padding: 20px 20px 20px 20px;
    font: 12pinput[datalist]
{
  margin-left:auto;
    margin-right:auto;

    max-width: 500px;
    background: #D2E9FF;
    padding: 20px 20px 20px 20px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #666;
}x Arial, Helvetica, sans-serif;
    color: #666;
}
        </style>
        <!-- Begin Page Content -->
        <div class="container-fluid">
 
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Production</h1>
          <p class="mb-4">Ours and Prosumers Production Data <a target="_blank" href="#">Terms and Condition applied</a>.</p>
          <?php 
          //prosumers
           $sql=mysqli_query($conn,"SELECT * FROM production  ORDER BY time DESC");
           $sum=0;
           $batsum=0;
           $num=mysqli_num_rows($sql);
                    while ($r=mysqli_fetch_array($sql)) {
                    $sum=$sum+$r['production'];  
                     $batsum=$batsum+$r['rate'];  
                    }
                    $prod=$sum/$num;
          //probattery  
          $batsum=$batsum/$num;


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
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Average Battery Bank Contribution (by Prosumers)</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo$batsum;?>%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo$batsum;?>%" aria-valuenow="<?php echo$battery;?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-battery-half fa-3x fa-rotate-270 text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-12 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Average Prosumer's Production</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo$prod;?> w / perday</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-home fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <?php 
          if (isset($_POST['rate'])) {
            
          $toid=$_POST['user'];
          $type=$_POST['type'];
          $rate=$_POST['rate'];
          $pod=$_POST['prod'];
          $qe=mysqli_query($conn,"INSERT INTO production(meterid,type,rate,production,status)VALUES('$toid','$type','$rate','$pod','1')");
          $de=mysqli_query($conn,"UPDATE users SET type='1' WHERE meterid=$toid");
          if($qe){
            echo'<div id="notifi" class="col-xl-12 col-md-12">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Success</div>
                      <div class="row no-gutters align-items-center">
                        
                        <div class="col">
                          <p class="h5 mb-2 text-gray-800">The Request has been Sent !</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
          }else{
             echo'<div id="notifi" class="col-xl-12 col-md-12">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Error</div>
                      <div class="row no-gutters align-items-center">
                        
                        <div class="col">
                          <p class="h5 mb-2 text-gray-800">Something Went Wrong !</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
          }

        }else if(isset($_GET['request']) && isset($_GET['action']) && $_GET['action']=="delete"){
            $id=$_GET['request'];
            $sql="DELETE from requests WHERE id='$id'";
            $t=mysqli_query($conn,$sql);
            if($t){
              echo'<div id="notifi" class="col-xl-12 col-md-12">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Success</div>
                      <div class="row no-gutters align-items-center">
                        
                        <div class="col">
                          <p class="h5 mb-2 text-gray-800">Your Request ID: CNG'.$id.'is deleted !</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>'; 
            }else{
             echo'<div id="notifi" class="col-xl-12 col-md-12">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Error</div>
                      <div class="row no-gutters align-items-center">
                        
                        <div class="col">
                          <p class="h5 mb-2 text-gray-800">Something Went Wrong !</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
            }
          }
        ?>
        <script type="text/javascript">
          var i=0;
          setTimeout(alerta,1000);
          setTimeout(dlerta,2000);
          function alerta(){
            if(i==0){
              console.log("here");
             document.getElementById("notifi").style.opacity = "0.5";
            
             console.log("here"+i);
            }else if(i==1){
              console.log("there");
             document.getElementById("notifi").style.display="none";
             
            }else{
              exit(0);
            }
           i++; 
          }
          function dlerta(){
            if(i==0){
              console.log("here");
             document.getElementById("notifi").style.opacity = "0.5";
            
             console.log("here"+i);
            }else if(i==1){
              console.log("there");
             document.getElementById("notifi").style.display="none";
             
            }else{
              exit(0);
            }
           i++; 
          }
                  </script>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              
              <h5 class="m-0 font-weight-bold text-primary">Prosumers's Production<a data-toggle="modal" data-target="#addModal" style="float: right;" href="#" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add New</span>
                  </a></h5>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Meter ID</th>
                      <th>Address</th>
                      <th>Productivity Rate</th>
                      <th>Total Production</th>
                      <th>Status</th>
                      <th>More</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php 
                   
                    $sql=mysqli_query($conn,"SELECT * FROM production  ORDER BY time DESC");
                    while ($r=mysqli_fetch_array($sql)) {
                      $nam=mysqli_query($conn,"Select * from users where meterid='$r[meterid]'");
                      $w=mysqli_fetch_array($nam);
                    ?>
                    <tr>
                      <td>CNG<?php echo$r['id'];?></td>
                      <td><?php echo$w['name'];?></td>
                      <td><?php echo$r['meterid'];?></td>
                      <td><?php echo$w['address'];?></td>
                      <td><?php echo$r['rate'];?> %</td>
                      <td><?php echo$r['production'];?> w /perday</td>
                      <?php if($r['status']==0){ echo'
                      <td><a href="#" class="btn btn-warning">Idle';}else if($r['status']==1){
                        echo'
                      <td><a href="#" class="btn btn-success">Active';
                      }else if($r['status']==2){
                        echo'
                      <td><a href="#" class="btn btn-danger">Disabled';
                      }  ?></a></td>
                      <td><a href="?request=<?php echo$r['id'];?>&action=disable" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Disable</span>
                  </a>&nbsp; <a href="?request=<?php echo$r['id'];?>&action=remove" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Remove</span>
                  </a></td>
                    </tr>
                  <?php } ?>
                    
                  </tbody>
                </table>
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
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<!-- Request Modal-->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Prosumer</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
        <form id="req" method="post" action="">
        <div class="modal-body">
      
         <div class="form-group">
                      <input autocomplete="off" type="text" class="form-control form-control-user" list="datalist" onkeyup="ac(this.value)" name="user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Consumer Name">
                       <datalist id="datalist"> 
  <?php
                $sql = mysqli_query($conn, "SELECT * From users");
                $row = mysqli_num_rows($sql);
                while ($row = mysqli_fetch_array($sql)){
                echo "<option value=". $row['meterid'] .">" .$row['name'] ."</option>" ;
                }
                ?> 

  
<!-- This data list will be edited through javascript     -->
</datalist>  
                    </div>
                     <div class="form-group">
                      <select name="type" class="form-control" required>
                        <option value="">Select the Type of User</option>
                        <option value="0">Consumer</option>
                         <option value="1">Prosumer</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="rate" aria-describedby="emailHelp" placeholder="Estimated Productivity Rate">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="prod" aria-describedby="emailHelp" placeholder="Estimated Production (perday)">
                    </div>
                    
                   
                    
      </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a onclick="req.submit()" href="#" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Upgrade as Prosumer</span>
                  </a>
         </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript"> 
    var tags = <?php
    $sql="SELECT * FROM `users`";
    $result = mysqli_query($conn,$sql);

    $json=array();

    while($row = mysqli_fetch_array($result)) {
      $temp=array(
        "name" => $row['name'],
        "meterid" => $row['meterid']
      );
      array_push($json, $temp);
    }

    echo json_encode($json);

     ?>;
  
      /*list of available options*/ 
     var n= tags.length; //length of datalist tags     
  
     function ac(value) { 
        document.getElementById('datalist').innerHTML = ''; 
         //setting datalist empty at the start of function 
         //if we skip this step, same name will be repeated 
           
         l=value.length; 
         //input query length 
     for (var i = 0; i<n; i++) { 
         if(((tags[i]["name"].toLowerCase()).indexOf(value.toLowerCase()))>-1) 
         { 
             //comparing if input string is existing in tags[i] string 
  
             var node = document.createElement("option"); 
             var val = document.createTextNode(tags[i]["name"]); 
              node.appendChild(val); 
              node.setAttribute("value", tags[i]["meterid"]);
               document.getElementById("datalist").appendChild(node); 
                   //creating and appending new elements in data list 
             } 
         } 
     } 
   function append(value) {
  var x = document.createElement("INPUT");
  var y=  document.getElementById("append");
  x.setAttribute("type", "hidden");
  x.setAttribute("name", "meter");
  x.setAttribute("id", "meter");
  x.setAttribute("value", value);
  x.setAttribute("class", "form-control");
  x.setAttribute("required");
  y.appendChild(x);
}
</script>      
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
           <a class="btn btn-primary" href="logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
