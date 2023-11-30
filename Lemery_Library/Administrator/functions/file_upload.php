<?php 
require ("../../db_connection/myConn.php");
$folder_name = $_GET["folder_text"];
if(!empty($_FILES)){     
    $upload_dir = "../../uploads/";
    $fileName = $_FILES['file']['name'];
    $uploaded_file = $upload_dir.$fileName;    
    if(move_uploaded_file($_FILES['file']['tmp_name'],$uploaded_file)){
        //insert file information into db table
		$mysql_insert = "INSERT INTO `tbl_online_materials`(`pdfFile`,`_folder`) VALUES('".$fileName."','".$folder_name."')";
		mysqli_query($con_str, $mysql_insert) or die("database error:". mysqli_error($conn));
    }   
}


  //    <div class="file_upload">
  //   <form action="functions/file_upload.php" class="dropzone">
  //     <div class="dz-message needsclick">
  //       <strong>Drop files here or click to upload.</strong><br />
  //       <span class="note needsclick">(This is just a demo. The selected files are <strong>not</strong> actually uploaded.)</span>
  //     </div>
  //   </form>   
  // </div>   