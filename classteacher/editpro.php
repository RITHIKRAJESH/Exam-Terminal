<?php
session_start();
$userid=$_SESSION["userid"];
include "header.php";
  include "dbconnect.php";
  
  $sql="SELECT * from register where userid='$userid'";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($result))
  {
   
      ?>

     <div class="card">
                                                    <div class="card-header">
                                                        <h5>Edit Proile</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="#" method="POST">
                                                                <div class="col-sm-10">
                                                                    
                                    PICTURE:<input type="file" class="form-control" placeholder="SERVICE NAME HERE" name="pic" required="">
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
                                                            
                                                             <div class="col-sm-10">
                                                                    BDATE:<input type="text" name="bdate" value="<?php echo $row['bdate']; ?>" class="form-control" >
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
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $email=$_POST["email"];
 $rno=$_POST["rno"];
 $bdate=$_POST["bdate"];
 $pic=$_POST["pic"];
 $userid=$_SESSION["userid"];
 include "dbconnect.php";
  $sql="update register set fname='$fname',lname='$lname', email='$email', rno='$rno', bdate='$bdate', pic='$pic' where userid='$userid'";
     $result=mysqli_query($conn,$sql);
     
     if($result)
     {
         echo "<script>alert('Successfully updated')</script>";
         echo '<meta http-equiv="refresh" content="0;profile.php">';
     }
}



 ?>
<?php
include "footer.php";
?>