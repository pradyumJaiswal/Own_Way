<?php 
require_once("../include/Conn.php");
session_start();
if(isset($_GET['bookid'])){
  $booking_confirm_id = $_GET['bookid'];
   // echo $booking_confirm_id;
   $paymentStatus ="UPDATE tour_booking SET Payment_Status='confirm' WHERE booking_id='$booking_confirm_id'";
   if(mysqli_query($conect,$paymentStatus) == true){
    echo "
    <body>
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
     <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>   
  Swal.fire(
  'Payment Done',
  'Details About Your Booked Pakage Show On Your Profile Soon',
  'success',
  )
  
</script>
    </body>
    ";    
  //header('location:./package.php');
}
else{
 echo "<script>
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href=''>Why do I have this issue?</a>'
})
</script>";

}
}
?>