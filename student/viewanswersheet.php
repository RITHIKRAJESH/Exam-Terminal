<?php
include "header.php";
include "dbconnect.php";
$aid = isset($_GET['aid']) ? $_GET['aid'] : '';
$sql = "SELECT * FROM answersheet WHERE aid = '$aid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $pic = $row['pic'];
    $documentPath = 'uploads/' . $pic;
    echo "<embed src=\"uploads\$documentPath\" width=\"100%\" height=\"800px\" />";
} else {
    echo "Answer sheet not found.";
}

include "footer.php";
?>
