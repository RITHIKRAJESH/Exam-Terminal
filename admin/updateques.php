<?php
session_start();
$userid=$_SESSION["userid"];
include "header.php";
  include "dbconnect.php";
  $sid=$_GET['sid'];
  $sql="SELECT * from questionbank where sid='$sid'";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($result))
  {
   
      ?>

     <div class="card">
                                                    <div class="card-header">
                                                        <h5>Edit Questions</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="#" method="POST">
                                                                
                                                                <input type="hidden" name="sid" value="<?php echo $_GET['sid']; ?>">

                                                                <div class="col-sm-10">
                                                                    Subject:<input type="text" name="subject" value="<?php echo $row['subject']; ?>" class="form-control" >
                                                                    </div>
                                                                    <div class="col-sm-10">
                                                                
                                                                    Semester:<input type="text" name="sem" value="<?php echo $row['sem'];?>" class="form-control" >
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    Module:<input type="email" name="module" readonly value="<?php echo $row['module']; ?>" class="form-control" >
                                                                </div>
                                                            
                                                                <div class="col-sm-10">
                                                                 Question: <input type="text" name="question" value="<?php echo $row['question']; ?>"class="form-control" >
                                                                </div>
                                                            
                                                             <div class="col-sm-10">
                                                                    Mark:<input type="text" name="mark" value="<?php echo $row['mark']; ?>" class="form-control" >
                                                                </div>
                                                               
                                                           

                                                            
                                                            <div class="p-t-15">
                            <input type="submit" class="btn btn-primary" value="UPDATE" name="submit"><button type="reset" class="btn btn-warning">CANCEL</button>
                        </div>
                                     </form>
                                     </div>
                                     </div>




        <?php
        }
        ?>
        </div>
    </div>

    <?php
if(isset($_POST["submit"]))
{
 $subject = $_POST["subject"];
$sem = $_POST["sem"];
$module = $_POST["module"];
$question = $_POST["question"];
$mark = $_POST["mark"];
$sid = $_POST['sid'];

$sql = "update questionbank set subject='$subject', module='$module', question='$question', sem='$sem', mark='$mark' where sid='$sid'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('Successfully updated')</script>";
    echo '<meta http-equiv="refresh" content="0;index.php">';
}
}



 ?>
<?php
include "footer.php";
?>