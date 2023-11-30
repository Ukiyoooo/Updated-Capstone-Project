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


if($_FILES["file_add"]["name"] != ""){
		

	$test=explode(".", $_FILES["file_add"]["name"]);
	$extension=end($test);
	$image = $image_name.'.'.$extension;
	$location = '../../img-user/'.$image;
	move_uploaded_file($_FILES["file_add"]["tmp_name"], $location);

	
	

		$query="UPDATE `tbl_users` SET `LastName` = '$lname', `FirstName` = '$fname', `MiddleName` = '$mname', `Address` = '$address', `Gender` = '$gender', `ContactNo` = '$contact', `Email` = '$email', `Department` = '$dept', `Course` = '$course', `YearLevel` = '$yearLevel', `Section` = '$section', `Photo` ='$image', `AcademicYear` = '$ay', `Semester` = '$sem', `UserType` = '$usertype', `Position` = '$position' WHERE `UserID` LIKE '$userid'";
					if(mysqli_query($con_str,$query)){
					echo '200';	

					}

	}else{	
		$query="UPDATE `tbl_users` SET `LastName` = '$lname', `FirstName` = '$fname', `MiddleName` = '$mname', `Address` = '$address', `Gender` = '$gender', `ContactNo` = '$contact', `Email` = '$email', `Department` = '$dept', `Course` = '$course', `YearLevel` = '$yearLevel', `Section` = '$section', `AcademicYear` = '$ay', `Semester` = '$sem', `UserType` = '$usertype', `Position` = '$position' WHERE `UserID` LIKE '$userid'";
					if(mysqli_query($con_str,$query)){
					echo '200';	
					}
	
	}	

?> 