<?php
include "dbconnect.php";

if (isset($_GET["sem"])) {
    $sem = $_GET["sem"];

    $sql = "SELECT subject FROM subjects WHERE sem='$sem'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<option value='opt1'>Select Subject</option>"; // Placeholder option

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row["subject"] . "'>" . $row["subject"] . "</option>";
        }
    } else {
        echo "<option value='opt1'>Error fetching subjects</option>";
    }
} else {
    echo "<option value='opt1'>Invalid request</option>";
}

mysqli_close($conn);
?>
