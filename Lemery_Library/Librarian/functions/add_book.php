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
$txt_location = $_GET["txt_location"];
$markedPrice = $_GET["markedPrice"];
$copies = $_GET["copies"];
$pdf_name = $_GET["_pdf"];

$category = $_GET["category"];
$callNo = $_GET["callNo"];


$apiresponse='';
$accessionnum='';
$counter=0;
if($_FILES["file_add"]["name"] != ""){
	
	$test=explode(".", $_FILES["file_add"]["name"]);
	$extension=end($test);
	$pdf = $pdf_name.'.'.$extension;
	$location = '../../books-pdf/'.$pdf;
	move_uploaded_file($_FILES["file_add"]["tmp_name"], $location);


$query="INSERT INTO `tbl_books`(`ISBN`, `Section`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `Copies`, `MarkedPrice`,`_pdf`,`Category`,`CallNum`) VALUES 
	('$isbn','$section','$title','$subject','$description','$author','$publisher','$copyright','$edition','$txt_location',$copies,$markedPrice,'$pdf','$category','$callNo')";
					if(mysqli_query($con_str,$query)){

						while($counter<$copies){

							$tz = 'Asia/Hong_Kong';
							$timestamp = time();
							$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
							$dt->setTimestamp($timestamp);
							$date=(new DateTime('now'));
							$accessionnum = 'Acc - '. date_format($date,"YmdHisu");

					

							$insertstatement="INSERT INTO `tbl_booksmonitoring` (`AccessionNo`, `Section`, `ISBN`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `MarkedPrice`, `DateRegistered`, `Status`,`_pdf`,`Category`,`CallNum`) VALUES  
							('$accessionnum','$section','$isbn','$title','$subject','$description','$author','$publisher','$copyright','$edition','$txt_location',$markedPrice,NOW(),'available','$pdf','$category','$callNo')";
							if(mysqli_query($con_str,$insertstatement)){

									
								}
								
							$counter+=1;

						}

						$insertinventory="INSERT INTO `tbl_inventorylogs_books`(`Date`, `ISBN`, `Section`, `Title`, `Subject`, `Author`, `Publisher`, `Edition`, `Copyright`, `BeginningInventory`, `EndingInventory`) VALUES   
							(NOW(),'$isbn','$section','$title','$subject','$author','$publisher','$edition','$copyright',$copies,$copies)";
							if(mysqli_query($con_str,$insertinventory)){

									$apiresponse = "200";
								}

						
					}else{
						$apiresponse="Book already exist!";
					}


}else{
	$query="INSERT INTO `tbl_books`(`ISBN`, `Section`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `Copies`, `MarkedPrice`,`Category`,`CallNum`) VALUES 
	('$isbn','$section','$title','$subject','$description','$author','$publisher','$copyright','$edition','$txt_location',$copies,$markedPrice,'$category','$callNo')";
					if(mysqli_query($con_str,$query)){

						while($counter<$copies){

							$tz = 'Asia/Hong_Kong';
							$timestamp = time();
							$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
							$dt->setTimestamp($timestamp);
							$date=(new DateTime('now'));
							$accessionnum = 'Acc - '. date_format($date,"YmdHisu");

					

							$insertstatement="INSERT INTO `tbl_booksmonitoring` (`AccessionNo`, `Section`, `ISBN`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `MarkedPrice`, `DateRegistered`, `Status`,`Category`,`CallNum`) VALUES  
							('$accessionnum','$section','$isbn','$title','$subject','$description','$author','$publisher','$copyright','$edition','$txt_location',$markedPrice,NOW(),'available','$category','$callNo')";
							if(mysqli_query($con_str,$insertstatement)){

									
								}
								
							$counter+=1;

						}

						$insertinventory="INSERT INTO `tbl_inventorylogs_books`(`Date`, `ISBN`, `Section`, `Title`, `Subject`, `Author`, `Publisher`, `Edition`, `Copyright`, `BeginningInventory`, `EndingInventory`) VALUES   
							(NOW(),'$isbn','$section','$title','$subject','$author','$publisher','$edition','$copyright',$copies,$copies)";
							if(mysqli_query($con_str,$insertinventory)){

									$apiresponse = "200";
								}

						
					}else{
						$apiresponse="Book already exist!";
					}
		


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

