<?php
require ("../../db_connection/myConn.php");


$isbn = $_GET["isbn"];
$section = $_GET["section"];
$title = $_GET["title"];
$subject = $_GET["subject"];
$description = $_GET["description"];
$author = $_GET["author"];
$publisher = $_GET["publisher"];
$copyright = $_GET["copyright"];
$edition = $_GET["edition"];
$txt_location = $_GET["location"];
$markedPrice = $_GET["price"];
$copies = $_GET["currentqty"];
$newqty = $_GET["qty"];
$endingqty = $copies+$newqty;
$apiresponse='';
$accessionnum='';
$counter=0;

	$query="UPDATE `tbl_books` SET `Copies` = `Copies` + $newqty WHERE `ISBN` LIKE '$isbn'";
					if(mysqli_query($con_str,$query)){

						while($counter<$newqty){
							$tz = 'Asia/Hong_Kong';
							$timestamp = time();
							$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
							$dt->setTimestamp($timestamp);
							$date=(new DateTime('now'));
							$accessionnum = 'Acc - '. date_format($date,"YmdHisu");

							$insertstatement="INSERT INTO `tbl_booksmonitoring` (`AccessionNo`, `Section`, `ISBN`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `MarkedPrice`, `DateRegistered`, `Status`) VALUES  
							('$accessionnum','$section','$isbn','$title','$subject','$description','$author','$publisher','$copyright','$edition','$txt_location',$markedPrice,NOW(),'available')";
							if(mysqli_query($con_str,$insertstatement)){

									
								}
								
							$counter+=1;

						}

						$insertinventory="INSERT INTO `tbl_inventorylogs_books`(`Date`, `ISBN`, `Section`, `Title`, `Subject`, `Author`, `Publisher`, `Edition`, `Copyright`, `BeginningInventory`,`Arrivals` , `EndingInventory`) VALUES   
							(NOW(),'$isbn','$section','$title','$subject','$author','$publisher','$edition','$copyright',$copies,$newqty,$endingqty)";
							if(mysqli_query($con_str,$insertinventory)){

								}


							$insertarrival="INSERT INTO `tbl_arrivals`(`DateArrived`, `Section`, `Title`, `Subject`, `Author`, `Publisher`, `Edition`, `ISBN`, `Copyright`, `qty`) VALUES   
							(NOW(),'$section','$title','$subject','$author','$publisher','$edition','$isbn','$copyright',$newqty)";
							if(mysqli_query($con_str,$insertarrival)){

									$apiresponse = "200";
								}	

						
					}else{
						$apiresponse="Error 400!";
					}
		

	echo $apiresponse;




	function generateAccession(){
		require ("../../db_connection/myConn.php");
		$checkquery = "SELECT SUBSTRING(AccessionNO, 5,100)+1 as NewAccession FROM tbl_booksmonitoring Order by(ID)";
		$result= $con_str->query($checkquery);

		if($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				$accession ='Acc '.$row['NewAccession'];
			}
			
		}else{
			$accession = 'Acc 1';
		}

		return $accession;
		
	}
?>

