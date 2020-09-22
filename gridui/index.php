<?php 
if(isset($_SESSION['user']))
{
		if($_SESSION['level']==1){
      		header("location: admin");
      	}else{
      		header("location: user");
      	}
}else{
  header("location: login");
}
?>