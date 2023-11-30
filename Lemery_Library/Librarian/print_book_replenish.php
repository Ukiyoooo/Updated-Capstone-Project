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
    Print Book Replenishment | Lemery Colleges LMS
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
  <div id="">
 <div class="row">
  <div class="container">
      <center><h6><img src="../assets/img/logo2.png" style="width: 35px;">Lemery Colleges</h6></center>

            <center><h5>Book Replenishment Report</h5></center>
            <?php
            $date_from=$_GET["date_from"];
      $date_to=$_GET["date_to"];
            if ($date_from!='' && $date_to !='') {
        echo '<center><h6> for '.$date_from . ' to ' . $date_to .'</h6></center>';
      }else if ($date_from!='' && $date_to =='') {
        echo '<center><h6> for '.$date_from.'</h6></center>';
      }else if ($date_from=='' && $date_to !='') {
        echo '<center><h6> for '. $date_to.'</h6></center>';
      }else{
        
      }

            ?>
   <table class="table table-bordered" id="tbl_book_report">
                      <thead class="">
                          <tr> 
                            
                            <th class="text-center">
                             Date
                            </th>   
                             <th class="text-center" >
                             Quantity
                            </th>            
                            <th class="text-center">
                             ISBN
                            </th>
                            <th class="text-center">
                             Section
                            </th>
                            <th class="text-center">
                             Title
                            </th>
                            <th class="text-center">
                             Subject
                            </th>
                            <th class="text-center">
                             Author
                            </th>
                          
                            <th class="text-center" >
                             Publisher
                            </th>
                            <th class="text-center" >
                             Edition
                            </th>
                            <th class="text-center" >
                             Copyright
                            </th>
                           

                            <?php
     require ("../db_connection/myConn.php");
      $date_from=$_GET["date_from"];
      $date_to=$_GET["date_to"];
      $total = 0;
      $date_filter='';
      if ($date_from!='' && $date_to !='') {
        $date_filter = "WHERE (`DateArrived` BETWEEN '".$date_from."' AND '".$date_to."')";
      }else if ($date_from!='' && $date_to =='') {
        $date_filter = "WHERE (`DateArrived` LIKE '".$date_from."')";
      }else if ($date_from=='' && $date_to !='') {
        $date_filter = "WHERE (`DateArrived` BETWEEN '%%%%-%%-%%' AND '".$date_to."')";
      }else{
        $date_filter="WHERE (`DateArrived` LIKE '%')";
      }
        $query = "SELECT `ID`, `DateArrived`, `Section`, `Title`, `Subject`, `Author`, `Publisher`, `Edition`, `ISBN`, `Copyright`, `qty` FROM `tbl_arrivals`".$date_filter;
        $result= $con_str->query($query);

        $output='';
        if($result->num_rows > 0) {
          
          while($row = $result->fetch_assoc()) {
          $output.= '<tr>';  
            $output.='<td id="td_name'.$row["ID"].'"><center>'.$row["DateArrived"].'</center></td>';
            $output.='<td id="td_name'.$row["ID"].'"><center>'.$row["qty"].'</center></td>';
            $output.='<td id="td_name'.$row["ID"].'"><center>'.$row["ISBN"].'</center></td>';
            $output.='<td id="td_name'.$row["ID"].'"><center>'.$row["Section"].'</center></td>';
            $output.='<td id="td_name'.$row["ID"].'"><center>'.$row["Title"].'</center></td>';
            $output.='<td id="td_name'.$row["ID"].'"><center>'.$row["Subject"].'</center></td>';
            $output.='<td id="td_name'.$row["ID"].'"><center>'.$row["Author"].'</center></td>';
            $output.='<td id="td_name'.$row["ID"].'"><center>'.$row["Publisher"].'</center></td>';
            $output.='<td id="td_name'.$row["ID"].'"><center>'.$row["Edition"].'</center></td>';
            $output.='<td id="td_name'.$row["ID"].'"><center>'.$row["Copyright"].'</center></td>';
             
              $output.= '</tr>';

            
          }
        
        }
        echo $output;
      ?>
                          
                                                                          
                           </tr>
                          </thead>
                         <hr>
                       </table>
     
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