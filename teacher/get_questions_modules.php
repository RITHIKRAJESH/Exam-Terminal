<?php
// Include your database connection file
include "dbconnect.php";

// Get parameters from the AJAX request
$subject = $_GET['subject'];
$mark = $_GET['mark'];
$modules = explode(',', $_GET['modules']);

// Build the SQL query based on the selected modules
$moduleConditions = implode(" OR ", array_map(function ($module) {
    return "module = $module";
}, $modules));

$sql = "SELECT * FROM questionbank WHERE subject = '$subject' AND mark = '$mark' AND ($moduleConditions)";
$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Fetch questions and generate options
$options = "";
while ($row = mysqli_fetch_assoc($result)) {
    $options .= "<option value='{$row['id']}'>{$row['question']}</option>";
}

// Output the options
echo $options;

// Close the database connection
mysqli_close($conn);
?>
