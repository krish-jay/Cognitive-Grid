 <?php include'inc/header.php'; ?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
          </div>
          <?php 
          //users 
          //usage
           //total unit
            
            $meterid=$_SESSION['mid'];
          $meter=mysqli_query($conn,"SELECT * FROM usages WHERE meter_id='$meterid' ORDER BY time DESC");
           $i=0;
          while($as=mysqli_fetch_array($meter)){
            if($i==0){
              $reading=$as['reading'];
            } $i++;
          }
          //monthly unit
          $month = date('m');
            $meterid=$_SESSION['mid'];
          $meter=mysqli_query($conn,"SELECT * FROM usages WHERE meter_id='$meterid' AND MONTH(time) = '$month' ORDER BY time DESC");
           $i=0;
          while($as=mysqli_fetch_array($meter)){
            if($i==0){
              $read=$as['reading'];
            } $i++;
          }
          $u=mysqli_query($conn,"SELECT * FROM users WHERE meterid='$meterid'");
          $r=mysqli_fetch_array($u);
          $plan=$r['plan'];
          $plan=round($reading/100);
          $plan=$plan*2;
          $balance=$r['balance'];
          $consume=($balance/$plan)*100;
          $consume=round($consume);
          ?>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Unit Consumed</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo$reading;?> W</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <a style="text-decoration: none;" href="bill?refer=<?php echo$meterid?>"><div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Your Bill (Monthly)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo$plan;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div></a>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Consumption Status</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo$consume;?>%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo$consume;?>%" aria-valuenow="<?php echo$consume;?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Monthly Unit (Consumed)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo$read;?> W</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-home fa-2x text-gray-300"></i>
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
                  <h6 class="m-0 font-weight-bold text-primary">Battery's Health</h6>
                </div>
                <div class="card-body">
                  <?php 
                  //battery
          $bat=mysqli_query($conn,"SELECT * FROM battery ORDER BY time  DESC");
          
          $per=0;
          $bcount=0;
          while($asa=mysqli_fetch_array($bat)){
            $batteryid=$asa['battery_id'];
          $batter=mysqli_query($conn,"SELECT * FROM battery WHERE battery_id='$batteryid' ORDER BY time DESC");
          $i=0;
          while($as=mysqli_fetch_array($batter)){
            if($i==0){
              $percent=round($as['percentage']);
              $per=$per+$percent;
              $bcount++;
              ?>
               <h4 class="small font-weight-bold">Battery #<?php echo$batteryid;?> <span class="float-right"><?php echo$percent;?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-<?php echo col($percent);?>" role="progressbar" style="width: <?php echo$percent;?>%" aria-valuenow="<?php echo$percent;?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              <?php

            } $i++;
          }
          }
          
                  ?>

                 
                  
                  
                  
                
                </div>
              </div>

              <!-- Color System -->
              

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Help</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p></p><a href="tel:+21265885">Call Us &rarr;</a>
                 
                </div>
              </div>

              <!-- Approach -->
              

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