<?php
require ("../../db_connection/myConn.php");


$folder_name = $_GET["folder_name"];


$apiresponse='';

	$query="DELETE FROM `tbl_folder` WHERE `_folder_name` LIKE '$folder_name'";
					if(mysqli_query($con_str,$query)){

						$insertinventory="DELETE FROM `tbl_online_materials` WHERE `_folder` LIKE '$folder_name'";
							if(mysqli_query($con_str,$insertinventory)){

									$apiresponse = "200";
								}

						
					}else{
						$apiresponse="Error 404!";
					}
		

	echo $apiresponse;



?>

