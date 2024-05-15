<!DOCTYPE html>
<?php
    if(isset($_GET["print"])) {
$ename = $_GET["ename"];
$sem = $_GET["sem"];
$subject = $_GET["subject"];
$examType = $_GET["examType"];
$time = $_GET["time"];
$totalMark = $_GET["totalMark"];
$partAMark = $_GET["partAMark"];
$partA = $_GET["partA"];
$questions_a = explode(",", $_GET["questions_a"]);
$partB = $_GET["partB"];
$partBMark = $_GET["partBMark"];
$questions_b = explode(",", $_GET["questions_b"]);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Question Paper</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<h2>Question Paper Details</h2>

<p><strong>Exam Name:</strong> <?php echo $ename; ?></p>
<p><strong>Semester:</strong> <?php echo $sem; ?></p>
<p><strong>Subject:</strong> <?php echo $subject; ?></p>
<p><strong>Exam Type:</strong> <?php echo $examType; ?></p>
<p><strong>Time:</strong> <?php echo $time; ?></p>
<p><strong>Total Mark:</strong> <?php echo $totalMark; ?></p>

<h3>Part A</h3>
<p><strong>Part A Mark:</strong> <?php echo $partAMark; ?></p>
<p><strong>Part A Selected:</strong> <?php echo ($partA == 1) ? 'Yes' : 'No'; ?></p>
<p><strong>Part A Questions:</strong> <?php echo implode(", ", $questions_a); ?></p>

<h3>Part B</h3>
<p><strong>Part B Mark:</strong> <?php echo $partBMark; ?></p>
<p><strong>Part B Selected:</strong> <?php echo ($partB == 2) ? 'Yes' : 'No'; ?></p>
<p><strong>Part B Questions:</strong> <?php echo implode(", ", $questions_b); ?></p>

<!-- Add more HTML and PHP code as needed -->
</form>
</body>
</html>
