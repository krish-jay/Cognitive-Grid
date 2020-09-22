<!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
         <?php 
        if($_SESSION['level']==1){
         echo'<a class="nav-link" href="admin">';
        }else{
          echo'<a class="nav-link" href="user">';
        }
        ?>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="share">
          <i class="fas fa-fw fa-share-alt"></i>
          <span>Request for Sharing</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="request">
          <i class="fas fa-fw fa-bookmark"></i>
          <span>Pending Requests</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="requests">
          <i class="fas fa-fw fa-comments"></i>
          <span>Requests</span></a>
      </li>
       <?php 
        if($_SESSION['level']==1){
         echo'<li class="nav-item active">
        <a class="nav-link" href="users">
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span></a>
      </li>';
       echo'<li class="nav-item active">
        <a class="nav-link" href="schedule">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Schedule(s)</span></a>
      </li>';
      echo'<li class="nav-item active">
        <a class="nav-link" href="battery">
          <i class="fas fa-fw fa-battery-half"></i>
          <span>Battery</span></a>
      </li>';
      echo'<li class="nav-item active">
        <a class="nav-link" href="production">
          <i class="fas fa-fw fa-cubes"></i>
          <span>Production</span></a>
      </li>';
  echo'<li class="nav-item active">
        <a class="nav-link" href="analysis">
          <i class="fas fa-fw fa-signal"></i>
          <span>Analysis</span></a>
      </li>';      
        }else{
          
        }
        ?>