<?php
session_start();
include "header.php";
include "dbconnect.php";  
$userid = $_SESSION["userid"];
$sql1 = "SELECT sem FROM register where userid='$userid'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$semester = $row1['sem'];
$sql = "SELECT * FROM questionpaperset where sem ='$semester' ORDER BY type";
$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);
?>
<div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                    <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h2>Internal Questionpaper Of <?php echo "SEMESTER".$semester;?></h2>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Subject</th>
                <th>Internal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <?php
$i = 0;
while ($rows = mysqli_fetch_assoc($result)) {
    $i++;
    $subject = $rows['subject'];

    // Initialize $isDatePassed with a default value
    $isDatePassed = false;

    // Retrieve date from the timetable table based on the subject
    $timetableSql = "SELECT edate FROM timetable WHERE subject='$subject' AND status='upload'";
    $timetableResult = mysqli_query($conn, $timetableSql);

    if (!$timetableResult) {
        die('Error: ' . mysqli_error($conn)); // Add this line to display the error message
    }

    $timetableRow = mysqli_fetch_assoc($timetableResult);

    if ($timetableRow && isset($timetableRow['edate'])) {
        $timetableDate = $timetableRow['edate'];
        $currentDate = date("Y-m-d");
        $isDatePassed = strtotime($timetableDate) < strtotime($currentDate);
    } else {
        echo "No timetable entry found for subject: $subject";
        // You can choose to skip the row or handle it differently based on your requirements
    }

    // Now $isDatePassed will indicate whether the date has passed or not
    ?>

    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $rows['id'] ?></td>
        <td><?php echo $subject ?></td>
        <td> Internal<?php echo $rows['type'] ?></td>
        <td>
            <?php if ($isDatePassed): ?>
                <a href="viewqp.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-warning">View</button></a>
            <?php else: ?>
                <button class="btn btn-primary" disabled>View</button>
            <?php endif; ?>
        </td>
    </tr><?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
include "footer.php";
?>
