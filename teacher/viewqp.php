<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Your existing styles go here */

        @media print {
            body {
                margin: 1; /* Remove default margin */
                padding: 1; /* Remove default padding */
            }

            .mainContainer {
                display: flex;
                flex-direction: column;
                align-items: flex-start; /* Align to the top left */
                justify-content: flex-start; /* Align to the top left */
                margin: 10px; /* Add margin if needed */
            }

            /* Add more styles as needed for other elements */
        }
    </style>
    <title>Document</title>
</head>
<?php
include "dbconnect.php";
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    $sql = "SELECT * FROM questionpaperset WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    echo mysqli_error($conn);
    $row = mysqli_fetch_assoc($result);
}
?>


<body>
    <main class="mainContainer">
        <div class="header">
            <h1 align="center"><?php echo isset($row['ename']) ? $row['ename'] : ''; ?></h1>
            <h2 align="center"><?php echo isset($row['subject']) ? "SUBJECT -" . $row['subject'] : ''; ?></h2>
        </div>
        <div class="timeDetails">
            <p align="nav-left"><?php echo isset($row['time']) ? "Time : " . $row['time'] : ''; ?></p><p><?php echo isset($row['total_mark']) ? "Max Mark : " . $row['total_mark'] : ''; ?></p>
        </div>
        <div class="questionHeader">
            <?php
            //part A
            $i = 0;
            $sqlA = "SELECT * FROM questionpaperset where id='$id' AND partA='1' ";
            $partA = mysqli_query($conn, $sqlA);
            ?>
            <h3 align="center">Part A</h3>
           <h4> <p class="italicFont" align="center">Each question in section A <?php echo isset($row['part_a_mark']) ? "Mark : " . $row['part_a_mark'] : ''; ?>marks</p></h4>
        </div>
        <div class="questions">
            <?php
            while ($rows1 = mysqli_fetch_assoc($partA)) {
        $i++;
        $questionsAArray = explode(",", $rows1['questions_a']);
        foreach ($questionsAArray as $question) {
            echo $i  . ". " . $question . "<br><br>";
            $i++;
        }
    }
            ?>
        </div>

        <div class="questionHeader">
            <?php
            //part B
            $sqlB = "SELECT * FROM questionpaperset where id='$id' AND partB='2' ";
            $partB = mysqli_query($conn, $sqlB);
            ?>
            <h3 align="center">Part B</h3>
            <h4 align="center"><p class="italicFont">Each question in section B <?php echo isset($row['part_b_mark']) ? "Mark : " . $row['part_b_mark'] : ''; ?>marks </p></h4>
        </div>
        <div class="questions" >
            <?php
           while ($rows2 = mysqli_fetch_assoc($partB)) {
        $questionsBArray = explode(",", $rows2['questions_b']);
        foreach ($questionsBArray as $question) {
            echo $i . ". " . $question . "<br><br>";
            $i++;
        }
    }
            ?>
        </div>
        <button onclick="printPage();" class="print">Print Now</button>
    </main>
    <script>
        function printPage() {
            window.print();
        }
    </script>

</body>

</html>
