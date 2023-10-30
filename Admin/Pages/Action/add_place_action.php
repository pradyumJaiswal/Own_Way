<?php
require_once("./Conn.php");
if((isset($_POST["submit_place"])) && isset($_FILES["Place_Picture"])){
    echo"<pre>";
    print_r($_FILES);
    echo"</pre>";
   $CityName = $_POST["city_name"];
   $PlaceName = $_POST["Place_Name"];
   $Card_Id = $_POST["card_name"];
   //Upload Picture Info 
   $Picture_Name = $_FILES["Place_Picture"]["name"];
   $Pic_Full_Path =$_FILES["Place_Picture"]["full_path"];
   $Pic_type =$_FILES["Place_Picture"]["type"];
   $Pic_Size =$_FILES["Place_Picture"]["size"];
   $pic_temp_name =$_FILES["Place_Picture"]["tmp_name"];
   $Pic_Path_target = "./place_images/";
   move_uploaded_file("$pic_temp_name","$Pic_Path_target".$Picture_Name);
   $quaryaddplace = "INSERT INTO package_places(city,Place,card_id,place_Image) VALUES('$CityName','$PlaceName',$Card_Id,'$Picture_Name')";
  
   if(mysqli_query($conect,$quaryaddplace)){
   header("location:../AdminPages/Layout/add_place_in_card.php");
   }
   else{
    echo "2";
   }
  

   
}
?>