<?php
require ("../../db_connection/myConn.php");
session_start();
$patron_id = $_SESSION['UserID'];
$date_from=$_GET["date_from"];
$date_to=$_GET["date_to"];

$date_filter='';
if ($date_from!='' && $date_to !='') {
    $date_filter = "AND (`DateReserved` BETWEEN '".$date_from."' AND '".$date_to."')";
}else if ($date_from!='' && $date_to =='') {
    $date_filter = "AND (`DateReserved` LIKE '".$date_from."')";
}else if ($date_from=='' && $date_to !='') {
    $date_filter = "AND (`DateReserved` BETWEEN '%%%%-%%-%%' AND '".$date_to."')";
}else{
    $date_filter="AND (`DateReserved` LIKE '%')";
}
    $query = "SELECT `ID`, `AcademicYear`, `Semester`, `PatronID`, `PatronName`, `Course`, `Department`, `UserType`, `Section_Position`, `ItemID`, `ISBN`, `ItemCategory`, `Title_Name`, `Description`, `DateReserved`, `ExpirationDate`, `Remarks` FROM `tbl_reservation` WHERE  `PatronID` LIKE '$patron_id'".$date_filter;


$columns = array("AcademicYear","Semester","ItemID","ISBN","Title_Name","ItemCategory","Description","DateReserved","ExpirationDate","Remarks");


if(isset($_POST["search"]["value"])) {
 $query .= ' AND (`PatronID` LIKE "%'.$_POST["search"]["value"].'%"
 OR `PatronName` LIKE "%'.$_POST["search"]["value"].'%"
 OR `UserType` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Section_Position` LIKE "%'.$_POST["search"]["value"].'%"
 OR `ItemID` LIKE "%'.$_POST["search"]["value"].'%"
 OR `ISBN` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Title_Name` LIKE "%'.$_POST["search"]["value"].'%"
 OR `ItemCategory` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Description` LIKE "%'.$_POST["search"]["value"].'%"
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

$tz = 'Asia/Hong_Kong';
							$timestamp = time();
							$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
							$dt->setTimestamp($timestamp);
							$date=(new DateTime('now'));
							$now = date_format($date,"Y-m-d H:i:s");
$datenow = new DateTime($now);
$duedate = new DateTime($row['ExpirationDate']);
// otherwise the  end date is excluded (bug?)
 // $duedate->modify('+1 day');



$interval = $duedate->diff($datenow);
// total days
// $days = $interval->days;
$days = intval($interval->format("%R%a"));

$status = $row["Remarks"];
if ($days>0){
    $status ='Expired';
}

 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["AcademicYear"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Semester"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["ItemID"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["ISBN"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Title_Name"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["ItemCategory"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Description"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["DateReserved"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["ExpirationDate"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$status.'</center></div>';
 


 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");
$patron_id = $_SESSION['UserID'];
 $query = "SELECT `ID`, `AcademicYear`, `Semester`, `PatronID`, `PatronName`, `Course`, `Department`, `UserType`, `Section_Position`, `ItemID`, `ISBN`, `ItemCategory`, `Title_Name`, `Description`, `DateReserved`, `ExpirationDate`, `Remarks` FROM `tbl_reservation`  WHERE `PatronID` LIKE '$patron_id'";
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