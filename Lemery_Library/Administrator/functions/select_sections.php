<?php
require ("../../db_connection/myConn.php");
$output = '';
$output .= ' <select class="form-control" style="border-radius:75px; height:50px;" id="opt_section">
                                  <optgroup label="Choose Section" style="border-radius:75px;">
                                      <option selected disabled hidden Selected="" value="">Choose section...</option>';

	$sql2 = "SELECT `ID`, `Department`, `Course`, `Level`, `Section`, `AcademicYear`, `Semester` FROM `tbl_section` Order by `AcademicYear` DESC";
	$result2= $con_str->query($sql2);

	if($result2->num_rows > 0) {
	
		while($row = $result2->fetch_assoc()) {
				$output .= ' <option  value="'.$row["Section"].'">'.$row["Section"].' ('.$row["Department"].', '.$row["Course"].', '.$row["Level"].', '.$row["AcademicYear"].', '.$row["Semester"].')</option>  ';
		}

	}

	$output .= ' </optgroup>
                           </select>';
	echo $output;
?>