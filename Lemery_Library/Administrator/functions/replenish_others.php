<?php
require ("../../db_connection/myConn.php");


$materialid = $_GET["materialid"];
$materialname = $_GET["materialname"];
$description = $_GET["description"];
$txt_location = $_GET["txt_location"];
$markedPrice = $_GET["markedPrice"];
$copies = $_GET["currentqty"];
$newqty = $_GET["qty"];
$endingqty = $copies+$newqty;



$apiresponse='';

	$query="UPDATE `tbl_other_materials` SET `Copies` = `Copies` + $newqty WHERE `MaterialID` LIKE '$materialid'";
					if(mysqli_query($con_str,$query)){

						

						$insertinventory="INSERT INTO `tbl_others_inventory` (`DateRecorded`,`MaterialID`, `MaterialName`, `Description`, `Location`, `MarkedPrice`,`BeginningInventory`,`Arrivals`,`EndingInventory`) VALUES (NOW(),'$materialid','$materialname','$description','$txt_location',$markedPrice,$copies,$newqty,$endingqty)";
							if(mysqli_query($con_str,$insertinventory)){

									$apiresponse = "200";
								}

						$insert_arrival="INSERT INTO `tbl_other_arrivals` (`DateArrived`, `MaterialID`, `MaterialName`, `Description`, `Location`, `MarkedPrice`, `qty`) VALUES
							(NOW(),'$materialid','$materialname','$description','$txt_location',$markedPrice,$newqty)";
							if(mysqli_query($con_str,$insert_arrival)){

									$apiresponse = "200";
								}

						
					}else{
						$apiresponse="Error 400!";
					}
		

	echo $apiresponse;



?>

