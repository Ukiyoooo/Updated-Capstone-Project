<?php
require ("../../db_connection/myConn.php");
$ay = $_GET["ay"];
$semester = $_GET["semester"];

			$query="UPDATE `tbl_academicyear` SET `AcademicYear` = '$ay', `Semester`='$semester'";
			mysqli_query($con_str,$query);
?>