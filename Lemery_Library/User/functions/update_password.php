<?php
require ("../../db_connection/myConn.php");

session_start();
$UserID = $_SESSION['UserID']; 
$new_password = $_GET["new_password"];

$apiresponse='';

	$query="UPDATE `tbl_users` SET `Password` = '$new_password' WHERE `UserID` LIKE '$UserID'";
					if(mysqli_query($con_str,$query)){

				
						$apiresponse = "200";
					}
		

	echo $apiresponse;



?>

