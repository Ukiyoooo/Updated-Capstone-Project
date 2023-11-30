<?php
require ("../../db_connection/myConn.php");
$department = $_GET["department"];
$course = $_GET["course"];
$level = $_GET["level"];
$section = $_GET["section"];
$academicyear = $_GET["academicyear"];
$semester = $_GET["semester"];
$check_exist = "SELECT * FROM `tbl_section` WHERE  Department LIKE'$department' And Section LIKE '$section'  And Course LIKE '$course' And Level LIKE '$level' And AcademicYear LIKE '$academicyear' And Semester LIKE '$semester'";
	$result= $con_str->query($check_exist);

	if($result->num_rows > 0) {
			echo 'already exist';
	}else{
			$query="INSERT INTO `tbl_section`(`Department`, `Course`, `Level`, `Section`, `AcademicYear`, `Semester`)  VALUES ('$department','$course','$level','$section','$academicyear','$semester')";
			if (mysqli_query($con_str,$query)){
			echo 'saved';
		}
	}

?>