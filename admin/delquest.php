<?php
                    
                    $sid=$_GET["sid"];
                    include "dbconnect.php";
                    $sql="delete from questionbank where sid=$sid";
                    $result=mysqli_query($conn,$sql);
                    if($result)
                    {
                      echo "<script>alert('Deleted the question from questionbank with id=$sid')</script>";
                      echo '<meta http-equiv="refresh" content="0; index.php">';
                       }

  ?>