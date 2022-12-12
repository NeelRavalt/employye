<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//error_reporting(0);
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{


if(isset($_POST['submit']))
  {
    $eid=$_GET['editid'];
      $coursepg=$_POST['coursepg'];
    $schoolclgpg=$_POST['schoolclgpg'];
    $yoppg=$_POST['yoppg'];
    $pipg=$_POST['pipg'];
    $coursegra=$_POST['coursegra'];
    $schoolclggra=$_POST['schoolclggra'];
    $yopgra=$_POST['yopgra'];
    $pigra=$_POST['pigra'];
    $coursessc=$_POST['coursessc'];
    $schoolclgssc=$_POST['schoolclgssc'];
    $yopssc=$_POST['yopssc'];
    $pissc=$_POST['pissc'];
    $coursehsc=$_POST['coursehsc'];
    $schoolclghsc=$_POST['schoolclghsc'];
    $yophsc=$_POST['yophsc'];
    $pihsc=$_POST['pihsc'];
    
     $query=mysqli_query($con, "update empeducation set CoursePG='$coursepg', SchoolCollegePG='$schoolclgpg', YearPassingPG='$yoppg',  PercentagePG= '$pipg', CourseGra='$coursegra',  SchoolCollegeGra='$schoolclggra', YearPassingGra= '$yopgra', PercentageGra='$pigra', CourseSSC='$coursessc', SchoolCollegeSSC='$schoolclgssc', YearPassingSSC= '$yopssc', PercentageSSC= '$pissc', CourseHSC='$coursehsc', SchoolCollegeHSC='$schoolclghsc', YearPassingHSC='$yophsc', PercentageHSC='$pihsc' where ID='$eid'");
    if ($query) {
    $msg="Employee Education data has been updated succeesfully.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Employee Education</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  <?php include_once('includes/sidebar.php')?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
         <?php include_once('includes/header.php')?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Employee Education</h1>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

<form class="user" method="post" action="">
   <?php
 $aid=$_GET['editid'];
$ret=mysqli_query($con,"select * from empeducation where ID='$aid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
 
               <div class="row">
                <div class="col-4 mb-3">Course Post Graduation</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="coursepg" name="coursepg" aria-describedby="emailHelp" value="<?php  echo $row['CoursePG'];?>"></div>
                    </div>  
                    <div class="row">
                      <div class="col-4 mb-3">School/College Post Graduation </div>
                     <div class="col-8 mb-3">  <input type="text" class="form-control form-control-user" id="schoolclgpg" name="schoolclgpg" aria-describedby="emailHelp" value="<?php  echo $row['SchoolCollegePG'];?>"></div>  
                     </div>



                    <div class="row">
                    <div class="col-4 mb-3">Year of Passing Post Graduation </div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="yoppg" name="yoppg" aria-describedby="emailHelp" value="<?php  echo $row['YearPassingPG'];?>"></div>
                    </div>

                    <div class="row">
                      <div class="col-4 mb-3">Percentage in PG</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="pipg" name="pipg" aria-describedby="emailHelp" value="<?php  echo $row['PercentagePG'];?>">
                    </div></div>
                    <div class="row">
                <div class="col-4 mb-3">Course Graduation</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="coursegra" name="coursegra" aria-describedby="emailHelp" value="<?php  echo $row['CourseGra'];?>"></div>
                    </div>  
                    <div class="row">
                      <div class="col-4 mb-3">School/College Graduation </div>
                     <div class="col-8 mb-3">  <input type="text" class="form-control form-control-user" id="schoolclggra" name="schoolclggra" aria-describedby="emailHelp" value="<?php  echo $row['SchoolCollegeGra'];?>"></div>  
                     </div>



                    <div class="row">
                    <div class="col-4 mb-3">Year of Passing Graduation </div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="yopgra" name="yopgra" aria-describedby="emailHelp" value="<?php  echo $row['YearPassingGra'];?>"></div>
                    </div>

                    <div class="row">
                      <div class="col-4 mb-3">Percentage in Graduation</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="pigra" name="pigra" aria-describedby="emailHelp" value="<?php  echo $row['PercentageGra'];?>">
                    </div></div>
                    <div class="row">
                <div class="col-4 mb-3">Course SSC</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="coursessc" name="coursessc" aria-describedby="emailHelp" value="<?php  echo $row['CourseSSC'];?>"></div>
                    </div>  
                    <div class="row">
                      <div class="col-4 mb-3">School/College SSC </div>
                     <div class="col-8 mb-3">  <input type="text" class="form-control form-control-user" id="schoolclgssc" name="schoolclgssc" aria-describedby="emailHelp" value="<?php  echo $row['SchoolCollegeSSC'];?>"></div>  
                     </div>



                    <div class="row">
                    <div class="col-4 mb-3">Year of Passing SSC </div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="yopssc" name="yopssc" aria-describedby="emailHelp" value="<?php  echo $row['YearPassingSSC'];?>"></div>
                    </div>

                    <div class="row">
                      <div class="col-4 mb-3">Percentage in SSC</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="pissc" name="pissc" aria-describedby="emailHelp" value="<?php  echo $row['PercentageSSC'];?>">
                    </div></div>
                    <div class="row">
                <div class="col-4 mb-3">Course HSC</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="coursehsc" name="coursehsc" aria-describedby="emailHelp" value="<?php  echo $row['CourseHSC'];?>"></div>
                    </div>  
                    <div class="row">
                      <div class="col-4 mb-3">School/College HSC </div>
                     <div class="col-8 mb-3">  <input type="text" class="form-control form-control-user" id="schoolclghsc" name="schoolclghsc" aria-describedby="emailHelp" value="<?php  echo $row['SchoolCollegeHSC'];?>"></div>  
                     </div>



                    <div class="row">
                    <div class="col-4 mb-3">Year of Passing HSC </div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="yophsc" name="yophsc" aria-describedby="emailHelp" value="<?php  echo $row['YearPassingHSC'];?>"></div>
                    </div>

                    <div class="row">
                      <div class="col-4 mb-3">Percentage in HSC</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="pihsc" name="pihsc" aria-describedby="emailHelp" value="<?php  echo $row['PercentageHSC'];?>">
                    </div></div>
                    <?php } ?>
                   
                    <div class="row" style="margin-top:4%">
                      <div class="col-4"></div>
                      <div class="col-4">
                      <input type="submit" name="submit"  value="update" class="btn btn-primary btn-user btn-block">
                    </div>
                    </div>
                  
                  </form>





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
   <?php include_once('includes/footer.php');?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
    $(".jDate").datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
}).datepicker("update", "10/10/2016"); 
  </script>

</body>

</html>
<?php }  ?>
