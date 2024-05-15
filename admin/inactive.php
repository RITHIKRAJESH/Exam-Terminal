<?php
 $userid=$_GET["userid"];
include "dbconnect.php";
$sql="select * from login,register where register.userid=login.userid and register.userid=$userid ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$sql ="UPDATE login SET status='inactive' WHERE userid=$userid";
echo $sql; // This line echoes the SQL query, it can be useful for debugging
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "<script>alert('Inactivated')</script>";
    header("location:index.php"); 
}

    
   
       ?>
       