<?php
require ("../../db_connection/myConn.php");
$isbn = $_GET["isbn"];
$data=array();
$query = "SELECT  `ISBN`, `Section`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `Copies`, `MarkedPrice` FROM `tbl_books` WHERE `ISBN` LIKE '$isbn'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			   $data[]=array('isbn'=>$row['ISBN'],'section'=>$row['Section'],'title'=>$row['Title'],'subject'=>$row['Subject'],'desc'=>$row['Description'],'author'=>$row['Author'],'publisher'=>$row['Publisher'],'copyright'=>$row['Copyright'],'edition'=>$row['Edition'],'loc'=>$row['Location'],'current'=>$row['Copies'],'price'=>$row['MarkedPrice']);

		}
	}
	echo  json_encode( $data );
?>