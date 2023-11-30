<?php 
require ("../../db_connection/myConn.php");
session_start();
$userid = $_GET["userid"];
$fname = $_GET["fname"];
$mname = $_GET["mname"];
$lname = $_GET["lname"];
$address = $_GET["address"];
$gender = $_GET["gender"];
$contact = $_GET["contact"];
$email = $_GET["email"];
$dept = $_GET["dept"];
$course = $_GET["course"];
$yearLevel = $_GET["yearLevel"];
$section = $_GET["section"];
$position = $_GET["txtposition"];
$usertype = $_GET["usertype"];
$image_name = $_GET["image_name"];
$ay = $_GET["ay"];
$sem = $_GET["sem"];


$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789'); // and any other characters
shuffle($seed); // probably optional since array_is randomized; this may be redundant
$rand = '';
foreach (array_rand($seed, 8) as $k) $rand .= $seed[$k];

$password = $rand;

if($_FILES["file_add"]["name"] != ""){
		

	$test=explode(".", $_FILES["file_add"]["name"]);
	$extension=end($test);
	$image = $image_name.'.'.$extension;
	$location = '../../img-user/'.$image;
	move_uploaded_file($_FILES["file_add"]["tmp_name"], $location);

	
	

		$query="INSERT INTO `tbl_users`(`UserID`, `LastName`, `FirstName`, `MiddleName`, `Address`, `Gender`, `ContactNo`, `Email`, `Department`, `Course`, `YearLevel`, `Section`, `Photo`, `AcademicYear`, `Semester`, `UserType`, `Position`, `Password`) VALUES ('$userid','$lname','$fname','$mname','$address','$gender','$contact','$email','$dept','$course','$yearLevel','$section','$image','$ay','$sem','$usertype','$position','$password')";
					if(mysqli_query($con_str,$query)){
						$subject='Your Account Credentials';
					 $msg='Hi '.$fname.', your password for Lemery Colleges Library is: '.$password;
					 $msg = wordwrap($msg,70);
                        
                      mail($email,$subject,$msg,'From: <LCLIBRARY>');
					echo '200';	

					}

	}else{	
		$query="INSERT INTO `tbl_users`(`UserID`, `LastName`, `FirstName`, `MiddleName`, `Address`, `Gender`, `ContactNo`, `Email`, `Department`, `Course`, `YearLevel`, `Section`, `AcademicYear`, `Semester`, `UserType`, `Position`, `Password`) VALUES ('$userid','$lname','$fname','$mname','$address','$gender','$contact','$email','$dept','$course','$yearLevel','$section','$ay','$sem','$usertype','$position','$password')";
					if(mysqli_query($con_str,$query)){
						$subject='Your Account Credentials';
					 $msg='Hi '.$fname.', your password for Lemery Colleges Library is: '.$password;
					 $msg = wordwrap($msg,70);
                        
                      mail($email,$subject,$msg,'From: <LCLIBRARY>');
					echo '200';	
					}
	
	}	

?> 