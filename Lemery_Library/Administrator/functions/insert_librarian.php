<?php 
require ("../../db_connection/myConn.php");
session_start();
$userid = $_GET["idno"];
$firstname = $_GET["firstname"];
$middlename = $_GET["middlename"];
$lastname = $_GET["lastname"];
$email = $_GET["email"];
$usertype= 'Librarian';
$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789'); // and any other characters
shuffle($seed); // probably optional since array_is randomized; this may be redundant
$rand = '';
foreach (array_rand($seed, 8) as $k) $rand .= $seed[$k];

$password = $rand;

	

		$query="INSERT INTO `tbl_users`(`UserID`, `LastName`, `FirstName`, `MiddleName`, `Email`,`UserType`, `Password`) VALUES ('$userid','$lastname','$firstname','$middlename','$email','$usertype','$password')";
					if(mysqli_query($con_str,$query)){

							$subject='Your Account Credentials';
					 $msg='Hi '.$firstname.', your password for Lemery Colleges Library is: '.$password;
					 $msg = wordwrap($msg,70);
                        
                      mail($email,$subject,$msg,'From: <LCLIBRARY>');
					

					}
echo 'saved';
?> 