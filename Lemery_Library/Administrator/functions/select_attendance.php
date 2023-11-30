<?php
require ("../../db_connection/myConn.php");
$tz = 'Asia/Hong_Kong';
                            $timestamp = time();
                            $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
                            $dt->setTimestamp($timestamp);
                            $now = date_format($dt,"Y-m-d");


    $query = "SELECT `ID`, `DateRecorded`, `PatronID`, `PatronName`, `Purpose`, `time_in`, `time_out` FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$now'";


$columns = array("PatronName","Purpose","time_in","time_out");




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

 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["PatronName"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Purpose"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["time_in"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$timeout.'</center></div>';

 


 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");
 $query = "SELECT `ID`, `DateRecorded`, `PatronID`, `PatronName`, `Purpose`, `time_in`, `time_out` FROM `tbl_attendance` ";
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