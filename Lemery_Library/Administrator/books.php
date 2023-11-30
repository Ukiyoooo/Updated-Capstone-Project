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
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/lemery_logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Books | Lemery Colleges LMS
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
          <li class="active">
            <a href="">
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
            <a class="navbar-brand" href="#pablo">Books</a>
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
                <h5 class="card-category">Books</h5>
                <h4 class="card-title">List</h4>
              
              </div>
              <div class="card-body">
                  <div class="table-responsive">
              <table class="table " id="tbl_books">
                      <thead class="">
                          <tr> 
                                               
                            <th class="text-center">
                             ISBN
                            </th>
                            <th class="text-center">
                             Category
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
                             Call no.
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
                            
                            <th class="text-center">
                             Available Copies
                            </th>
                          <th class="text-center">
                             PDF
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
                <h5 class="card-category">Books</h5>
                <h4 class="card-title">Details</h4>
              
              </div>
              <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>ISBN<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_ISBN">
                      </div>

                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Category<sup style="color:red;">*</sup></span>
                        <select class="form-control" id="opt_category">
                          <option value="" hidden="" selected="">Please select...</option>
                          <option value="Generalities">Generalities</option>
                          <option value="Religion">Religion</option>
                          <option value="Language">Language</option>
                          <option value="Technology">Technology</option>
                          <option value="Literature">Literature</option>
                          <option value="Philosophy">Philosophy</option>
                          <option value="Social Sciences">Social Sciences</option>
                          <option value="Natural Science and Math">Natural Science and Math</option>
                          <option value="Fine Arts">Fine Arts</option>
                          <option value="Geography and History">Geography and History</option>
                        </select>
                      </div>


                       <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Section<sup style="color:red;">*</sup></span>
                        <select class="form-control" id="opt_section">
                          <option value="" hidden="" selected="">Please select...</option>
                          <option value="Circulation">Circulation</option>
                          <option value="Reference">Reference</option>
                          <option value="Scholastic">Scholastic</option>
                        </select>
                      </div>

                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Title<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_title">
                      </div>

                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Subject<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_subject">
                      </div>

                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Description<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_description">
                      </div>

                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Call no. ( <i>DDC AND LC</i> )<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_call_num">
                      </div>


                      <div class="col-sm-12" style="margin-bottom: 10px;">
                        <span>Author<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_author">
                      </div>

                      <div class="col-sm-6" style="margin-bottom: 10px;">
                        <span>Publisher<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_publisher">
                      </div>

                      <div class="col-sm-6" style="margin-bottom: 10px;">
                        <span>Copyright<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="number" name="" min="0" id="int_copyright">
                      </div>

                      <div class="col-sm-6" style="margin-bottom: 10px;">
                        <span>Edition<sup style="color:red;">*</sup></span>
                        <input class="form-control" type="text" name="" id="txt_edition">
                      </div>

                      <div class="col-sm-6" style="margin-bottom: 10px;">
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

                      <div class="col-sm-6">
                        <span>PDF <i>(optional)</i></span>
                        <input type="file" name="" id="file_add" accept="pdf/*">
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
      fetchBooks("");
      commandStr = "Add";
    });

     function fetchBooks() {

   $('#tbl_books').DataTable().destroy();
  
   var dataTable1 = $('#tbl_books').DataTable({

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
     url:"functions/select_books.php",
     type:"POST",
     cache:false,

     beforeSend:function() {

                   
                }       
    },
    "autoWidth" : false
   });

  }

  $(document).on("change", "#file_add", function() {
    event.preventDefault();
 
    //get file details
      var property = this.files[0];
      var image_name = property.name;
      var image_extension = image_name.split('.').pop().toLowerCase();
      var image_size = property.size;

    //filter extension
    if(jQuery.inArray(image_extension, ['pdf'])==-1) {

            swal({
                  title: "Invalid File Type!",
                  text: "File must be in pdf format!",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5cb85c",
                  confirmButtonText: '<span class="glyphicon glyphicon-ok"></span>&nbspProceed',
                  confirmButtonClass: "btn"
                  }).then((result) => {
                  if (result.value) {

                      this.value="";
                    
                  }
                  });

    }

    //filter size
    

   });  

   $(document).on("click", "#btn_edit", function() {
     event.preventDefault();
     document.getElementById("txt_ISBN").value=$(this).data("isbn");
     document.getElementById("opt_category").value=$(this).data("category");
     document.getElementById("opt_section").value=$(this).data("section");
     document.getElementById("txt_title").value=$(this).data("title");
     document.getElementById("txt_subject").value=$(this).data("subject");
     document.getElementById("txt_description").value=$(this).data("description");
     document.getElementById("txt_author").value=$(this).data("author");
     document.getElementById("txt_publisher").value=$(this).data("publisher");
     document.getElementById("int_copyright").value=$(this).data("copyright");
     document.getElementById("txt_edition").value=$(this).data("edition");
     document.getElementById("txt_location").value=$(this).data("loc");
     document.getElementById("dbl_markedprice").value=$(this).data("price");
     document.getElementById("int_copies").value=$(this).data("copies");
     document.getElementById("txt_call_num").value=$(this).data("callnum");
     document.getElementById("int_copies").disabled = true;
     document.getElementById("txt_ISBN").disabled = true;
     document.location.href = "#txt_ISBN";
     commandStr = "Update";
   });

  $(document).on("click", "#btn_save", function() {
     event.preventDefault();

     var isbn = document.getElementById("txt_ISBN").value.trim();
     var category = document.getElementById("opt_category").value.trim();
     var section = document.getElementById("opt_section").value.trim();
     var title = document.getElementById("txt_title").value.trim();
     var subject = document.getElementById("txt_subject").value.trim();
     var description = document.getElementById("txt_description").value.trim();
     var callNo = document.getElementById("txt_call_num").value.trim();
     var author = document.getElementById("txt_author").value.trim();
     var publisher = document.getElementById("txt_publisher").value.trim();
     var copyright = document.getElementById("int_copyright").value;
     var edition = document.getElementById("txt_edition").value.trim();
     var txt_location = document.getElementById("txt_location").value.trim();
     var markedPrice = document.getElementById("dbl_markedprice").value;
     var copies = document.getElementById("int_copies").value;
     var file_property = document.getElementById("file_add").files[0];
     var pdf = document.getElementById("file_add").value;
     var fd = new FormData();
     fd.append("file_add",file_property);  

      var other_data = "isbn="+isbn+
                       "&category="+category+
                       "&section="+section+
                       "&title="+title+
                       "&subject="+subject+
                       "&description="+description+
                       "&callNo="+callNo+
                       "&author="+author+
                       "&publisher="+publisher+
                       "&copyright="+copyright+
                       "&edition="+edition+
                       "&txt_location="+txt_location+
                       "&markedPrice="+markedPrice+
                       "&copies="+copies+
                       "&_pdf="+new Date().getTime();   

       if (isbn=="" || section=="" ||title==""||subject==""||description=="" || author=="" || publisher=="" || copyright<1900 || edition=="" || txt_location=="" || markedPrice<1 || copies<1 ) {
         swal({title:"Warning!",text: "Please complete the fields!", type:"warning"}); 
         return;
       }                
       
       var str_url = '';
       var str_title = '';
       var str_success = '';
      if(commandStr=="Add"){
            str_url = 'functions/add_book.php?'+other_data;
            str_title = 'Do you want to add this new book?';
            str_success = 'New books has been successfully added.';
      }else if(commandStr=="Update"){
            str_url = 'functions/update_book.php?'+other_data;
            str_title = "Do you want update book' details?";
            str_success = "Book' details has been successfully updated.";
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
                                              clearFields();
                                            
                                              fetchBooks();
                                                                                     
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

     var isbn = $(this).data("isbn");
    
      
            str_url = 'functions/delete_books.php?isbn='+isbn;
            str_title = 'Do you want to reomve this book? All records about this book will be deleted.';
            str_success = 'books has been successfully deleted.';
     
                       
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
                                            
                                              fetchBooks();
                                                                                     
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
     document.getElementById("txt_ISBN").value="";
     document.getElementById("opt_category").value="";
     document.getElementById("opt_section").value="";
     document.getElementById("txt_title").value="";
     document.getElementById("txt_subject").value="";
     document.getElementById("txt_description").value="";
     document.getElementById("txt_author").value="";
     document.getElementById("txt_call_num").value="";
     document.getElementById("txt_publisher").value="";
     document.getElementById("int_copyright").value=0;
     document.getElementById("txt_edition").value="";
     document.getElementById("txt_location").value="";
     document.getElementById("dbl_markedprice").value=0;
     document.getElementById("int_copies").value=0;
     document.getElementById("int_copies").disabled = false;
     document.getElementById("txt_ISBN").disabled = false;
     document.getElementById("file_add").value = '';
    commandStr = "Add";
}


  </script>
</body>

</html>