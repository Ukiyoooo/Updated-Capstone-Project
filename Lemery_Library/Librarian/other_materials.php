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
    Other Materials | Lemery Colleges LMS
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
          <li class="active">
            <a href="">
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
            <a class="navbar-brand" href="#pablo">Other Materials</a>
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
          <div class="col-lg-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Other materials <a style="color:white; cursor:pointer;" onclick="printqr();" class="btn btn-default">Print QR Code</a></h5>
                <h4 class="card-title">List </h4>
              
              </div>
              <div class="card-body">
                  <div class="table-responsive">
              <table class="table " id="tbl_other_materials">
                      <thead class="">
                          <tr> 
                            <th class="text-center">
                             QRCode
                            </th>                      
                            <th class="text-center">
                             Material ID
                            </th>
                            <th class="text-center">
                             Category
                            </th>
                            <th class="text-center">
                             Material Name
                            </th>
                            <th class="text-center">
                             Description
                            </th>
                            <th class="text-center">
                             Copies
                            </th>
                            <th class="text-center">
                             Location
                            </th>
                            <th class="text-center">
                             Marked Price
                            </th>
                           
                             <th width="1%" class="text-center">
                              Action
                            </th>                                               
                           </tr>
                          </thead>
                         <hr>
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

          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Other materials</h5>
                <h4 class="card-title">Details</h4>
              
              </div>
              <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Material ID<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_ID">
                      </div>

                       <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Category<sup style="color:red;">*</sup></span>
                        <select class="form-control" id="opt_category">
                          <option value="" hidden="" selected="">Please select...</option>
                          <option value="Audio Visual Material">Audio Visual Material</option>
                          <option value="Electronic Resources">Electronic Resources</option>
                          <option value="Equipment">Equipment</option>
                          <option value="Facilities">Facilities</option>
                          <option value="Locker">Locker</option>
                          <option value="Periodical">Periodical</option>
                          <option value="Rare Material">Rare Material</option>
                        </select>
                      </div>

                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Material name<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_name">
                      </div>

                    

                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Description<sup style="color:red;">*</sup></span>
                        <textarea class="form-control" type="text" name="" id="txt_description">
                          
                        </textarea>
                      </div>

                     

                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Location<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_location">
                      </div>

                      <div class="col-sm-6" style="margin-bottom: 10px;">
                        <span>Marked Price<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="number" name="" min="0" id="dbl_markedprice">
                      </div>

                      <div class="col-sm-6" style="margin-bottom: 10px;">
                        <span>Copies<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="number" min="0" name="" id="int_copies">
                      </div>

                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <a class="btn btn-primary col-sm-3" style="color:white;float: right;" id="btn_save">Save</a>
                      </div>



                    </div>
              </div>
              <div class="card-footer">
                <div class="stats" id="btn_clear" style="cursor:pointer;">
                  <i class="now-ui-icons arrows-1_refresh-69" ></i> Clear fields
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

  <script>
  var commandStr="";

    $(document).ready(function() {
      fetchMaterials();
      commandStr = "Add";
    });

     function fetchMaterials() {

   $('#tbl_other_materials').DataTable().destroy();
  
   var dataTable1 = $('#tbl_other_materials').DataTable({

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
     url:"functions/select_other_materials.php",
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }

   $(document).on("click", "#btn_edit", function() {
     event.preventDefault();
     document.getElementById("txt_ID").value=$(this).data("id");
     document.getElementById("txt_name").value=$(this).data("m_name");
     document.getElementById("txt_description").value=$(this).data("description");
     document.getElementById("txt_location").value=$(this).data("loc");
     document.getElementById("dbl_markedprice").value=$(this).data("price");
     document.getElementById("int_copies").value=$(this).data("copies");
     document.getElementById("opt_category").value=$(this).data("category");
     document.getElementById("int_copies").disabled = true;
     document.getElementById("txt_ID").disabled = true;
     document.location.href = "#txt_ID";
     commandStr = "Update";
   });

  $(document).on("click", "#btn_save", function() {
     event.preventDefault();

     var materialid = document.getElementById("txt_ID").value.trim();
     var category = document.getElementById("opt_category").value.trim();
     var materialname = document.getElementById("txt_name").value.trim();
     var description = document.getElementById("txt_description").value.trim();
     var txt_location = document.getElementById("txt_location").value.trim();
     var markedPrice = document.getElementById("dbl_markedprice").value;
     var copies = document.getElementById("int_copies").value;
     

      var other_data = "materialid="+materialid+
                       "&materialname="+materialname+
                       "&category="+category+
                       "&description="+description+                 
                       "&txt_location="+txt_location+
                       "&markedPrice="+markedPrice+
                       "&copies="+copies;   

       if (materialid=="" || materialname=="" ||description=="" || txt_location=="" || markedPrice<1 || copies<1 ) {
         swal({title:"Warning!",text: "Please complete the fields!", type:"warning"}); 
         return;
       }                
       
       var str_url = '';
       var str_title = '';
       var str_success = '';
      if(commandStr=="Add"){
            str_url = 'functions/add_others.php?'+other_data;
            str_title = 'Do you want to add this new material?';
            str_success = 'New material has been successfully added.';
      }else if(commandStr=="Update"){
            str_url = 'functions/update_others.php?'+other_data;
            str_title = "Do you want update material's details?";
            str_success = "Material's details has been successfully updated.";
      }

                       
     swal({
                            customClass: 'swal-wide',
                            title:str_title, 
                            text: "", 
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
                                $.ajax({

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

                                             if(data.includes('200')){
                                              clearFields();
                                            
                                              fetchMaterials();
                                                                                     
                                              swal({title:"Success!",text: str_success, type:"success"}).then(okay => {
                                                       if (okay) {
                                                      
                                                      }
                                                       });                                                                
                                            }else{
                                               swal({title:"Warning!",text: data, type:"warning"}); 

                                            }
                                        } 

                                 });
    
                      // else result
                 }
                      });
});

 $(document).on("click", "#btn_delete", function() {
     event.preventDefault();

     var id = $(this).data("id");
    
      
            str_url = 'functions/delete_others.php?id='+id;
            str_title = 'Do you want to reomve this material? All records about this material will be deleted.';
            str_success = 'material(s) has been successfully deleted.';
     
                       
     swal({
                            customClass: 'swal-wide',
                            title:str_title, 
                            text: "", 
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
                                $.ajax({

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

                                             if(data.includes('200')){
                                              clearFields();
                                            
                                              fetchMaterials();
                                                                                     
                                              swal({title:"Success!",text: str_success, type:"success"}).then(okay => {
                                                       if (okay) {
                                                      
                                                      }
                                                       });                                                                
                                            }else{
                                               swal({title:"Warning!",text: data, type:"warning"}); 

                                            }
                                        } 

                                 });
    
                      // else result
                 }
                      });
});


$(document).on("click", "#btn_clear", function() {
     event.preventDefault();
     clearFields();
     });

function clearFields(){
     document.getElementById("txt_ID").value='';
     document.getElementById("txt_name").value='';
     document.getElementById("txt_description").value='';
     document.getElementById("txt_location").value='';
     document.getElementById("dbl_markedprice").value=0;
     document.getElementById("int_copies").value=0;
     document.getElementById("int_copies").disabled = false;
     document.getElementById("txt_ID").disabled = false;
    commandStr = "Add";
}
 function printqr(){
        window.open("printqrcode_other.php?MaterialID=%", '_blank', 'location=yes,height=1366,width=768,scrollbars=yes,status=yes');
      }

  </script>
</body>

</html>