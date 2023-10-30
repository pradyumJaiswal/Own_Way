<?php 
require_once("./Conn.php");
$id = $_POST['AdminId'];
$imgname = $_FILES['AdminProfileImage']['name'];
// print_r($_FILES); 
// print_r($id); 

// die;
$filepath =$_FILES['AdminProfileImage']['full_path'];
$filetype =$_FILES['AdminProfileImage']['type'];
$filesize =$_FILES['AdminProfileImage']['size'];
$temp_name = $_FILES['AdminProfileImage']['tmp_name'];
move_uploaded_file("$temp_name","./../Signup_file/".$imgname);
$quary = "UPDATE user_table SET FilesUrl='$imgname' WHERE id=$id";
if(mysqli_query($conect,$quary)){
    echo 1;
    $_SESSION['file'] = $imgname;
  }
  else{
    echo 0;
  }
  //print_r($imgap);
//echo $imgap;
//echo ''
?>