<?php
require ("../../db_connection/myConn.php");


$materialid = $_GET["id"];


$apiresponse='';

	$query="DELETE FROM `tbl_other_materials` WHERE `MaterialID` LIKE '$materialid'";
					if(mysqli_query($con_str,$query)){

						$insertinventory="DELETE FROM `tbl_others_inventory` WHERE `MaterialID` LIKE '$materialid'";
							if(mysqli_query($con_str,$insertinventory)){

									$apiresponse = "200";
								}

						
					}else{
						$apiresponse="Error 404!";
					}
		

	echo $apiresponse;



?>

