<?php

require ("../../db_connection/myConn.php");
$folder_text = $_GET["folder_text"];
$output='';
$output.='<div class="row">';

		$checkquery = "SELECT `ID`, `_folder`, `pdfFile` FROM `tbl_online_materials` WHERE `_folder` LIKE '$folder_text'";
		$result= $con_str->query($checkquery);

		if($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				$output.=' <div class="col-sm-4" >
                           <div class="card card-chart" style="min-height: 200px;">
                            <div class="card-body">
                            <iframe id="testframe" class="col-sm-12" style="border-style: none; min-height: 200px; overflow:hidden;" src="../uploads/'.$row["pdfFile"].'"></iframe>
                             </div>
                             <div class="card-footer">
                          <div class="stats">
                            <a href="../uploads/'.$row["pdfFile"].'" target="_blank" style="color:blue;">'.$row["pdfFile"].'</a>
                            <a class="btn btn-danger" style="color:white;" data-id="'.$row["ID"].'" id="btn_delete">Delete</a>
                          </div>
                            </div>
                           </div>
                  </div>';
			}
			
		}
$output.='</div>';
		
echo $output;
?>