<?php
//include "header.php";
?>
<?php
include "dbconnect.php";
// Retrieve module and subject from the form
$module = isset($_POST['module']) ? $_POST['module'] : [];
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';

// Convert array to comma-separated string for the SQL query
$moduleList = implode(",", $module);

// Fetch questions from the database based on module and subject
$sql = "SELECT * FROM questionbank WHERE module IN ($moduleList) AND subject = '$subject'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Questions</title>
</head>
<body>
    <h2>Previous Year Questions from module <?php echo implode(", ", $module) . " - $subject"; ?></h2>
   <table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Question</th>
             <th>Module</th>
            <th>Mark</th>
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
               <td><?php echo $rows['question'] ?></td>
               <td><?php echo $rows['module'] ?></td>
               <td><?php echo $rows['mark'] ?></td>
</td>
<?php
        }
        ?>
</tbody>
</table>
<form>
<a href="addquestions.php"><button>Back</button>
</form>
</body>
</html>
<?php
//include "footer.php";
?>