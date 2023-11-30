<?php
require ("../../db_connection/myConn.php");
$userid = $_GET["userid"];
$data=array();

$unreturned=0;
$duedates = 0;

$query = "SELECT `ID`, `UserID`, `LastName`, `FirstName`, `MiddleName`, `Address`, `Gender`, `ContactNo`, `Email`, `Department`, `Course`, `YearLevel`, `Section`, `Photo`, `AcademicYear`, `Semester`, `UserType`, `Position`, `Password` FROM `tbl_users` WHERE `UserID` LIKE '$userid'";
	$result= $con_str->query($query);

	if($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {

			$query1 = "SELECT COUNT(`ID`) AS Unretruned FROM `tbl_transactions` WHERE `PatronID` LIKE '$userid' AND `Remarks` LIKE 'Borrowed'";
				$result1= $con_str->query($query1);

				if($result1->num_rows > 0) {

					while($row1 = $result1->fetch_assoc()) {
						$unreturned = $row1["Unretruned"];
					}
				}

				$query1 = "SELECT COUNT(`ID`) AS Overdue FROM `tbl_transactions` WHERE `PatronID` LIKE '$userid' AND `Remarks` LIKE 'Borrowed' AND `DueDate` <= NOW()";
				$result1= $con_str->query($query1);

				if($result1->num_rows > 0) {

					while($row1 = $result1->fetch_assoc()) {
						$duedates = $row1["Overdue"];
					}
				}


			   $data[]=array('userid'=>$row['UserID'],'p_name'=>$row['LastName']. ", " .  $row['FirstName']." " . $row["MiddleName"],'p_section'=>$row["Section"],'p_position'=>$row["Position"],'usertype'=>$row['UserType'],'img'=>$row["Photo"],'unreturned'=>$unreturned,'duedates'=>$duedates,'course'=> $row["Course"],'department'=>$row["Department"]);

		}
	}
	echo  json_encode( $data );
?>