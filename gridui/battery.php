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
          <h1 class="h3 mb-2 text-gray-800">Batteries</h1>
          <p class="mb-4">Batteries And their Health <a target="_blank" href="#">Terms and Condition applied</a>.<a style="float: right;" href="?check=1" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-spinner"></i>
                    </span>
                    <span class="text">Check</span>
                  </a></p>
                 
          <?php 
          if(isset($_GET['check'])){
           echo' <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: left;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.button {display: inline-block;
 
  font-weight: 500;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid #ffc600;
  padding: 0 35px;
  font-size: 16px;
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
  line-height: 50px;
  border-radius: 5px;
    color: #07294d;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    z-index: 5;
    -webkit-transition: 0.4s ease-in-out;
    transition: 0.4s ease-in-out;
    background-color: #ffc600;
    }
    .button:hover{
    color: #ffc600;
    border-color: #07294d;
    background-color: #07294d;
}
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: red; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
.para{
 
  padding-bottom: 20px;
  margin: 1px;
}

@media only screen and (max-width: 600px) {
 .para{
  
  padding-bottom: 10px;
  margin: 2px;
}

}
#more{
  display: none;
}


</style>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = " more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = " less"; 
    moreText.style.display = "inline";
  }
}
</script>


<!-- The Modal -->
<div id="myModal" class="modal">

 <!-- Modal content -->
  <div class="modal-content">
    <span style="float:right;" class="close">&times;</span>
    
                      
    <p class="para">
    
                        <div class="row no-gutters align-items-center">
                    <div class="col mr-6">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Verifing the Status . . .</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-battery-half fa-6x fa-rotate-180 text-gray-300"></i>
                    </div>
                  </div>
                       
            

 </p> 
 <a href="#" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-spinner"></i>
                    </span>
                    <span class="text">Checking...</span>
                  </a>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
modal.style.display = "block";
 setTimeout(function(){
     modal.style.display = "none";
    }, 3000);
  
</script>';
          }

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
          
          $per1=0;
          $per2=0;
          $bcount1=0;
          $bcount2=0;
           $i=0;
          while($asa=mysqli_fetch_array($bat)){
            $batteryid=$asa['battery_id'];
           
          $batter=mysqli_query($conn,"SELECT * FROM battery WHERE battery_id='$batteryid' ORDER BY time DESC");
          while($as=mysqli_fetch_array($batter)){
            
            $i++;

            if($i%2==0){
              $percent2=$as['percentage'];
              $per2=$per2+$percent2;
              $bcount2++;

            }else{
              $percent1=$as['percentage'];
              $per1=$per1+$percent1;
              $bcount1++;
            } 
            
          }
          }

          $battery1=round($per1/$bcount1);
          $battery2=round($per2/$bcount2);


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
            <div  class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Battery Hub 1</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo$battery1;?>%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo$battery1;?>%" aria-valuenow="<?php echo$battery1;?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-battery-half fa-6x fa-rotate-270 text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div id="hub2" class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Battery Hub 2</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo$battery2;?>%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo$battery2;?>%" aria-valuenow="<?php echo$battery2;?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-battery-half fa-6x fa-rotate-270 text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

          <!-- Content Row -->
          <?php 
          if (isset($_POST['prior'])) {
            
         
          $toid=$_POST['id'];
          $prod=$_POST['prior'];
          
          $qe=mysqli_query($conn,"UPDATE battery SET prior='$prod' WHERE id='$toid'");
          if($qe){
            echo'<div id="notifi" class="col-xl-12 col-md-12">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Success</div>
                      <div class="row no-gutters align-items-center">
                        
                        <div class="col">
                          <p class="h5 mb-2 text-gray-800">The Priority is Updated !</p>
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
              
              <h5 class="m-0 font-weight-bold text-primary">Battery HUbs info<a style="float: right;" href="#" class="btn btn-primary btn-icon-split">
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
                      <th>Battery ID</th>
                      <th>Type (Capacity)</th>
                      <th>Division</th>
                      <th>Status</th>
                      <th>Priority</th>
                      <th>More</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php 
                   $j=0;
                    $sql=mysqli_query($conn,"SELECT * FROM battery  ORDER BY time DESC");
                    while ($r=mysqli_fetch_array($sql)) {
                      
                    ?>
                    <tr>
                      <td>CG<?php echo$j++;?></td>
                      <td>Battery #<?php echo$r['id'];?></td>
                      <td><?php echo$r['capacity'];?></td>
                      <td>HUB #<?php if($j%2==0){ echo"1";}else{ echo"2";} ?></td>
                      <?php if($r['status']==0){ echo'
                      <td><a href="#" class="btn btn-warning">Idle';}else if($r['status']==1){
                        echo'
                      <td><a href="#" class="btn btn-success">Active';
                      }else if($r['status']==2){
                        echo'
                      <td><a href="#" class="btn btn-danger">Disabled';
                      }  ?></a></td>
                      <?php if($r['prior']==0){ echo'
                      <td><a href="#" class="btn btn-warning">Day';}else if($r['prior']==1){
                        echo'
                      <td><a href="#" class="btn btn-success">Mid Day';
                      }else if($r['prior']==2){
                        echo'
                      <td><a href="#" class="btn btn-info">Eve';
                      }  ?></a></td>
                      <td><a data-toggle="modal" data-target="#addModal<?php echo$r['id'];?>" href="?request=<?php echo$r['id'];?>&action=disable" class="btn btn-info btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Set Priority</span>
                  </a>&nbsp;<a  href="?request=<?php echo$r['id'];?>&action=disable" class="btn btn-secondary btn-icon-split">
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
                    <div class="modal fade" id="addModal<?php echo$r['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Priority</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
        <form id="req" method="post" action="">
        <div class="modal-body">
      
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="id" id="exampleInputEmai" value="<?php echo$r['id']; ?>" aria-describedby="emailHelp" placeholder="Battery ID" readonly>
                    </div>
                     <div class="form-group">
                      <select name="prior" class="form-control" required>
                        <option value="">Select the Battery's Priority</option>
                        <option value="0">Day</option>
                         <option value="1">Mid Day</option>
                         <option value="2">Eve</option>
                      </select>
                    </div>
                    
                    
                    
                   
                    
      </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a onclick="req.submit()" href="#" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Upgrade Priority</span>
                  </a>
         </form>
        </div>
      </div>
    </div>
  </div>
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
