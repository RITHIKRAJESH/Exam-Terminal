 <?php
    include "header.php";
?>
<?php
    include "dbconnect.php";
   $sql = "SELECT register.*, login.status FROM register JOIN login ON register.userid = login.userid  WHERE register.role = 'Student'";
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
                                                <h5>Table Students</h5>
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
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Username</th>
                                                                <th>RegisterNO</th>
                                                                <th>Birth Date</th>
                                                                <th>Status</th>
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
               <td><?php echo $rows['fname'] ?></td>
               <td><?php echo $rows['lname'] ?></td>
               <td><?php echo $rows['email'] ?></td>
               <td><?php echo $rows['rno'] ?></td>
               <td><?php echo $rows['bdate'] ?></td>
               <td><?php echo $rows['status'] ?></td> 
               <td><a href='delete.php?userid=<?php echo $rows["userid"];?>'><button type="button" class="btn waves-effect waves-light btn-danger">Delete</button></a></td>
            </tr>
            
        <?php
        }
        ?>
                                    
                                  </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Basic table card end -->                       
                        <?php
   include "footer.php"
?>                                            