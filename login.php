<?php  
include("dbconnect.php");
?>
<?php
$un=$_POST['t1'];
$pd=$_POST['t2'];
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$C==0;

while($row = mysqli_fetch_assoc($result)) 
{
    if($row["uname"]==$un && $row["pass"]== $pd)
     {
      header("location:h1.html");
     }
    
     }
     if($c==0){
        echo "error in password";
     }
mysqli_close($conn);
?>