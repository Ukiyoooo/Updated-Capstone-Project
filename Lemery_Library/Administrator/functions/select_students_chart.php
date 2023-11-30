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

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'BS in Information Technology' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'BS in Computer Science' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'BS in Pyschology' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE '1-Year Ship Catering Services (SEAMAN)' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'BS in Custom Administration' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'BS in Business Administration' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'BS in Hospitality Management' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'BS in Tourism Management' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'Bachelor of Elementary Education' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'Bachelor of Secondary Education' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'Bachelor of Physical Education' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'Bachelor of Culture and Arts Education' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'Bachelor of Technology and Livelihood Education' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_transactions` WHERE `Course` LIKE 'BS in Criminology' ".$date_filter;
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}


	 // $data[]=array( 'jan'=>$jan, 'feb'=>$feb,'mar'=>$mar,'apr'=>$apr,'may'=>$may,'jun'=>$jun,'jul'=>$jul,'aug'=>$aug,'sept'=>$sept,'oct'=>$oct,'nov'=>$nov,'dec'=>$dec );
	echo  json_encode( $data );
?>