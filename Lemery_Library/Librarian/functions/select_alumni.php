<?php
require ("../../db_connection/myConn.php");

    $query = "SELECT `ID`, `UserID`, `LastName`, `FirstName`, `MiddleName`, `Address`, `Gender`, `ContactNo`, `Email`, `Department`, `Course`, `YearLevel`, `Section`, `Photo`, `AcademicYear`, `Semester`, `UserType`, `Position`, `Password`,`Status` FROM `tbl_users` WHERE (`UserType` LIKE 'Student') AND (`Status` LIKE 'Alumni')";


$columns = array("UserID","UserID","UserID","UserID","LastName","Address","Gender","ContactNo","Email","Department","Course","YearLevel","Section","Position");



if(isset($_POST["search"]["value"])) {
 $query .= ' AND (`UserID` LIKE "%'.$_POST["search"]["value"].'%"
 OR `LastName` LIKE "%'.$_POST["search"]["value"].'%"
 OR `FirstName` LIKE "%'.$_POST["search"]["value"].'%"
 OR `MiddleName` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Address` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Gender` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Email` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Department` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Course` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Section` LIKE "%'.$_POST["search"]["value"].'%"
)';
}

 $query .= 'ORDER BY ID ';


$query1 = '';

if($_POST["length"] != -1) {
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($con_str, $query));

$result = mysqli_query($con_str, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result)) {
  $sub_array = array();
$photo='';
 $photo=$row["Photo"];
 if ($photo=='') {
 $photo = '../assets/img/no-img.png'; 	
 }else{
 $photo = '../img-user/'.$row["Photo"]; 	
 }

if ($row["UserType"]=="Faculty"){
$sub_array[]='<div class="btn-group"><a style="color:white;"  class="btn btn-sm btn-info" id="btn_edit"
 					 data-id="'.$row["ID"].'" 
 					 data-imgsrc="'.$photo.'"
 					 data-userid="'.$row["UserID"].'"
 					 data-lname="'.$row["LastName"].'"
 					 data-fname="'.$row["FirstName"].'"
 					 data-mname="'.$row["MiddleName"].'"
 					 data-address="'.$row["Address"].'"
 					 data-gender="'.$row["Gender"].'"
 					 data-contact="'.$row["ContactNo"].'"
 					 data-email="'.$row["Email"].'"
 					 data-department="'.$row["Department"].'"
 					 data-course="'.$row["Course"].'"
 					 data-level="'.$row["YearLevel"].'"
 					 data-section="'.$row["Section"].'"
 					 data-position="'.$row["Position"].'"
 					 >
                     Edit</a>
                     <a style="color:white;"  class="btn btn-sm btn-danger" data-id="'.$row["UserID"].'" id="btn_delete">
                     Delete</a></div>';	
   }else if($row["UserType"]=="Student"){
   		if ($row["Status"]=='Alumni'){
   					$sub_array[]='<div class="btn-group"><a style="color:white;"  class="btn btn-sm btn-info" id="btn_edit"
 					 data-id="'.$row["ID"].'" 
 					 data-imgsrc="'.$photo.'"
 					 data-userid="'.$row["UserID"].'"
 					 data-lname="'.$row["LastName"].'"
 					 data-fname="'.$row["FirstName"].'"
 					 data-mname="'.$row["MiddleName"].'"
 					 data-address="'.$row["Address"].'"
 					 data-gender="'.$row["Gender"].'"
 					 data-contact="'.$row["ContactNo"].'"
 					 data-email="'.$row["Email"].'"
 					 data-department="'.$row["Department"].'"
 					 data-course="'.$row["Course"].'"
 					 data-level="'.$row["YearLevel"].'"
 					 data-section="'.$row["Section"].'"
 					 data-position="'.$row["Position"].'"
 					 >
                     Edit</a>
                     <a style="color:white;"  class="btn btn-sm btn-danger" data-id="'.$row["UserID"].'" id="btn_delete">
                     Delete</a>   <a style="color:white;"  class="btn btn-sm btn-success" data-id="'.$row["UserID"].'" id="btn_alumni">
                     Return to Student</a>
                     <a style="color:white;" data-toggle="modal" data-target="#referralModal"  class="btn btn-sm btn-default" data-id="'.$row["UserID"].'" 
                     data-f_name="'.$row["LastName"]. ', ' . $row["FirstName"] . ' ' . $row["MiddleName"].'" 


                     id="btn_print">
                     Print Referral</a></div>';	
       }else{
       			$sub_array[]='<div class="btn-group"><a style="color:white;"  class="btn btn-sm btn-info" id="btn_edit"
 					 data-id="'.$row["ID"].'" 
 					 data-imgsrc="'.$photo.'"
 					 data-userid="'.$row["UserID"].'"
 					 data-lname="'.$row["LastName"].'"
 					 data-fname="'.$row["FirstName"].'"
 					 data-mname="'.$row["MiddleName"].'"
 					 data-address="'.$row["Address"].'"
 					 data-gender="'.$row["Gender"].'"
 					 data-contact="'.$row["ContactNo"].'"
 					 data-email="'.$row["Email"].'"
 					 data-department="'.$row["Department"].'"
 					 data-course="'.$row["Course"].'"
 					 data-level="'.$row["YearLevel"].'"
 					 data-section="'.$row["Section"].'"
 					 data-position="'.$row["Position"].'"
 					 >
                     Edit</a>
                     <a style="color:white;"  class="btn btn-sm btn-danger" data-id="'.$row["UserID"].'" id="btn_delete">
                     Delete</a>
                   </div>';	
       }
   }

 
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center><div id="qrcode'.$row["UserID"].'" style="width:50px; height:50px; margin-top:15px;"></div>
			<script type="text/javascript">
			var qrcode = new QRCode(document.getElementById("qrcode'.$row["UserID"].'"), {
				width : 50,
				height : 50
			});		
				var elText = "'.$row["UserID"].'";
				qrcode.makeCode(elText);
			</script></center></div>'; 
 

 
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center> <img class="" id="img_user" src="../img-user/'.$photo.'" style="height: 80px; width: 80px;box-shadow: 20px 20px 50px grey;" ></center></div>'; 	
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["UserID"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["LastName"] .", ". $row["FirstName"] . " " . $row["MiddleName"] .'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Address"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Gender"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["ContactNo"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Email"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Department"].'</center></div>';


	 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Course"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["YearLevel"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Section"].'</center></div>';






 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");
 $query = "SELECT `ID`, `UserID`, `LastName`, `FirstName`, `MiddleName`, `Address`, `Gender`, `ContactNo`, `Email`, `Department`, `Course`, `YearLevel`, `Section`, `Photo`, `AcademicYear`, `Semester`, `UserType`, `Position`, `Password` FROM `tbl_users` WHERE (`UserType` LIKE 'Student')";
 $result = mysqli_query($con_str, $query);
 return mysqli_num_rows($result);
}


$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($con_str),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);




?>