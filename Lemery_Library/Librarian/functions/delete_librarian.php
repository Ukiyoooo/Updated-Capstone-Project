<?php 
require ("../../db_connection/myConn.php");
session_start();
$userid = $_GET["userid"];
$firstname = $_GET["firstname"];
$middlename = $_GET["middlename"];
$lastname = $_GET["lastname"];
$email = $_GET["email"];
$usertype= 'Librarian';

	

		$query="DELETE FROM `tbl_users`  WHERE `UserID` LIKE  '$userid'";
					if(mysqli_query($con_str,$query)){
					echo 'saved';	

					}

?> 