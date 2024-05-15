<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Display Timer</title>
</head>
<body>

<?php
$timer_duration = 10; // Set the timer duration in seconds
$file_path = 'uploads/SNA1stint.pdf'; // Set the path to your file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form submission (start timer)
    echo '<div id="timer">Timer: ' . $timer_duration . 's</div>';
    echo '<script>
            var countdown = ' . $timer_duration . ';
            var timer = setInterval(function() {
                countdown--;
                document.getElementById("timer").innerHTML = "Timer: " + countdown + "s";
                
                if (countdown <= 0) {
                    clearInterval(timer);
                    window.location.href = "' . $file_path . '"; // Redirect to the file
                }
            }, 1000);
          </script>';
} else {
    // Display form
    echo '<form method="post">
            <input type="submit" value="Start Timer">
          </form>';
}

?>

</body>
</html>
