<?php
require_once("../../include/Conn.php");
//require_once("../../guideResume/");

// echo "connect ho raha ";
$targetDir = "../../guideResume/";

if(isset($_POST['guide_signup']) && !empty($_FILES["profile"]["name"]) && isset($_FILES["GuideProfilePicture"])){  
//    echo "Page is redirect on action"; 
//      var_dump($_FILES["profile"]);
//     echo "<pre>"; print_r($_POST);
//       print_r($_FILES);
//       die;

    $username=$_POST["name"];
    $email=$_POST["email"];
    // $password=$_POST["pass"];
    $contact=$_POST["contact"];
    $aadhar_no=$_POST["adhar"];
    $adderess=$_POST["address"];
    //Varriable For Guide Profile Picture
    $targetDirGuidePic = "../../Admin/Pages/Signup_file/";
    $filename_Guide_Pic =$_FILES['GuideProfilePicture']['name'];
    $filepath_Guide_Pic =$_FILES['GuideProfilePicture']['full_path'];
    $filetype_Guide_Pic =$_FILES['GuideProfilePicture']['type'];
    $filesize_Guide_Pic =$_FILES['GuideProfilePicture']['size'];
    $temp_name_Guide_Pic = $_FILES['GuideProfilePicture']['tmp_name'];
    move_uploaded_file("$temp_name_Guide_Pic",$targetDirGuidePic.$filename_Guide_Pic);
    //Varriable For Guide Profile Picture close
    // Guide Resume Variable
    $fileName = basename($_FILES["profile"]["name"]);
    $targetFilePath = $targetDir.$fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
     $SQL="INSERT INTO user_table(full_name,email,phone_number,Guide_resume,address_user,user_type,status,interview_status,FilesUrl)VALUES('$username','$email',$contact ,'".$fileName."','$adderess','Guide','2','1','".$filename_Guide_Pic."')";
    //print_r($SQL);
          // die;
    if(mysqli_query($conect,$SQL)){
      header("location:../Layout/guidelogin.php");
      //echo "yahh ";
        $statusMsg = "The file ".$fileName. " has been uploaded successfully."; 
    }else{
        echo "Error:<br>".$conect->error;    
       $statusMsg = "File upload failed, please try again.";
   } 
}else{
   $statusMsg = "Sorry, there was an error uploading your file.";
}
}else{
$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
}
}else{
$statusMsg = 'Please select a file to upload.';
} 
?>