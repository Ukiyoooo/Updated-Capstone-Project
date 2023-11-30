<?php 
$pagetype = $_GET['pagetype'];

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
   <?php echo $pagetype; ?>  | Lemery Colleges LMS
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

          <?php
          if($pagetype=="Student"){
            echo' <li class="active">
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
          </li>';
          }else if ($pagetype=="Faculty"){
            echo ' <li>
            <a href="users.php?pagetype=Student">
              <i class="now-ui-icons users_single-02"></i>
              <p>Students</p>
            </a>
          </li>
          <li class="active">
            <a href="users.php?pagetype=Faculty">
              <i class="now-ui-icons business_badge"></i>
              <p>Faculty</p>
            </a>
          </li>';
          }
          

          ?>
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
            <a class="navbar-brand" href="#pablo"><?php echo $pagetype ?></a>
          
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
  
          <div class="col-lg-12" id="card_registration" style="display:none;">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category"><?php echo $pagetype; ?> Information <a id="btn_close_card" class="btn btn-default" style="color:white;">View List</a> </h5>     
                
              </div>
              <div class="card-body" >
                
                <div class="row">
                  

                <div class="col-sm-3">
                  <center>  <img class="" id="image_add" src="../assets/img/no-img.png" style="height: 200px; width: 200px;border-radius: 50%;box-shadow: 20px 20px 50px grey;" >
                    <div class="col-sm-12" style="margin-left: 0px;">
                      <label class="btn btn-default " style="color:#fff; border-radius:8px;">
                      <input class="form-control" type="hidden" name="size" value="10000000">
                      <center> <span ></span>&nbsp;Browse<input type="file" id="file_add" name="image" style="display: none;"></center>
                      </label>
                     </div>
                   </center>
                </div>


                <div class="col-sm-3" >
                  <span>ID no.<sup style="color:red;">*</sup></span>
                  <input class="form-control" type="text" name="" id="txt_id">
                  <br>
                  <span>First name.<sup style="color:red;">*</sup></span>
                  <input class="form-control" type="text" name="" id="txt_fname">
                  <br>
                  <span>Middle name<sup style="color:red;">*</sup></span>
                  <input class="form-control" type="text" name="" id="txt_mname">
                  <br>
                  <span>Last name<sup style="color:red;">*</sup></span>
                  <input class="form-control" type="text" name="" id="txt_lname">
                </div>

                <div class="col-sm-3" >
                  <span>Address<sup style="color:red;">*</sup></span>
                  <input class="form-control" type="text" name="" id="txt_address">
                  <br>
                  <span>Gender<sup style="color:red;">*</sup></span>
                  <select class="form-control" id="opt_gender">
                    <option selected="" hidden="" value="">Please select...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                  <br>
                  <span>Contact#<sup style="color:red;" >*</sup></span>
                  <input class="form-control" type="number" name="" min="0" id="int_contact" placeholder="09xxxxxxxxx" maxlength="11">
                  <br>

                  <span>Email<sup style="color:red;">*</sup></span>
                  <input class="form-control" type="email" name="" min="0" id="txt_email">
                  <br>


                </div>


                <div class="col-sm-3" >
                  
                <span>Department<sup style="color:red;">*</sup></span>
                  <select class="form-control" id="opt_dept">
                    <option selected="" hidden="" value="">Please select...</option>
                    <option value="School of Computer Studies">School of Computer Studies</option>
                    <option value="School of Arts and Sciences">School of Arts and Sciences</option>
                    <option value="Technical-Vocational Program">Technical-Vocational Program</option>
                    <option value="School of Business and Management">School of Business and Management</option>
                    <option value="School of Teacher Education">School of Teacher Education</option>
                    <option value="School of Criminal Justice Education">School of Criminal Justice Education</option>
                    <?php 
                      if ($pagetype == "Faculty") {
                        echo '<option value="Non-teaching">Non-teaching</option>';
                      }
                    ?>

                  </select>
                   <br>
                  <?php 
                  if ($pagetype == "Student") {
                    echo '
                    <span style="display:inline;">Course<sup style="color:red;">*</sup></span>
                 <select class="form-control" style="display:inline;" id="opt_course">
                   
                  </select>
                  <br><br>
                    <span style="display:inline;">Year<sup style="color:red;display:inline;">*</sup></span>
                  <select class="form-control" style="display:inline;" id="opt_year">
                    <option selected="" hidden="" value="">Please select...</option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                    <option value="Fourth">Fourth</option>
                    
                  </select>
                  <br><br>
                  
                  <span style="display:inline;">Section<sup style="color:red;display:inline;">*</sup></span>
                  <select class="form-control" style="display:inline;" id="opt_section">

                   
                  </select>
                  <br>
                  <span style="display:none;">Position<sup style="color:red;display:none;">*</sup></span>
                  <input class="form-control" type="text" name="" id="txt_position" style="display:none">';
                  }else if ($pagetype=="Faculty") {
                    echo '
                     <span style="display:none;">Course<sup style="color:red;">*</sup></span>
                 <select class="form-control" style="display:none;" id="opt_course">
                   
                  </select>

                    <span style="display:none;">Year<sup style="color:red;display:none;">*</sup></span>
                  <select class="form-control" style="display:none;" id="opt_year">
                    <option selected="" hidden="" value="">Please select...</option>
                    
                  </select>
            
                  
                  <span style="display:none;">Section<sup style="color:red;display:none;">*</sup></span>
                  <select class="form-control" style="display:none;" id="opt_section">

                   
                  </select>
               
                  <span style="display:inline;">Position<sup style="color:red;display:inline;">*</sup></span>
                  <input class="form-control" type="text" name="" id="txt_position" style="display:inline">';
                  
                  }


                  ?>


                </div>

                     
                </div>
                

                     
               </div>
             <hr>
              <div class="card-footer" >
                  <a class="btn btn-success col-sm-2" style="float: right;color:white;margin-bottom: 25px;" id="btn_save">Save</a>
              </div>
            </div>
          </div>


            <div class="col-lg-12" id="card_list" >
            <div class="card">
              <div class="card-header">
                <h5 class="card-category"><?php echo $pagetype; ?> List     
                <a class="btn btn-primary" id="btn_register" style="color:white;">Register new <?php echo $pagetype; ?></a> <a style="color:white; cursor:pointer;" onclick="printqr();" class="btn btn-default">Print QR Code</a></h5>
              </div>
              <div class="card-body" >

                 <div class="table-responsive container">
                    <table class="table " id="tbl_users">
                      <thead class="">
                          <tr> 
                            <th width="1%" class="text-center">
                              Action
                            </th>  
                            <th class="text-center">
                             QRCode
                            </th>             
                            <th class="text-center">
                             Photo
                            </th>
                            <th class="text-center">
                             ID no.
                            </th>  
                            <th class="text-center">
                             Name
                            </th>
                            <th class="text-center">
                             Address
                            </th>
                            <th class="text-center">
                             Gender
                            </th>
                            <th class="text-center">
                             Contact#
                            </th>
                            <th class="text-center">
                             Email
                            </th>
                            <th class="text-center">
                             Department
                            </th>
                        <?php

                        if ($pagetype=='Student') {
                          echo '<th class="text-center">
                             Course
                            </th>
                            <th class="text-center">
                             Level
                            </th>
                            <th class="text-center">
                             Section
                            </th>';
                        }else if($pagetype=='Faculty'){
                          echo '<th class="text-center">
                             Position
                            </th> ';
                        }

                        ?>
                            
                                                                                                     
                           </tr>
                          </thead>
                         <hr>
                       </table>
                     </div>
                     
              </div>
               <div class="card-footer" >
                
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

  <div class="modal fade" id="referralModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Referral requirements</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <span>School</span>
        <input type="text" class="form-control" name="" placeholder="Name of School" id="schoolname">
        <span>School address</span>
        <input type="text" class="form-control" name="" placeholder="Address of School" id="schooladdress">
        <span>Research title</span>
        <input type="text" class="form-control" name="" placeholder="Title of his/her research" id="researchtitle">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_closeModal">Close</button>
         <button type="button" class="btn btn-success" onclick="printletter();">Print</button>
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

 
</body>
</html>
<script type="text/javascript" language="javascript">
    var ay='';
    var sem='';
    var opt_dept= document.getElementById('opt_dept');
    var opt_course= document.getElementById('opt_course');
    var opt_year= document.getElementById('opt_year');
    var commandStr='';


function fetchUsers(){
   var usertype = '<?=$_GET['pagetype']?>';
    $('#tbl_users').DataTable().destroy();
  
   var dataTable1 = $('#tbl_users').DataTable({

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
     url:"functions/select_users.php?usertype="+usertype,
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });
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
                 ay=itemData.sy; 
                 sem=itemData.sem;
                });
            }
  });
}
function removeOptions(selectbox){
          var i;
          for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
          {
              selectbox.remove(i);
          }
    }

$(document).on("change", "#opt_dept", function() {
    fetchSections(opt_dept,opt_course,opt_year);
});
$(document).on("change", "#opt_course", function() {
    fetchSections(opt_dept,opt_course,opt_year);
});
$(document).on("change", "#opt_year", function() {
    fetchSections(opt_dept,opt_course,opt_year);
});

function fetchSections(department,course,yearLevel){
  department = department.value;
  course = course.value;
  yearLevel = yearLevel.value

  var other_data ="ay="+ay+"&sem="+sem+"&dept="+department+"&course="+course+"&yearLevel="+yearLevel;
  
 var selectElement = document.getElementById('opt_section');
 removeOptions(selectElement);
  selectElement.add(new Option(""));
        $.ajax({

            url:"functions/select_sections_opt.php?"+other_data, 
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
                   selectElement.add(new Option(itemData.section));
                });
            }
  });
}


    $(document).ready(function() {
     selectSYSem();
     commandStr = 'Add';
     fetchUsers();
    });

 $(document).on("click", "#btn_edit", function() {
  document.getElementById("txt_id").value=$(this).data("userid");
  document.getElementById("txt_fname").value=$(this).data("fname");
  document.getElementById("txt_mname").value=$(this).data("mname");
  document.getElementById("txt_lname").value=$(this).data("lname");
  document.getElementById("txt_address").value=$(this).data("address");
  document.getElementById("opt_gender").value=$(this).data("gender");
  document.getElementById("int_contact").value=$(this).data("contact");
  document.getElementById("txt_email").value=$(this).data("email");
  document.getElementById("opt_dept").value=$(this).data("department");
  generateCourse();
  document.getElementById("opt_course").value=$(this).data("course");
  document.getElementById("opt_year").value=$(this).data("level");
  fetchSections(opt_dept,opt_course,opt_year);
  document.getElementById("opt_section").value=$(this).data("section");
  document.getElementById("txt_position").value=$(this).data("position");
  document.getElementById('card_registration').style.display = "inline";
  document.getElementById('card_list').style.display = "none";
   document.getElementById("txt_id").disabled=true;
   document.getElementById("image_add").src=$(this).data("imgsrc");
  commandStr="Update";
});
 $(document).on("click", "#btn_register", function() {
  commandStr = "Add";
  document.getElementById('card_registration').style.display = "inline";
  document.getElementById('card_list').style.display = "none";
  
 });

$(document).on("click", "#btn_close_card", function() {
  document.getElementById('card_registration').style.display = "none";
  document.getElementById('card_list').style.display = "inline";
  document.getElementById("txt_id").disabled=false;
  fetchUsers();
 });


function generateCourse(){
    var dept=  select = document.getElementById('opt_dept');
    var selectElement = document.getElementById('opt_course');
    removeOptions(selectElement);
    if (dept.value=="School of Computer Studies") {
      selectElement.add(new Option(""));
      selectElement.add(new Option("BS in Information Technology"));
      selectElement.add(new Option("BS in Computer Science"));
    }else if(dept.value == 'School of Arts and Sciences'){
      selectElement.add(new Option(""));
      selectElement.add(new Option("BS in Pyschology"));
    }

    else if(dept.value == 'Technical-Vocational Program'){
      selectElement.add(new Option(""));
      selectElement.add(new Option("1-Year Ship Catering Services (SEAMAN)"));
    }

    else if(dept.value == 'School of Business and Management'){
      selectElement.add(new Option(""));
      selectElement.add(new Option("BS in Custom Administration"));
      selectElement.add(new Option("BS in Business Administration"));
      selectElement.add(new Option("BS in Hospitality Management"));
      selectElement.add(new Option("BS in Tourism Management"));
    }

    else if(dept.value == 'School of Teacher Education'){
      selectElement.add(new Option(""));

    selectElement.add(new Option("Bachelor of Elementary Education"));

    selectElement.add(new Option("Bachelor of Secondary Education"));

    selectElement.add(new Option("Bachelor of Physical Education"));

    selectElement.add(new Option("Bachelor of Culture and Arts Education"));
  
    selectElement.add(new Option("Bachelor of Technology and Livelihood Education"));


    }

    else if(dept.value == 'School of Criminal Justice Education'){
      selectElement.add(new Option(""));
      selectElement.add(new Option("BS in Criminology"));
  

    }

   
}

$(document).on("change", "#opt_dept", function() {
  
    generateCourse();
});

$(document).on("change", "#file_add", function() {
    event.preventDefault();
 
    //get file details
      var property = this.files[0];
      var image_name = property.name;
      var image_extension = image_name.split('.').pop().toLowerCase();
      var image_size = property.size;

    //filter extension
    if(jQuery.inArray(image_extension, ['gif','png','jpg','jpeg'])==-1) {

            swal({
                  title: "Invalid File Type!",
                  text: "Image must be in 'gif','png','jpg','jpeg' format!",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5cb85c",
                  confirmButtonText: '<span class="glyphicon glyphicon-ok"></span>&nbspProceed',
                  confirmButtonClass: "btn"
                  }).then((result) => {
                  if (result.value) {

                      this.value="";
                      document.getElementById("image_edit").src="img/profile.png";
                      document.getElementById("image_edit").className += " required-fields";

                  }
                  });

    }

    //filter size
    else if(image_size>2000000) {

            swal({
                  title: "Invalid File Size!",
                  text: "Please select an image with size lower than 2MB!",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5cb85c",
                  confirmButtonText: '<span class="glyphicon glyphicon-ok"></span>&nbspProceed',
                  confirmButtonClass: "btn"
                  }).then((result) => {
                  if (result.value) {

                      this.value="";
                      document.getElementById("image_add").src="images/profile.png";
                      document.getElementById("image_add").className += " required-fields";

                  }
                  });
      
    } 

    else if(this.files && this.files[0]) {
      document.getElementById("image_add").classList.remove("required-fields");
      var obj = new FileReader();
      obj.onload = function(data) { document.getElementById("image_add").src = data.target.result; }
      obj.readAsDataURL(this.files[0]);
    }

   });  
$(document).on("click", "#btn_save", function() {

     var userid = document.getElementById("txt_id").value.trim();
     var fname = document.getElementById("txt_fname").value.trim();
     var mname = document.getElementById("txt_mname").value.trim();
     var lname = document.getElementById("txt_lname").value.trim();
     var address = document.getElementById("txt_address").value.trim();
     var gender = document.getElementById("opt_gender").value.trim();
     var contact = document.getElementById("int_contact").value.trim();
     var email = document.getElementById("txt_email").value.trim();
     var dept = document.getElementById("opt_dept").value.trim();
     var course = document.getElementById("opt_course").value.trim();
     var yearLevel = document.getElementById("opt_year").value.trim();
     var section = document.getElementById("opt_section").value.trim();
     var txtposition = document.getElementById("txt_position").value.trim();
     var usertype = '<?=$_GET['pagetype']?>';
   
      var file_property = document.getElementById("file_add").files[0];
      var image = document.getElementById("file_add").value;
      var fd = new FormData();
      fd.append("file_add",file_property);  
    
    var other_data = "userid="+userid+
                       "&fname="+fname+
                       "&mname="+mname+
                       "&lname="+lname+
                       "&address="+address+
                       "&gender="+gender+
                       "&contact="+contact+
                       "&email="+email+
                       "&dept="+dept+
                       "&course="+course+
                       "&yearLevel="+yearLevel+
                       "&section="+section+
                       "&txtposition="+txtposition+
                       "&usertype="+usertype+     
                       "&ay="+ay+
                       "&sem="+sem+
                       "&image_name="+new Date().getTime();
                       

       

       if (contact.length!=11  ) {
         swal({title:"Warning!",text: "Please input valid contact number format such as 09xxxxxxxxx!", type:"warning"}); 
         return;
       } 

       if (!email.includes("@gmail.com") && !email.includes("@yahoo.com") && !email.includes("@outlook.com")&& !email.includes("@hotmail.com")  ) {
         swal({title:"Warning!",text: "Please input valid email!", type:"warning"}); 
         return;
       }  
       

      if (usertype=="Student") {
        if (userid=="" || fname=="" ||lname==""||address==""||gender=="" || dept=="" || course=="" || yearLevel=="" || section==""  ) {
         swal({title:"Warning!",text: "Please complete the fields!", type:"warning"}); 
         return;
       }   
      }
      else if(usertype=="Faculty"){
         if (userid=="" || fname=="" ||lname==""||address==""||gender=="" || dept=="" || txtposition=="" ) {
         swal({title:"Warning!",text: "Please complete the fields!", type:"warning"}); 
         return;
       }   
      }

                    
       
       var str_url = '';
       var str_title = '';
       var str_success = '';
      if(commandStr=="Add"){
            str_url = "functions/add_user.php?"+other_data;
            str_title = 'Do you want to add new '+usertype.toLowerCase()+"?";
            str_success = 'New ' + usertype.toLowerCase() + ' has been successfully added.';
      }else if(commandStr=="Update"){
            str_url = 'functions/update_user.php?'+other_data;
            str_title = "Do you want update the " + usertype.toLowerCase() + "'s information?";
            str_success = usertype+"'s' details has been successfully updated.";
      }

                       
     swal({
                            customClass: 'swal-wide',
                            title:"Confirm", 
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
                                $.ajax({

                                            url:str_url, 
                                            type:"POST",  
                                            data:fd,
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                   
                                            }, 
                                            success:function(data){   

                                             if(data.includes('200')){
                                          
                                                                                     
                                              swal({title:"Success!",text: str_success, type:"success"}).then(okay => {
                                                       if (okay) {
                                                       document.getElementById('card_registration').style.display = "none";
                                                        document.getElementById('card_list').style.display = "inline";
                                                        document.getElementById("txt_id").disabled=false;
                                                        commandStr="Add";
                                                        clearField();
                                                        fetchUsers();
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

    
             var usertype = '<?=$_GET['pagetype']?>';        
       
       var str_url = '';
       var str_title = '';
       var str_success = '';
     
            str_url = 'functions/delete_user.php?userid='+$(this).data("id");;
            str_title = "Do you want delete this " + usertype.toLowerCase() + "?";
            str_success = usertype+" has been successfully deleted.";
      

                       
     swal({
                            customClass: 'swal-wide',
                            title:"Confirm", 
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
                                $.ajax({

                                            url:str_url, 
                                            type:"POST",  
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                   
                                            }, 
                                            success:function(data){   

                                             if(data.includes('200')){
                                          
                                                                                     
                                              swal({title:"Success!",text: str_success, type:"success"}).then(okay => {
                                                       if (okay) {
                                                       document.getElementById('card_registration').style.display = "none";
                                                        document.getElementById('card_list').style.display = "inline";
                                                        document.getElementById("txt_id").disabled=false;
                                                        commandStr="Add";
                                                        clearField();
                                                        fetchUsers();
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

function clearField(){
  document.getElementById("txt_id").value="";
  document.getElementById("txt_fname").value="";
  document.getElementById("txt_mname").value="";
  document.getElementById("txt_lname").value="";
  document.getElementById("txt_address").value="";
  document.getElementById("opt_gender").value="";
  document.getElementById("int_contact").value="";
  document.getElementById("txt_email").value="";
  document.getElementById("opt_dept").value="";
  document.getElementById("opt_course").value="";
  document.getElementById("opt_year").value="";
  document.getElementById("opt_section").value="";
  document.getElementById("txt_position").value="";
  commandStr="Add";
}

$(document).on("click", "#btn_alumni", function() {

    
         
       var str_url = '';
       var str_title = '';
       var str_success = '';
     
            str_url = 'functions/student_to_alumni.php?userid='+$(this).data("id");;
            str_title = "Do you want to transfer this student to alumni list?";
            str_success = "Student has been successfully transferred to Alumni list.";
      

                       
     swal({
                            customClass: 'swal-wide',
                            title:"Confirm", 
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
                                $.ajax({

                                            url:str_url, 
                                            type:"POST",  
                                            contentType:false,
                                            cache:false,
                                            processData:false,

                                            beforeSend:function() {

                                            },  
                                            error:function(data){
                                                   
                                            }, 
                                            success:function(data){   

                                             if(data.includes('200')){
                                          
                                                                                     
                                              swal({title:"Success!",text: str_success, type:"success"}).then(okay => {
                                                       if (okay) {
                                                       document.getElementById('card_registration').style.display = "none";
                                                        document.getElementById('card_list').style.display = "inline";
                                                        document.getElementById("txt_id").disabled=false;
                                                        commandStr="Add";
                                                        clearField();
                                                        fetchUsers();
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
    function printqr(){
      var usertype = '<?=$_GET['pagetype']?>';     
      if (usertype=='Student'){
        window.open("printqrcode_student.php", '_blank', 'location=yes,height=1366,width=768,scrollbars=yes,status=yes');
      }else if(usertype=='Faculty'){
        window.open("printqrcode_faculty.php", '_blank', 'location=yes,height=1366,width=768,scrollbars=yes,status=yes');
      }
    }
var student_name='';
$(document).on("click", "#btn_print", function() {
    student_name = $(this).data('f_name');
});
    function printletter(){
        var schoolname = document.getElementById("schoolname").value.trim();
        var schooladdress = document.getElementById("schooladdress").value.trim();
        var researchtitle = document.getElementById("researchtitle").value.trim();
        var other_data="schoolname="+schoolname+"&schooladdress="+schooladdress+"&researchtitle="+researchtitle+"&student_name="+student_name;
        if (schoolname!="" || schooladdress !="" || researchtitle!="") {
        window.open("referral_letter.php?"+other_data, '_blank', 'location=yes,height=1366,width=768,scrollbars=yes,status=yes');
        document.getElementById("schoolname").value='';
        document.getElementById("schooladdress").value='';
        document.getElementById("researchtitle").value='';
         document.getElementById("btn_closeModal").click();
        }else{
           swal({title:"Warning!",text: "Please complete the required fields", type:"error"})
        }
    }
  </script>
