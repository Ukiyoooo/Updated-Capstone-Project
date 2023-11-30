<?php
require ("../../db_connection/myConn.php");


    $query = "SELECT `ID`, `MaterialID`, `MaterialName`, `Description`, `Copies`, `Location`, `MarkedPrice`,`Category` FROM `tbl_other_materials` ";


$columns = array("ID","MaterialID","MaterialName","Description","Copies","Location","MarkedPrice","ID");



if(isset($_POST["search"]["value"])) {
 $query .= ' WHERE (`MaterialID` LIKE "%'.$_POST["search"]["value"].'%"
 OR `MaterialName` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Description` LIKE "%'.$_POST["search"]["value"].'%"
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
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center><div id="qrcode'.$row["ID"].'" style="width:50px; height:50px; margin-top:15px;"></div>
			<script type="text/javascript">
			var qrcode = new QRCode(document.getElementById("qrcode'.$row["ID"].'"), {
				width : 50,
				height : 50
			});		
				var elText = "'.$row["MaterialID"].'";
				qrcode.makeCode(elText);
			</script></center></div><br>
			<div><a class="btn btn-secondary" href="printqrcode_other.php?MaterialID=%'.$row["MaterialID"].'" target="_blank">Print</a></div>'; 
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["MaterialID"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Category"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["MaterialName"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Description"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Copies"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Location"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>₱ '.number_format($row["MarkedPrice"],2).'</center></div>';

 $sub_array[]='<div class="btn-group"><a style="color:white;"  class="btn btn-sm btn-info" id="btn_edit"
 					data-id="'.$row["MaterialID"].'"
 					data-m_name="'.$row["MaterialName"].'"
 					data-description="'.$row["Description"].'"
 					data-copies="'.$row["Copies"].'"
 					data-loc="'.$row["Location"].'"
 					data-price="'.$row["MarkedPrice"].'"
 					data-category="'.$row["Category"].'"
 					 >
                     Edit</a>
                     <a style="color:white;"  class="btn btn-sm btn-danger" data-id="'.$row["MaterialID"].'" id="btn_delete">
                     Delete</a></div>';

 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");

 $query = "SELECT `ID`, `MaterialID`, `MaterialName`, `Description`, `Copies`, `Location`, `MarkedPrice` FROM `tbl_other_materials`";
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