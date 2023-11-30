<?php
require ("../../db_connection/myConn.php");


$materialid = $_GET["materialid"];
$materialname = $_GET["materialname"];
$description = $_GET["description"];
$txt_location = $_GET["txt_location"];
$markedPrice = $_GET["markedPrice"];
$copies = $_GET["copies"];
$category = $_GET["category"];

$apiresponse='';

	$query="UPDATE `tbl_other_materials` SET  `MaterialName` = '$materialname', `Description` = '$description', `Location` = '$txt_location', `MarkedPrice` = $markedPrice,`Category` = '$category' WHERE `MaterialID` LIKE '$materialid'";
					if(mysqli_query($con_str,$query)){

						$insertinventory="UPDATE `tbl_others_inventory` SET  `MaterialName` = '$materialname', `Description` = '$description', `Location` = '$txt_location', `MarkedPrice` = $markedPrice WHERE `MaterialID` LIKE '$materialid'";
							if(mysqli_query($con_str,$insertinventory)){

									$apiresponse = "200";
								}

						
					}else{
						$apiresponse="Error 404!";
					}
		

	echo $apiresponse;



?>

