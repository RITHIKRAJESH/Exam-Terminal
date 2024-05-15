<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDirectory = "uploads/"; // Directory where you want to save the uploaded files
    $targetFile = $targetDirectory . basename($_FILES["pdf"]["name"]); // Updated to use "pdf" instead of "fileInput"
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists.";
        $uploadOk = 0;
    }

    // Check file size (you can adjust the size limit)
    if ($_FILES["pdf"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only PDF files
    if ($imageFileType != "pdf") {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["pdf"]["name"])) . " has been uploaded."; // Updated to use "pdf" instead of "fileInput"
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
