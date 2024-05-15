<?php
$sid =$_GET["sid"];
 include "header.php";
  include "dbconnect.php";
  $sql="SELECT * from subjects where sid='$sid'";
  $result=mysqli_query($conn,$sql);
  $rows = mysqli_fetch_array($result);
   ?>

     <div class="card">
                                                    <div class="card-header">
                                                        <h5>UPDATE SUBJECT</h5>
                                                    </div>
                                                    <div class="card-block">
                                                       <form action="#" method="POST">
    <input type="hidden" name="sid" value="<?php echo $sid; ?>">
                                                            <div class="form-group row">
    <label class="col-sm-2 col-form-label">Select Box</label>
     <div class="col-sm-6">
                                                                    <input type="text" name="sem" class="form-control" value="<?php echo $rows['sem'] ?? ''; ?>">
 </div>
</div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Teacher</label>
                                                                <div class="col-sm-6">
                                                                    <select name="tname" class="form-control">
                                                                        <option value=""><?php echo $rows['teacher'] ?? ''; ?></option>
<?php
                           include "dbconnect.php";
                           $sql="select fname from register where role='Teacher'";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result))
                           {
                          echo "<option value=".$row["fname"].">".$row["fname"]."</option>";
                           }
                           ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Subject</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="subject" class="form-control" value="<?php echo $rows['subject'] ?? ''; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="p-t-15">
                            <input type="submit" class="btn btn-primary" value="UPDATE" name="submit"><button type="reset" class="btn btn-warning">CANCEL</button>
                        </div>
                                     </form>
                                     </div>
                                     </div>


    <?php
if(isset($_POST["submit"]))
{
 $subject=$_POST["subject"];
 $tname=$_POST["tname"];
 $sem=$_POST["sem"];
 if(isset($_POST["sid"])) {
      $sid=$_POST["sid"];
      // Rest of your code...
  
 include "dbconnect.php";
  $sql="update subjects set subject='$subject', teacher='$tname', sem='$sem' where sid='$sid'";
     $result=mysqli_query($conn,$sql);
     
     if($result)
     {
         echo "<script>alert('Successfully updated')</script>";
         //echo '<meta http-equiv="refresh" content="0;profile.php">';
     }

 } else {
      echo "Error: 'sid' is not set in the POST array.";
   }
}
 ?>
<?php
include "footer.php";
?>