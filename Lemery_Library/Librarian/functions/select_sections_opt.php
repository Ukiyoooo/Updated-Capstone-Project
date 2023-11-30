<?php
require ("../../db_connection/myConn.php");
$ay = $_GET["ay"];
$sem = $_GET["sem"];
$dept = $_GET["dept"];
$course = $_GET["course"];
$yearLevel = $_GET["yearLevel"];

$data=array();
$query = "SELECT `ID`, `Department`, `Course`, `Level`, `Section`, `AcademicYear`, `Semester` FROM `tbl_section` WHERE `AcademicYear` LIKE '$ay' AND `Semester` LIKE '$sem' AND `Department` LIKE '$dept' AND `Course` LIKE '$course' AND `Level` LIKE '$yearLevel'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			   $data[]=array('section'=>$row['Section']);

		}
	}
	echo  json_encode( $data );
?>