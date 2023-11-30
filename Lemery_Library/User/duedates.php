<?php
session_start();
if(empty($_SESSION['UserType'])) {
    header('Location: ../logout.php');
}else{
  $user_type =$_SESSION['UserType'];
  
  if ($user_type!="Faculty" && $user_type != 'Student'){
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
    Due-dates | Lemery Colleges LMS
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

          <li class="">
            <a href="./home.php">
              <i class="now-ui-icons business_bank"></i>
              <p>Home</p>
            </a>
          </li>

          <li>
            <a href="index.php">
              <i class="now-ui-icons education_agenda-bookmark"></i>
              <p>Books</p>
            </a>
          </li>
            <li>
            <a href="online_materials.php">
              <i class="now-ui-icons tech_laptop"></i>
              <p>Online Materials</p>
            </a>
          </li>
            <li>
            <a href="reservations.php">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Reservations</p>
            </a>
          </li>
          <li>
            <a href="patrons_monitoring.php">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Borrowing History</p>
            </a>
          </li>

           <li>
            <a href="attendance_report.php">
              <i class="now-ui-icons ui-2_time-alarm"></i>
              <p>Attendance History</p>
            </a>
          </li>
          <li class="active">
            <a href="duedates.php">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Due-dates and Liabilities</p>
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
            <a class="navbar-brand" href="#">Due-dates</a>
          
          
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

           
          <div class="col-lg-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Due-dates</h5>
     
              
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <label>Date |from:</label>
                    <input type="date" class="form-control" name="" id="date_from">
                  </div>
                  <div class="col-sm-4">
                    <label>to:</label>
                    <input type="date" class="form-control" name="" id="date_to">
                  </div>

                  <div class="col-sm-4">
                    <a class="btn btn-success" style="color: white;margin-top: 20px; min-width: 250px;" id="btn_generate">Generate</a>
                  </div>
                </div>
                  <div style="margin-top:20px;">
              <table class="table table-responsive" id="tbl_books" >
                      <thead class="">
                          <tr> 
                            <th class="text-center">
                             AY
                            </th> 
                           <th class="text-center">
                             Semester
                            </th> 
                           
                            <th class="text-center">
                             Acc#/MaterialID
                            </th>
                            <th class="text-center">
                             ISBN
                            </th>                      
                            <th class="text-center">
                             Title/Name
                            </th>
                            <th class="text-center">
                             Category
                            </th>
                            <th class="text-center">
                             Description
                            </th>        

                            <th class="text-center">
                             Date borrowed
                            </th>
                            <th class="text-center">
                             Due-date
                            </th>    
                             <th class="text-center">
                             Penalty
                            </th> 
                            
                            
                                                     
                           </tr>
                          </thead>
                   
                       </table>
                     </div>
                   </div>
             
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
               
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

  var academicyear='';
  var semester='';


  $(document).ready(function() {
     selectSYSem();
     fetchDuedates();
  });

  

  function selectSYSem(){

        $.ajax({

            url:"functions/select_sysem.php", 
            method:"POST",  
            dataType: "json",
            contentType:false,
            cache:false,
            processData:false,

            beforeSend:function() {

            },  
            error:function(data){
                 
            }, 
            success:function(data){
            
                 jQuery.each(data, function(index, itemData) {
                 academicyear=itemData.sy; 
                 semester=itemData.sem;
             
                });
            }
  });
  }

 $(document).on("click", "#btn_generate", function() {
      fetchDuedates();
   });

 function fetchDuedates() {
 var date_from=document.getElementById("date_from").value;
    var date_to=document.getElementById("date_to").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
   $('#tbl_books').DataTable().destroy();
  
   var dataTable1 = $('#tbl_books').DataTable({

           "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l>f <"pull-right"><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    "responsive": false,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"functions/select_duedates.php?"+other_data,
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }

 

  </script>


</body>

</html>