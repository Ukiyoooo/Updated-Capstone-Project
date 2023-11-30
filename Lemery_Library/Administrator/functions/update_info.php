<?php
require ("../../db_connection/myConn.php");

session_start();
$UserID = $_SESSION['UserID']; 
$mylastname = $_GET["mylastname"];
$mymiddlename = $_GET["mymiddlename"];
$myfirstname = $_GET["myfirstname"];
 
$apiresponse='';

	$query="UPDATE `tbl_users` SET `LastName` = '$mylastname',`FirstName` = '$myfirstname',`MiddleName` = '$mymiddlename' WHERE `UserID` LIKE '$UserID'";
					if(mysqli_query($con_str,$query)){

				
						$apiresponse = "200";
					}
		

	echo $apiresponse;



?>

