<?php
include "header.php";
include "dbconnect.php";
$sem=$_GET['sem'];
  $sql = "SELECT subjects.teacher, subjects.sid, subjects.subject, subjects.sem, register.fname FROM subjects JOIN register ON subjects.userid = register.userid WHERE subjects.sem = '$sem'";

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
                                                <h4>SUBJECTS Of <?php echo "SEMESTER".$sem;?></h4>
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
               <td><?php echo $rows['subject'] ?></td>
               <td><?php echo $rows['fname'] ?></td>
               <td><?php echo $rows['sem'] ?></td>
               <td><a href='delsub.php?sid=<?php echo $rows["sid"];?>'><button type="button" class="btn waves-effect waves-light btn-danger">Delete</button></a><a href='updatesub.php?sid=<?php echo $rows["sid"];?>'><button type="button" class="btn waves-effect waves-light btn-success">UPDATE</button></td>
                 </tr>
            
        <?php
        }
        ?>
                                    
                                  </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>



<div class="card">
                                                    <div class="card-header">
                                                        <h5>ADD SUBJECTS<?php echo " TO SEMESTER".$sem;?></h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="#" method="POST">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Semester</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="sem" value="<?php echo $sem;?>" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">SUBJECT</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="subject" placeholder="Enter the Subject" class="form-control" >
                                                                
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Mark</label>
                                                                <div class="col-sm-4">
                                                                    <select name="teacherId" class="form-control" required>
                                                                        <option value="semester">Select Teacher</option>
                                                                        
            <?php
            include "dbconnect.php";
            $sql = "SELECT userid, fname FROM register WHERE role NOT IN ('Admin', 'Student')";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {
                echo "<option value=" . $row["userid"] . ">" . $row["fname"] . "</option>";
            }
                                                ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                

                                                            <div class="p-t-15">
                            <input type="submit" class="btn btn-primary" value="ADD" name="add"><button type="reset" class="btn btn-warning">CANCEL</button>
                        </div>
                                     </form>
                                     </div>
                                     </div>


<?php
if(isset($_POST["add"])) {
    $sem = $_POST["sem"];
    $subject = $_POST["subject"];
    $teacherId = $_POST["teacherId"]; // Use the correct name for the variable
    include "dbconnect.php";
    $sql = "INSERT INTO subjects(sem, userid, teacher, subject) VALUES ('$sem', '$teacherId', '$teacherId', '$subject')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "<script>alert('Successfully Added')</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }

}
?>

<?php
include "footer.php";
?>