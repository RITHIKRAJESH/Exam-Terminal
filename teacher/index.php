 <?php
    include "header.php";
?>
 <?php
               include "dbconnect.php";
                // Number of users
                $sql = "SELECT  count(*) FROM register";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_of_users = $row['count(*)'];
                
                //Number of users-active
                $sql = "SELECT  count(*) FROM login where `status`='active'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_of_active = $row['count(*)'];


                //Number of users-inactive
                $sql = "SELECT  count(*) FROM login where `status`='inactive'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_of_inactive = $row['count(*)'];

                //Number of user-teacher
                $sql = "SELECT  count(*) FROM register where `role`='teacher'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_of_teacher = $row['count(*)'];

                //Number of user-student
                $sql = "SELECT  count(*) FROM register where `role`='student'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_of_student = $row['count(*)'];

                  //Number of Questions
                $sql = "SELECT  count(*) FROM questionbank";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_of_question = $row['count(*)'];


                  //Number of Subject
                $sql = "SELECT  count(*) FROM subjects";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_of_subjects = $row['count(*)'];


 ?>
<div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- Material statustic card start -->
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-user text-c-purple f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo $num_of_users ?></h5>
                                                                        <p class="text-muted m-b-0">USERS</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-user text-c-green f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo $num_of_active ?></h5>
                                                                        <p class="text-muted m-b-0">Active</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-user text-c-red f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo $num_of_inactive ?></h5>
                                                                        <p class="text-muted m-b-0">Inactive</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-user text-c-purple f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo $num_of_teacher ?></h5>
                                                                        <p class="text-muted m-b-0">Teachers</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-user text-c-purple f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo $num_of_active ?></h5>
                                                                        <p class="text-muted m-b-0">Students</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-sitemap text-c-green f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo $num_of_question ?></h5>
                                                                        <p class="text-muted m-b-0">Questions</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-signal text-c-red f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5><?php echo $num_of_subjects ?></h5>
                                                                        <p class="text-muted m-b-0">Subjects</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Material statustic card end -->                
                        <?php
  include "footer.php"
?>                                            