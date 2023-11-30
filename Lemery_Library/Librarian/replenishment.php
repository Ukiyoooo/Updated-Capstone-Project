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
    Replenish | Lemery Colleges LMS
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

           <li class="active">
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
            <a class="navbar-brand" href="#pablo">Replenishment</a>
            <select class="form-control" style="min-width: 200px;color:white;" id="opt_menu">
              <optgroup style="color:black;">
                
                <option value="Book Replenish Report">Book Replenish Report</option>
                <option value="Other Materials Replenish Report">Other Materials Replenish Report</option>
                <option value="Replenish Books">Replenish Books</option>
                <option value="Replenish Other materials">Replenish Other materials</option>
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
          <div class="col-lg-12" id="card_books" style="display:none;">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Books </h5>     
           
              </div>
              <div class="card-body">
                
                <div class="row">
                  <div class="col-sm-3">
                    <span>ISBN</span>
                    <input class="form-control" type="text" name="" placeholder="Type or scan ISBN..." id="txt_ISBN">

                    <div class="row">
                      <div class="col-sm-6">
                           <span>Quantity:</span>
                        <input class="form-control" type="number" name=""  style="background-color:white;" id="int_copies" min="0">
                      </div>

                      <div class="col-sm-6">
                           <span>Marked Price:</span>
                        <input class="form-control" type="number" name=""  style="background-color:white;" id="dbl_markedprice" min="0">
                      </div>
                    </div>

                 
                    <a class="btn btn-primary" style="color: white;float: right;" id="btn_add_to_list">Add to list below</a>    
                     
                  </div>
                  <div class="col-sm-9">
                   <div class="container">
                    <div class="row">
                      <div class="col-sm-4">  
                      <span>Section:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="opt_section">                  
                        <span>Title:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="txt_title">
                        <span>Subject:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="txt_subject">
                       
                      </div>

                      <div class="col-sm-4"> 
                        <span>Description:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="txt_description">
                        <span>Author:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="txt_author">
                        <span>Publisher:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="txt_publisher">
                        
                       
                      </div>


                      <div class="col-sm-4"> 
                        <span>Copyright:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="int_copyright">
                         <span>Edition:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="txt_edition">
                        <span>Location:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="txt_location">
                        
                        
                      </div>
                    </div>

                   </div>
                  </div>

                   <div class="table-responsive container">
                    <table class="table " id="tbl_books">
                      <thead class="">
                          <tr> 
                            <th width="1%" class="text-center">
                              Action
                            </th>  
                            <th class="text-center">
                             Qty
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
                             Description
                            </th>
                            <th class="text-center">
                             Author
                            </th>
                            <th class="text-center">
                             Publisher
                            </th>
                            <th class="text-center">
                             Copyright
                            </th>
                            <th class="text-center">
                             Edition
                            </th>
                            <th class="text-center">
                             Location
                            </th>
                            <th class="text-center">
                             Marked Price
                            </th>

                            <th class="text-center" hidden="">
                             Currentqty
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
                  <a class="btn btn-success col-sm-3" id="btn_save" style="color:white;float: right;margin-bottom: 15px;">Replenish</a>
                </div>
              </div>
            </div>
          </div>

<!-- For Other materials -->
          <div class="col-lg-12" id="card_others" style="display:none">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Other Materials </h5>     
           
              </div>
              <div class="card-body">
                
                <div class="row">
                  <div class="col-sm-3">
                    <span>Material ID</span>
                    <input class="form-control" type="text" name="" placeholder="Type or scan Material ID..." id="txt_ID">

                   
                     
                           
                    

                    
                       <span>Material name:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="txt_name">  
                    
                     
                  </div>
                  <div class="col-sm-9">
                   <div class="container">
                    <div class="row">
                      <div class="col-sm-4">  
                                      
                        <span>Description:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="txt_description_o">
                         <span>Location:</span>
                        <input class="form-control" type="text" name="" disabled="" style="background-color:white;" id="txt_location_o">
                       
                      </div>

                     


                      <div class="col-sm-4"> 
                   
                       
                            <span>Marked Price:</span>
                        <input class="form-control" type="number" name=""  style="background-color:white;" id="dbl_markedprice_o" min="0">
                        
                        <span>Quantity:</span>
                        <input class="form-control" type="number" name=""  style="background-color:white;" id="int_qty" min="0">
                      </div>

                      <div class="col-sm-4"> 
                        <div class="col-sm-12"></div>
                          <div class="col-sm-12">
                 
                          <a class="btn btn-primary col-sm-12" style="color: white;float: right;" id="btn_add_to_list_o">Add to list below</a>
                        </div>
                        
                      </div>

                    </div>

                   </div>
                  </div>

                   <div class="table-responsive container">
                    <table class="table " id="tbl_others">
                      <thead class="">
                          <tr> 
                            <th width="1%" class="text-center">
                              Action
                            </th>  
                            <th class="text-center">
                             Qty
                            </th>               
                            <th class="text-center">
                             ID
                            </th>
                            <th class="text-center">
                             Name
                            </th>
                            <th class="text-center">
                             Description
                            </th>
                            <th class="text-center">
                             Location
                            </th>
                            <th class="text-center">
                             Marked Price
                            </th>
                           

                            <th class="text-center" >
                             Currentqty
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
                  <a class="btn btn-success col-sm-3" id="btn_save_others" style="color:white;float: right;margin-bottom: 15px;">Replenish</a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-12" id="card_book_report">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Books Replenishment Report</h5>     
                
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

                   <div class="table-responsive container">
                    <table class="table " id="tbl_book_report">
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
                <h5 class="card-category">Other Materials Replenishment Report</h5>     
                
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
                             Date
                            </th>   
                             <th class="text-center" >
                             Quantity
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
                            
                            <th class="text-center">
                             Marked Price
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
function fetchBookReport() {
    var date_from=document.getElementById("date_from").value;
    var date_to=document.getElementById("date_to").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
   $('#tbl_book_report').DataTable().destroy();
  
   var dataTable1 = $('#tbl_book_report').DataTable({

           "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l>f<"pull-right"><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    "responsive": true,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"functions/select_replenishment_report.php?"+other_data,
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }
   $(document).on("click", "#btn_generate", function() {
      fetchBookReport();
   });

   function fetchOthersReport() {
    var date_from=document.getElementById("date_from_o").value;
    var date_to=document.getElementById("date_to_o").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
   $('#tbl_others_report').DataTable().destroy();
  
   var dataTable1 = $('#tbl_others_report').DataTable({

           "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l>f<"pull-right"><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    "responsive": true,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"functions/select_others_replenishment.php?"+other_data,
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }
   $(document).on("click", "#btn_generate_o", function() {
      fetchOthersReport();
   });

    var current_copies=0;
function selectBookDetails(isbn){

        $.ajax({

            url:"functions/select_book_details.php?isbn="+isbn, 
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
                 document.getElementById("txt_ISBN").value=itemData.isbn; 
                 document.getElementById("opt_section").value=itemData.section;
                 document.getElementById("txt_title").value=itemData.title;
                 document.getElementById("txt_subject").value=itemData.subject;
                 document.getElementById("txt_description").value=itemData.desc;
                 document.getElementById("txt_author").value=itemData.author;
                 document.getElementById("txt_publisher").value=itemData.publisher;
                 document.getElementById("int_copyright").value=itemData.copyright;
                 document.getElementById("txt_edition").value=itemData.edition;
                 document.getElementById("txt_location").value=itemData.loc;
                 document.getElementById("dbl_markedprice").value=itemData.price;
                 current_copies=itemData.current;
                });
            }
  });
}

function selectOthersDetails(id){

        $.ajax({

            url:"functions/select_others_details.php?id="+id, 
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
                 document.getElementById("txt_ID").value=itemData.id; 
                 document.getElementById("txt_name").value=itemData.m_name;
                 document.getElementById("txt_description_o").value=itemData.description;
                 document.getElementById("txt_location_o").value=itemData.loc;
                 document.getElementById("dbl_markedprice_o").value=itemData.price;
                 current_copies=itemData.current;
                });
            }
  });
}


    $(document).ready(function() {
     fetchBookReport();

    });

    $(document).on("change", "#opt_menu", function() {
     var opt_menu = document.getElementById('opt_menu').value;
    
     if (opt_menu=="Replenish Books") {
        document.getElementById('card_others').style.display = "none";
        document.getElementById('card_book_report').style.display = "none";
        document.getElementById('card_books').style.display = "inline";
        document.getElementById('card_others_report').style.display = "none";
        document.getElementById('txt_ISBN').select();
     }
     else if(opt_menu=="Replenish Other materials"){
        document.getElementById('card_others').style.display = "inline";
        document.getElementById('card_book_report').style.display = "none";
        document.getElementById('card_books').style.display = "none";
        document.getElementById('card_others_report').style.display = "none";
        document.getElementById('txt_ID').select();
     }else if(opt_menu=="Book Replenish Report"){
        document.getElementById('card_others').style.display = "none";
        document.getElementById('card_book_report').style.display = "inline";
        document.getElementById('card_books').style.display = "none";
        document.getElementById('card_others_report').style.display = "none";
        fetchBookReport();
        document.getElementById('date_from').select();
     }
     else if(opt_menu=="Other Materials Replenish Report"){
        document.getElementById('card_others').style.display = "none";
        document.getElementById('card_book_report').style.display = "none";
        document.getElementById('card_books').style.display = "none";
        document.getElementById('card_others_report').style.display = "inline";
        document.getElementById('date_from_o').select();
        fetchOthersReport();
     }

    });

    $(document).on("click", "#btn_void", function() {
      var index, table = document.getElementById('tbl_books');

            for(var i = 1; i < table.rows.length; i++)
            {
                
                    var c = confirm("Do you want to void "+table.rows[i].cells[2].innerHTML+"?");
                    if(c === true)
                    {
                        index = table.rows[i].cells[0].parentElement.rowIndex;
                        table.deleteRow(index);
                        return;
                    }
                    
                
                
            }
    });

    $(document).on("click", "#btn_void_o", function() {
      var index, table = document.getElementById('tbl_others');

            for(var i = 1; i < table.rows.length; i++)
            {
                
                    var c = confirm("Do you want to void "+table.rows[i].cells[3].innerHTML+"?");
                    if(c === true)
                    {
                        index = table.rows[i].cells[0].parentElement.rowIndex;
                        table.deleteRow(index);
                        return;
                    }
                    
                
                
            }
    });



    $(document).on("click", "#btn_add_to_list", function() {

      if (document.getElementById("txt_title").value!="" && int_copies.value>0){
      var tbl_books =document.getElementById("tbl_books");
      var row = tbl_books.insertRow(1);
    // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      var cell5 = row.insertCell(4);
      var cell6 = row.insertCell(5);
      var cell7 = row.insertCell(6);
      var cell8 = row.insertCell(7);
      var cell9 = row.insertCell(8);
      var cell10 = row.insertCell(9);
      var cell11 = row.insertCell(10);
      var cell12 = row.insertCell(11);
      var cell13 = row.insertCell(12);
      var cell14 = row.insertCell(13);

      // Add some text to the new cells:
      cell1.innerHTML = '<a class="btn btn-danger" style="color:white;" id="btn_void">Void</a>';
      cell2.innerHTML = document.getElementById("int_copies").value
      cell3.innerHTML = document.getElementById("txt_ISBN").value; 
      cell4.innerHTML = document.getElementById("opt_section").value;
      cell5.innerHTML = document.getElementById("txt_title").value;
      cell6.innerHTML = document.getElementById("txt_subject").value;
      cell7.innerHTML = document.getElementById("txt_description").value;
      cell8.innerHTML = document.getElementById("txt_author").value;
      cell9.innerHTML = document.getElementById("txt_publisher").value;
      cell10.innerHTML = document.getElementById("int_copyright").value;
      cell11.innerHTML = document.getElementById("txt_edition").value;
      cell12.innerHTML = document.getElementById("txt_location").value;
      cell13.innerHTML = document.getElementById("dbl_markedprice").value;  
      cell14.innerHTML = current_copies;
      cell14.style.display="none";
      document.getElementById("txt_ISBN").value = '';
      clearFields();
    }
    });


$(document).on("click", "#btn_add_to_list_o", function() {

      if (document.getElementById("txt_ID").value!="" && int_qty.value>0){
      var tbl_books =document.getElementById("tbl_others");
      var row = tbl_books.insertRow(1);
    // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      var cell5 = row.insertCell(4);
      var cell6 = row.insertCell(5);
      var cell7 = row.insertCell(6);
      var cell8 = row.insertCell(7);

      // Add some text to the new cells:
      cell1.innerHTML = '<a class="btn btn-danger" style="color:white;" id="btn_void_o">Void</a>';
      cell2.innerHTML = document.getElementById("int_qty").value
      cell3.innerHTML = document.getElementById("txt_ID").value; 
      cell4.innerHTML = document.getElementById("txt_name").value;
      cell5.innerHTML = document.getElementById("txt_description_o").value;
      cell6.innerHTML = document.getElementById("txt_location_o").value;
      cell7.innerHTML = document.getElementById("dbl_markedprice_o").value;
     
      cell8.innerHTML = current_copies;
      // cell8.style.display="none";
      document.getElementById("txt_ID").value = '';
      clearOthers();
    }
    });

  $(document).on("keyup", "#txt_ISBN", function() {
    clearFields();
       var isbn = document.getElementById("txt_ISBN").value.trim();
       selectBookDetails(isbn);
  });

  $(document).on("keyup", "#txt_ID", function() {
    clearOthers();
       var id = document.getElementById("txt_ID").value.trim();
       selectOthersDetails(id);
  });


  $(document).on("click", "#btn_save", function() {
     event.preventDefault();
     var index, table = document.getElementById('tbl_books');
       
     if(table.rows.length<2){
      swal({title:"Warning!",text: "No item in the list.", type:"warning"});
      return;
     }

       var str_url = '';
       var str_title = '';
       var str_success = '';
   
           
            str_title = "Do you want to save this transaction?";
            str_success = "Replenishment has been saved";
      var apirespnse='';

                       
     swal({
                            customClass: 'swal-wide',
                            title:"Continue?", 
                            text: str_title, 
                            type: "question",
                            showCancelButton: true,
                            confirmButtonColor: "#5cb85c", 
                            cancelButtonColor: "#d9534f",
                            confirmButtonText: '<span class="glyphicon glyphicon-ok"></span>&nbspProceed',
                            cancelButtonText: '<span class="glyphicon glyphicon-remove"></span>&nbspDecline',
                            confirmButtonClass: "btn",
                            cancelButtonClass: "btn"
                            }).then((result) => {

                                if (result.value) {

                                  
     
                                      for(var i = 1; i < table.rows.length; i++)
                                      {
                                            var qty =table.rows[i].cells[1].innerHTML;
                                            var isbn =table.rows[i].cells[2].innerHTML;
                                            var section =table.rows[i].cells[3].innerHTML;
                                            var title =table.rows[i].cells[4].innerHTML;
                                            var subject =table.rows[i].cells[5].innerHTML;
                                            var description =table.rows[i].cells[6].innerHTML;
                                            var author =table.rows[i].cells[7].innerHTML;
                                            var publisher =table.rows[i].cells[8].innerHTML;
                                            var copyright =table.rows[i].cells[9].innerHTML;
                                            var edition =table.rows[i].cells[10].innerHTML;
                                            var location =table.rows[i].cells[11].innerHTML;
                                            var price =table.rows[i].cells[12].innerHTML;
                                            var currentqty =table.rows[i].cells[13].innerHTML;

                                            var other_data = "qty="+qty+
                                                             "&isbn="+isbn+
                                                             "&section="+section+
                                                             "&title="+title+
                                                             "&subject="+subject+
                                                             "&description="+description+
                                                             "&author="+author+
                                                             "&publisher="+publisher+
                                                             "&copyright="+copyright+
                                                             "&edition="+edition+
                                                             "&location="+location+
                                                             "&price="+price+
                                                             "&currentqty="+currentqty;




                                             str_url = 'functions/save_replenishment.php?'+other_data;
                                                 // function
                                                  $.ajax({ //start ajax

                                            url:str_url, 
                                            method:"POST",                                            
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                   
                                            }, 
                                            success:function(data){   
                                                apirespnse+=data;
                                              
                                             } 

                                 });  //end ajax
                                                       
                                      }    
                                        
                                            swal({title:"Success!",text: str_success, type:"success"}).then(okay => {
                                                       if (okay) {
                                                        window.location = "replenishment.php";
                                                      }
                                                       });                  
    
                      // else result
                 }
                      });

                                         

});

$(document).on("click", "#btn_save_others", function() {
     event.preventDefault();
     var index, table = document.getElementById('tbl_others');
       
     if(table.rows.length<2){
      swal({title:"Warning!",text: "No item in the list.", type:"warning"});
      return;
     }

       var str_url = '';
       var str_title = '';
       var str_success = '';
   
           
            str_title = "Do you want to save this transaction?";
            str_success = "Replenishment has been saved";
      var apirespnse='';

                       
     swal({
                            customClass: 'swal-wide',
                            title:"Continue?", 
                            text: str_title, 
                            type: "question",
                            showCancelButton: true,
                            confirmButtonColor: "#5cb85c", 
                            cancelButtonColor: "#d9534f",
                            confirmButtonText: '<span class="glyphicon glyphicon-ok"></span>&nbspProceed',
                            cancelButtonText: '<span class="glyphicon glyphicon-remove"></span>&nbspDecline',
                            confirmButtonClass: "btn",
                            cancelButtonClass: "btn"
                            }).then((result) => {

                                if (result.value) {

                                  
     
                                      for(var i = 1; i < table.rows.length; i++)
                                      {
                                            var qty =table.rows[i].cells[1].innerHTML;
                                            var materialid =table.rows[i].cells[2].innerHTML;
                                            var materialname =table.rows[i].cells[3].innerHTML;
                                            var description =table.rows[i].cells[4].innerHTML;
                                            var txt_location =table.rows[i].cells[5].innerHTML;
                                            var markedPrice =table.rows[i].cells[6].innerHTML;
                                            var currentqty =table.rows[i].cells[7].innerHTML;
                                  

                                            var other_data = "qty="+qty+
                                                             "&materialid="+materialid+
                                                             "&materialname="+materialname+
                                                             "&description="+description+                 
                                                             "&txt_location="+txt_location+
                                                             "&markedPrice="+markedPrice+
                                                             "&currentqty="+currentqty;


                            

                                             str_url = 'functions/replenish_others.php?'+other_data;
                                                 // function
                                                  $.ajax({ //start ajax

                                            url:str_url, 
                                            method:"POST",                                            
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                   
                                            }, 
                                            success:function(data){   
                                                apirespnse+=data;
                                              
                                             } 

                                 });  //end ajax
                                                       
                                      }    
                                        
                                            swal({title:"Success!",text: str_success, type:"success"}).then(okay => {
                                                       if (okay) {
                                                        window.location = "replenishment.php";
                                                      }
                                                       });                  
    
                      // else result
                 }
                      });

                                         

});

 

function clearFields(){
   
     document.getElementById("opt_section").value="";
     document.getElementById("txt_title").value="";
     document.getElementById("txt_subject").value="";
     document.getElementById("txt_description").value="";
     document.getElementById("txt_author").value="";
     document.getElementById("txt_publisher").value="";
     document.getElementById("int_copyright").value=0;
     document.getElementById("txt_edition").value="";
     document.getElementById("txt_location").value="";
     document.getElementById("dbl_markedprice").value=0;
     document.getElementById("int_copies").value=0;
    current_copies =0;
}

function clearOthers(){
   document.getElementById("txt_name").value='';
   document.getElementById("txt_description_o").value='';
   document.getElementById("txt_location_o").value='';
   document.getElementById("dbl_markedprice_o").value='';
   document.getElementById("int_qty").value=0;
    current_copies =0;
}
function printReport() {
    var date_from=document.getElementById("date_from").value;
    var date_to=document.getElementById("date_to").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
       window.open("print_book_replenish.php?"+other_data, '_blank', 'location=yes,height=1366,width=768,scrollbars=yes,status=yes');
    }

    function printReportO() {
    var date_from=document.getElementById("date_from_o").value;
    var date_to=document.getElementById("date_to_o").value;
    var other_data="date_from="+date_from+
                   "&date_to="+date_to;
       window.open("print_other_replenishment.php?"+other_data, '_blank', 'location=yes,height=1366,width=768,scrollbars=yes,status=yes');
    }

  </script>
</body>

</html>