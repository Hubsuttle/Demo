<?php  
include("hbconnect.php");
?>
<?php
$un=$_POST['t1'];
$pd=$_POST['t2'];
$em=$_POST['t3'];
$sql = "INSERT INTO customers (username,email,issue)
  VALUES ('$un','$pd','$em')";
?>