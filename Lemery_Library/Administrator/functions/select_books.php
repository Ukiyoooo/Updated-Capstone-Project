<?php
require ("../../db_connection/myConn.php");


    $query = "SELECT `ID`,`ISBN`, `Section`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `Copies`, `MarkedPrice`,`_pdf`,`Category`,`CallNum` FROM `tbl_books` ";


$columns = array("ID","ISBN","Section","Title","Subject","Description","Author","Publisher","Copyright","Edition","Location","Callno","MarkedPrice","Copies","ID");



if(isset($_POST["search"]["value"])) {
 $query .= ' WHERE (`ISBN` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Section` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Title` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Subject` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Description` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Author` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Publisher` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Edition` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Location` LIKE "%'.$_POST["search"]["value"].'%"
)';
}

 $query .= 'ORDER BY ID ';


$query1 = '';

if($_POST["length"] != -1) {
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($con_str, $query));

$result = mysqli_query($con_str, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result)) {
  $sub_array = array();

 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["ISBN"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Category"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Section"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Title"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Subject"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Description"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["CallNum"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Author"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Publisher"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Copyright"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Edition"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Location"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>₱ '.number_format($row["MarkedPrice"],2).'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Copies"].'</center></div>';
$sub_array[] = '<div id="td_name'.$row["ID"].'"><center><a style="color:blue;" target="_blank" href="../books-pdf/'.$row['_pdf'].'">'.$row['_pdf'].'</a></center></div>';
 $sub_array[]='<div class="btn-group"><a style="color:white;"  class="btn btn-sm btn-info" id="btn_edit"
 					 data-isbn="'.$row["ISBN"].'"
 					 data-section="'.$row["Section"].'"
 					 data-title="'.$row["Title"].'"
 					 data-subject="'.$row["Subject"].'"
 					 data-description="'.$row["Description"].'"
 					 data-author="'.$row["Author"].'"
 					 data-publisher="'.$row["Publisher"].'"
 					 data-copyright="'.$row["Copyright"].'"
 					 data-edition="'.$row["Edition"].'"
 					 data-loc="'.$row["Location"].'"
 					 data-price="'.$row["MarkedPrice"].'"
 					 data-copies="'.$row["Copies"].'"
 					 data-category="'.$row["Category"].'"
 					 data-callnum="'.$row["CallNum"].'"
 					 >
                     Edit</a>
                     <a style="color:white;"  class="btn btn-sm btn-danger" data-isbn="'.$row["ISBN"].'" id="btn_delete">
                     Delete</a></div>';

 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");

 $query = "SELECT `ISBN`, `Section`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `Copies`, `MarkedPrice` FROM `tbl_books`";
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