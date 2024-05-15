 <?php
     session_start();
     $userid=$_SESSION['userid'];
    include "header.php";
    include "dbconnect.php";
    $sql1 = "SELECT sem FROM register where userid='$userid'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$semester = $row1['sem'];
   $sql = "SELECT register.*, login.status FROM register JOIN login ON register.userid = login.userid  WHERE register.role = 'Student' AND sem='$semester' AND status='active'";
$result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
?>

<br>

    <form action="search.php" method="post">
        <label for="searchTerm">Search Term:</label>
        <input type="text" name="searchTerm" id="searchTerm" required>

        <label for="searchColumn">Search Column:</label>
        <select name="searchColumn" id="searchColumn" required>
            <option value="fname">First name</option>
            <option value="lname">Last name</option>
            <!-- Add more options for other columns -->
        </select>

        <button type="submit">Search</button>
    </form>
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
                                                                <th>Semester</th>
                                                                <th>Email</th>
                                                                <th>RegisterNO</th>
                                                                <th>Birth Date</th>
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
               <td><?php echo "semester".$rows['sem'] ?></td>
               <td><?php echo $rows['email'] ?></td>
               <td><?php echo $rows['rno'] ?></td>
               <td><?php echo $rows['bdate'] ?></td> 
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