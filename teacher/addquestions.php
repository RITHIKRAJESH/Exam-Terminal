
<?php
session_start();
$userid=$_SESSION["userid"];
include "header.php";
   
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
                       
                    $selectedSem = $_GET["sem"];
                    $sql = "SELECT subject FROM subjects WHERE sem='$sem' AND userid='$userid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row["subject"] . "'>" . $row["subject"] . "</option>";
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

////////Adding the Questions according to the semester///////
 


 <div class="card">
                                                    <div class="card-header">
                                                        <h5>ADD Questions<?php echo " TO SEMESTER".$sem;?></h5>
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
                                                                    <select name="subject" class="form-control" required>
                                                                        <option value="opt1">Select Subject</option>
                                                                        <?php
                    $selectedSem = $_GET["sem"];
                    $sql = "SELECT subject FROM subjects WHERE sem='$sem' AND userid='$userid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row["subject"] . "'>" . $row["subject"] . "</option>";
                    }
                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Year</label>
                                                                <div class="col-sm-4">
                                                                    <input type="number" name="year" class="form-control" placeholder="Enter the Year" min="2015" max="2099" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Mark</label>
                                                                <div class="col-sm-4">
                                                                    <select name="module" value="module" class="form-control" required>
                                                                        <option value="semester5">Select Module</option>
                                                                        <option value="1">1st module</option>
                                                                        <option value="2">2nd module</option>
                                                                        <option value="3">3rd module</option>
                                                                        <option value="4">4th module</option>
                                                                        <option value="5">5th module</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Mark</label>
                                                                <div class="col-sm-4">
                                                                    <select name="mark" value="mark" class="form-control" required>
                                                                        <option value="semester5">Select Mark</option>
                                                                        <option value="3">3 marks</option>
                                                                        <option value="4">4 marks</option>
                                                                        <option value="5">5 marks</option>
                                                                        <option value="6">6 marks</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label" >Question</label>
                                                                <div class="col-sm-8">
                                                                    <textarea rows="5" cols="5" name="question" class="form-control" placeholder="Enter the question" required></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="p-t-15">
                            <input type="submit" class="btn btn-primary" value="ADD" name="add"><button type="reset" class="btn btn-warning">CANCEL</button>
                        </div>
                                     </form>
                                     </div>
                                     </div>


<?php
if(isset($_POST["add"])) 
{
 $sem=$_POST["sem"];
 $year=$_POST["year"];
 $subject=$_POST["subject"];
 $module=$_POST["module"];
 $question=$_POST["question"];
 $mark=$_POST["mark"];
 $sid=0;
 include "dbconnect.php";
     $sql="insert into questionbank(sem,question,subject,module,mark,year,sid) values('$sem','$question','$subject','$module','$mark','$year','$sid')";
     $result=mysqli_query($conn,$sql);
     if($result)
     {
          echo "<script>alert('Successfully Added')</script>";
     }
     else
     {
       echo "<script>alert('failed')</script>"; 
     }
     
 }
?>

<?php
include "footer.php";
?>