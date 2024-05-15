 
<?php
session_start();
$userid=$_SESSION['userid'];
include "header.php";
include "dbconnect.php";
$sql1 = "SELECT sem FROM register where userid='$userid'";
$result1 = mysqli_query($conn, $sql1);

if (!$result1) {
    die("Error in SQL query: " . mysqli_error($conn));
}

$row1 = mysqli_fetch_assoc($result1);

if (!$row1) {
    die("No results fetched for semester");
}
$semester = $row1['sem'];
$sql = "SELECT subjects.teacher, subjects.sid, subjects.subject, subjects.sem, register.fname FROM subjects JOIN register ON subjects.userid = register.userid WHERE subjects.sem = '$semester'";
 $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
//include "header.php";
$rno = isset($_GET['rno']) ? $_GET['rno'] : null;
if ($rno) {
    $sql = "SELECT * FROM register WHERE rno='$rno'";
    $result = mysqli_query($conn, $sql);
    echo mysqli_error($conn);
    $row = mysqli_fetch_assoc($result);
}
?>
     
     <div class="card">
                                                    <div class="card-header">
                                                        <h5>ADD answersheet</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="#" method="POST" enctype="multipart/form-data">
                                                                
                                                                
                                                                <div class="col-sm-10">
                                                                    FIRSTNAME:<input type="text" name="fname" value="<?php echo isset($row['fname']) ? $row['fname'] : ''; ?>" class="form-control" >
                                                                    </div>
                                                                    <div class="col-sm-10">
                                                                
                                                                    REGNO:<input type="text" name="rno" value="<?php echo isset($row['rno']) ? $row['rno'] : ''; ?>" class="form-control" >
                                                                </div>
                                                                <div class="col-sm-10">
                                                                
                                                                    SEM:<input type="text" name="sem" value="<?php echo isset($row['sem']) ? $row['sem'] : ''; ?>" class="form-control" >
                                                                </div>
                                                                <div class="col-sm-10">
    Subject:
    <select name="subject" class="form-control" required>
        <option value="opt1">Select Subject</option>
        <?php
        $sql = "SELECT subject FROM subjects where userid='$userid'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row["subject"] . "'>" . $row["subject"] . "</option>";
        }
        ?>
    </select>
</div>
                                                            
                                                             <div class="col-sm-10">
                                                                    File:<input type="file" name="fileInput" class="form-control" >
                                                                </div>
                                                               
                                                           

                                                            
                                                            <div class="p-t-15">
                            <input type="submit" class="btn btn-primary" value="UPDATE" name="submit"><button type="reset" class="btn btn-warning">CANCEL</button>
                        </div>
                                     </form>
                                     </div>
                                     </div>


<?php
if (isset($_POST["submit"])) {
    // File Upload Handling
    $rno = $_POST['rno'];
    $subject = $_POST['subject'];
    $pic = $_FILES['fileInput']['name'];
    $pic_temp = $_FILES['fileInput']['tmp_name'];
    $sem=$_POST['sem'];
    move_uploaded_file($pic_temp, "../uploads/$pic");

    // Inserting data into answersheet table
    $sql_insert = "INSERT INTO answersheet (semester, rno, pic, subject) VALUES ('$sem', '$rno', '$pic', '$subject')";
    $result_insert = mysqli_query($conn, $sql_insert);

    if ($result_insert) {
        echo "<script>alert('Successfully inserted')</script>";
        echo '<meta http-equiv="refresh" content="0;profile.php">';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

include "footer.php";
?>