<?php 
require ("../../db_connection/myConn.php");
session_start();
$userid = $_GET["userid"];


	
		$query="UPDATE `tbl_users` SET `Status` = 'Alumni'  WHERE `UserID` LIKE '$userid'";
					if(mysqli_query($con_str,$query)){
					echo '200';	
					}
	


?> 