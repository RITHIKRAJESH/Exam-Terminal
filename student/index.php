 <?php
    include "header.php";
?>
<?php
    include "dbconnect.php";
   $sql = "SELECT register.*, login.status FROM register JOIN login ON register.userid = login.userid  WHERE register.role != 'Admin'";$result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
?>
                     
                        <?php
   include "footer.php"
?>                                            