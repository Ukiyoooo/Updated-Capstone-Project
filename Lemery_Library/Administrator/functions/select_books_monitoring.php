<?php
require ("../../db_connection/myConn.php");


    $query = "SELECT `ID`, `AccessionNo`, `Section`, `ISBN`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `MarkedPrice`, `DateRegistered`, `Status`, `_involved_id`, `_involved_name`,`Category`,`CallNum` FROM `tbl_booksmonitoring` ";


$columns = array("AccessionNo","AccessionNo","Section","ISBN","Title","Subject","Description","Author","Publisher","Copyright","Edition","Location","MarkedPrice","Status","_involved_name");



if(isset($_POST["search"]["value"])) {
 $query .= ' WHERE (`AccessionNo` LIKE "%'.$_POST["search"]["value"].'%"
 OR `AccessionNo` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Section` LIKE "%'.$_POST["search"]["value"].'%"
 OR `ISBN` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Title` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Subject` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Description` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Author` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Publisher` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Copyright` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Edition` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Location` LIKE "%'.$_POST["search"]["value"].'%"
 OR `Status` LIKE "%'.$_POST["search"]["value"].'%"
 OR `_involved_name` LIKE "%'.$_POST["search"]["value"].'%"
 OR `_involved_id` LIKE "%'.$_POST["search"]["value"].'%"
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
				var elText = "'.$row["AccessionNo"].'";
				qrcode.makeCode(elText);
			</script></center></div><br>
			<div><a class="btn btn-secondary" href="printqrcode_books.php?_accession_num='.$row["AccessionNo"].'" target="_blank">Print</a></div>'; 



			
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["AccessionNo"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Category"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Section"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["ISBN"].'</center></div>';
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
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["Status"].'</center></div>';
 $sub_array[] = '<div id="td_name'.$row["ID"].'"><center>'.$row["_involved_name"].'</center></div>';

 $data[] = $sub_array;
}
function get_all_data($con_str) {
require ("../../db_connection/myConn.php");

 $query = "SELECT `ID`, `AccessionNo`, `Section`, `ISBN`, `Title`, `Subject`, `Description`, `Author`, `Publisher`, `Copyright`, `Edition`, `Location`, `MarkedPrice`, `DateRegistered`, `Status`, `_involved_id`, `_involved_name` FROM `tbl_booksmonitoring`";
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