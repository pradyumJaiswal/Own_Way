<?php
require_once("./Conn.php");
$targetDir = "../Signup_file/";
if(isset($_POST['submit']) && !empty($_FILES["file"]["name"])){  
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $contact=$_POST["contact"];
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir.$fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
 
    $SQL="INSERT INTO user_table(full_name,email,pwd,phone_number,FilesUrl,user_type)VALUES('$username','$email','$password',$contact ,'".$fileName."','Admin')";
    
    if(mysqli_query($conect,$SQL)){
        header("location:../AdminPages/login.php");
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
//------ For Update Action --------//
$targetDir = "../Signup_file/";
// if(isset($_POST['update']) && !empty($_FILES["file"]["profile"])){
if(isset($_POST['update']) && !empty($_FILES["profile"])){
//    echo "Page is redirect on action"; 
//    var_dump($_FILES["profile"]);
//   echo "<pre>"; print_r($_POST);
//     print_r($_FILES);
//     die;
$id=$_POST['id'];
//echo $id;
$user_name=$_POST["username"];
//echo $user_name;
$user_email=$_POST["email"];
$user_contact=$_POST["contact"];
$fileName = basename($_FILES["profile"]["name"]);
//print_r($fileName);
//die;
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $SQL ="UPDATE user_table SET full_name='$user_name',email='$user_email',phone_number=$user_contact,FilesUrl='$fileName' WHERE ID=".$id;
            //print_r($SQL);
            //die;
            if(mysqli_query($conect,$SQL)){
                header("location:../AdminPages/dashboard.php");
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