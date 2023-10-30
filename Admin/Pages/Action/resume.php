<?php
require_once("../Action/Conn.php");
//require_once("../../../guideResume/");
$quary="select * from user_table where user_type = 'Guide' and status = '0' ";
$result= mysqli_query($conect,$quary);
// $file=$_GET['file'];
while($row=mysqli_fetch_array($result))
   {
    $file = $row['FilesUrl']; 
   }
    
// Store the file name into variable
$filepath= '../../../guideResume/';
$filename = $filepath . $file ;

// Header content type
header('Content-type: application/pdf');

header('Content-Disposition: inline; filename="' . $filename . '"');

header('Content-Transfer-Encoding: binary');

header('Accept-Ranges: bytes');
   

// Read the file
@readfile($file);

?>