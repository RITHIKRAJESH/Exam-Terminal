<?php
include "header.php"
?>
<?php
    include "dbconnect.php";
    $sem=$_GET["sem"];
    $sql="select * from timetable where sem='$sem' ORDER BY sem,ename,edate ";
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
                                                <h5>Time table Of<?php echo " Semester ".$sem;?> Internals </h5>
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
                                                                <th>Internal</th>
                                                                <th>Subject</th>
                                                                <th>Time</th>
                                                                <th>Date</th>
                                                                <th>Action</th>
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
               <td><?php echo "Internal".$rows['ename'] ?></td>
               <td><?php echo $rows['subject'] ?></td>
               <td><?php echo $rows['edate'] ?></td>
               <td><?php echo $rows['etime'] ?></td>
               <td>
               <a href='deltable.php?tid=<?php echo $rows["tid"];?>'><button type="button" class="btn waves-effect waves-light btn-danger">Delete</button></a></td>
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