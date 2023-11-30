<?php
require ("../../db_connection/myConn.php");
$transaction_id = $_GET['transaction_id'];
$insert_id = $_GET['insert_id'];
$insert_isbn = $_GET['insert_isbn'];
$insert_category = $_GET['insert_category'];
$insert_description = $_GET['insert_description'];

$idno = $_GET['idno'];
$p_name = $_GET['p_name'];
$p_position_section = $_GET['p_position_section'];
$usertype = $_GET['usertype'];
$academicyear = $_GET['academicyear'];
$semester = $_GET['semester']; 
$penalty = $_GET['penalty'];   
$duedate='';


$tz = 'Asia/Hong_Kong';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp);


$date_returned = date_format($dt,"Y-m-d h:i:s");

 


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

	$query="UPDATE  `tbl_transactions` SET `DateReturned` ='$date_returned', `Remarks` = 'Returned' WHERE `ID` = $transaction_id ";
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

										$endingqty = $copies + 1;
										$queryupdate="UPDATE `tbl_booksmonitoring` SET `_involved_id` = '',`_involved_name` = '',`Status` = 'available' WHERE `AccessionNo` LIKE '$insert_id'";
										if(mysqli_query($con_str,$queryupdate)){
										}

										$queryupdate1="UPDATE `tbl_books` SET `Copies` = `Copies` + 1 WHERE `ISBN` LIKE '$isbn'";
										if(mysqli_query($con_str,$queryupdate1)){
										}

										$insertinventory="INSERT INTO `tbl_inventorylogs_books`(`Date`, `ISBN`, `Section`, `Title`, `Subject`, `Author`, `Publisher`, `Edition`, `Copyright`, `BeginningInventory`,`Returned` , `EndingInventory`) VALUES   
											(NOW(),'$isbn','$section','$title','$subject','$author','$publisher','$edition','$copyright',$copies,1,$endingqty)";
											if(mysqli_query($con_str,$insertinventory)){
												$apiresponse = "200";
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

	$query="UPDATE  `tbl_transactions` SET `DateReturned` ='$date_returned', `Remarks` = 'Returned' WHERE `ID` = $transaction_id ";
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
										$endingqty = $m_copies + 1;
										$queryupdate="UPDATE `tbl_other_materials` SET `Copies` = `Copies` + 1 WHERE `MaterialID` LIKE '$insert_id'";
										if(mysqli_query($con_str,$queryupdate)){
										}

											$insertinventory="INSERT INTO `tbl_others_inventory` (`DateRecorded`,`MaterialID`, `MaterialName`, `Description`, `Location`, `MarkedPrice`,`BeginningInventory`,`Returned`,`EndingInventory`) VALUES (NOW(),'$m_id','$m_name','$m_description','$m_location',$m_markedprice,$m_copies,1,$endingqty)";
											if(mysqli_query($con_str,$insertinventory)){

													$apiresponse = "200";
												}

									}
	
					}

}

if ($penalty>0){
$tz = 'Asia/Hong_Kong';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp);
$date=(new DateTime('now'));
$now = date_format($date,"Y-m-d h:i:s");



	$query="INSERT INTO `tbl_payments`(`DatePaid`, `PatronID`, `PatronName`, `UserType`, `AcademicYear`, `Semester`, `Payment`, `PenaltyType`) VALUES ('$now','$idno','$p_name','$usertype','$academicyear','$semester','$penalty','Overdue') ";
					if(mysqli_query($con_str,$query)){
						$apiresponse = "200";
						}	
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
?>