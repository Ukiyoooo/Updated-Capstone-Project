<?php
require ("../../db_connection/myConn.php");
session_start();
$patron_id = $_SESSION['UserID'];
$date_from=$_GET["date_from"];
$date_to=$_GET["date_to"];

$date_filter='';
if ($date_from!='' && $date_to !='') {
	$date_filter = "AND (`DateRecorded` BETWEEN '".$date_from."' AND '".$date_to."')";
}else if ($date_from!='' && $date_to =='') {
	$date_filter = "AND (`DateRecorded` LIKE '".$date_from."')";
}else if ($date_from=='' && $date_to !='') {
	$date_filter = "AND (`DateRecorded` BETWEEN '%%%%-%%-%%' AND '".$date_to."')";
}else{
	$date_filter="AND (`DateRecorded` LIKE '%')";
}



    $query = "SELECT `ID`, `DateRecorded`, `PatronID`, `PatronName`, `UserType`, `Purpose`, `time_in`, `time_out` FROM `tbl_attendance` WHERE `PatronID` LIKE '$patron_id'".$date_filter;


$columns = array("DateRecorded","PatronID","PatronName","UserType","Purpose","time_in","time_out");

if(isset($_POST["search"]["value"])) {
 $query .= ' AND (`PatronID` LIKE "%'.$_POST["search"]["value"].'%"
 OR `PatronName` LIKE "%'.$_POST["search"]["value"].'%"
 OR `UserType` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Purpose` LIKE "%'.$_POST["search"]["value"].'%"
)';
}


if(isset($_POST["order"])) {
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
} else {
 $query .= 'ORDER BY ID DESC ';
}
$query1 = '';

if($_POST["length"] != -1) {
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($con_str, $query));

$result = mysqli_query($con_str, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result)) {
  $sub_array = array();
$timeout='';
if ($row["time_out"]=='00:00:00'){
	$timeout = '';
}else{
	$timeout = $row["time_out"];
}
$sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["DateRecorded"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Purpose"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["time_in"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$timeout.'</center></div>';

 


 $data[] = $sub_array;
}
function get_all_data($con_str) {
	$patron_id = $_SESSION['UserID'];
require ("../../db_connection/myConn.php");
 $query = "SELECT `ID`, `DateRecorded`, `PatronID`, `PatronName`, `Purpose`, `time_in`, `time_out` FROM `tbl_attendance` WHERE `PatronID` LIKE '$patron_id'";
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