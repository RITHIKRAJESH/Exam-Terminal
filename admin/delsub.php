<?php
                    
                    $sid=$_GET["sid"];
                    include "dbconnect.php";
                    $sql="delete from subjects where sid=$sid";
                    $result=mysqli_query($conn,$sql);
                    if($result)
                    {
                      echo "<script>alert('Deleted the subject with id=$sid')</script>";
                       echo '<meta http-equiv="refresh" content="0; index.php">';
                       }

  ?>