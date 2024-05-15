<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <!-- Icons font CSS-->
    <link href="vendor1/mdi-font/css1/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css1/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css1?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css1/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form action="#" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="fname" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="lname" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">DateOfBirth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="bdate" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Register Number</label>
                                    <input class="input--style-4" type="text" name="rno" required>
                                </div>
                            </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" required  >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" maxlength="10" minlength="6" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Profession</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="role">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Teacher</option>
                                    <option>Student</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Semester(Students)</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sem">
                                    <option  selected="selected">-teacher-</option>
                                    <option value="1">Semester1</option>
                                    <option value="2">Semester2</option>
                                    <option value="3">Semester3</option>
                                    <option value="4">Semester4</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <input type="submit" class="btn btn--radius-2 btn--blue" value="Register" name="submit">
                        </div>
                        <div class="text-center p-t-136">
                    </div>
                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Sign Up
                        </span>
                        <a class="txt2" href="index.php">
                            Go back?
                        </a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor1/select2/select2.min.js"></script>
    <script src="vendor1/datepicker/moment.min.js"></script>
    <script src="vendor1/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
   <script src="js/global.js"></script>

</body>

</html>
<?php
if(isset($_POST["submit"])) 
{
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $bdate=$_POST["bdate"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 $rno=$_POST["rno"];
 $role=$_POST["role"];
 $sem=$_POST["sem"];
 $userid=0;
 include "dbconnect.php";
 $sql="select * from login where email='$email'";
 $result=mysqli_query($conn,$sql);
 if($row=mysqli_fetch_array($result))
    echo "<script>alert('emailid exist')</script>";
    else
    {
 $sql="insert into login(email,password,role) values('$email','$password','$role')";
 $result=mysqli_query($conn,$sql);
 if($result)
 {
     $sql="select max(userid) as userid from login";
     $result=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_array($result))
     {
         $id=$row["userid"];
     }
     // Corrected this line by removing the extra single quote
     $sql="insert into register(fname,lname,bdate,email,role,rno,sem,userid) values('$fname','$lname','$bdate','$email','$role','$rno','$sem',$userid)";
     $result=mysqli_query($conn,$sql);
     if($result)
     {
          echo "<script>alert('Successfully Registered')</script>";
     }
     else
     {
       echo "<script>alert('failed')</script>"; 
     }
     
 }
 }
}
?>


<!-- end document-->