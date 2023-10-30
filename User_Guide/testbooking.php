<?php 
require_once("../include/Conn.php");
session_start();
if(isset($_GET['get_bookig_id'])){
  $booking_con_id = $_GET['get_bookig_id'];
    
}
?>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script></head>
</head>
<!-- Modal -->

            
           
            

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalNatasha">

  Open modal
  
</button> -->

    <div class="modal-dialog modal-dialog-centered" >
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
            <?php 
            $user_id_booking =$_SESSION['id'];
            $insert_pay="SELECT * FROM tour_booking WHERE user_id='$user_id_booking' AND booking_id='$booking_con_id'";
            $result_pay=mysqli_query($conect,$insert_pay)or die("query failed");
            while($to_plat_pay = mysqli_fetch_assoc($result_pay)){
                ?>
        <h3>Payable Ammount <span><?php echo $to_plat_pay['Payble_ammount'];?>₹</span></h3>
        <?php }?>
        <h6 class="btn btn-primary float-right mt-5" style="margin-left:15px;" id="paymentDone"><a href="paymentconfirm.php?bookid=<?php echo $booking_con_id; ?>" style="text-decoration: none; color:aliceblue;"> Pay</a></h6>
        <a href="package.php"> <input class="btn btn-primary float-right mt-5" type="submit" name="in_btn" value="Cancle" id="BtnForPayment" style="margin-right: 15px;"> 
            </a></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"><a href="package.php">Close</a></button>
        </div>
      </div>   
    </div>
 
  <!-- Back to Top -->

<!-- page-wrapper -->
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
<script>
    $(document).ready(function(){ 
       // debugger;
       // e.preventDefault();
        $("#myModalNatasha").modal('show');
    });

    </script>