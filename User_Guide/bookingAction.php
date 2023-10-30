<?php
require_once("../include/Conn.php");
if(isset($_POST['in_btn']))
{
$uname=$_POST["User"];
$email=$_POST["email"];
$p_number=$_POST["p_number"];
$address=$_POST["address"];
$a_date=date("Y-m-d",strtotime($_POST["a_date"]));
$kid=$_POST["kid"];
$state=$_POST["to_state"];
$city=$_POST["to_city"];
$adult=$_POST["adult"];
$senior=$_POST["senior"];
$card=$_POST["to_card"];
echo $card;
$subpack= $card;
switch ($subpack) {
case 2:
$matchSubPrice1 ="SELECT * FROM basicsubcription WHERE sub_price='$card'";
$resbasicsub1 = mysqli_query($conect,$matchSubPrice1);
while($subprice = mysqli_fetch_assoc($resbasicsub1)){
$SilverPrice = $subprice['sub_price'];
echo "<br>".$SilverPrice;
$total_payable_amount =(( $kid*$SilverPrice + $adult*$SilverPrice + $senior*$SilverPrice )*3);
echo $total_payable_amount;
}
break;
case 3:
$matchSubPrice2 ="SELECT * FROM basicsubcription WHERE sub_price='$card'";
$resbasicsub2 = mysqli_query($conect,$matchSubPrice2);
while($subprice = mysqli_fetch_assoc($resbasicsub2)){
$GoldPrice = $subprice['sub_price'];}
$total_payable_amount =(( $kid*$GoldPrice+$adult*$GoldPrice+$senior*$GoldPrice)*5);
print_r($total_payable_amount);
echo"<br>";
 break;
case 4:
$matchSubPrice3 ="SELECT * FROM basicsubcription WHERE sub_price='$card'";
$resbasicsub2 = mysqli_query($conect,$matchSubPrice3 );
while($subprice = mysqli_fetch_assoc($resbasicsub2)){
$PaltniumPrice = $subprice['sub_price'];}
$total_payable_amount =( $kid* $PaltniumPrice+$adult* $PaltniumPrice+$senior* $PaltniumPrice)*7;
break;

}
$t_insert="INSERT INTO `tour_booking`(`user_name`, `email_b`, `phone _number_b`, `address`, `visit_state`, `visit_city`, `arrive_date`, `kids`, `adult`, `senior`,card_id,Payble_ammount,Payment_Status)VALUES('$uname','$email','$p_number','$address',' $state','$city','$a_date','$kid','$adult','$senior','$card',$total_payable_amount,'Panding')";
print_r($t_insert);
if(mysqli_query($conect,$t_insert))
{
 echo "inserted"; 
   
}}
else{
echo "no";
}
?>
