<?php
require ("../../db_connection/myConn.php");


$columns = array("ID","Department","Course","Level","Section","AcademicYear","Semester");
$query = "SELECT `ID`, `Department`, `Course`, `Level`, `Section`, `AcademicYear`, `Semester` FROM `tbl_section`";


if(isset($_POST["search"]["value"])) {
 $query .= ' WHERE Section LIKE "%'.$_POST["search"]["value"].'%"
Or Department LIKE "%'.$_POST["search"]["value"].'%"
Or Course LIKE "%'.$_POST["search"]["value"].'%"
Or Level LIKE "%'.$_POST["search"]["value"].'%"
Or Section LIKE "%'.$_POST["search"]["value"].'%"
Or AcademicYear LIKE "%'.$_POST["search"]["value"].'%"
Or Semester LIKE "%'.$_POST["search"]["value"].'%"';
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
                     <a style="color:white;"  class="btn btn-sm btn-primary" id="btn_edit_section" data-id="'.$row["ID"].'" data-department="'.$row["Department"].'" data-course="'.$row["Course"].'" data-level="'.$row["Level"].'" data-section="'.$row["Section"].'" data-academicyear="'.$row["AcademicYear"].'" data-semester = "'.$row["Semester"].'">
                     Edit</a>
                     <a style="color:white;"  class="btn btn-sm btn-danger" id="btn_delete_section" data-id="'.$row["ID"].'" data-department="'.$row["Department"].'" data-course="'.$row["Course"].'" data-level="'.$row["Level"].'" data-section="'.$row["Section"].'" data-academicyear="'.$row["AcademicYear"].'" data-semester = "'.$row["Semester"].'">
                     Delete</a>
                     </div>
                    
                    </div>
                    </center>


                ';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["Department"].'</div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["Course"].'</div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["Level"].'</div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["Section"].'</div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["AcademicYear"].'</div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'">'.$row["Semester"].'</div>';
 


 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");
 $query = "SELECT * FROM tbl_section";
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