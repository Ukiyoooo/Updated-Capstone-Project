<?php
require ("../../db_connection/myConn.php");


$columns = array("ID","UserID","Email","LastName","FirstName","MiddleName");
$query = "SELECT `ID`, `UserID`, `LastName`, `FirstName`, `MiddleName`, `Address`, `Gender`, `ContactNo`, `Email`, `Department`, `Course`, `YearLevel`, `Section`, `Photo`, `AcademicYear`, `Semester`, `UserType`, `Position`, `Password`, `Status` FROM `tbl_users` WHERE (`UserType` LIKE 'Librarian')";


if(isset($_POST["search"]["value"])) {
 $query .= ' AND (LastName LIKE "%'.$_POST["search"]["value"].'%"
Or FirstName LIKE "%'.$_POST["search"]["value"].'%"
Or MiddleName LIKE "%'.$_POST["search"]["value"].'%"
Or Email LIKE "%'.$_POST["search"]["value"].'%"
Or UserID LIKE "%'.$_POST["search"]["value"].'%")';
}



if(isset($_POST["order"])) {
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
} else {
 $query .= 'ORDER BY ID ';
}





$query1 = '';

if($_POST["length"] != -1) {
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($con_str, $query));

$result = mysqli_query($con_str, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result)) {
  $sub_array = array();

  $sub_array[] = '   <center>
                    <div class="cell-button-alignment">
                    <div class="cell-button btn-group">
                     <a style="color:white;"  class="btn btn-sm btn-info"
                     data-id="'.$row["UserID"].'"
                     data-email="'.$row["Email"].'"
                     data-lastname="'.$row["LastName"].'"
                     data-firstname="'.$row["FirstName"].'"
                     data-middlename="'.$row["MiddleName"].'"

                      id="btn_edit_librarian" >
                     Edit</a>
                     <a style="color:white;"  class="btn btn-sm btn-danger"
                      data-id="'.$row["UserID"].'"
                     data-email="'.$row["Email"].'"
                     data-lastname="'.$row["LastName"].'"
                     data-firstname="'.$row["FirstName"].'"
                     data-middlename="'.$row["MiddleName"].'"
                      id="btn_delete_librarian" >
                     Delete</a>
                     </div>
                    
                    </div>
                    </center>


                ';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["UserID"].'</div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["Email"].'</div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["LastName"].'</div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["FirstName"].'</div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["MiddleName"].'</div>';
 


 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");
 $query = "SELECT `ID`, `UserID`, `LastName`, `FirstName`, `MiddleName`, `Address`, `Gender`, `ContactNo`, `Email`, `Department`, `Course`, `YearLevel`, `Section`, `Photo`, `AcademicYear`, `Semester`, `UserType`, `Position`, `Password`, `Status` FROM `tbl_users` WHERE (`UserType` LIKE 'Librarian')";
 $result = mysqli_query($con_str, $query);
 return mysqli_num_rows($result);
}


$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($con_str),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);




?>