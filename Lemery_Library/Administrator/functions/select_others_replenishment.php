<?php
require ("../../db_connection/myConn.php");

$date_from=$_GET["date_from"];
$date_to=$_GET["date_to"];

$date_filter='';
if ($date_from!='' && $date_to !='') {
	$date_filter = "WHERE (`DateArrived` BETWEEN '".$date_from."' AND '".$date_to."')";
}else if ($date_from!='' && $date_to =='') {
	$date_filter = "WHERE (`DateArrived` LIKE '".$date_from."')";
}else if ($date_from=='' && $date_to !='') {
	$date_filter = "WHERE (`DateArrived` BETWEEN '%%%%-%%-%%' AND '".$date_to."')";
}else{
	$date_filter="WHERE (`DateArrived` LIKE '%')";
}
    $query = "SELECT `ID`, `DateArrived`, `MaterialID`, `MaterialName`, `Description`, `Location`, `MarkedPrice`, `qty` FROM `tbl_other_arrivals`".$date_filter;


$columns = array("DateArrived","qty","MaterialID","MaterialName","Description","MarkedPrice");



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

 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["DateArrived"].'</center></div>';
  $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["qty"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["MaterialID"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["MaterialName"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Description"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>Php'.number_format($row["MarkedPrice"],2).'</center></div>';


 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");

 $query = "SELECT `ID`, `DateArrived`, `MaterialID`, `MaterialName`, `Description`, `Location`, `MarkedPrice`, `qty` FROM `tbl_other_arrivals`";
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