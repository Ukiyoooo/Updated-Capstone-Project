<?php
require ("../../db_connection/myConn.php");
$userid = $_GET["userid"];
$apiresponse='';
$tz = 'Asia/Hong_Kong';
$timestamp = time();
                            $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
                            $dt->setTimestamp($timestamp);
                            $date=(new DateTime('now'));
                            $now = date_format($dt,"Y-m-d");
$timeout=date_format($dt,"Y-m-d H:i:s");

$query = "SELECT `ID`, `DateRecorded`, `PatronID`, `PatronName`, `Purpose`, `time_in`, `time_out` FROM `tbl_attendance` WHERE `DateRecorded` LIKE '$now' AND `time_out` LIKE '00:00:00' AND `PatronID` LIKE '$userid'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

		$query="UPDATE `tbl_attendance` SET `time_out` = '$timeout' WHERE `DateRecorded` LIKE '$now' AND `time_out` LIKE '00:00:00' AND `PatronID` LIKE '$userid'";
					if(mysqli_query($con_str,$query)){
					$apiresponse = '200';	
					}
	

		
	}else{
		$apiresponse ='500';
	}
	echo  $apiresponse;
?>