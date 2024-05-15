<?php
 $userid=$_GET["userid"];
   include "dbconnect.php";
   $sql="select * from login,register where register.userid=login.userid and register.userid=$userid ";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($result);
  $sql ="UPDATE login SET status='active' WHERE userid=$userid";
       $result = mysqli_query($conn,$sql);
       if($result)
       {
       	 echo "<script>alert('Activated')</script>";
        header("location:index.php"); 
       }
    
   
       ?>
       