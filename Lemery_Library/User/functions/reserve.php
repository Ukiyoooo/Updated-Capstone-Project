<?php
require ("../../db_connection/myConn.php");
session_start();
$acc = $_GET['acc'];
$title = $_GET['title'];
$isbn = $_GET['isbn'];
$category = $_GET['category'];
$description = $_GET['description'];
$academicyear = $_GET['academicyear'];
$semester = $_GET['semester'];


$idno = $_SESSION['UserID'];
$p_name = $_SESSION['LastName']. ", " .
		  $_SESSION['FirstName'] . " " .
		  $_SESSION['MiddleName'];

$usertype = $_SESSION['UserType'];
$limit=0;
if ($usertype=='Faculty'){
	$p_position_section = $_SESSION['Position'];
    $limit = 10;
}else if($usertype=='Student')	{
	$p_position_section = $_SESSION['Section'];
     $limit = 5;
}			

$course = $_SESSION['Course'];
$department = $_SESSION['Department'];   

$reserveditems=0;
$borrowed = 0;
$total=0;
$tz = 'Asia/Hong_Kong';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp);
$expdate='';
$expdate = addDays(date_format($dt,"Y-m-d"));
$datereserved = date_format($dt,"Y-m-d h:i:s");
$now= date_format($dt,"Y-m-d");

$checkquery = "SELECT COUNT(ID) AS ReservedItems FROM `tbl_reservation` WHERE `Remarks` LIKE 'reserved' AND `ExpirationDate` > '$now' AND `PatronID` LIKE '$idno'";
        $result2= $con_str->query($checkquery);

        if($result2->num_rows > 0) {
               while($row = $result2->fetch_assoc()) {
                $reserveditems = (Int)$row["ReservedItems"];
               }
        }

$checkquery = "SELECT COUNT(ID) AS BorrowedItems FROM `tbl_transactions` WHERE `Remarks` LIKE 'Borrowed'  AND `PatronID` LIKE '$idno'";
        $result2= $con_str->query($checkquery);

        if($result2->num_rows > 0) {
               while($row = $result2->fetch_assoc()) {
                $borrowed = (Int)$row["BorrowedItems"];
               }
        }


$total = (Int)$borrowed+(Int)$reserveditems;
// $apiresponse='total'.$total . ' limit'.$limit;   
 if ($total<$limit){
	$query="INSERT INTO `tbl_reservation`(`AcademicYear`, `Semester`, `PatronID`, `PatronName`, `Course`, `Department`, `UserType`, `Section_Position`, `ItemID`, `ISBN`, `ItemCategory`, `Title_Name`, `Description`, `DateReserved`, `ExpirationDate`, `Remarks`) VALUES ('$academicyear','$semester','$idno','$p_name','$course','$department','$usertype','$p_position_section','$acc','$isbn','$category','$title','$description','$datereserved','$expdate','reserved')";
					if(mysqli_query($con_str,$query)){
						$apiresponse = '200';
								
					}

}else{
    $apiresponse='Sorry!, you reached the limit for reservation and borrowing.';
}
echo $apiresponse;


	function addDays($dt){

    $_POST['startdate'] = $dt;
    $_POST['numberofdays'] = 4;

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