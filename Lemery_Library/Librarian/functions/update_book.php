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
$apiresponse='';
$accessionnum='';

$category = $_GET["category"];
$callNo = $_GET["callNo"];


if($_FILES["file_add"]["name"] != ""){

	$test=explode(".", $_FILES["file_add"]["name"]);
	$extension=end($test);
	$pdf = $pdf_name.'.'.$extension;
	$location = '../../books-pdf/'.$pdf;
	move_uploaded_file($_FILES["file_add"]["tmp_name"], $location);


$query="UPDATE `tbl_books` SET  `Section` = '$section', `Title` = '$title', `Subject` = '$subject', `Description` = '$description', `Author` = '$author', `Publisher` = '$publisher', `Copyright`= '$copyright', `Edition` = '$edition', `Location` = '$txt_location', `MarkedPrice` = $markedPrice,`_pdf`= '$pdf',`Category` = '$category' , `CallNum` = '$callNo' WHERE `ISBN` LIKE '$isbn'";
					if(mysqli_query($con_str,$query)){

				

							$updatestatement="UPDATE `tbl_booksmonitoring` SET `Section` = '$section', `Title` = '$title', `Subject` = '$subject', `Description` = '$description', `Author` = '$author', `Publisher` = '$publisher', `Copyright`= '$copyright', `Edition` = '$edition', `Location` = '$txt_location', `MarkedPrice` = $markedPrice,`_pdf`= '$pdf',`Category` = '$category' , `CallNum` = '$callNo' WHERE `ISBN` LIKE '$isbn'";
							if(mysqli_query($con_str,$updatestatement)){

									
									
								}
								
						
						

						$insertinventory="UPDATE `tbl_inventorylogs_books` SET `Section` = '$section', `Title` = '$title', `Subject` = '$subject', `Author` = '$author', `Publisher` = '$publisher', `Copyright`= '$copyright', `Edition` = '$edition' WHERE `ISBN` LIKE '$isbn'";
							if(mysqli_query($con_str,$insertinventory)){
									$apiresponse = "200";
								}

						
					}else{
						$apiresponse="Book already exist!";
					}



}else{	
	$query="UPDATE `tbl_books` SET  `Section` = '$section', `Title` = '$title', `Subject` = '$subject', `Description` = '$description', `Author` = '$author', `Publisher` = '$publisher', `Copyright`= '$copyright', `Edition` = '$edition', `Location` = '$txt_location', `MarkedPrice` = $markedPrice,`Category` = '$category' , `CallNum` = '$callNo' WHERE `ISBN` LIKE '$isbn'";
					if(mysqli_query($con_str,$query)){

				

							$updatestatement="UPDATE `tbl_booksmonitoring` SET `Section` = '$section', `Title` = '$title', `Subject` = '$subject', `Description` = '$description', `Author` = '$author', `Publisher` = '$publisher', `Copyright`= '$copyright', `Edition` = '$edition', `Location` = '$txt_location', `MarkedPrice` = $markedPrice,`Category` = '$category' , `CallNum` = '$callNo' WHERE `ISBN` LIKE '$isbn'";
							if(mysqli_query($con_str,$updatestatement)){

									
									
								}
								
						
						

						$insertinventory="UPDATE `tbl_inventorylogs_books` SET `Section` = '$section', `Title` = '$title', `Subject` = '$subject', `Author` = '$author', `Publisher` = '$publisher', `Copyright`= '$copyright', `Edition` = '$edition' WHERE `ISBN` LIKE '$isbn'";
							if(mysqli_query($con_str,$insertinventory)){
									$apiresponse = "200";
								}

						
					}else{
						$apiresponse="Book already exist!";
					}
		
}
	echo $apiresponse;




?>

