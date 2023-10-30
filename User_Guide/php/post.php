<?php
require_once("../../include/Conn.php");
$Location = $_POST["slug"];
$Title = $_POST["title"];
$Description = $_POST["description"];
$u_id = $_POST["u_id"];

$filename = $_FILES["file"]["name"];
         $tempname = $_FILES["file"]["tmp_name"];
         $folder = "post_image/".$filename;
         move_uploaded_file($tempname,$folder);

// if($filename = $_FILES["file"]['name'] != ''){
//    $filename = $_FILES["file"]['name'];
//    $extension = pathinfo($filename,PATHINFO_EXTENSION);
//    $valid_extensions = array("jpg","png");
//    if(in_array($extension,$valid_extensions)){
//       $new_name = rand() . "." . $extension;
//       $path ="../post_image/".$new_name;

      // if(move_uploaded_file($_FILES["file"]['temp_name'],$path)){
         $insert="INSERT INTO post(Location,Title,Image,Description,Id)VALUES('$Location','$Title','$folder','$Description','$u_id')";
           if(mysqli_query($conect,$insert)){
                 echo 1;
              }else{
                 echo 0;
              }
//       }
//    }
// }

// //print_r($Location);
// 




?>