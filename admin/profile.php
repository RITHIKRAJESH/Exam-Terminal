<?php
session_start();
$userid=$_SESSION["userid"];
include "header.php";
  include "dbconnect.php";
  
  $sql="SELECT * from register where userid='$userid'";
  $result=mysqli_query($conn,$sql);
 ?>

<html>
 <body>
 <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">ADMIN PROFILE</h5>
                            </div>
                            <table class="table">
                                  
        <?php
        
        while($rows=mysqli_fetch_assoc($result)){
            
        ?>
            
               
                  <tr> <td><img src="../uploads/<?php echo $rows['pic'] ?>"></td></tr>
               <tr><td>Name   : <?php echo $rows['fname']?> <?php echo $rows['lname']?></td></tr>
               <tr><td>Email  :<?php echo $rows['email'] ?></td></tr>
            <tr>   <td>Regno  :<?php echo $rows['rno'] ?></td></tr>
               <tr><td>DOB    :<?php echo $rows['bdate'] ?></td></tr>
             
         <tr><td><a href='editpro.php?userid=<?php echo $rows["userid"];?>'><button type="button" class="btn btn-success">Edit</button></a></td><td><a href='changepassword.php?userid=<?php echo $rows["userid"];?>'><button type="button" class="btn btn-warning">Changepassword</button></a></td></tr>            
            
        <?php
        }
        ?>
   </tbody>
</table>
</div>
</body>
</html>
        
        </div>
    </div>
   
<?php
include "footer.php";
?>