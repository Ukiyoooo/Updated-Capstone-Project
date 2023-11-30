<?php
require ("../../db_connection/myConn.php");


    $query = "SELECT `ID`, `AccessionNo`, `Section`, `ISBN`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `MarkedPrice`, `DateRegistered`, `Status`, `_involved_id`, `_involved_name`,`_pdf` FROM `tbl_booksmonitoring` ";


$columns = array("AccessionNo","AccessionNo","Section","ISBN","Title","Subject","Description","Author","Publisher","Copyright","Edition","Location","MarkedPrice","Status","_involved_name");



if(isset($_POST["search"]["value"])) {
 $query .= ' WHERE (`AccessionNo` LIKE "%'.$_POST["search"]["value"].'%"
 OR `AccessionNo` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Section` LIKE "%'.$_POST["search"]["value"].'%"
 OR `ISBN` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Title` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Subject` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Description` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Author` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Publisher` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Copyright` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Edition` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Location` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Status` LIKE "%'.$_POST["search"]["value"].'%"
 OR `_involved_name` LIKE "%'.$_POST["search"]["value"].'%"
 OR `_involved_id` LIKE "%'.$_POST["search"]["value"].'%"
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



			
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["AccessionNo"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Section"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["ISBN"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Title"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Subject"].'</center></div>';

$sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Description"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Author"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Publisher"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Copyright"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Edition"].'</center></div>';


$sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Location"].'</center></div>';
$sub_array[] = '<div id="td_name'.$row["ID"].'"><center>₱ '.number_format($row["MarkedPrice"],2).'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center><a style="color:blue;" target="_blank" href="pdfviewer.php?src=../books-pdf/'.$row['_pdf'].'">'.$row['_pdf'].'</a></center></div>';
 
$status = $row["Status"];
$itemid = $row["AccessionNo"];
$tz = 'Asia/Hong_Kong';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp);

$now = date_format($dt,"Y-m-d");

	$checkquery = "SELECT `ID`, `AcademicYear`, `Semester`, `PatronID`, `PatronName`, `Course`, `Department`, `UserType`, `Section_Position`, `ItemID`, `ISBN`, `ItemCategory`, `Title_Name`, `Description`, `DateReserved`, `ExpirationDate`, `Remarks` FROM `tbl_reservation` WHERE `ItemID` LIKE '$itemid' AND `Remarks` LIKE 'reserved' AND `ExpirationDate` > '$now'";
		$result2= $con_str->query($checkquery);

		if($result2->num_rows > 0) {
				$status = 'Reserved';
		}

 if($status=='available'){
 	$sub_array[] = '<div id="td_name'.$row["ID"].'"><center><a style="color:white;" class="btn btn-success" 
 		data-acc="'.$row["AccessionNo"].'"
 		data-isbn="'.$row["ISBN"].'"
 		data-category="Book"
 		data-description="'.$row["Description"].'"
 		data-title="'.$row["Title"].'"
 		id="btn_reserve"><strong>Reserve</strong></a></center></div>';
 }else{
 	 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>N/A</center></div>';
 }

 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");

 $query = "SELECT `ID`, `AccessionNo`, `Section`, `ISBN`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `MarkedPrice`, `DateRegistered`, `Status`, `_involved_id`, `_involved_name` FROM `tbl_booksmonitoring`";
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