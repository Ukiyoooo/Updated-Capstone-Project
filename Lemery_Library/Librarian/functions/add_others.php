<?php
require ("../../db_connection/myConn.php");


$materialid = $_GET["materialid"];
$materialname = $_GET["materialname"];
$description = $_GET["description"];
$txt_location = $_GET["txt_location"];
$markedPrice = $_GET["markedPrice"];
$category = $_GET["category"];
$copies = $_GET["copies"];

$apiresponse='';

	$query="INSERT INTO `tbl_other_materials`(`MaterialID`, `MaterialName`, `Description`, `Copies`, `Location`, `MarkedPrice`,`Category`) VALUES
	('$materialid','$materialname','$description',$copies,'$txt_location',$markedPrice,'$category')";
					if(mysqli_query($con_str,$query)){

						

						$insertinventory="INSERT INTO `tbl_others_inventory`(`DateRecorded`,`MaterialID`, `MaterialName`, `Description`, `Location`, `MarkedPrice`,`BeginningInventory`,`EndingInventory`) VALUES
							(NOW(),'$materialid','$materialname','$description','$txt_location',$markedPrice,$copies,$copies)";
							if(mysqli_query($con_str,$insertinventory)){

									$apiresponse = "200";
								}

						
					}else{
						$apiresponse="Book already exist!";
					}
		

	echo $apiresponse;



?>

