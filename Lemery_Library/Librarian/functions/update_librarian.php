<?php 
require ("../../db_connection/myConn.php");
session_start();
$userid = $_GET["idno"];
$firstname = $_GET["firstname"];
$middlename = $_GET["middlename"];
$lastname = $_GET["lastname"];
$email = $_GET["email"];
$usertype= 'Librarian';

	

		$query="UPDATE `tbl_users` SET `LastName` = '$lastname', `FirstName` = '$firstname', `MiddleName` = '$middlename', `Email` = '$email' WHERE `UserID` LIKE  '$userid'";
					if(mysqli_query($con_str,$query)){
					echo 'saved';	

					}

?> 