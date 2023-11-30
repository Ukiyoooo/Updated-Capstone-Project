<?php
session_start();
if(empty($_SESSION['UserType'])) {
    header('Location: ../logout.php');
}else{
  $user_type =$_SESSION['UserType'];
  
   if ($user_type!="Librarian"){
    header('Location: ../logout.php');
  }
  require ("../db_connection/myConn.php");
$librarianName = '';
 $librarianName=$_SESSION["LastName"]. ', ' . $_SESSION["FirstName"] . ' ' . $_SESSION["MiddleName"];
// $query = "SELECT `LastName`, `FirstName`, `MiddleName` FROM `tbl_users` WHERE `UserType` LIKE 'Administrator'";
//   $result= $con_str->query($query);
//   $output='';
//   if($result->num_rows > 0) {

//     while($row = $result->fetch_assoc()) {
     
//     }
//   }
}

$schoolname = $_GET['schoolname'];
$schooladdress = $_GET['schooladdress'];
$researchtitle = $_GET['researchtitle'];
$student_name = $_GET['student_name'];
$tz = 'Asia/Hong_Kong';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp);

$datenow = date_format($dt,"F d, Y");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/lemery_logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Print Referral Letter | Lemery Colleges LMS
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

 <script type="text/javascript" src="../phpqrcode/jquery.min.js"></script>
  <script type="text/javascript" src="../phpqrcode/qrcode.js"></script>
</head>

<body class="">
  <div id="qrcontent">
 <div class="row">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-2 pl-2">
      <img src="../assets/img/logo2.png" ">
    </div>
    <div class="col-sm-6">
      <h1 align="center" style="margin-top: 50px;margin-left: 20px;">Lemery Colleges</h1>
    </div>
    <div class="col-sm-2">
      <img src="../assets/img/lemery_logo.png">
    </div>
  </div>

     <div class="col-sm-1"></div>
    <div class="col-sm-11" style="margin-top: 20px;">
      <h6><?php echo $datenow; ?></h6>
    </div>

    <div class="col-sm-1"></div>
    <div class="col-sm-11" style="margin-top: 20px;">
      <h6>Chief Librarian</h6>
      <h6><?php echo $schoolname; ?></h6>
      <h6><?php echo $schooladdress; ?></h6>
    </div>

    <div class="col-sm-1"></div>
    <div class="col-sm-11" style="margin-top: 20px;">
      <h6>Dear Sir/Madam:</h6>
    </div>

    <div class="col-sm-1"></div>
    <div class="col-sm-10" style="margin-top: 30px;">
      <p>The bearer, <strong><?php echo $student_name; ?></strong> student of Lemery Colleges would like to make use of your resources in their research study entitled <strong>"<?php echo $researchtitle; ?>"</strong>.</p>
    </div>
    <div class="col-sm-1"></div>

    <div class="col-sm-1"></div>
    <div class="col-sm-10" style="margin-top: 30px;">
      <p>They have exhuasted our library materials and would like to supplement it with the additional references and literature from your collections.</p>
    </div>
    <div class="col-sm-1"></div>

    <div class="col-sm-1"></div>
    <div class="col-sm-10" style="margin-top: 30px;">
      <p>We will be grateful if the aforementioned faculty can be given permission to utilize your library subject to your rules and regulations. Your assistance will be highly appreciated.</p>
    </div>
    <div class="col-sm-1"></div>

    <div class="col-sm-1"></div>
    <div class="col-sm-11" style="margin-top: 20px;">
      <h6>Respectfully yours,</h6>
      <h6><?php echo $librarianName; ?></h6>
      <?php
        if ($user_type == 'Administrator') {
          echo '<h6>Chief Librarian</h6>';
        }else{
           echo '<h6>Librarian</h6>';
        }

       ?>
      
      <h6>Higher Education Unit</h6>
      <h6>Lemery Colleges</h6>
    </div>
     
   
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

  <script>
      $(document).ready(function() {
      window.print();
    });

     

  </script>
</body>

</html>