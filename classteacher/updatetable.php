<?php
include "header.php";
include "dbconnect.php";
$tid=$_GET['tid'];
  $sql="SELECT * from timetable where tid='$tid'";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($result))
  {
   
      ?>

     <div class="card">
                                                    <div class="card-header">
                                                        <h5>Edit Time Table</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="#" method="POST">
                                                               
                                                                <input type="hidden" name="tid" value="<?php echo $tid; ?>">
   
                                                                <div class="col-sm-10">
                                                                    Internal:<input type="text" name="ename" value="<?php echo $row['ename']; ?>" class="form-control" >
                                                                    </div>
                                                                    <div class="col-sm-10">
                                                                
                                                                    Subject:<input type="text" name="subject" value="<?php echo $row['subject'];?>" class="form-control" >
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    Date:<input type="date" name="edate" value="<?php echo $row['edate']; ?>" class="form-control" >
                                                                </div>
                                                            
                                                                <div class="col-sm-10">
                                                                   Time: <input type="time" name="time" value="<?php echo $row['time']; ?>"class="form-control" >
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
 $ename=$_POST["ename"];
 $subject=$_POST["subject"];
 $edate=$_POST["edate"];
 $time=$_POST["time"]; 
 $tid=$_POST["tid"];
 include "dbconnect.php";
  $sql = "UPDATE `timetable` SET `ename`='$ename', `subject`='$subject', `edate`='$edate', `time`='$time' WHERE tid='$tid'";
  $result=mysqli_query($conn,$sql);
     
     if($result)
     {
         echo "<script>alert('Successfully updated')</script>";
         echo '<meta http-equiv="refresh" content="0;index.php">';
     }
}



 ?>
<?php
include "footer.php";
?>