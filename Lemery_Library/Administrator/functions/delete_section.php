<?php
require ("../../db_connection/myConn.php");
$ID = $_GET["ID"];
			$query="DELETE FROM `tbl_section`  WHERE ID = $ID";
			mysqli_query($con_str,$query);		
?>