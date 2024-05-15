<?php
include "dbconnect.php";

if (isset($_GET["subject"]) && isset($_GET["mark"])) {
    $subject = $_GET["subject"];
    $mark = $_GET["mark"];
    
    $sql = "SELECT question FROM questionbank WHERE subject='$subject' AND mark='$mark'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<option value=''>Select Questions</option>"; // Placeholder option

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row["question"] . "'>" . $row["question"] . "</option>";
        }
    } else {
        echo "<option value=''>Error fetching questions</option>";
    }
} else {
    echo "<option value=''>Invalid request</option>";
}

mysqli_close($conn);
?>
