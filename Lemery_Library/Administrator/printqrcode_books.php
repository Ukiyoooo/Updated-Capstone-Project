<?php
session_start();
if(empty($_SESSION['UserType'])) {
    header('Location: ../logout.php');
}else{
  $user_type =$_SESSION['UserType'];
  
   if ($user_type!="Administrator"){
    header('Location: ../logout.php');
  }
}
$accession_num = $_GET["_accession_num"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/lemery_logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Print QR Code | Lemery Colleges LMS
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
   
     <?php
require ("../db_connection/myConn.php");

$query = "SELECT `ID`, `AccessionNo` FROM `tbl_booksmonitoring` WHERE `AccessionNo` LIKE '$accession_num'";
  $result= $con_str->query($query);
  $output='';
  if($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

      $output.='<div class="col-sm-3"><center><div id="qrcode'.$row["ID"].'" style="width:100px; height:100px; margin-top:15px;"></div>
      <script type="text/javascript" language="javascript">
      var qrcode = new QRCode(document.getElementById("qrcode'.$row["ID"].'"), {
        width : 100,
        height : 100
      });   
        var elText = "'.$row["AccessionNo"].'";
        qrcode.makeCode(elText);
      </script></center>
      <center><span>'.$row["AccessionNo"].'</span></center></div>';
    }
  }
  echo $output;
  ?>
   
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