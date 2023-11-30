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
    Inventory | Lemery Colleges LMS
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
  <link rel="stylesheet" type="text/css" href="../assets/css/dropzone.css" />
<script type="text/javascript" src="../assets/js/dropzone.js"></script>
</head>
<style type="text/css">
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

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
            <a href="./index.php">
              <i class="now-ui-icons business_chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="books.php">
              <i class="now-ui-icons education_agenda-bookmark"></i>
              <p>Books</p>
            </a>
          </li>
          <li >
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

           <li >
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
          <li>
            <a href="borrowing.php">
              <i class="now-ui-icons location_bookmark"></i>
              <p>Borrrowing</p>
            </a>
          </li>
          <li class="">
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
          <li>
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
          <li class="active">
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
            <a class="navbar-brand" href="#pablo">Inventory</a>
            <select class="form-control" style="min-width: 200px;color:white;" id="opt_menu">
              <optgroup style="color:black;">
                
                <option value="Book Inventory Log">Book Inventory Log</option>
                <option value="Book Inventory Report">Book Inventory Report</option>
                <option value="Other Materials Inventory Log">Other Materials Inventory Log</option>
                <option value="Other Materials Inventory Report">Other Materials Inventory Report</option>
              </optgroup>
            </select>
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
          <div class="col-lg-12" id="card_books_inventory_log" >
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Books Inventory Log</h5>     
           
              </div>
              <div class="card-body">
                
                 <div class="row">
                
                   <div class="col-sm-4">
                    <label>Date |from:</label>
                    <input type="date" class="form-control" name="" id="date_from_b_l">
                  </div>
                  <div class="col-sm-4">
                    <label>to:</label>
                    <input type="date" class="form-control" name="" id="date_to_b_l">
                  </div>

                  <div class="col-sm-4">
                    <a class="btn btn-success" style="color: white;margin-top: 20px; min-width: 250px;" id="btn_generate_b_l">Generate</a>
                  </div>

                   <div class=" container">
                    <table class="table table-responsive" id="tbl_book_log">
                      <thead class="">
                          <tr>                
                            <th class="text-center">
                             Date
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
                            <th class="text-center" >
                             Beginning
                            </th>
                            <th class="text-center" >
                             Replenishment
                            </th>
                            <th class="text-center" >
                             Borrowed
                            </th>
                            <th class="text-center" >
                             Returned
                            </th>
                            <th class="text-center" >
                             Ending
                            </th>
                           

                            
                          
                                                                          
                           </tr>
                          </thead>
                         <hr>
                       </table>
                     </div>
                     
                     
                </div>

                     
               </div>
             
              <div class="card-footer">
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>

<!-- For Other materials -->
          <div class="col-lg-12" id="card_others_inventory_log" style="display:none">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Other Materials Inventory Log</h5>     
           
              </div>
              <div class="card-body">
                 <div class="row">
                
                   <div class="col-sm-4">
                    <label>Date |from:</label>
                    <input type="date" class="form-control" name="" id="date_from_o_l">
                  </div>
                  <div class="col-sm-4">
                    <label>to:</label>
                    <input type="date" class="form-control" name="" id="date_to_o_l">
                  </div>

                  <div class="col-sm-4">
                    <a class="btn btn-success" style="color: white;margin-top: 20px; min-width: 250px;" id="btn_generate_o_l">Generate</a>
                  </div>

                   <div class="table-responsive container">
                    <table class="table " id="tbl_other_log">
                      <thead class="">
                          <tr> 
                            
                            <th class="text-center">
                             Date
                            </th>               
                            <th class="text-center">
                             Material ID
                            </th>
                            <th class="text-center">
                             Name
                            </th>
                            <th class="text-center">
                             Description
                            </th>
                          
                            

                            <th class="text-center" >
                             Beginning
                            </th>
                            <th class="text-center" >
                             Replenishment
                            </th>
                            <th class="text-center" >
                             Borrowed
                            </th>
                            <th class="text-center" >
                             Returned
                            </th>
                            <th class="text-center" >
                             Ending
                            </th>
                           

                            
                          
                                                                          
                           </tr>
                          </thead>
                         <hr>
                       </table>
                     </div>
                     
                     
                </div>
                
                     
               </div>
             
              <div class="card-footer">
                <div class="stats">
                
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-12" id="card_book_report" style="display:none;">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Books Inventory Report</h5>     
                
              </div>
              <div class="card-body">
                
                <div class="row">
                
                   <div class="col-sm-3">
                    <label>Date |from:</label>
                    <input type="date" class="form-control" name="" id="date_from">
                  </div>
                  <div class="col-sm-3">
                    <label>to:</label>
                    <input type="date" class="form-control" name="" id="date_to">
                  </div>

                  <div class="col-sm-3">
                    <a class="btn btn-success" style="color: white;margin-top: 20px; min-width: 250px;" id="btn_generate">Generate</a>
                  </div>

                   <div class="col-sm-3">
                    <a class="btn btn-primary" style="color: white;margin-top: 20px; min-width: 250px;" id="btn_print" onclick="printReport();">Print</a>
                  </div>

                   <div class=" container">
                    <table class="table table-responsive" id="tbl_book_report">
                      <thead class="">
                          <tr> 
                            
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
                            <th class="text-center" >
                             Beginning
                            </th>
                            <th class="text-center" >
                             Replenishment
                            </th>
                            <th class="text-center" >
                             Borrowed
                            </th>
                            <th class="text-center" >
                             Returned
                            </th>
                            <th class="text-center" >
                             Ending
                            </th>

            
                                                                          
                           </tr>
                          </thead>
                         <hr>
                       </table>
                     </div>
                     
                     
                </div>
                

                     
               </div>
             
              <div class="card-footer">
                
              </div>
            </div>
          </div>


          <div class="col-lg-12" id="card_others_report" style="display:none;">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Other Materials Inventory Report</h5>     
                
              </div>
              <div class="card-body">
                
                <div class="row">
                
                   <div class="col-sm-3">
                    <label>Date |from:</label>
                    <input type="date" class="form-control" name="" id="date_from_o">
                  </div>
                  <div class="col-sm-3">
                    <label>to:</label>
                    <input type="date" class="form-control" name="" id="date_to_o">
                  </div>

                  <div class="col-sm-3">
                    <a class="btn btn-success" style="color: white;margin-top: 20px; min-width: 250px;" id="btn_generate_o">Generate</a>
                  </div>

                  <div class="col-sm-3">
                    <a class="btn btn-primary" style="color: white;margin-top: 20px; min-width: 250px;" id="btn_print_o" onclick="printReportO();">Print</a>
                  </div>

                   <div class="table-responsive container">
                    <table class="table " id="tbl_others_report">
                      <thead class="">
                          <tr> 
              
                            <th class="text-center">
                             Material ID
                            </th>
                            <th class="text-center">
                             Name
                            </th>
                            <th class="text-center">
                             Description
                            </th>
                          
                       

                            <th class="text-center" >
                             Beginning
                            </th>
                            <th class="text-center" >
                             Replenishment
                            </th>
                            <th class="text-center" >
                             Borrowed
                            </th>
                            <th class="text-center" >
                             Returned
                            </th>
                            <th class="text-center" >
                             Ending
                            </th>             
                           </tr>
                          </thead>
                         <hr>
                       </table>
                     </div>
                     
                     
                </div>
                

                     
               </div>
             
              <div class="card-footer">
                
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

  <script>
function fetchBookLog() {
    var date_from=document.getElementById("date_from_b_l").value;
    var date_to=document.getElementById("date_to_b_l").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
   $('#tbl_book_log').DataTable().destroy();
  
   var dataTable1 = $('#tbl_book_log').DataTable({

           "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l>f<"pull-right"><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    "responsive": false,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"functions/select_book_log.php?"+other_data,
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }

  function fetchBookInventory() {
    var date_from=document.getElementById("date_from").value;
    var date_to=document.getElementById("date_to").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
   $('#tbl_book_report').DataTable().destroy();
  
   var dataTable1 = $('#tbl_book_report').DataTable({

           "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l>f<"pull-right"><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    "responsive": false,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"functions/select_book_inventory.php?"+other_data,
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }


function fetchOthersInventory() {
    var date_from=document.getElementById("date_from_o").value;
    var date_to=document.getElementById("date_to_o").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
   $('#tbl_others_report').DataTable().destroy();
  
   var dataTable1 = $('#tbl_others_report').DataTable({

           "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l>f<"pull-right"><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    "responsive": false,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"functions/select_others_inventory.php?"+other_data,
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }

   $(document).on("click", "#btn_generate_b_l", function() {
     fetchBookLog();
   });

   $(document).on("click", "#btn_generate", function() {
     fetchBookInventory();
   });

   $(document).on("click", "#btn_generate_o", function() {
     fetchOthersInventory();
   });
 $(document).on("click", "#btn_generate_o_l", function() {
   fetchOtherLog();
   });
   function fetchOtherLog() {
    var date_from=document.getElementById("date_from_o_l").value;
    var date_to=document.getElementById("date_to_o_l").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
   $('#tbl_other_log').DataTable().destroy();
  
   var dataTable1 = $('#tbl_other_log').DataTable({

           "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l>f<"pull-right"><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    "responsive": false,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"functions/select_others_log.php?"+other_data,
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }
  

 


    $(document).ready(function() {
      fetchBookLog();

    });

    $(document).on("change", "#opt_menu", function() {
     var opt_menu = document.getElementById('opt_menu').value;
    
     if (opt_menu=="Book Inventory Log") {
        document.getElementById('card_books_inventory_log').style.display = "inline";
        document.getElementById('card_book_report').style.display = "none";
        document.getElementById('card_others_inventory_log').style.display = "none";
        document.getElementById('card_others_report').style.display = "none";
        fetchBookLog();
         document.getElementById('date_from_b_l').select(); 
     }
     else if(opt_menu=="Book Inventory Report"){
      document.getElementById('card_books_inventory_log').style.display = "none";
        document.getElementById('card_book_report').style.display = "inline";
        document.getElementById('card_others_inventory_log').style.display = "none";
        document.getElementById('card_others_report').style.display = "none";
        document.getElementById('date_from').select();
        fetchBookInventory();
     }else if(opt_menu=="Other Materials Inventory Log"){
        document.getElementById('card_books_inventory_log').style.display = "none";
        document.getElementById('card_book_report').style.display = "none";
        document.getElementById('card_others_inventory_log').style.display = "inline";
        document.getElementById('card_others_report').style.display = "none";
         document.getElementById('date_from_o_l').select();
         fetchOtherLog();
     }
     else if(opt_menu=="Other Materials Inventory Report"){
       document.getElementById('card_books_inventory_log').style.display = "none";
        document.getElementById('card_book_report').style.display = "none";
        document.getElementById('card_others_inventory_log').style.display = "none";
        document.getElementById('card_others_report').style.display = "inline";
        document.getElementById('date_from_o').select();
        fetchOthersInventory();
     }

    });

  

 function printReport() {
    var date_from=document.getElementById("date_from").value;
    var date_to=document.getElementById("date_to").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
       window.open("print_book_inventory.php?"+other_data, '_blank', 'location=yes,height=1366,width=768,scrollbars=yes,status=yes');
    }

    function printReportO() {
    var date_from=document.getElementById("date_from_o").value;
    var date_to=document.getElementById("date_to_o").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
       window.open("print_other_inventory.php?"+other_data, '_blank', 'location=yes,height=1366,width=768,scrollbars=yes,status=yes');
    }
  </script>
</body>

</html>