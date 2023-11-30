<?php
require ("../../db_connection/myConn.php");
session_start();
$reservation_id = $_GET["id"];
$query="UPDATE `tbl_reservation` SET `Remarks` = 'declined' WHERE `ID` = $reservation_id";
					if(mysqli_query($con_str,$query)){
						$apiresponse = "200";
						}

echo $apiresponse;
?>