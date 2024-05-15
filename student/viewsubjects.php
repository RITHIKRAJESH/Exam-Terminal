<?php
session_start();
include "header.php";
include "dbconnect.php";
$userid=$_SESSION["userid"];
$sql1 = "SELECT sem FROM register where userid='$userid'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$semester = $row1['sem'];
  $sql = "SELECT subjects.teacher, subjects.sid, subjects.subject, subjects.sem, register.fname FROM subjects JOIN register ON subjects.userid = register.userid WHERE subjects.sem = '$semester'";
 $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
?>
<div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                    <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h2>SUBJECTS Of <?php echo "SEMESTER".$semester;?></h2>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Subject</th>
                                                                <th>Teacher</th>
                                                                <th>Semester</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                    <?php
        $i=0;
        while($rows=mysqli_fetch_assoc($result)){
            $i++;
        ?>
            <tr>
               <td><?php echo $i ?></td>
               <td><?php echo $rows['subject'] ?></td>
               <td><?php echo $rows['teacher'] ?></td>
               <td><?php echo $rows['sem'] ?></td>
                 </tr>
            
        <?php
        }
        ?>
                                    
                                  </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>





<?php
include "footer.php";
?>