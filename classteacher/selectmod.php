
<?php
include "footer.php";
?>

<?php
include "header.php"
?>
<?php
    include "dbconnect.php";
    $sem=$_GET["sem"];
    $sql="select * from questionbank where sem='$sem'";
    $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
?>
<div class="card">
                                                    <div class="card-header">
                                                        <h5>ADD Questions<?php echo " TO SEMESTER".$sem;?></h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="displayqs.php" method="POST">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Semester</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="sem" value="<?php echo $sem;?>" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">SUBJECT</label>
                                                                <div class="col-sm-4">
                                                                    <select name="subject" class="form-control" required>
                                                                        <option value="opt1">Select Subject</option>
                                                                        <?php
                           include "dbconnect.php";
                           $sql="select subject from subjects where sem='$sem'";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result))
                           {
                          echo "<option value=".$row["subject"].">".$row["subject"]."</option>";
                           }
                           ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"> MODULE</label>
                                                                
    <div class="col-sm-8">
        <div class="form-check">
               module1 <input type="checkbox" name="module[]" value=1 > 
                module2 <input type="checkbox" name="module[]" value=2 >
                 module3 <input type="checkbox" name="module[]" value=3 >
                  module4 <input type="checkbox" name="module[]" value=4 >
                    module5 <input type="checkbox" name="module[]" value=5 >
                
        </div>
    </div>
</div>

                                                            

                                                            <div class="p-t-15">
                            <input type="submit" class="btn btn-primary" value="submit" name="submit"><button type="reset" class="btn btn-warning">CANCEL</button>
                        </div>
                                     </form>
                                     </div>
                                     </div>


<?php
include "footer.php";
?> include "dbconnect.php";
    $sem=$_GET["sem"];
    $sql="select * from questionbank where sem='$sem'";
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
                                                <h5>Questions of <?php echo "SEMESTER".$sem;?></h5>
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
                                                                <th>Module</th>
                                                                <th>Question</th>
                                                                <th>Marks</th>
                                                                <th>Year</th>
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
               <td><?php echo $rows['module'] ?></td>
               <td><?php echo $rows['question'] ?></td>
               <td><?php echo $rows['mark'] ?></td>
               <td><?php echo $rows['year'] ?></td>
               <td><a href='delquest.php?sid=<?php echo $rows["sid"];?>'><button type="button" class="btn waves-effect waves-light btn-danger">Delete</button></a><a href='updateques.php?sid=<?php echo $rows["sid"];?>'><button type="button" class="btn waves-effect waves-light btn-success">UPDATE</button></a></td>
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