<html>
<body>
<?php
   
    $dbusername = "root";  
    $dbpassword = "";  
    $server = "localhost"; 
  
    $dbconnect = mysqli_connect($server, $dbusername, $dbpassword,"request");
    ?>
<?php
 $sql = "select * from request";    
 
   $re =  mysqli_query($dbconnect, $sql);
	while($row=mysqli_fetch_array($re))
{
$id = $row['id'];
$value = $row['request'];
$time = $row['time'];
echo "<p><label>$id</label>&nbsp;&nbsp;<small>$value</small>&nbsp;&nbsp;$time</p>";
echo "<br>";
}
					
?>
</body>
</html>