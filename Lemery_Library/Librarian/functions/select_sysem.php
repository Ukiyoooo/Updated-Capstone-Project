<?php
require ("../../db_connection/myConn.php");

$data=array();
$query = "SELECT `AcademicYear`, `Semester` FROM `tbl_academicyear`";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			   $data[]=array('sy'=>$row['AcademicYear'],'sem'=>$row['Semester']);

		}
	}
	echo  json_encode( $data );
?>