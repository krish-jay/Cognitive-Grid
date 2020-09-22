<?php
   
      $dbusername = "root";  
    $dbpassword = "";  
    $server = "localhost"; 
  
    $dbconnect = mysqli_connect($server, $dbusername, $dbpassword,"request");
    ?>
<?php
  	
	$value= $_GET['value'];

    $sql = "INSERT INTO mwload (id,mw) VALUES ('','$value')";    
 
    mysqli_query($dbconnect, $sql);

?>