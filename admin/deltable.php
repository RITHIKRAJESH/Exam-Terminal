<?php
                    
                    $tid=$_GET["tid"];
                    include "dbconnect.php";
                    $sql="delete from timetable where tid=$tid";
                    $result=mysqli_query($conn,$sql);
                    if($result)
                    {
                      echo "<script>alert('Deleted the exam with tid=$tid')</script>";
                       echo '<meta http-equiv="refresh" content="0;index.php">';
                    }

  ?>