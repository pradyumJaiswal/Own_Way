<?php
require_once("../../include/Conn.php");
echo "connect ho raha ";
$targetDir = "../../Admin/Pages/Signup_file/";
if(isset($_POST['user_signup']) && !empty($_FILES["profile"]["name"])){  
//    echo "Page is redirect on action"; 
//      var_dump($_FILES["profile"]);
//     echo "<pre>"; print_r($_POST);
//       print_r($_FILES);
//       die;
echo "sasf";
    $username=$_POST["name"];
    $email=$_POST["email"];
    $contact=$_POST["contact"];
    
    $adderess=$_POST["address"];
    $password=$_POST["pass"];
    $fileName = basename($_FILES["profile"]["name"]);
    $targetFilePath = $targetDir.$fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
 
    $SQL="INSERT INTO user_table(full_name,email,Pwd,phone_number,FilesUrl,address_user,user_type)VALUES('$username','$email','$password',$contact ,'".$fileName."','$adderess','user')";
    // print_r($SQL);
    //         die;
    if(mysqli_query($conect,$SQL)){
       header("location:../Layout/login.php");
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

