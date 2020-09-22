<?php 
session_start();
session_unset($_SESSION['user']);
session_unset($_SESSION['level']);
session_unset($_SESSION['mid']);
session_destroy();
header("location:login");
?>