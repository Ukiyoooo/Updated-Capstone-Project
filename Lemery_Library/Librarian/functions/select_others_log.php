<?php
require ("../../db_connection/myConn.php");

$date_from=$_GET["date_from"];
$date_to=$_GET["date_to"];

$date_filter='';
if ($date_from!='' && $date_to !='') {
	$date_filter = "WHERE (`DateRecorded` BETWEEN '".$date_from."' AND '".$date_to."')";
}else if ($date_from!='' && $date_to =='') {
	$date_filter = "WHERE (`DateRecorded` LIKE '".$date_from."')";
}else if ($date_from=='' && $date_to !='') {
	$date_filter = "WHERE (`DateRecorded` BETWEEN '%%%%-%%-%%' AND '".$date_to."')";
}else{
	$date_filter="WHERE (`DateRecorded` LIKE '%')";
}
    $query = "SELECT `ID`, `DateRecorded`, `MaterialID`, `MaterialName`, `Description`, `Location`, `MarkedPrice`, `BeginningInventory`, `Arrivals`, `Borrowed`, `Returned`, `Lost`, `Disposed`, `EndingInventory` FROM `tbl_others_inventory` ".$date_filter;


$columns = array("DateRecorded","MaterialID","MaterialName","Description","BeginningInventory","Arrivals","Borrowed","Returned","EndingInventory");



if(isset($_POST["search"]["value"])) {
 $query .= ' AND (`MaterialID` LIKE "%'.$_POST["search"]["value"].'%"
 OR `MaterialName` LIKE "%'.$_POST["search"]["value"].'%"
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

$arrival = $row["Arrivals"];
$borrowed=$row["Borrowed"];
$returned=$row["Returned"];

 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["DateRecorded"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["MaterialID"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["MaterialName"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Description"].'</center></div>';

 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["BeginningInventory"].'</center></div>';

if ($arrival>0){
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Arrivals"].'</center></div>';
}else{
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center></center></div>';	
}

if ($borrowed>0){
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Borrowed"].'</center></div>';
}else{
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center></center></div>';	
}

if ($returned>0){
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Returned"].'</center></div>';
}else{
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center></center></div>';	
}


 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["EndingInventory"].'</center></div>';


 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");

 $query = "SELECT `ID`, `DateRecorded`, `MaterialID`, `MaterialName`, `Description`, `Location`, `MarkedPrice`, `BeginningInventory`, `Arrivals`, `Borrowed`, `Returned`, `Lost`, `Disposed`, `EndingInventory` FROM `tbl_others_inventory` ";
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