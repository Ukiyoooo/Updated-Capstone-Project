<?php
require ("../../db_connection/myConn.php");

$date_from=$_GET["_datefrom"];
$date_to=$_GET["_dateto"];

$date_filter='';
if ($date_from!='' && $date_to !='') {
	$date_filter = "AND (`DateBorrowed` BETWEEN '".$date_from."' AND '".$date_to."')";
}else if ($date_from!='' && $date_to =='') {
	$date_filter = "AND (`DateBorrowed` LIKE '".$date_from."')";
}else if ($date_from=='' && $date_to !='') {
	$date_filter = "AND (`DateBorrowed` BETWEEN '%%%%-%%-%%' AND '".$date_to."')";
}else{
	$date_filter="AND (`DateBorrowed` LIKE '%')";
}

$data=array();

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Department` LIKE 'School of Computer Studies' AND `UserType` LIKE 'Faculty' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Department` LIKE 'School of Arts and Sciences' AND `UserType` LIKE 'Faculty' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Department` LIKE 'Technical-Vocational Program' AND `UserType` LIKE 'Faculty' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Department` LIKE 'School of Business and Management' AND `UserType` LIKE 'Faculty' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Department` LIKE 'School of Teacher Education' AND `UserType` LIKE 'Faculty' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Department` LIKE 'School of Criminal Justice Education' AND `UserType` LIKE 'Faculty' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}



	 // $data[]=array( 'jan'=>$jan, 'feb'=>$feb,'mar'=>$mar,'apr'=>$apr,'may'=>$may,'jun'=>$jun,'jul'=>$jul,'aug'=>$aug,'sept'=>$sept,'oct'=>$oct,'nov'=>$nov,'dec'=>$dec );
	echo  json_encode( $data );
?>