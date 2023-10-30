<?php 
require_once("../Action/Conn.php");
$uploadDir = 'hoteluploads/'; 
$allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
);  
// If form is submitted 
$errMsg = ''; 
$valid = 1; 
if(isset($_POST['hname']) || isset($_POST['oname']) || isset($_POST['venue'])|| isset($_POST['hemail']) || isset($_POST['hcontact']) || isset($_POST['hoteltype']) || isset($_POST['files'])) { 
    // Get the submitted form data 
    $hname = $_POST['hname']; 
    $oname = $_POST['oname']; 
    $venue = $_POST['venue']; 
    $hemail = $_POST['hemail']; 
    $hcontact = $_POST['hcontact']; 
    $hoteltype = $_POST['hoteltype']; 
    $filesArr = $_FILES["files"]; 

    // echo "<pre>"; print_r($_FILES); 
     
    if(empty($hname)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter your name.'; 
    } 
     
    if(empty($hemail)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter your email.'; 
    } 
     
    if(filter_var($hemail, FILTER_VALIDATE_EMAIL) === false){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter a valid email.'; 
    } 
     
    // Check whether submitted data is not empty 
    if($valid == 1){ 
        $uploadStatus = 1; 
        $fileNames = array_filter($filesArr['name']); 
         
        // Upload file 
        $uploadedFile = ''; 
        if(!empty($fileNames)){  
            foreach($filesArr['name'] as $key=>$val){  
                // File upload path  
                $fileName = basename($filesArr['name'][$key]);  
                $targetFilePath = $uploadDir . $fileName;  
                  
                // Check whether file type is valid  
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);  
                if(in_array($fileType, $allowTypes)){  
                    // Upload file to server  
                    if(move_uploaded_file($filesArr["tmp_name"][$key], $targetFilePath)){  
                        $uploadedFile .= $fileName.','; 
                    }else{  
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    }  
                }else{  
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
                }  
            }  
        } 
         
        if($uploadStatus == 1){ 
            // Include the database config file 
            
             
            // Insert form data in the database 
            // $uploadedFileStr = trim($uploadedFile, ','); 
            $insert =$conect->query("INSERT INTO hotels (hotel_name,owner_name,venue,hotel_email,hotel_contact,hotel_type) VALUES ('".$hname."', '".$oname."','".$venue."','".$hemail."','".$hcontact."','".$hoteltype."')"); 
            //if(mysqli_query($conect,$insert) === TRUE){
            if($insert === TRUE){
            $last_Hotel_id = mysqli_insert_id($conect);
            foreach($filesArr['name'] as $key=>$val){  
            $fileName = basename($filesArr['name'][$key]);  
            $targetFilePath = $uploadDir . $fileName; 
            $insert1 =$conect->query("INSERT INTO hotel_image(hotel_id,image_img,status)values('$last_Hotel_id','".$targetFilePath."',1)");
        }
//$data=mysqli_query($conect,$insert); 
        }
            if($insert){
                if($insert1){ 
                $response['status'] = 1; 
                $response['message'] = 'Form data submitted successfully!'; 
                }
            } 
        } 
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields!'.$errMsg; 
    } 
} 
// Return response 
echo json_encode($response);
