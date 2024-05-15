// check_email_existence.php
<?php
if(isset($_POST["email"])) {
    $email = $_POST["email"];
    include "dbconnect.php";
    $sql = "SELECT * FROM login WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo 'exists';
    }
}
?>