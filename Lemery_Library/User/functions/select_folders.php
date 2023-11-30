<?php

require ("../../db_connection/myConn.php");

$output='';
$output.='<div class="row">';
$output.='<div class="col-sm-2">';

				$output.='<a class="btn btn-warning col-sm-12" style="background-color:whitesmoke;color:black;" id="btn_folder" data-id="%">  <b><i>All</i></b></a>';

				$output.='</div>';

		$checkquery = "SELECT `_folder_name` FROM `tbl_folder` Order by(ID)";
		$result= $con_str->query($checkquery);

		if($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				$output.='<div class="col-sm-2">';

				$output.='<a class="btn btn-warning col-sm-12" style="background-color:whitesmoke;color:black;" id="btn_folder" data-id="'.$row["_folder_name"].'">  <i>'.$row["_folder_name"].'</i></a>';

				$output.='</div>';
			}
			
		}
$output.='</div>';
		
echo $output;
?>