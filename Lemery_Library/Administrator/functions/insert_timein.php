<?php
require ("../../db_connection/myConn.php");
$userid = $_GET["idno"];
$p_name = $_GET["p_name"];
$usertype = $_GET["usertype"];
$purpose = $_GET["purpose"];
$apiresponse='';
$tz = 'Asia/Hong_Kong';
$timestamp = time();
                            $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
                            $dt->setTimestamp($timestamp);
                            $date=(new DateTime('now'));
                            $now = date_format($dt,"Y-m-d");
$timein=date_format($dt,"Y-m-d H:i:s");


		$query="INSERT INTO `tbl_attendance`(`DateRecorded`, `PatronID`, `PatronName`,`UserType`, `Purpose`, `time_in`) VALUES ('$now','$userid','$p_name','$usertype','$purpose','$timein')";
					if(mysqli_query($con_str,$query)){
					$apiresponse = '200';	
					}
	
	echo  $apiresponse;
?>