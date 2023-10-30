<?php 
require_once("../../Action/Conn.php");
//session_start();
//quary="SELECT * FROM tour_booking LEFT JOIN basicsubcription ON tour_booking.card_id=basicsubcription.id"
$quary="SELECT * FROM tour_booking LEFT JOIN basicsubcription ON tour_booking.card_id=basicsubcription.id WHERE Payment_Status='confirm'";
$result= mysqli_query($conect,$quary);
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once("./headerlinks.php"); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php require_once("./navbar.php");?>
<?php require_once("./sidemenu.php");?>
<div class="content-wrapper">
  <div class="container">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Tour Request</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover" id="TourRequestTable">
                  <thead>
                    <tr>
                    <th>S.No.</th>
                      <th>Name</th>
                      <th>Contact Number</th>
                      <th>Package Type</th>
                      <th>Status</th>
                      <th>View</th>
                      <th>Update</th>
                      <th>Deny</th>
                      <th>Confirm Booking</th>
                      

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php 
                    $count = 0;
                     while($row=mysqli_fetch_array($result)){
                      $count += 1;
                      ?>
                      <td><?php echo   $count;?></td>
                      <td><?php echo $row['user_name'];?></td>
                      <td><?php echo $row['phone _number_b'];?></td>
                      <td><?php echo $row['plan_name'];?></td>
                      <td><?php echo $row['booking_status'];?></td>
                      <td><a data-id="<?php echo $row['booking_id'];?>" class="viewmoreTour"><i class="ion ion-eye"></a></i></td>
                      <td><a data-id="<?php echo $row['booking_id']?>" class="edituserTour"><i class="ion ion-edit"></a></i></td>
                      <td><a data-id="<?php echo $row['booking_id']?>" class="removeuserTour"><i class="fa fa-trash" aria-hidden="true"></a></i></td>
                      <td><a data-id="<?php echo $row['booking_id']?>" class="confirmbooking"><i class='fas fa-check-square' style='font-size:20px'></i></td>
                      

                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!--view Guide Model -->
        <div class="container">
  <!-- View Booking From Status -->
  <!-- Modal -->
  <div class="modal fade" id="myModalTourR" role="dialog" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body" id="TourRequestV">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--View Booking From Status -->
        <!--Edit Booking -->
        <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="ModelTourEdit" role="dialog" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body" id="modaltabEditTour">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Edit Booking close -->
<!--Remove Booking Model -->
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModalTourBooking" role="dialog" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <form action="#" method="post">
          <input type="text" name="" id="booking_id_Remove" hidden>
        <div class="modal-body" id="modaltabTour_Remove">
         <h4> Are Sure You Want To Delete User Pakage Request</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" name="close">Close</button>
          <button type="button" class="btn btn-danger" id="removeTourBooking"  name="RemoveG">Remove</button>

        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Remove Booking Close-->
<!--Confirm Booking Model close -->
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="ConfirmBooking" role="dialog" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body" id="ConfirmBookingDone">
         </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-block btn-outline-primary" data-dismiss="modal" name="close">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php require_once("./footer.php");?>
<?php require_once("./scriptlinksLay.php"); ?>
<!--booking view Script-->
<script>
  
// view booking details script

//   //Update View Form 
// $(document).on("click",".edituser",function(){
//     $("#myModal").modal('show');
//     var userid = $(this).data('id');
//     $.ajax({
//         url:"../../Action/verifyGuide.php",
//         type:"POST",
//         data:{id: userid },
//         success: function(data){
//          $("#modaltab").html(data);
//         }
//     })
// });
// //Save Verfiy User
// $(document).on("click","#edit-submit",function(e){
//   e.preventDefault();
//     var userId = $("#idG").val();
//     var name = $("#name").val();
//     var email = $("#email").val();
//     var contact = $("#contact").val();
//     var adrees = $("#adrees").val();
//     var Gstatus = $("#status").val();
//     var Istatus= $("#istatus").val();
//     var Gid = $("#Gid").val();
//     var pass = $("#pass").val();
//     //alert(5);
//     $.ajax({
//       url:"../../Action/UpdateVerifyGuide.php",
//       type:"POST",
//       data:{userid: userId, name: name, email: email,contact: contact,adrees: adrees,Gstatus: Gstatus,Istatus: Istatus ,Gid: Gid,pass: pass},
//       cache: false,
//       success: function(data){
//         if(data == 1){
//         $("#myModal").modal('hide');
//       } 
//     }
//     })
// });
$(document).on("click",".removeuserTour",function(e){
    e.preventDefault();
    $("#myModalTourBooking").modal('show');
    var booking_id_r= $(this).data('id');   
    $('#booking_id_Remove').val(booking_id_r);
    $(document).on("click","#removeTourBooking",function(){
    var RemoveBookingRequest = $("#booking_id_Remove").val(); 
    //alert (RemoveBookingRequest);
    $.ajax({
      url:"../../Action/RemoveBookingRequst.php",
      type:'POST',
      data:{Rid_Tour: RemoveBookingRequest},
      cache: false,
      success: function(dataa){
        if(dataa == 1){
          alert('ok');
          $("#myModalTourBooking").modal('hide');
          location.reload();
        }
      }
    })
  })
  })
 // $(document).on("click",".confirmbooking",function(e){
  //Tour Booking Confirm Option View Model(Comfirm Booking)
  
    $(document).on("click",".confirmbooking",function(e){
      e.preventDefault();
   $("#ConfirmBooking").modal('show');
   var bookid =$(this).data('id');
   $.ajax({
    url:"../../Action/bookingconfirmdone.php",
    type:"POST",
    data:{id: bookid},
    success: function(data){
     $("#ConfirmBookingDone").html(data);
    }
   })
  })
//Mange Booking And Tour Pakage For Coustomer(View option)
$(document).on("click",".viewmoreTour",function(){
    $("#myModalTourR").modal('show');
    var bookid =$(this).data('id');
    $.ajax({
     url:"../../Action/ViewTourRequest.php",
     type:"POST",
     data:{id: bookid},
     success: function(data){
      $("#TourRequestV").html(data);
     }
    })
   });
//Mange Booking And Tour Pakage For Coustomer closes(Edit Option)
$(document).on("click",".edituserTour",function(){
alert(9);
$("#ModelTourEdit").modal('show');
var bookidEdit =$(this).data('id');
$.ajax({
     url:"../../Action/TourBookingEdit.php",
     type:"POST",
     data:{id: bookidEdit},
     success: function(data){
      $("#modaltabEditTour").html(data);
     }
    })
    //IF CLick Edit Icon And After That Click Update Botton
    $(document).on("click","#Edit-TourBooking-Option",function(){
      var Booking_id_alotment_Edit =$("#booking_id_Allotment_Edit").val();
      var GuideIdAlot_Edit =$("#guide_Allot_Edit").val();
      var HotelIdAlot_Edit =$("#hotel_Allot_Edit").val();
      var TraveIdAlot_Edit =$("#vehicle_Allot_Edit").val();
      alert(Booking_id_alotment_Edit);
      $.ajax({
    url:"../../Action/BookingEditQuary.php",
    type:"POST",
    data:{B_A_id_Edit:Booking_id_alotment_Edit,GuideAlotment_Edit:GuideIdAlot_Edit,HotelAlotment_Edit:HotelIdAlot_Edit,TravelAlotement_Edit:TraveIdAlot_Edit},
    cache:false,
    success:function(data){
    if(data == 1)
    {
    //alert("ok");
    Swal.fire(
  'Payment Done',
  'Details About Your Booked Pakage Show On Your Profile Soon',
  'success',
  )
    }
  }
  });
    })
})
//Confirm Booking Btn Click Update Data In DataBase
$(document).on("click","#Confirm-TourBooking-Option",function(){
 var Booking_id_alotment =$("#booking_id_Allotment").val();
  var GuideIdAlot =$("#guide_id_Alot").val();
  var HotelIdAlot =$("#hotel_id_Alot").val();
  var TraveIdAlot =$("#vehicle_id_Alot").val();
  alert(Booking_id_alotment);
  $.ajax({
    url:"../../Action/BookingConfirmQuary.php",
    type:"POST",
    data:{B_A_id:Booking_id_alotment,GuideAlotment:GuideIdAlot,HotelAlotment:HotelIdAlot,TravelAlotement:TraveIdAlot},
    cache:false,
    success:function(data){
    if(data == 1)
    {
    alert("ok");
    }
  }
  });
})

</script>
</body>