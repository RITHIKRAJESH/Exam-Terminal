<?php
include "header.php"
?>
<?php
include "dbconnect.php";

$sem = isset($_GET["sem"]) ? $_GET["sem"] : '';
$sql = "SELECT * FROM subjects WHERE sem='$sem'";
$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);
?>

<div class="card">
    <div class="card-header">
        <h5>ADD TIMETABLE<?php echo " OF SEMESTER" . $sem; ?></h5>
    </div>
    <div class="card-block">
        <form action="#" method="POST">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Exam Name</label>
                <div class="col-sm-4">
                    <select name="ename" class="form-control">
                        <option value="opt1">Select Exam</option>
                        <option value="1">1st Internal</option>
                        <option value="2">2nd Internal</option>
                        <option value="3">Unit test</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-4">
                    <input type="text" name="sem" value="<?php echo $sem; ?>" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Subject</label>
                <div class="col-sm-4">
                    <select name="subject" class="form-control">
                        <option value="opt1">Select Subject</option>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value=" . $row["subject"] . ">" . $row["subject"] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-4">
                    <input type="date" name="edate" class="form-control" min="<?= date('Y-m-d'); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Time</label>
                <div class="col-sm-4">
                    <input type="time" name="etime" class="form-control">
                </div>
            </div>
            <div class="p-t-15">
                <input type="submit" class="btn btn-primary" value="ADD" name="add">
                <button type="reset" class="btn btn-warning">CANCEL</button>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST["add"])) {
    $ename = $_POST['ename'];
    $sem = $_POST['sem'];
    $subject = $_POST['subject'];
    $edate = $_POST['edate'];
    $etime = $_POST['etime'];

    $tid = 0;
    include "dbconnect.php";
    
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO timetable (ename, sem, subject, edate, etime) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $ename, $sem, $subject, $edate, $etime);
    
    if ($stmt->execute()) {
        echo "<script>alert('Successfully created')</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
    $stmt->close();
    $conn->close();
}
?>

<?php
include "footer.php"
?>
