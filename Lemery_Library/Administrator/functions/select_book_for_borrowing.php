<?php
require ("../../db_connection/myConn.php");
$accession = '';
$accession = $_GET["accession"];


unset($data);
	// sleep(1);
$g_accesion='';
$g_title='';
$g_category='';
$g_description='';
$g_isbn='';
$g_status='';

$query = "SELECT `ID`, `AccessionNo`, `Section`, `ISBN`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `MarkedPrice`, `DateRegistered`, `Status`, `_involved_id` FROM `tbl_booksmonitoring` WHERE `AccessionNo` LIKE '$accession' Order by `ID`";

	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			$g_accesion=$row['AccessionNo'];
			$g_title=$row['Title'];
			$g_category='Book';
			$g_description=$row['Description'];
			$g_isbn = $row["ISBN"];
			$g_status=$row["Status"];
		}
		$itemid = $g_accesion;
		$tz = 'Asia/Hong_Kong';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
		$dt->setTimestamp($timestamp);

		$now = date_format($dt,"Y-m-d");

			$checkquery = "SELECT `ID`, `AcademicYear`, `Semester`, `PatronID`, `PatronName`, `Course`, `Department`, `UserType`, `Section_Position`, `ItemID`, `ISBN`, `ItemCategory`, `Title_Name`, `Description`, `DateReserved`, `ExpirationDate`, `Remarks` FROM `tbl_reservation` WHERE `ItemID` LIKE '$itemid' AND `Remarks` LIKE 'reserved' AND `ExpirationDate` > '$now'";
				$result2= $con_str->query($checkquery);

				if($result2->num_rows > 0) {
						$g_status = 'reserved';
				}

		unset($data);
			$data=array();
			   $data[]=array('accession'=>$g_accesion,'isbn'=>$g_isbn,'title'=>$g_title,'category'=>$g_category,'description'=>$g_description,'status'=>$g_status);
		echo  json_encode( $data );
	}
	
?>