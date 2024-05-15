<?php
                    
                    $userid=$_GET["userid"];
                    include "dbconnect.php";
                    $sql="delete from login where userid=$userid";
                    $result=mysqli_query($conn,$sql);
                    $sql="delete from register where userid=$userid";
                    $result=mysqli_query($conn,$sql);
                    if($result)
                    {
                      echo "<script>alert('Deleted the user with id=$userid')</script>";
                       echo '<meta http-equiv="refresh" content="0;index.php">';
                    }

  ?>