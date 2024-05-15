<?php
session_start();
$userid = $_SESSION["userid"];
include "header.php";
include "dbconnect.php";
$sql = "SELECT id,subject,type FROM questionpaperset WHERE userid = '$userid'";
$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Questions</title>
</head>
<body>
    <h2>Internal Question Paper</h2>
   <table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
             <th>Subject</th>
            <th>Internal</th>
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
               <td><?php echo $rows['id'] ?></td>
               <td><?php echo $rows['subject'] ?></td>
               <td> Internal<?php echo $rows['type'] ?></td>
              <td><a href="viewqp.php?id=<?php echo $rows['id']; ?>"><button>View</button></a></td>

</tr>
<?php
        }
        ?>
</tbody>
</table>
</body>
</html>
<?php
include "footer.php";
?>

