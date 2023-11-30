<?php
require ("../../db_connection/myConn.php");
$id = $_GET["id"];
$data=array();
$query = "SELECT `ID`, `MaterialID`, `MaterialName`, `Description`, `Copies`, `Location`, `MarkedPrice` FROM `tbl_other_materials` WHERE `MaterialID` LIKE '$id'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			   $data[]=array('id'=>$row['MaterialID'],'m_name'=>$row['MaterialName'],'description'=>$row['Description'],'loc'=>$row['Location'],'current'=>$row['Copies'],'price'=>$row['MarkedPrice']);

		}
	}
	echo  json_encode( $data );
?>