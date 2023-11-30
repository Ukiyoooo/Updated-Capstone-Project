<?php
require ("../db_connection/myConn.php");
	session_start();
	$idno = $_GET['idno'];
	$password = $_GET['password'];
	$usertype='';
		
	$sql = "SELECT `ID`, `UserID`, `LastName`, `FirstName`, `MiddleName`, `Address`, `Gender`, `ContactNo`, `Email`, `Department`, `Course`, `YearLevel`, `Section`, `Photo`, `AcademicYear`, `Semester`, `UserType`, `Position`, `Password`, `Status` FROM `tbl_users` WHERE (`UserID` LIKE '$idno' ) And (Password LIKE BINARY '$password')  ";
	$result= $con_str->query($sql);

	if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$status= $row['_status'];
				if ($status==''){
				$_SESSION['UserID'] = $row["UserID"];
				$_SESSION['LastName'] = $row["LastName"];
				$_SESSION['FirstName'] = $row["FirstName"];
				$_SESSION['MiddleName'] = $row["MiddleName"];
				$_SESSION['Address'] = $row["Address"];
				$_SESSION['ContactNo'] = $row["ContactNo"];
				$_SESSION['Email'] = $row["Email"];
				$_SESSION['Department'] = $row["Department"];
				$_SESSION['Course'] = $row["Course"];
				$_SESSION['YearLevel'] = $row["YearLevel"];
				$_SESSION['Section'] = $row["Section"];
				$_SESSION['Semester'] = $row["Semester"];
				$_SESSION['UserType'] = $row["UserType"];
				$_SESSION['Position'] = $row["Position"];
				$_SESSION['Password'] = $row["Password"];
				$usertype = $_SESSION['UserType'];
			}

			}
			echo $usertype;	
			 
		}else{
			echo 'Invalid email or password';
		}
 	
 	$con_str->close();

 	
?>