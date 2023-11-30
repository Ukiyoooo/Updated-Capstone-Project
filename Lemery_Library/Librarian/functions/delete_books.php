<?php
require ("../../db_connection/myConn.php");


$isbn = $_GET["isbn"];


$apiresponse='';


	$query="DELETE FROM `tbl_books`  WHERE `ISBN` LIKE '$isbn'";
					if(mysqli_query($con_str,$query)){

				

							$updatestatement="DELETE FROM `tbl_booksmonitoring` WHERE `ISBN` LIKE '$isbn'";
							if(mysqli_query($con_str,$updatestatement)){

									
									
								}
								
						
						

						$insertinventory="DELETE FROM `tbl_inventorylogs_books` WHERE `ISBN` LIKE '$isbn'";
							if(mysqli_query($con_str,$insertinventory)){
									$apiresponse = "200";
								}

						
					}else{
						$apiresponse="Book already exist!";
					}
		

	echo $apiresponse;




?>

