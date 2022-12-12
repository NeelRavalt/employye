<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $empid=$_POST['empid'];
    $Email=$_POST['Email'];

        $query=mysqli_query($con,"select ID from employeedetail where  EmpEmail='$Email' and EmpCode='$empid' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['empid']=$empid;
      $_SESSION['email']=$Email;
     header('location:resetpassword.php');
    }
    else{
      $msg="Invalid Details. Please try again.";
    }
  }
  ?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="Employee Record management System in php and mysql">
  <meta name="description" content="Employee Record management System in php and mysql">
  <meta name="author" content="Sarita Pandey">

  <title>ERMS | Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <h3 align="center" style="color: black; padding-top: 2%">Employee Record Managment System</h3>


    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Recover your password!</h1>
                  </div>
          <p style="font-size:16px; color:red"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                  <form class="user" method="post" action="">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter Email Address..." required="true">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="empid" name="empid" placeholder="Enter your employee Code" required="true">
                    </div>
                    
                  
                    <p> <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="reset"></p>

                    <hr>
                  
                  </form>
                
   
                  <div class="text-center">
                    <a class="small" href="loginerms.php">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
