<?php
if (isset($_GET["userid"])) {
    $userid = $_GET["userid"];
//include "header.php";
  include "dbconnect.php";  
  $sql="SELECT * from register where userid='$userid'";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($result))
  {
   
      ?>

     <div class="card">
                                                    <div class="card-header">
                                                        <h5>Update Proile</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="#" method="POST">
                                                               <div class="col-sm-10">
                                                                    <input type="hidden" name="userid" value="<?php echo $row['userid']; ?>" class="form-control" >
                                                                    </div> 
                                                                
                                                                <div class="col-sm-10">
                                                                    FIRSTNAME:<input type="text" name="fname" value="<?php echo $row['fname']; ?>" class="form-control" >
                                                                    </div>
                                                                    <div class="col-sm-10">
                                                                
                                                                    LASTNAME:<input type="text" name="lname" value="<?php echo $row['lname'];?>" class="form-control" >
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    EMAIL:<input type="email" name="email" readonly value="<?php echo $row['email']; ?>" class="form-control" >
                                                                </div>
                                                            
                                                                <div class="col-sm-10">
                                                                   REGNO: <input type="text" name="rno" value="<?php echo $row['rno']; ?>"class="form-control" >
                                                                </div>
                                                                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-4">
                    <select  name="sem" class="form-control" required>
                        <option>Select Semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div></div>
                                                            
                                                             <div class="col-sm-10">
                                                                    Role:<input type="text" name="role" value="<?php echo $row['role']; ?>" class="form-control" >
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
if (isset($_POST["submit"])) {
    $role = $_POST["role"];
    $sem = $_POST["sem"];
    $userid = $_POST["userid"]; // Use POST instead of GET for security

    include "dbconnect.php";

    // Update register table
    $sql_register = "UPDATE register SET role='$role', sem='$sem' WHERE userid='$userid'";
    $result_register = mysqli_query($conn, $sql_register);

    // Update login table
    $sql_login = "UPDATE login SET role='$role' WHERE userid='$userid'";
    $result_login = mysqli_query($conn, $sql_login);

    if ($result_register && $result_login) {
        echo "<script>alert('Successfully updated')</script>";
        echo '<meta http-equiv="refresh" content="0;teachers.php">';
    } else {
        echo "<script>alert('Failed to update')</script>";
    }
}


 ?>
<?php
}
//include "footer.php";
?>