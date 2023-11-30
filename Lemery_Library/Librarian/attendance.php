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
    Attendance | Lemery Colleges LMS
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

          <li class="active">
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
            <a class="navbar-brand" href="#" >Attendance</a>
            <input class="form-control col-sm-12" type="text" onblur="this.focus();" autofocus name="" placeholder="Scan Patron's ID..." id="txt_scanner" tabindex="-1">
          
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
        <a data-toggle="modal" data-target="#timeinModal" id="showModal"></a>
        <div class="row">

           <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Patron's</h5>
                <h4 class="card-title">Information</h4>
              
              </div>
              <div class="card-body">
                    <div class="row">
                     
                        <div class="col-sm-12">
                           <center>
                            <img class="" id="user_img" src="../assets/img/no-img.png" style="height: 200px; width: 200px;border-radius: 50%;box-shadow: 20px 20px 50px grey;margin-bottom: 30px;" >
                           </center>
                        </div>

                        <div class="col-sm-12">
                          <span id="idno">ID no.:</span><br>
                          <span id="p_name">Name:</span><br>
                          <span id="p_position_section">Section/Position:</span><br>
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

          <div class="col-lg-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Today</h5>
     
              
              </div>
              <div class="card-body">
                  <div class="table-responsive">
              <table class="table " id="tbl_books">
                      <thead class="">
                          <tr> 
                          
                            <th class="text-center">
                             Patron
                            </th> 
                            <th class="text-center">
                             Purpose
                            </th>
                            <th class="text-center">
                             In
                            </th>                      
                            <th class="text-center">
                             Out
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

  <div class="modal fade" tabindex="-1" role="dialog" id="timeinModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Please input his/her purpose.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <span>Purpose:</span>

       <select id="purpose" class="form-control">
         <option value="" selected="" hidden="">Please select a purpose...</option>
         <option value="Research">Research</option>
         <option value="Referral Letter">Referral Letter</option>
         <option value="Borrowing">Borrowing</option>
         <option value="Return">Return</option>
         <option value="Study">Study</option>
         <option value="Reserve Equipment and Facilities">Reserve Equipment and Facilities</option>
         <option value="Reserve Venues">Reserve Venues</option>
         <option value="Use E-resources">Use E-resources</option>
         <option value="Use Multimedia Resources">Use Multimedia Resources</option>
         <option value="Use Venues">Use Venues</option>
         <option value="Vacant">Vacant</option>
       </select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" id="btn_timein">Time-in</button>
        
      </div>
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

 <script type="text/javascript" language="javascript">
  var idno ='';
  var p_name = '';
  var p_position_section = '';
  var usertype = '';
  var academicyear='';
  var semester='';
  var duedates=0;

  var b_accession='';
  var b_title='';
  var b_category='';
  var b_description='';
  var b_isbn = '';
  var b_status='';
  var o_id='';
  var o_category='';
  var o_description='';
  var o_name = '';
  var o_copies=0;
  var unreturned=0;

  $(document).ready(function() {
     selectSYSem();
     fetchAttendance('');

  });

  $(document).on("click", "#btn_timein", function() {
     event.preventDefault();
     
     var purpose = document.getElementById("purpose").value.trim();
      var other_data = "idno="+idno+
                       "&p_name="+p_name+
                       "&purpose="+purpose+
                       "&usertype="+usertype;
      if (purpose=="") {
         swal({title:"Warning!",text: "Please input a his/her purpose!", type:"warning"}); 
         return;
       }     

       var str_url = '';
       var str_title = '';
       var str_success = '';
   
           
            str_title = "Time in?";
            str_success = "Logged-in successfully.";
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

                            
                                             str_url = 'functions/insert_timein.php?'+other_data;
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
                                              if (data.includes("200")){
                                                   swal({title:"Success!",text: str_success, type:"success"}).then(okay => {
                                                       if (okay) {
                                                      window.location="attendance.php";
                                                      }
                                                       });                  
    
                                              }else{
                                                alert(data);
                                              }
                                              
                                             } 

                                 });  //end ajax
                                                       
                                        
                                        
                                         
                      // else result
                 }
                      });

                                         

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

 function fetchUser(userid){

        $.ajax({

            url:"functions/select_user_details.php?userid="+userid, 
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
                clearUser();
                 jQuery.each(data, function(index, itemData) {
                  duedates=0;
                  idno=itemData.userid;
                  p_name=itemData.p_name;
                  usertype = itemData.usertype;
                  unreturned = itemData.unreturned;
                  duedates = itemData.duedates;
                  if(usertype=='Student'){
                  p_position_section = itemData.p_section;
                 }else if(usertype=='Faculty'){
                  p_position_section = itemData.p_position;
                 }

                 if (itemData.img!='') {
                  document.getElementById("user_img").src='../img-user/'+itemData.img;
                 }else{
                  document.getElementById("user_img").src='../assets/img/no-img.png';
                 }

                 document.getElementById("idno").textContent='ID no.: ' + idno;
                 document.getElementById("p_name").textContent='Name: ' + p_name;
                 if(usertype=='Student'){
                 document.getElementById("p_position_section").textContent='Section: ' + p_position_section; 
                 }else if(usertype=='Faculty'){
                     document.getElementById("p_position_section").textContent='Position: ' + p_position_section; 
                 }


                document.getElementById("txt_scanner").value='';
                if (idno!=''){
                 checkAttendance(idno);
                }

                }); 
            }
  });
}


 function fetchAttendance() {

   $('#tbl_books').DataTable().destroy();
  
   var dataTable1 = $('#tbl_books').DataTable({

           "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    "responsive": true,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"functions/select_attendance.php",
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }
$(document).on("keyup", "#txt_scanner", function() {
   var tbl_books =document.getElementById("tbl_books");
  
  if(document.getElementById("txt_scanner").value.trim() !=''){
 
  
    var userid = document.getElementById("txt_scanner").value.trim();
    allowedbooks = 0;
    fetchUser(userid);


  
}
});
 

 

function clearUser(){
 idno ='';
 p_name = '';
 unreturned =0;
 p_position_section = '';
 usertype = '';
 document.getElementById("idno").textContent='ID no.:';
 document.getElementById("p_name").textContent='Name:';
 document.getElementById("p_position_section").textContent='Section/Position:';
document.getElementById("user_img").src='../assets/img/no-img.png';

}


function checkAttendance(userid){

        $.ajax({

            url:"functions/update_attendance.php?userid="+userid, 
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

              if (data=="200"){
                 swal({title:"Success!",text: "Logged-out successfully.", type:"success"}).then(okay => {
                            if (okay) {
                            window.location="attendance.php";
                            }
                  });                  
    
              }else{
                if (idno!=''){
                document.getElementById("showModal").click();
              }
              }
                               
    
            }
  });
}


 

  </script>


</body>

</html>