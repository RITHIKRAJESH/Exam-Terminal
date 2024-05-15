<form action=# method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" id="name" name="fname" placeholder="Username" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <select class="form-control form-control-xl" id="role" name="role">
                                <option selected>Select Role...</option>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>
                            </select>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" id="regno" name="regno" placeholder="Register Number" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-card-checklist"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" id="email" name="email" placeholder="Email" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                         
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" id="password" name="password" placeholder="Password" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

<?php
if(isset($_POST["Register"]))
{
    include "dbconnect.php";
    $fname=$_POST["fname"];
    $regno=$_POST['regno'];
    $email=$_POST["email"];
    $role=$_POST["role"];
    $password=$_POST["password"];
       $sql="insert into register(fname,email,role,password) values('$fname','$email','$role','$password')";
       $result=mysqli_query($conn,$sql);
      
  if ($result) 
      echo "<div class='alert alert-success'><i class='bi bi-check-circle'></i> Successfully registered.</div>";
  else 
  echo "<div class='alert alert-danger'><i class='bi bi-file-excel'></i> Something went wrong.</div>";
}
?>
         <input type="submit" name="Register" value="Register" class="btn btn-primary btn-block btn-lg shadow-lg mt-3">
                    </form>