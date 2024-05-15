<?php
include "dbconnect.php";
$sem = $_GET["sem"];
$tid = $_GET["tid"];

$sql = "SELECT * FROM timetable WHERE tid=$tid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$sql_update = "UPDATE timetable SET status='upload' WHERE tid=$tid";
$result_update = mysqli_query($conn, $sql_update);

if ($result_update) {
    echo "<script>alert('Uploaded')</script>";
     echo '<meta http-equiv="refresh" content="0;index.php">'; 
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
