<?php
session_start();
if(empty($_SESSION['UserType'])) {
    header('Location: ../logout.php');
}else{
  $user_type =$_SESSION['UserType'];
  
  if ($user_type!="Librarian"){
    header('Location: ../logout.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/lemery_logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Home | Lemery Colleges LMS
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-mini">
          <img src="../assets/img/lemery_logo.png">
        </a>
        <a href="index.php" class="simple-text logo-normal">
          Lemery Colleges Inc.
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">

          <li class="active">
            <a href="./home.php">
              <i class="now-ui-icons business_bank"></i>
              <p>Home</p>
            </a>
          </li>

          <li>
            <a href="./index.php">
              <i class="now-ui-icons business_chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="now-ui-icons education_agenda-bookmark"></i>
              <p>Books</p>
            </a>
          </li>
          <li>
            <a href="other_materials.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Other Materials</p>
            </a>
          </li>
          <li>
            <a href="online_materials.php">
              <i class="now-ui-icons tech_laptop"></i>
              <p>Online Materials</p>
            </a>
          </li>

           <li>
            <a href="replenishment.php">
              <i class="now-ui-icons shopping_box"></i>
              <p>Replenishment</p>
            </a>
          </li>

          <hr>
          <li>
            <a href="users.php?pagetype=Student">
              <i class="now-ui-icons users_single-02"></i>
              <p>Students</p>
            </a>
          </li>
          <li>
            <a href="users.php?pagetype=Faculty">
              <i class="now-ui-icons business_badge"></i>
              <p>Faculty</p>
            </a>
          </li>
          <li>
            <a href="alumni.php">
              <i class="now-ui-icons education_hat"></i>
              <p>Alumni</p>
            </a>
          </li>

          <li>
            <a href="attendance.php">
              <i class="now-ui-icons ui-2_time-alarm"></i>
              <p>Attendance</p>
            </a>
          </li>
          <hr>
          <li class="">
            <a href="borrowing.php">
              <i class="now-ui-icons location_bookmark"></i>
              <p>Borrrowing</p>
            </a>
          </li>


          <li>
            <a href="return.php">
              <i class="now-ui-icons arrows-1_refresh-69"></i>
              <p>Return</p>
            </a>
          </li>

          <li class="">
            <a href="reservations.php">
              <i class="now-ui-icons shopping_tag-content"></i>
              <p>Reservations</p>
            </a>
          </li>
          <li class="">
            <a href="clearance.php">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Clearance</p>
            </a>
          </li>
          <li>
            <a href="duedates.php">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Due-dates</p>
            </a>
          </li>
          <hr>
          <li>
            <a href="patrons_monitoring.php">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Patrons' Monitoring</p>
            </a>
          </li>
          <li>
            <a href="inventory.php">
              <i class="now-ui-icons design_app"></i>
              <p>Inventory</p>
            </a>
          </li>
          <li>
            <a href="books_monitoring.php">
              <i class="now-ui-icons text_bold"></i>
              <p>Books Monitoring</p>
            </a>
          </li>

           <li>
            <a href="attendance_report.php">
              <i class="now-ui-icons ui-2_time-alarm"></i>
              <p>Attendance Report</p>
            </a>
          </li>

          <li>
            <a href="payment_report.php">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Payment Report</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>

            <a class="navbar-brand" href="home.php">Home</a>
         
          
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
            
            </form>
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Profile</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="settings.php">Settings</a>
                  <a class="dropdown-item" href="../logout.php">Log-out</a>
                </div>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">

        <div class="row"> 

           <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title"></h4>
                  
              </div>
              <div class="card-body p-5">
               <img src="../assets/img/lemery_logo.png" style="height: 600px;">
              </div>
              <div class="card-footer">
                <div class="stats">
                
                </div>
              </div>
            </div>
          </div>

           <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title"></h4>
                  
              </div>
              <div class="card-body p-5">
               <img src="../assets/img/logo2.png" style="height: 600px;">
              </div>
              <div class="card-footer">
                <div class="stats">
                
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title">Mission</h4>
                  
              </div>
              <div class="card-body p-5">
                <h3>To provide comprehensive resources and services that is innovative and competitive, geared to meet the information needs and demands of the 21st century users and stakeholders.</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title">Vision</h4>
                
              </div>
              <div class="card-body p-5">
                <h3>To be a leading academic resource center by providing timely, relevant, and high-quality information resources and services in support of the instruction, research, curricular offerings, and thrusts of Lemery Colleges</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title">Objectives of the College Library</h4>
                
              </div>
              <div class="card-body p-5">
                <h3>The Lemery Colleges Learning Resource Center as the primary information provider to the college community strives to:</h3>
                <br>
                <h4 class="p-3">
                  1. Acquire, develop and update the library’s collection to support the college unit’s teaching-learning program.
                  <br><br>
                  2.Organize library collections so they can be easily accessed.
                  <br><br>
                  3.Work with faculty in integrating information skills, knowledge of information sources, and the use of technology in accessing information needed to strengthen their instruction, research and extension programs.
                  <br><br>
                  4.Provide instruction and assistance in the effective use of learning resources and services
                </h4>
              </div>
              <div class="card-footer">
                <div class="stats">
                
                </div>
              </div>
            </div>
          </div>

        </div>
        
        
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Lemery Colleges Library
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

  <script src="../assets/js/sweetalert2.all.min.js"></script>
  <script type="text/javascript" src="../phpqrcode/jquery.min.js"></script>
      <script type="text/javascript" src="../phpqrcode/qrcode.js"></script>

<script src="../datatables/jquery.dataTables.min.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" src="../datatables/datatables.min.js"></script>
 <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>

 <script type="text/javascript" language="javascript">
  

  </script>


</body>

</html>