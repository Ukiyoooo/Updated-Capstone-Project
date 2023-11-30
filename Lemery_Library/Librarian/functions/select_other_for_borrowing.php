<?php
require ("../../db_connection/myConn.php");
$id = '';
$id = $_GET["id"];


unset($data);
	// sleep(2);
$g_id='';
$g_category='';
$g_description='';
$g_name='';
$g_copies=0;
$query = "SELECT `ID`, `MaterialID`, `MaterialName`, `Description`, `Copies`, `Location`, `MarkedPrice` FROM `tbl_other_materials` WHERE `MaterialID` LIKE '$id'";

	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			$g_id=$row['MaterialID'];
			$g_category='Other';
			$g_description=$row['Description'];
			$g_name = $row["MaterialName"];
			$g_copies = $row["Copies"];
		}

		unset($data);
			$data=array();
			   $data[]=array('g_id'=>$g_id,'g_name'=>$g_name,'category'=>$g_category,'description'=>$g_description,'copies'=> $g_copies);
		echo  json_encode( $data );
	}
	
?>