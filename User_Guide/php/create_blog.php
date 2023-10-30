<?php
require_once("../../include/Conn.php");
$heading = $_POST["heading"];
$s_heading = $_POST["s_heading"];
$content = $_POST["content"];
$blog_location = $_POST["blog_location"];
$g_id = $_POST["g_id"];
$sub_content = $_POST["sub_content"];

$blog_filename = $_FILES["file"]["name"];
         $tempname = $_FILES["file"]["tmp_name"];
         $blog_folder = "post_image/".$blog_filename;
         move_uploaded_file($tempname,$blog_folder);
         
         $sub_blog_filename = $_FILES["sub_file"]["name"];
         $Sub_tempname = $_FILES["sub_file"]["tmp_name"];
         $sub_blog_folder = "post_image/".$sub_blog_filename;
         move_uploaded_file($Sub_tempname,$sub_blog_folder);
// if($filename = $_FILES["file"]['name'] != ''){
//    $filename = $_FILES["file"]['name'];
//    $extension = pathinfo($filename,PATHINFO_EXTENSION);
//    $valid_extensions = array("jpg","png");
//    if(in_array($extension,$valid_extensions)){
//       $new_name = rand() . "." . $extension;
//       $path ="../post_image/".$new_name;

      // if(move_uploaded_file($_FILES["file"]['temp_name'],$path)){
         $blog_insert="INSERT INTO blog(Heading,SubHeading,Content,Location,user_id,Blog_image,sub_content,sub_image)VALUES('$heading','$s_heading','$content','$blog_location','$g_id','$blog_folder','$sub_content','$sub_blog_folder')";
           if(mysqli_query($conect,$blog_insert)){
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