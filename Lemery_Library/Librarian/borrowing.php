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
    Borrowing | Lemery Colleges LMS
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

          <li>
            <a href="attendance.php">
              <i class="now-ui-icons ui-2_time-alarm"></i>
              <p>Attendance</p>
            </a>
          </li>
          <hr>
          <li class="active">
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
            <a class="navbar-brand" href="borrowing.php">Clear</a>
            <input class="form-control col-sm-12" type="text" onblur="this.focus()" autofocus name="" placeholder="Scan Patron's ID and Item ID..." id="txt_scanner" tabindex="-1">
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
                <h5 class="card-category">Items</h5>
     
              
              </div>
              <div class="card-body">
                  <div class="table-responsive">
              <table class="table " id="tbl_books">
                      <thead class="">
                          <tr> 
                             <th width="1%" class="text-center">
                              Void
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
                           </tr>
                          </thead>
                         <hr>
                       </table>
                     </div>
                   </div>
             
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                  <a class="btn btn-success" style="color:white;float: right;margin-bottom: 25px;" id="btn_confirm">Confirm</a>
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
  var idno ='';
  var p_name = '';
  var p_position_section = '';
  var usertype = '';
  var academicyear='';
  var semester='';
  var duedates=0;
  var course = '';
  var department='';

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
  });

  $(document).on("click", "#btn_confirm", function() {
     event.preventDefault();
     var index, table = document.getElementById('tbl_books');
       
     if(table.rows.length<2){
      swal({title:"Warning!",text: "No item in the list.", type:"warning"});
      return;
     }

       var str_url = '';
       var str_title = '';
       var str_success = '';
   
           
            str_title = "Do you want to confirm this transaction?";
            str_success = "transaction has been confirmed.";
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
                                            var insert_id =table.rows[i].cells[1].innerHTML;
                                            var insert_isbn =table.rows[i].cells[2].innerHTML;
                                            var insert_title =table.rows[i].cells[3].innerHTML;
                                            var insert_category =table.rows[i].cells[4].innerHTML;
                                            var insert_description =table.rows[i].cells[5].innerHTML;
                                            var other_data = "insert_id="+insert_id+
                                                             "&insert_isbn="+insert_isbn+
                                                             "&insert_title="+insert_title+
                                                             "&insert_category="+insert_category+
                                                             "&insert_description="+insert_description+
                                                             "&idno="+idno+
                                                             "&p_name="+p_name+
                                                             "&p_position_section="+p_position_section+
                                                             "&usertype="+usertype+
                                                             "&academicyear="+academicyear+
                                                             "&semester="+semester+
                                                             "&course="+course+
                                                             "&department="+department;


                            

                                             str_url = 'functions/borrow.php?'+other_data;
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
                                                        window.location = "borrowing.php";
                                                      }
                                                       });                  
    
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
                  course = itemData.course;
                  department = itemData.department;


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
                 
                  if(duedates>0){
                    swal({title:"Warning!",text: usertype+" have overdue borrowed books/materials.", type:"warning"}).then(okay => {
                                     if (okay) {
                                            document.getElementById("txt_scanner").value='';
                                          }
                                      });  
                     document.getElementById("txt_scanner").disabled=true;
                                      return;                
                          
                  }

                 
                });
            }
  });
}

function fetchBook(accession){

        $.ajax({

            url:"functions/select_book_for_borrowing.php?accession="+accession, 
            type:"POST",  
            dataType: "json",
            contentType:false,
            cache:false,
            processData:false,

            beforeSend:function(data) {
              data='';
            },  
            error:function(data){
                 
            }, 
            success:function(data){
              
                if (data!=null){
                  jQuery.each(data, function(index, itemData) {

                    b_accession = itemData.accession;
                    b_isbn = itemData.isbn;
                    b_title = itemData.title;
                    b_category = itemData.category;
                    b_description = itemData.description;
                    b_status = itemData.status;
                    
                });
                
                   checkExist();
                }
            data=null;

                 

            }

  });
        
                      
}

function fetchOthers(id){

        $.ajax({

            url:"functions/select_other_for_borrowing.php?id="+id, 
            method:"POST",  
            dataType: "json",
            contentType:false,
            cache:false,
            processData:false,

            beforeSend:function(data) {
              data='';
            },  
            error:function(data){
                 
            }, 
            success:function(data){
                if (data!=null){
                  jQuery.each(data, function(index, itemData) {
                    o_id = itemData.g_id;
                    o_category = itemData.category;
                    o_name = itemData.g_name;
                    o_description = itemData.description;
                    o_copies = itemData.copies
                    
                });
                
                   checkOthersExist();
                }
            data=null;

                 

            }

  });
        
                      
}
var allowedbooks = 0;
$(document).on("keyup", "#txt_scanner", function() {
   var tbl_books =document.getElementById("tbl_books");
  
  if(document.getElementById("txt_scanner").value.trim() !=''){
  var itemid='';
  itemid='';
  itemid = document.getElementById("txt_scanner").value.trim();
  if (idno.trim() ==''){
    var userid = document.getElementById("txt_scanner").value.trim();
    allowedbooks = 0;
    fetchUser(userid);




  }else{
      
       if(itemid.includes('Acc')){
       
           if (allowedbooks == tbl_books.rows.length && b_accession!=''){
                   document.getElementById("txt_scanner").value='';
             swal({title:"Warning!",text: usertype+" has reached the maximum allowed items.", type:"warning"}).then(okay => {
                       if (okay) {
                              document.getElementById("txt_scanner").value='';
                            }
                        });                  
            
           }else{
            fetchBook('');
            setTimeout(fetchBook(itemid),3000);
         
             return;
           }
        
       }
       else{
           if (allowedbooks == tbl_books.rows.length && o_id!=''){
                   document.getElementById("txt_scanner").value='';
             swal({title:"Warning!",text: usertype+" has reached the maximum allowed items.", type:"warning"}).then(okay => {
                       if (okay) {
                              document.getElementById("txt_scanner").value='';
                            }
                        });                  
            
           }else{
            fetchOthers('');
            setTimeout(fetchOthers(itemid),3000);
             return;
           }
        
       }
  }
}
});
 $(document).on("click", "#btn_void", function() {
      var index, table = document.getElementById('tbl_books');
      var selectedrow = $(this).data("id");
                  for(var i = 1; i < table.rows.length; i++)
            {
                  if(selectedrow==table.rows[i].cells[1].innerHTML){
                    var c = confirm("Do you want to void "+table.rows[i].cells[1].innerHTML+"?");

                      if(c === true)
                      {
                           index = table.rows[i].cells[0].parentElement.rowIndex;
                          table.deleteRow(index);
                          return;
                      }else{
                        return;
                      }

                    }
                
                
            }
    });

 function checkExist(){
  var index, table = document.getElementById('tbl_books');
 var checkaccesison ='';
            for(var i = 0; i < table.rows.length; i++)
            {
                
                    if (b_accession == table.rows[i].cells[1].innerHTML){
                       checkaccesison ='exist';   
                    }
                    
                
                
            }
            if (checkaccesison!='exist'){
              if (b_status=='borrowed'){
                  document.getElementById("txt_scanner").value='';
             swal({title:"Warning!",text: "Book with Accession#: "+b_accession + " has status borrowed. Please settle the first transaction before performing books' borrowing!", type:"warning"}).then(okay => {
                       if (okay) {
                              document.getElementById("txt_scanner").value='';
                            }
                        });      
                }else if (b_status=='reserved'){
                  document.getElementById("txt_scanner").value='';
             swal({title:"Warning!",text: "Book with Accession#: "+b_accession + " has status reserved. Please find another book!", type:"warning"}).then(okay => {
                       if (okay) {
                              document.getElementById("txt_scanner").value='';
                            }
                        });      
                }else{
                if(b_accession!='' && document.getElementById("txt_scanner").value.trim() !=''){
                         insertBook(b_accession,b_isbn,b_title,b_category,b_description);                  
                        b_title='';
                        b_category='';
                        b_description='';
                        b_isbn='';
                        b_status ='';
                          }
              }
            }
 }


function checkOthersExist(){
  var index, table = document.getElementById('tbl_books');
 var check_id ='';
            for(var i = 0; i < table.rows.length; i++)
            {
                
                    if (o_id == table.rows[i].cells[1].innerHTML){
                       check_id ='exist';   
                    }
                    
                
                
            }
            if (check_id!='exist'){
            if (o_copies>1) {

            if(o_id!='' && document.getElementById("txt_scanner").value.trim() !=''){
                     insertBook(o_id,'',o_name,o_category,o_description);                  
                    o_name='';
                    o_category='';
                    o_description='';
                    o_copies = 0;
                      }
                    
                  }else{
                     document.getElementById("txt_scanner").value='';
             swal({title:"Warning!",text: "Invalid quantity! Maybe, there are copies of this material that exist inside the library but didn't marked as returned in the system!", type:"warning"}).then(okay => {
                       if (okay) {
                              document.getElementById("txt_scanner").value='';
                            }
                        });      
                  }
                }
 }

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

function insertBook(accid,isbn,title,category,description){

  var tbl_books =document.getElementById("tbl_books");
  allowedbooks = 0;
  if (usertype == 'Faculty') {
    allowedbooks=10;
  }else if (usertype=='Student') {
    allowedbooks = 5;
  }

  allowedbooks= allowedbooks-unreturned;
  allowedbooks = allowedbooks+1; // add the first row of table

   if (tbl_books.rows.length<allowedbooks){
      var row = tbl_books.insertRow(1);
   
    // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      var cell5 = row.insertCell(4);
      var cell6 = row.insertCell(5);
      cell1.innerHTML = '<a class="btn btn-danger" style="color:white;" data-id="'+accid+'" id="btn_void">Void</a>';
      cell2.innerHTML = accid;
      cell3.innerHTML = isbn;
      cell4.innerHTML = title; 
      cell5.innerHTML = category;
      cell6.innerHTML = description;
     
     document.getElementById("txt_scanner").value ='';
   }
  }



  function sleep(seconds) 
{
  var e = new Date().getTime() + (seconds * 1000);
  while (new Date().getTime() <= e) {}
    
}

  </script>


</body>

</html>