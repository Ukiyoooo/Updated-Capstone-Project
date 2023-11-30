<?php
require ("../../db_connection/myConn.php");
$department = $_GET["department"];
$course = $_GET["course"];
$level = $_GET["level"];
$section = $_GET["section"];
$ID = $_GET["ID"];

			$query="UPDATE `tbl_section` SET `Department` = '$department', `Course`= '$course', `Level` = '$level', `Section` = '$section' WHERE ID = $ID";
			mysqli_query($con_str,$query);
	

?>