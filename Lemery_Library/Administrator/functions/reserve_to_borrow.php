<?php
require ("../../db_connection/myConn.php");
$reservation_id = $_GET["id"];
$insert_id = $_GET['itemid'];
$insert_title = $_GET['title'];
$insert_isbn = $_GET['isbn'];
$insert_category = $_GET['category'];
$insert_description = $_GET['description'];

$idno = $_GET['patronid'];
$p_name = $_GET['patronname'];
$p_position_section = $_GET['sectionposition'];
$usertype = $_GET['usertype'];
$academicyear = $_GET['academicyear'];
$semester = $_GET['semester'];   
$course = $_GET['course'];
$department = $_GET['department'];   

$duedate='';


$tz = 'Asia/Hong_Kong';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp);

$duedate = addDays(date_format($dt,"Y-m-d"));
$dateborrowed = date_format($dt,"Y-m-d h:i:s");

 


if ($insert_category=='Book') {
$isbn = '';
$section='';
$title = '';
$subject='';
$description='';
$author='';
$publisher='';
$copyright='';
$edition='';
$location='';
$markedprice=0.00;
$copies=0;

	$query="INSERT INTO `tbl_transactions`( `AcademicYear`, `Semester`, `PatronID`, `PatronName`, `UserType`, `Section_Position`, `ItemID`, `ISBN`, `ItemCategory`,`Title_Name`, `Description`, `DateBorrowed`,`DueDate`,`Remarks`,`Course`,`Department`) VALUES ('$academicyear','$semester','$idno','$p_name','$usertype','$p_position_section','$insert_id','$insert_isbn','$insert_category','$insert_title','$insert_description','$dateborrowed','$duedate','Borrowed','$course','$department')";
					if(mysqli_query($con_str,$query)){
						$query = "SELECT `ID`, `ISBN`, `Section`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `Copies`, `MarkedPrice` FROM `tbl_books` WHERE `ISBN` LIKE '$insert_isbn'";

							$result= $con_str->query($query);

									if($result->num_rows > 0) {

										while($row = $result->fetch_assoc()) {
											$isbn = $row['ISBN'];
											$section=$row['Section'];
											$title = $row['Title'];
											$subject=$row['Subject'];
											$description=$row['Description'];
											$author=$row['Author'];
											$publisher=$row['Publisher'];
											$copyright=$row['Copyright'];
											$edition=$row['Edition'];
											$location=$row['Location'];
											$markedprice=$row['MarkedPrice'];
											$copies=$row['Copies'];
										}

										$endingqty = $copies - 1;
										$queryupdate="UPDATE `tbl_booksmonitoring` SET `_involved_id` = '$idno',`_involved_name` = '$p_name',`Status` = 'borrowed' WHERE `AccessionNo` LIKE '$insert_id'";
										if(mysqli_query($con_str,$queryupdate)){
										}

										$queryupdate1="UPDATE `tbl_books` SET `Copies` = `Copies` - 1 WHERE `ISBN` LIKE '$isbn'";
										if(mysqli_query($con_str,$queryupdate1)){
										}

										$insertinventory="INSERT INTO `tbl_inventorylogs_books`(`Date`, `ISBN`, `Section`, `Title`, `Subject`, `Author`, `Publisher`, `Edition`, `Copyright`, `BeginningInventory`,`Borrowed` , `EndingInventory`) VALUES   
											(NOW(),'$isbn','$section','$title','$subject','$author','$publisher','$edition','$copyright',$copies,1,$endingqty)";
											if(mysqli_query($con_str,$insertinventory)){
											
												}

									}
					}



}else if ($insert_category=='Other'){
$m_id='';
$m_name='';
$m_description='';
$m_copies=0;
$m_location='';
$m_markedprice=0.0;

	$query="INSERT INTO `tbl_transactions`( `AcademicYear`, `Semester`, `PatronID`, `PatronName`, `UserType`, `Section_Position`, `ItemID`, `ISBN`, `ItemCategory`,`Title_Name`, `Description`, `DateBorrowed`,`DueDate`,`Remarks`,`Course`,`Department`) VALUES ('$academicyear','$semester','$idno','$p_name','$usertype','$p_position_section','$insert_id','$insert_isbn','$insert_category','$insert_title','$insert_description','$dateborrowed','$duedate','Borrowed','$course','$department')";
					if(mysqli_query($con_str,$query)){
						$query = "SELECT `ID`, `MaterialID`, `MaterialName`, `Description`, `Copies`, `Location`, `MarkedPrice` FROM `tbl_other_materials` WHERE `MaterialID` LIKE '$insert_id'";

							$result= $con_str->query($query);

									if($result->num_rows > 0) {

										while($row = $result->fetch_assoc()) {
											$m_id=$row['MaterialID'];
											$m_name=$row['MaterialName'];
											$m_description=$row['Description'];
											$m_copies=$row['Copies'];
											$m_location=$row['Location'];
											$m_markedprice=$row['MarkedPrice'];
										}
										$endingqty = $m_copies - 1;
										$queryupdate="UPDATE `tbl_other_materials` SET `Copies` = `Copies` - 1 WHERE `MaterialID` LIKE '$insert_id'";
										if(mysqli_query($con_str,$queryupdate)){
										}

											$insertinventory="INSERT INTO `tbl_others_inventory` (`DateRecorded`,`MaterialID`, `MaterialName`, `Description`, `Location`, `MarkedPrice`,`BeginningInventory`,`Borrowed`,`EndingInventory`) VALUES (NOW(),'$m_id','$m_name','$m_description','$m_location',$m_markedprice,$m_copies,1,$endingqty)";
											if(mysqli_query($con_str,$insertinventory)){

													
												}

									}
	
					}

}



$query="UPDATE `tbl_reservation` SET `Remarks` = 'completed' WHERE `ID` = $reservation_id";
					if(mysqli_query($con_str,$query)){
						$contact ='';
						$query = "SELECT `ContactNo` FROM `tbl_users` WHERE `UserID` LIKE '$idno'";

							$result= $con_str->query($query);

									if($result->num_rows > 0) {

										while($row = $result->fetch_assoc()) {
											$contact = $row["ContactNo"];
										}
									}
						// send sms
									$msg='Your reservation with title '.$insert_title. ' has been approved! You only have 3 days to get your reserved book/material.';
							sendSMS($contact,$msg);
						$apiresponse = "200";
						}

echo $apiresponse;


	function addDays($dt){

    $_POST['startdate'] = $dt;
    $_POST['numberofdays'] = 7;

    $d = new DateTime( $_POST['startdate'] );
    $t = $d->getTimestamp();

    // loop for X days
    for($i=0; $i<$_POST['numberofdays']; $i++){

        // add 1 day to timestamp
        $addDay = 86400;

        // get what day it is next day
        $nextDay = date('w', ($t+$addDay));

        // if it's Saturday or Sunday get $i-1
        if($nextDay == 0 || $nextDay == 6) {
            $i--;
        }

        // modify timestamp, add 1 day
        $t = $t+$addDay;
    }

    $d->setTimestamp($t);

    return $d->format( 'Y-m-d' ). "\n";
}

function sendSMS($numbers,$msg){
	$ch = curl_init();

	$parameters = array(
	    'apikey' => '5fa8c78caf020178e4381bc1728f651e', //Your API KEY
	    'number' => $numbers,
	    'message' => $msg,
	    'sendername' => ''
	);
	curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
	curl_setopt( $ch, CURLOPT_POST, 1 );

	//Send the parameters set above with the request
	curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

	// Receive response from server
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	$output = curl_exec( $ch );
	curl_close ($ch);
}
?>