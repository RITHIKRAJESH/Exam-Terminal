<?php
include "header.php";
// Replace these values with your actual database credentials
include "dbconnect.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search term and column from the form
$searchTerm = $_POST["searchTerm"];
$searchColumn = $_POST['searchColumn'];

// Assuming "role" is a column in your database table
$sql = "SELECT * FROM register WHERE $searchColumn LIKE '%$searchTerm%' AND role = 'Student'";

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Display the data as per your requirement
        echo $row['fname'];
        echo $row['lname'];
        // Add more lines for other columns
        echo "<hr>";
    }
} else {
    echo "No results found.";
}

$conn->close();
?>

<?php
include "footer.php";
?>
