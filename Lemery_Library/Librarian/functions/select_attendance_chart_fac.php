<?php
require ("../../db_connection/myConn.php");
$_year = $_GET['_year'];
$jan = 0;
$feb =0;
$mar=0;
$apr=0;
$may = 0;
$jun = 0;
$jul = 0;
$aug = 0;
$sept = 0;
$oct = 0;
$nov = 0;
$dec = 0;

$data=array();
$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-01%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-02%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-03%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			   $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-04%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-05%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			 $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-06%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-07%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			 $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-08%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-09%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-10%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			  $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-11%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			 $data[] = $row["_attendance"];

		}
	}

$query = "SELECT COUNT(ID) AS _attendance FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$_year-12%' AND `UserType` LIKE 'Faculty'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			   $data[] = $row["_attendance"];

		}
	}


	 // $data[]=array( 'jan'=>$jan, 'feb'=>$feb,'mar'=>$mar,'apr'=>$apr,'may'=>$may,'jun'=>$jun,'jul'=>$jul,'aug'=>$aug,'sept'=>$sept,'oct'=>$oct,'nov'=>$nov,'dec'=>$dec );
	echo  json_encode( $data );
?>