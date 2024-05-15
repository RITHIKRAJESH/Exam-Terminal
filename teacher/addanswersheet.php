<?php
include "header.php";
include "dbconnect.php";
$sem = $_GET["sem"];
$sql = "SELECT * FROM register WHERE sem='$sem' AND role='Student'";
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
                                                <h5>Time table Of<?php echo " Semester ".$sem;?> Internals </h5>
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
            <tr>
                <th>Name</th>
                <th>Register Number</th>
                <th>File Upload</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <
                    <td><?php echo $rows['fname'] ?></td>
                    <td><?php echo $rows['rno'] ?></td>
                    <td>
                        
                            
                            <a href='addanssheet.php?rno=<?php echo $rows["rno"];?>'><button type="button" class="btn waves-effect waves-light btn-success">Upload</button></a></td>
                        
                            
                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div></div></div></div></div></div></div>

<?php
include "footer.php";
?>
