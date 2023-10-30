<?php
require_once("../Action/Conn.php");
include('smtp/PHPMailerAutoload.php');
if(isset($_POST['guidemail'])){
	$rid=$_POST['RGid'];
    $to1=$_POST['RequstGamil'];
    $subject1=$_POST['mailsubeject'];
    $mesg1=$_POST['guivefiyid'];
	$sentreply = "UPDATE user_table SET guide_id='$mesg1',status='0',interview_status='0' WHERE id=$rid";
	$res=mysqli_query($conect,$sentreply);
}    
echo smtp_mailer($to1,$subject1,$mesg1);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "nainavishwakarma115@gmail.com";
	$mail->Password = "pbrljwmluufubjce";
	$mail->SetFrom("nainavishwakarma115@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		
		?>
      <script type="text/javascript">
         alert("try again");
        </script>
         <?php
	}else{
        header("location:../AdminPages/Layout/verifyGuideInfo.php");
		?>
      <script type="text/javascript">
         alert("Mail sent successfully");
        </script>
         <?php
	}
}
?>