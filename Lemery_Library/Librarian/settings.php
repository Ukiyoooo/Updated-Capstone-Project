<?php
session_start();
if(empty($_SESSION['UserType'])) {
    header('Location: ../logout.php');
}else{
  $user_type =$_SESSION['UserType'];
  
 if ($user_type!="Librarian"){
    header('Location: ../logout.php');
  }
   $password = $_SESSION['Password'];
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
   Settings | Lemery Colleges LMS
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


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-mini">
          LCI
        </a>
        <a href="index.php" class="simple-text logo-normal">
          Lemery Colleges Inc.
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
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
            <a href="usres.php?pagetype=Faculty">
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
            <a class="navbar-brand" href="#pablo">Settings</a>
          
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
  
          <div class="col-lg-9" id="card_registration" >
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Sections</h5>     
                
              </div>
              <div class="card-body" >
                
                      <div class="row">
                        <div class="col-sm-4" >
                        
                            <div class="container" style="background-color: white; border-radius: 10px;">
                               <br>
                                 <span style="display:inline;">Department<sup style="color:red;display:inline;">*</sup></span>
                          <select class="form-control" id="opt_department">
                              <option selected="" hidden="" value="">Please select...</option>
                              <option value="School of Computer Studies">School of Computer Studies</option>
                              <option value="School of Arts and Sciences">School of Arts and Sciences</option>
                              <option value="Technical-Vocational Program">Technical-Vocational Program</option>
                              <option value="School of Business and Management">School of Business and Management</option>
                              <option value="School of Teacher Education">School of Teacher Education</option>
                              <option value="School of Criminal Justice Education">School of Criminal Justice Education</option>
                            </select>
                           <br>
                           <span style="display:inline;">Course<sup style="color:red;display:inline;">*</sup></span>
                            <select class="form-control" style="display:inline;" id="opt_course"></select>
                           <br>
                       
                            <br>
                           <span style="display:inline;">Year<sup style="color:red;display:inline;">*</sup></span>
                            <select class="form-control" style="display:inline;" id="opt_level">
                              <option selected="" hidden="" value="">Please select...</option>
                              <option value="First">First</option>
                              <option value="Second">Second</option>
                              <option value="Third">Third</option>
                              <option value="Fourth">Fourth</option>
                              
                            </select>
                          <br><br>
                            <span style="display:inline;">Section<sup style="color:red;display:inline;">*</sup></span>
                          <input type="text" class="form-control" id="txt_section" placeholder="Section"> 
                          <br>
                           <div class="col-sm-6" style="float:right;">
                            <a style="color:white;" id="btn_save_section" class="btn btn-primary btn-user btn-block">
                             SAVE
                             </a>
                           </div>

                          
                           <div class="col-sm-6" style="float:right;">
                            <a style="color:white;" id="btn_clear_section" class="btn btn-warning btn-user btn-block">
                             CLEAR
                             </a>
                           </div>
                           <br><br><br>
                      </div>
                       </div>

                    <div class="col-sm-8">
                            <table id="tbl_section" class="table table-bordered table-striped table-hover">
                             <thead>
                              <tr>
                                <th width="1%"><center>Action</center></th>
                                 <th>Department</th>
                                 <th>Course</th>
                                 <th>Level</th>
                                 <th>Section</th>
                                 <th>AY</th>
                                 <th>Semester</th>
                               </tr>
                             </thead>
                            </table>

                      </div>
                      </div>
              </div>
                <div class="card-footer" >
                 
                </div>
           </div>
           </div>
           <div class="col-sm-3">
            <div class="card shadow mb-12">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Academic Year</h6>
                </div>
                <div class="card-body">

                <form class="user">
                  <div class="row">
                          <div class="col-sm-12" >
                          <select class="form-control" style="border-radius:75px; height:50px;" id="opt_ay">
                                  <optgroup label="Choose Academic Year" style="border-radius:75px;">
                                      <option selected disabled hidden Selected="" value="">Academic Year</option>
                                      <!-- <option value="Student">Student</option> -->
                                    
                                  </optgroup>
                           </select>
                           <br>
                           <select class="form-control" style="border-radius:75px; height:50px;" id="opt_semester">
                                  <optgroup label="Choose Semester" style="border-radius:75px;">
                                      <option selected disabled hidden Selected="" value="">Semester</option>
                                      <option value="First Semester">First Semester</option>
                                      <option value="Second Semester">Second Semester</option>
                                    
                                  </optgroup>
                           </select>
                           <br>
                            <div class="col-sm-6" style="float:right;">
                            <a style="color:white;" class="btn btn-primary btn-user btn-block" id="btn_save_ay">
                             SAVE
                             </a>
                           </div>
                      </div>
                      
                  </div>
                  </form>
                </div>
              </div>
        </div>

        <div class="col-lg-12" id="card_registration"  style="display:none;">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Librarians</h5>     
                
              </div>
              <div class="card-body" >
                
                      <div class="row">
                        <div class="col-sm-4" >
                        
                            <div class="container" style="background-color: white; border-radius: 10px;">
                               <br>
                          <span>ID no.</span>
                          <input type="text" class="form-control" id="txt_idno" placeholder="ID no."> 
                          <br>
                           <span>E-mail</span>
                          <input type="text" class="form-control" id="txt_email" placeholder="E-mail"> 
                          <br>

                           <span>Last name</span>
                          <input type="text" class="form-control" id="txt_lastname" placeholder="Last name"> 
                          <br>

                           <span>First name</span>
                          <input type="text" class="form-control" id="txt_firstname" placeholder="First name"> 
                          <br>

                           <span>Middle name.</span>
                          <input type="text" class="form-control" id="txt_middle" placeholder="Middle name"> 
                          <br>




                           <div class="col-sm-6" style="float:right;">
                            <a style="color:white;" id="btn_save_librarian" class="btn btn-primary btn-user btn-block">
                             SAVE
                             </a>
                           </div>

                          
                           <div class="col-sm-6" style="float:right;">
                            <a style="color:white;" id="btn_clear_librarian" class="btn btn-warning btn-user btn-block">
                             CLEAR
                             </a>
                           </div>
                           <br><br><br>
                      </div>
                       </div>

                    <div class="col-sm-8">
                            <table id="tbl_librarians" class="table table-bordered table-striped table-hover">
                             <thead>
                              <tr>
                                <th width="1%"><center>Action</center></th>
                                 <th>ID no.</th>
                                 <th>E-mail</th>
                                 <th>Last name</th>
                                 <th>First name</th>
                                 <th>Middle name</th>
                               </tr>
                             </thead>
                            </table>

                      </div>
                      </div>
              </div>
                <div class="card-footer" >
                 
                </div>
           </div>
           </div>

            <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Change Password</h5>
     
              
              </div>
              <div class="card-body">
                 <h4>Password</h4>
                <span>Current password:</span>
                <input class="form-control" type="password" name="" id="current_password">
               <span>New password:</span>
               <input class="form-control" type="password" name="" id="new_password">
               <span>Re-type password:</span>
               <input class="form-control" type="password" name="" id="confirm_password">
               
                  
                   </div>
             
              <div class="card-footer">
                
               <a  class="btn btn-danger" id="btn_save_password"  style="color:white;float: right;margin-bottom: 20px;" data-password="<?php echo $password; ?>"> Update</a>
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
    var academicyear='';
    var semester='';
    var commandStr = '';
    var commandStrLibrarian='';
    var sec_ID='';
$(document).ready(function() {
     selectSYSem();
     fetch_sections();
     fetchLibrarians();
     generateAY();
     commandStr = 'insert';
     commandStrLibrarian = 'insert';
    });
function generateAY(){
   var selectElement = document.getElementById('opt_ay');
  var YearNow = new Date().getFullYear();
      var postYear = 2010;
      var plusYear = 2011;
       selectElement.add(new Option(""));
      do{
         postYear = postYear + 1;
         plusYear = plusYear + 1;     
         selectElement.add(new Option(postYear +  ' - ' + plusYear));
        
      }while(postYear != YearNow);
      
}

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
                  document.getElementById('opt_ay').value = itemData.sy;
                  document.getElementById('opt_semester').value = itemData.sem;
                });
            }
  });
}
function fetch_sections() {

   $('#tbl_section').DataTable().destroy();
   //$('#result').DataTable().fnDraw(); 

   var dataTable1 = $('#tbl_section').DataTable({
    //set up add-on locations
        // "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',

    "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    "responsive": true,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"functions/select_sections_table.php",
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }


function fetchLibrarians() {

   $('#tbl_librarians').DataTable().destroy();
   //$('#result').DataTable().fnDraw(); 

   var dataTable1 = $('#tbl_librarians').DataTable({
    //set up add-on locations
        // "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',

    "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    "responsive": true,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"functions/select_librarians.php",
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }
    
function generateCourse(){
    var dept=  select = document.getElementById('opt_department');
    var x = document.getElementById("opt_course");
    var option;
    $("#opt_course").empty()

    if (dept.value=="School of Computer Studies") {

    option = document.createElement("option");
    option.text = "";
    x.add(option);
    option = document.createElement("option");
    option.text = "BS in Information Technology";
    x.add(option);
    option = document.createElement("option");
    option.text = "BS in Computer Science";
    x.add(option);

    }else if(dept.value == 'School of Arts and Sciences'){

    option = document.createElement("option");
    option.text = "";
    x.add(option);
    option = document.createElement("option");
    option.text = "BS in Pyschology";
    x.add(option);

    }

    else if(dept.value == 'Technical-Vocational Program'){

    option = document.createElement("option");
    option.text = "";
    x.add(option);
    option = document.createElement("option");
    option.text = "1-Year Ship Catering Services (SEAMAN)";
    x.add(option);

    }

    else if(dept.value == 'School of Business and Management'){

    option = document.createElement("option");
    option.text = "";
    x.add(option);
    option = document.createElement("option");
    option.text = "BS in Custom Administration";
    x.add(option);
    option = document.createElement("option");
    option.text = "BS in Business Administration";
    x.add(option);
    option = document.createElement("option");
    option.text = "BS in Hospitality Management";
    x.add(option);
    option = document.createElement("option");
    option.text = "BS in Tourism Management";
    x.add(option);

    }

    else if(dept.value == 'School of Teacher Education'){

    option = document.createElement("option");
    option.text = "";
    x.add(option);
    option = document.createElement("option");
    option.text = "Bachelor of Elementary Education";
    x.add(option);
    option = document.createElement("option");
    option.text = "Bachelor of Secondary Education";
    x.add(option);
    option = document.createElement("option");
    option.text = "Bachelor of Physical Education";
    x.add(option);
    option = document.createElement("option");
    option.text = "Bachelor of Culture and Arts Education";
    x.add(option);
    option = document.createElement("option");
    option.text = "Bachelor of Technology and Livelihood Education";
    x.add(option);

    }

      else if(dept.value == 'School of Criminal Justice Education'){

    option = document.createElement("option");
    option.text = "";
    x.add(option);
    option = document.createElement("option");
    option.text = "BS in Criminology";
    x.add(option);
    

    }

   
}
$(document).on("change", "#opt_department", function() {
  generateCourse();
    
});

 $(document).on("click", "#btn_save_section", function() {
    var department = document.getElementById('opt_department').value;
    var course = document.getElementById('opt_course').value;
    var level = document.getElementById('opt_level').value;
    var section = document.getElementById('txt_section').value;
    var other_data = "department="+department+
                     "&course="+course+
                     "&level="+level+
                     "&section="+section+
                     "&academicyear="+academicyear+
                     "&semester="+semester;

                  if (department!='' && course!='' && level!='' && section!='') {
                    if(commandStr=='insert'){
                         $.ajax({

                                            url:"functions/insert_section.php?"+other_data, 
                                            method:"POST",  
                                         
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                 
                                            }, 
                                            success:function(data){
                                                  if (data=='saved') {
                                                     swal({title:"Success!",text: "New section has been saved!",type:"success"});  
                                                        document.getElementById('opt_department').value = '';
                                                        document.getElementById('opt_course').value = '';
                                                        document.getElementById('opt_level').value = '';
                                                        document.getElementById('txt_section').value = ''; 
                                                        fetch_sections();
                                                   }else{
                                                     swal({title:"Warning!",text: "Section already exist!",type:"warning"});
                                                   }
                                                 
                                                 
                                                  
                                        } 

                                 });
                       }else if (commandStr='update'){
                    swal({
                    customClass: 'swal-wide',
                    title: "Are you sure ?", 
                    text: "Do you want to update Department: "+department+" Course: "+course+ " Level: "+level+ " Section: "+section+ " AY: " + academicyear + " Semester: " +semester +"?", 
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

                                            url:"functions/update_section.php?"+other_data+"&ID="+sec_ID, 
                                            method:"POST",  
                                         
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                   
                                            }, 
                                            success:function(data){
                                         
                                                  swal({title:"Success!",text: "Department: "+department+" Course: "+course+ " Level: "+level+ " Section: "+section+ " AY: " + selecteday + " Semester: " +selectedsem +" has been updated!",type:"success"});   
                                                  fetch_sections();
                                                  document.getElementById('opt_department').value = '';
                                                  document.getElementById('opt_course').value = '';
                                                  document.getElementById('opt_level').value = '';
                                                  document.getElementById('txt_section').value = ''; 
                                                  commandStr = 'insert';
                                            
                                        } 

                                 });
                                  // end ajax

                  // else result
                 }else {    

                             //nothing
                    }       
                    

                   });
                       }
                    }else{
                        swal({title:"Warning!",text: "Some fields missing!",type:"warning"});
                    }
              });      
       $(document).on("click", "#btn_clear_section", function() {    
        document.getElementById('opt_department').value = '';
        document.getElementById('opt_course').value = '';
        document.getElementById('opt_level').value = '';
        document.getElementById('txt_section').value = '';
          swal({title:"Success!",text: "You can add more!",type:"success"});  
       });     
         $(document).on("click", "#btn_delete_section", function() {  
           sec_ID = $(this).data("id");
          var department = $(this).data("department");
          var course = $(this).data("course");
          var level = $(this).data("level");
          var section = $(this).data("section");
          var academicyear = $(this).data("academicyear");
          var semester  = $(this).data("semester");
          swal({
                    customClass: 'swal-wide',
                    title: "Are you sure ?", 
                    text: "Do you want to delete Department: "+department+" Course: "+course+ " Level: "+level+ " Section: "+section+ " AY: " + academicyear + " Semester: " +semester +"?", 
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

                                            url:"functions/delete_section.php?ID="+sec_ID, 
                                            method:"POST",  
                                         
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                   
                                            }, 
                                            success:function(data){
                                         
                                                  swal({title:"Success!",text: "Department: "+department+" Course: "+course+ " Level: "+level+ " Section: "+section+ " AY: " + academicyear + " Semester: " +semester +" has been deleted!",type:"success"});   
                                                  fetch_sections();
                                                  commandStr='insert';
                                            
                                        } 

                                 });
                                  // end ajax

                  // else result
                 }else {    

                             //nothing
                    }       
                    

                   });
                    // end if result
        }); 

         var selecteday='';
         var selectedsem = '';
        $(document).on("click", "#btn_edit_section", function() {   
        sec_ID = $(this).data("id"); 
        selecteday=$(this).data("academicyear"); 
        selectedsem=$(this).data("semester"); 
        document.getElementById('opt_department').value = $(this).data("department");
        generateCourse();
        document.getElementById('opt_course').value = $(this).data("course");
        document.getElementById('opt_level').value = $(this).data("level");
        document.getElementById('txt_section').value = $(this).data("section");
       commandStr = 'update';
       }); 

     $(document).on("click", "#btn_save_ay", function() {

 ay = document.getElementById("opt_ay").value;
 semester = document.getElementById("opt_semester").value;
 swal({
                    customClass: 'swal-wide',
                    title: "Are you sure ?", 
                    text: "Do you want to update current academic year?", 
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

                                            url:"functions/update_ay.php?ay="+ay+"&semester="+semester, 
                                            method:"POST",  
                                         
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                 
                                            }, 
                                            success:function(data){
                                         
                                                  swal({title:"Success!",text: "Academic Year is now updated!",type:"success"});   
                                              
                                                  selectSYSem();
                                                  
                                        } 

                                 });
                                  // end ajax

                  // else result
                 }else {    

                             //nothing
                    }       
                    

                   });
                    // end if result
        
});


     $(document).on("click", "#btn_save_librarian", function() {
      var middlename=  document.getElementById('txt_middle').value.trim();
      var firstname =  document.getElementById('txt_firstname').value.trim();
      var lastname =  document.getElementById('txt_lastname').value.trim();
      var email =  document.getElementById('txt_email').value.trim();
      var idno = document.getElementById('txt_idno').value.trim();
    var other_data = "idno="+idno+
                     "&email="+email+
                     "&firstname="+firstname+
                     "&middlename="+middlename+
                     "&lastname="+lastname;

                  if (idno!='' && email!='' && firstname!='' && lastname!='') {
                    if(commandStrLibrarian=='insert'){
                         $.ajax({

                                            url:"functions/insert_librarian.php?"+other_data, 
                                            method:"POST",  
                                         
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                 
                                            }, 
                                            success:function(data){
                                                  if (data.includes('saved')) {
                                                     swal({title:"Success!",text: "New librarian has been saved!",type:"success"});  
                                                        document.getElementById('txt_idno').value = '';
                                                        document.getElementById('txt_email').value = '';
                                                        document.getElementById('txt_lastname').value = '';
                                                        document.getElementById('txt_firstname').value = ''; 
                                                        document.getElementById('txt_middle').value = ''; 
                                                        fetchLibrarians();
                                                   }else{
                                                     swal({title:"Warning!",text: "Librarian already exist!",type:"warning"});
                                                   }
                                                 
                                                 
                                                  
                                        } 

                                 });
                       }else if (commandStrLibrarian='update'){
                    swal({
                    customClass: 'swal-wide',
                    title: "Are you sure ?", 
                    text: "Do you want to update this librarian?", 
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

                                            url:"functions/update_librarian.php?"+other_data, 
                                            method:"POST",  
                                         
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                   
                                            }, 
                                            success:function(data){
                                         
                                                  if (data.includes('saved')) {
                                                     swal({title:"Success!",text: "Librarian has been updated!",type:"success"});  
                                                        document.getElementById('txt_idno').value = '';
                                                        document.getElementById('txt_email').value = '';
                                                        document.getElementById('txt_lastname').value = '';
                                                        document.getElementById('txt_firstname').value = ''; 
                                                        document.getElementById('txt_middle').value = ''; 
                                                         document.getElementById('txt_idno').disabled = false;
                                                        fetchLibrarians();
                                                        commandStrLibrarian='insert';
                                                   }else{
                                                     swal({title:"Warning!",text: data,type:"warning"});
                                                   }
                                            
                                        } 

                                 });
                                  // end ajax

                  // else result
                 }else {    

                             //nothing
                    }       
                    

                   });
                       }
                    }else{
                        swal({title:"Warning!",text: "Some fields missing!",type:"warning"});
                    }
              });      
       $(document).on("click", "#btn_clear_librarian", function() {    
        document.getElementById('txt_middle').value = '';
        document.getElementById('txt_firstname').value = '';
        document.getElementById('txt_lastname').value = '';
        document.getElementById('txt_email').value = '';
        document.getElementById('txt_idno').value = '';
        document.getElementById('txt_idno').disabled = false;
        commandStrLibrarian='insert';
        swal({title:"Success!",text: "You can add more!",type:"success"});  
       });

        $(document).on("click", "#btn_edit_librarian", function() {   
        document.getElementById('txt_middle').value = $(this).data('middlename');
        document.getElementById('txt_firstname').value =$(this).data('firstname');
        document.getElementById('txt_lastname').value =$(this).data('lastname');
        document.getElementById('txt_email').value = $(this).data('email');
        document.getElementById('txt_idno').value = $(this).data('id');
         document.getElementById('txt_idno').disabled = true;
       commandStrLibrarian = 'update';
       });


         $(document).on("click", "#btn_delete_librarian", function() {  
           var userid = $(this).data("id");
         
          swal({
                    customClass: 'swal-wide',
                    title: "Are you sure ?", 
                    text: "Do you want to delete this librarian's information?", 
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

                                            url:"functions/delete_librarian.php?userid="+userid, 
                                            method:"POST",  
                                         
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                   
                                            }, 
                                            success:function(data){
                                         
                                                  swal({title:"Success!",text: "Librarian's information has been deleted!",type:"success"});   
                                                  fetchLibrarians();
                                                  commandStrLibrarian='insert';
                                            
                                        } 

                                 });
                                  // end ajax

                  // else result
                 }else {    

                             //nothing
                    }       
                    

                   });
                    // end if result
        }); 

          $(document).on("click", "#btn_save_password", function() {
     event.preventDefault();
      var current_password = document.getElementById("current_password").value;
      var new_password = document.getElementById("new_password").value;
      var confirm_password = document.getElementById("confirm_password").value;
      var oldpass = $(this).data('password');

      if (confirm_password!= new_password) {
          swal({title:"Warning!",text: "Password mismatch!", type:"warning"});
        return;
      }

      if (confirm_password=='' || new_password=='' || current_password=='') {
        swal({title:"Warning!",text: "Please complete the password fields!", type:"warning"});
        return;
      }

      if (current_password!=oldpass) {
        swal({title:"Warning!",text: "Password mismatch!", type:"warning"});
        return;
      }
     

      var other_data = "new_password="+new_password;    
     swal({
                            customClass: 'swal-wide',
                            title: "Do you want update your password?", 
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

                                            url:'functions/update_password.php?'+other_data, 
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
                                                                    
                                              swal({title:"Success!",text: "Your password has been updated. You will be redirected to login page for security purposes.", type:"success"}).then(okay => {
                                                       if (okay) {
                                                        window.location.href = "../logout.php";
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
  </script>
</body>

</html>