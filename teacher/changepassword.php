<?php
session_start();
$userid=$_SESSION["userid"];
//include "header.php";
?>
 <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <br>
         <center>   <h2>Change Password</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    
<center>      

<table align=center>
<form action="#"  method="POST">
<tr><td>Old Password</td><td><input type="text" name="oldpassword"  required ></td></tr>
<tr><td>New Password</td><td><input type="text" name="newpassword"  required ></td></tr>
<tr><td>Confirm Password</td><td><input type="text" name="conpassword"  required ></td></tr>
<tr><td><input type="submit" name="submit" Value="Change Password" ></td></tr>

</form>
</table>


<?php
if(isset($_POST["submit"]))
{
include("dbconnect.php");
$old=$_POST["oldpassword"];
$new=$_POST["newpassword"];
$con1=$_POST["conpassword"];


     if($new==$con1)
	 	{
        $userid=$_SESSION["userid"];
        $sql="select * from login where password='$old' and userid='$userid'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_fetch_array($result))
        {
        $query="update login  set password='$new' where userid='$userid'";
		//echo $query;
	    $result=mysqli_query($conn,$query);
        if($result)
        {
	    echo "<script>alert('Password Changed Successfully')</script>";
	    echo '<META http-equiv="refresh" content="1;index.php">';
		}
        }
        else
        {
           echo "<script>alert('Incorrect Password')</script>"; 
        }
    }
	else
		echo "<script>alert('Password Mismatch')</script>";
	
	
}


?>

 
                                        </div></div></div></div></div>

<?php
//include "footer.php";
?>



