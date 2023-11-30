<?php
require ("../../db_connection/myConn.php");
$date_from=$_GET["_datefrom"];
$date_to=$_GET["_dateto"];

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


$data=array();

	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Research' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Referral Letter' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Borrowing' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Return' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Study' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Reserve Equipment and Facilities' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Reserve Venues' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Use E-resources' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Use Multimedia Resources' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}



	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Use Venues' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `Purpose` LIKE 'Vacant' AND `UserType` LIKE 'Student' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

	  $data[] =0;

	 // $data[]=array( 'jan'=>$jan, 'feb'=>$feb,'mar'=>$mar,'apr'=>$apr,'may'=>$may,'jun'=>$jun,'jul'=>$jul,'aug'=>$aug,'sept'=>$sept,'oct'=>$oct,'nov'=>$nov,'dec'=>$dec );
	echo  json_encode( $data );
?>