<?php
session_start();
$userid=$_SESSION["userid"];
include "header.php";
include "dbconnect.php";
$sem = $_GET["sem"];
$sql = "select * from questionbank where sem='$sem'";
$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);
?>

<div class="card-header">
    <h5>Create QuestionPaper</h5>
</div>
<div class="card-block">
    <form action="#" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Exam Name</label>
            <div class="col-sm-8">
                <input type="text" name="ename" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-4">
                <input type="text" name="sem" value="<?php echo $sem; ?>" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">SUBJECT</label>
            <div class="col-sm-4">
                <select name="subject" id="subject" class="form-control" onchange="getQuestions(this.value)" required>
                    <option value="opt1">Select Subject</option>
                    <?php
                    $selectedSem = $_GET["sem"];
                    $sql = "SELECT subject FROM subjects WHERE sem='$sem' AND userid='$userid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row["subject"] . "'>" . $row["subject"] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"> MODULE</label>
            <div class="col-sm-8">
                <div class="form-check">
                   <!-- Add onchange attribute to each checkbox -->
module1 <input type="checkbox" name="module[]" onchange="getQuestions(getSelectedModules())" value="1">
module2 <input type="checkbox" name="module[]" onchange="getQuestions(getSelectedModules())" value="2">
module3 <input type="checkbox" name="module[]" onchange="getQuestions(getSelectedModules())" value="3">
module4 <input type="checkbox" name="module[]" onchange="getQuestions(getSelectedModules())" value="4">
module5 <input type="checkbox" name="module[]" onchange="getQuestions(getSelectedModules())" value="5">
</div>
            </div>
        </div>

        <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">TYPE</label>
                                                                <div class="col-sm-4">
                                                                    <input type="radio" name="exam" value="1">
                                                                    <label for="exam">FIRST INTERNAL</label><br>
                                                                   <input type="radio" name="exam" value="2">
                                                                    <label for="exam">SECOND INTERNAL</label><br> 
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Time & Total Mark</label>
                                                                <div class="col-sm-4">
                                                            <label class="col-sm-4 col-form-label">Time</label>     
                                                                    <input type="time" name="time"><br>
                                                                    <label class="col-sm-4 col-form-label">Totalmark</label>
                                                                    <input type="text"  name="tmark"><br>
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Part A</label>
                                                                 <div class="col-sm-4">
                                                                    <input type="checkbox" name="partA" value="1" >
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <select name="markA" id="mark" class="form-control" onchange="getQuestions(document.getElementById('subject').value, this.value)" required>

                                                                        <option value="opt1">Select Mark</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Questions</label>
            <div class="col-sm-8">
                <select name="question" id="question" class="form-control" >
                    <option>Select Question</option>
                    <!-- Options will be dynamically populated using JavaScript -->
                </select>
            </div>
        </div>
   
                                                            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Questions</label>
            <div class="col-sm-8">
                <select name="question1" id="question1" class="form-control">
                    <option value="opt2">Select Question</option>
                    <!-- Options will be dynamically populated using JavaScript -->
                </select>
            </div>
        </div>
    
                                                            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Questions</label>
            <div class="col-sm-8">
                <select name="question2" id="question2" class="form-control" >
                    <option value="opt3">Select Question</option>
                    <!-- Options will be dynamically populated using JavaScript -->
                </select>
            </div>
        </div>
   
                                                           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Questions</label>
            <div class="col-sm-8">
                <select name="question3" id="question3" class="form-control" >
                    <option value="opt4">Select Question</option>
                    <!-- Options will be dynamically populated using JavaScript -->
                </select>
            </div>
        </div>
                                                            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Questions</label>
            <div class="col-sm-8">
                <select name="question4" id="question4" class="form-control" >
                    <option value="opt5">Select Question</option>
                    <!-- Options will be dynamically populated using JavaScript -->
                </select><button type="reset"
                class="btn btn-warning">Reset</button>
            </div>
        </div>
    
        
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Part B</label>
                                                                <div>
                                                              <input type="checkbox" name="partB" value="2">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <select name="markB" id="mark" class="form-control" onchange="getQuestionsSingle(document.getElementById('subject').value, this.value)" required>

                                                                        <option value="opt1">Select Mark</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Questions</label>
                                                            <div class="col-sm-8">
                <select name="question5" id="question5" class="form-control" required>
                    <option value="opt2">Select Question</option>
                    <!-- Options will be dynamically populated using JavaScript -->
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Questions</label>
                                                           <div class="col-sm-8">
                <select name="question6" id="question6" class="form-control" required>
                    <option value="opt2">Select Question</option>
                    <!-- Options will be dynamically populated using JavaScript -->
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Questions</label>
                                                            <div class="col-sm-8">
                <select name="question7" id="question7" class="form-control" required>
                    <option value="opt2">Select Question</option>
                    <!-- Options will be dynamically populated using JavaScript -->
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Questions</label>
                                                            <div class="col-sm-8">
                <select name="question8" id="question8" class="form-control" required>
                    <option value="opt2">Select Question</option>
                    <!-- Options will be dynamically populated using JavaScript -->
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Questions</label>
                                                            <div class="col-sm-8">
                <select name="question9" id="question9" class="form-control" required>
                    <option value="opt2">Select Question</option>
                    <!-- Options will be dynamically populated using JavaScript -->
                </select>
                
            </div>
        </div>
        <div class="p-t-15">
           <a href='viewqp.php?id=<?php echo $row['id']; ?>'> <input type="submit" class="btn btn-primary" value="add" name="add"></a><button type="reset" class="btn btn-warning" >Reset</button>
        </div>
    </form>
</div>
        <div class="p-t-15">
        <a href='addnewquestion.php'><button class="btn btn-warning">ADD NEW QUESTION</button></a>
        </div>
<script>
    function getSelectedModules() {
        var selectedModules = [];
        var checkboxes = document.getElementsByName('module[]');
        checkboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                selectedModules.push(checkbox.value);
            }
        });
        return selectedModules.join(',');
    }

    function getQuestions(subject, mark,module) {
        var modules = getSelectedModules();
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_questions.php?subject=" + subject + "&mark=" + mark + "&module=" + modules, true);
        // Rest of the code...
    }

    function getQuestionsSingle(subject, mark, module) {
        var modules = getSelectedModules();
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_questions.php?subject=" + subject + "&mark=" + mark + "&module=" + modules, true);
        // Rest of the code...
    }
</script>
<?php
if (isset($_POST["add"])) {
include "dbconnect.php"; // Make sure to include your database connection file
// Get form data
$userid = $_SESSION["userid"];
$ename = $_POST["ename"];
$sem = $_POST["sem"];
$subject = $_POST["subject"];
$exam= $_POST["exam"];

$time = $_POST["time"];
$partA = $_POST["partA"];
$partB = $_POST["partB"];
$totalMark = $_POST["tmark"];
$partAMark = $_POST["markA"];
$partBMark = $_POST["markB"];

// Assuming you have 9 questions for Part A and Part B
$questions_a = array_merge((array)$_POST["question"], (array)$_POST["question1"], (array)$_POST["question2"], (array)$_POST["question3"], (array)$_POST["question4"]);
$questions_b = array_merge((array)$_POST["question5"], (array)$_POST["question6"], (array)$_POST["question7"], (array)$_POST["question8"], (array)$_POST["question9"]);

// Insert into the questionpaper table
$insertSql = "INSERT INTO questionpaperset (userid, ename, sem, subject, type, time, total_mark, part_a_mark, partA, questions_a, partB, part_b_mark, questions_b)
              VALUES ('$userid', '$ename', '$sem', '$subject', '$exam', '$time', '$totalMark', '$partAMark', '$partA', '" . implode(",", $questions_a) . "', '$partB', '$partBMark', '" . implode(",", $questions_b) . "' )";

if (mysqli_query($conn, $insertSql)) {
    echo "Data inserted successfully into questionpaperset table.";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
}

?>
<?php
include "footer.php";
?>