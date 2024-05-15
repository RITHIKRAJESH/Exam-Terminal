<?php
session_start();
$userid=$_SESSION["userid"];
include "header.php";
include "dbconnect.php"; 
$sql1 = "SELECT rno FROM register where userid='$userid'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$regno = $row1['rno'];
  $sql = "SELECT * FROM answersheet WHERE rno = $regno";
 $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
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
                                <h5 class="card-title m-b-0">ANSWERSHEET</h5>
                            </div>
                            <table class="table">
                                  
        <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
             <th>Subject</th>
            <th>SEMESTER</th>
            <th>Action</th>
        </tr>
    </thead>
     <tbody>
         <td>
        <?php
    
           $i=0;
        while($rows=mysqli_fetch_assoc($result)){
            $i++;
        ?>
            <tr>
               <td><?php echo $i ?></td>
               <td><?php echo $rows['aid'] ?></td>
               <td><?php echo $rows['subject'] ?></td>
               <td><?php echo $rows['semester'] ?></td>
               <td><img src="../uploads/<?php echo $rows['pic'] ?>"></td>

</tr>
  
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