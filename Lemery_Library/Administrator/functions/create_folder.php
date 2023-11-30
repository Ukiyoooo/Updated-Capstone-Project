<?php
require ("../../db_connection/myConn.php");


$folder_name = $_GET["folder_name"];

$apiresponse='';

	$query="INSERT INTO  `tbl_folder`(`_folder_name`) VALUES ('$folder_name')";
					if(mysqli_query($con_str,$query)){

				
						$apiresponse = "200";
					}else{
						$apiresponse="folder already exist!";
					}
		

	echo $apiresponse;



?>

