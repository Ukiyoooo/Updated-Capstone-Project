<?php
require ("../../db_connection/myConn.php");


$id = $_GET["id"];


$apiresponse='';


						$insertinventory="DELETE FROM `tbl_online_materials` WHERE `ID` = $id";
							if(mysqli_query($con_str,$insertinventory)){

									$apiresponse = "200";
								}

						
					
		

	echo $apiresponse;



?>

