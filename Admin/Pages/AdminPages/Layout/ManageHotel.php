<?php
require_once("../../Action/Conn.php");
//session_start();
$quary="select * from hotels";
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
                <h3 class="card-title">View And Manage Hotel Details</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  <button type="button" class="btn btn-block btn-outline-primary"  id="addhotel">Add Hotel</button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- Modal -->     
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ADD HOTELS </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" id="fupForm" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Enter Hotel Name</label>
                    <input type="text" class="form-control" id="hotlename" placeholder="Enter Hotel Name" name="hname">
                  </div>
                
                  <div class="form-group">
                    <label>Enter Hotel Owner Name</label>
                    <input type="text" class="form-control" id="hotelowner" placeholder="Enter Hotel Owner Name" name="oname">
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label >Hotel Vanue</label>
                    <input type="text" class="form-control" id="hotelvanue" placeholder="Enter Hotel Vanue" name="venue">
                  </div>
                  <div class="form-group">
                    <label >Enter Email</label>
                    <input type="text" class="form-control" id="hotelEmail" placeholder="Enter Email Id" name="hemail">
                  </div>
                  <div class="form-group">
                    <label>Enter Contact</label>
                    <input type="text" class="form-control" id="hotelcontact" placeholder="Enter Contact" name="hcontact">
                  </div>
                  <div class="form-group">
                    <label>Hotel Type</label>
                    <select class="form-control" id="exampleInputSelect" placeholder="Choose Plan Type" name="hoteltype">
                    <option value="" class="form-control" selected>Choose Plan</option>    
                    <option value="One Star" class="form-control">One Star</option>
                    <option value="Two Star" class="form-control">Two Star</option>
                    <option value="Three Star" class="form-control">Three Star</option>
                    <option value="Four Star" class="form-control">Four Star</option>  
                    <option value="Five Star" class="form-control">Five Star</option>  

                </select>
                  </div>
                  <div class="form-group">
                    <label>File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="hotelfile" name="files[]" multiple />
                        <label class="custom-file-label">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="submitBtn" id="submitofferHotel">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>
  
<!---------------------------------------------------------------------------------------------------------------->
              <!-- TABLE START -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover" id="HotelTable">
                  <thead>
                    <tr>
                    <th>S.No.</th>
                      <th>Hotel Name</th>
                      <th>Hotel Type</th>
                      <th>Owner Name</th>
                      <th>View</th>
                      <th>View Picture</th>
                      <th>Update</th>
                      <th>Remove</th>
                      <th>Mange Availibity </th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php 
                    $count =0;
                    while($row=mysqli_fetch_array($result)){
                      $count += 1;
                      ?>
                      <td><?php echo  $count;?></td>
                      <td><?php echo $row['hotel_name'];?></td>
                      <td><?php echo $row['hotel_type'];?></td>
                      <td><?php echo $row['owner_name'];?></td>
                      <td><a data-id="<?php echo $row['hotel_id'];?>" class="view"><i class="ion ion-eye"></a></i></td>
                      <td><?php echo'<a href="./hotel_picture.php?id='.$row['hotel_id'].'"><i class="fas fa-images"></i></a>'?></td>
                      <td><a data-id="<?php echo $row['hotel_id'];?>" class="edithotelinfo"><i class="ion ion-edit"></a></i></td>
                      <td><a data-id="<?php echo $row['hotel_id'];?>" class="removeuser"><i class="fa fa-trash" aria-hidden="true"></a></i></td>
                      <td><?php 
                     if ($row['h_status']==1)
                     {
                      echo '<p><a href="../../Action/ManageHotelStatus.php?id='.$row['hotel_id'].'&status=0" class="btn btn-success">Active</p>';
                     }else{
                      echo '<p><a href="../../Action/ManageHotelStatus.php?id='.$row['hotel_id'].'&status=1" class="btn btn-danger">Inactive</p>';
                     }
                     ?></td>
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
<!-------------------------------------------------------------------------------------------------------------------->

<div class="modal fade" id="myModalH" role="dialog" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body" id="modalview">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- view Model close-->
<!-------------------------------------------------------------------------------------------------------------------->
<!-----------------------------------------------UPDATE HOTEL INFO MODEL--------------------------------------------------------------------->

<div class="modal fade" id="myModalHUP" role="dialog" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body" id="modalUpdate">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-----------------------------------------------CLOSE HOTEL UPDATE INFO--------------------------------------------------------------------->

</div>
</div>

<!-- footer -->
<?php require_once("./footer.php");?>
<!-- script  links -->
<!-- <? //php require_once("./scriptlinksLay.php");?> -->
 <!-- Add Subcription Offer -->
 <script src="../../../AssestsMain/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../AssestsMain/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../AssestsMain/dist/js/adminlte.min.js"></script>
<!-- <script src="../../dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="../../../AssestsMain/dist/js/demo.js"></script>
<!-- Summernote -->
<script src="../../../AssestsMain/plugins/summernote/summernote-bs4.min.js"></script>
<!-- DataTables -->
<script src="../../../AssestsMain/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../AssestsMain/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../AssestsMain/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../AssestsMain/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- page script -->
<!-- Filterizr-->
<script src="../../../AssestsMain/plugins/filterizr/jquery.filterizr.min.js"></script>
<script>
  $(function () {
    $("#HotelTable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
 <script>
 
//Manage Hotel Curd
   $(document).on("click","#addhotel",function(){
    $("#myModal").modal('show');
   });
   $("#fupForm").on('submit', function(e){
         e.preventDefault();
         $.ajax({
             type: 'POST',
             url: '../../Action/addHotelAction.php',
             data: new FormData(this),
             dataType: 'json',
             contentType: false,
             cache: false,
             processData:false,
             beforeSend: function(){
                 $('.submitBtn').attr("disabled","disabled");
                 $('#fupForm').css("opacity",".5");
             },
             success: function(response){
                 $('.statusMsg').html('');
                 if(response.status == 1){
                     $('#fupForm')[0].reset();
                     $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                 }else{
                     $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                 }
                 $('#fupForm').css("opacity","");
                 $(".submitBtn").removeAttr("disabled");
                 alert("ok");
             }
         });
     });
     
     // File type validation
     var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
     $("#hotelfile").change(function() {
         for(i=0;i<this.files.length;i++){
             var file = this.files[i];
             var fileType = file.type;
             
             if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
                 alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
                 $("#file").val('');
                 return false;
             }
         }
     }); 
//View Hotel Close

  //View For Update Hotel INfo
$(document).on("click",".edithotelinfo",function(){
  alert("ok");
  alert($(this).attr("data-id"));
   var hidu= $(this).attr('data-id');
   alert(hidu);
  $("#myModalHUP").modal('show');
  //var id= $(this).data('hotel_id');
 // alert(id);
  $.ajax({
   url:"../../Action/HotelUpdateInfo.php",
   type:"POST",
   data:{HUid: hidu},
   success: function(data){
    $("#modalUpdate").html(data);
   }
  })
 });
 //View For Update Hotel INfo
 //Update Btn Click to Update Hotel Info 
 $(document).on("click","#Hotel-update-submit",function(e){
  e.preventDefault();
  var HUId = $("#HUpdateid").val();
  var HUName = $("#HUpdateName").val();
  var HUOName = $("#HUpdateOwnerName").val();
  var HUV= $("#HUpdateHotelVanue").val();
  var HUEmail = $("#HUpdateEmail").val();
  var HUContact = $("#HUpdateContact").val();
  var HUType = $("#HUpdateType").val();
  $.ajax({
    url:"../../Action/HotelInfoUpdateQuary.php",
    type:"POST",
    data:{Hid: HUId ,HNAME: HUName , HON: HUOName , Hvanue: HUV , HMail: HUEmail , HCon: HUContact , HUT: HUType  },
    cache:false,
    success: function(data){
         if(data == 1){
         $("#modalUpdate").modal('hide');
         //alert("ui");
       } 
     }
  })

 })
 //View Hotel INfo
$(document).on("click",".view",function(){
    //alert($(this).attr("data-id"));
     var hid= $(this).attr('data-id');
     alert(hid);
    $("#myModalH").modal('show');
    //var id= $(this).data('hotel_id');
   // alert(id);
    $.ajax({
     url:"../../Action/ViewHotelInfo.php",
     type:"POST",
     data:{id: hid},
     success: function(data){
      $("#modalview").html(data);
     }
    })
   });

$(document).ready(function(){ 
var logoimg = '../../../AssestsMain/dist/img/AdminLTELogo.png'
  $('#logoimgc').attr("src",logoimg);
//for profile img
var profileimg= './../../Signup_file/<?php echo $_SESSION['file'];?>'
  $('#proimg').attr("src",profileimg);
  //for page redirection
  var GURI = './GuideRegisterInfo.php'
  $('#GRI').attr("href",GURI);
  var VR = './verifyGuideInfo.php'
  $('#VG').attr("href",VR);
 var BSP = './BasicSubscription.php'
 $('#BSP').attr("href",BSP);
 var MHD ='./ManageHotel.php'
 $('#MHD').attr("href",MHD);
 var MTD = './ManageTravel.php'
 $('#MTD').attr("href",MTD);
 var MSI = './ManageSubcription.php'
 $('#MSI').attr("href",MSI);
 var MTR = './ManageTourRequest.php'
 $('#MTR').attr("href",MTR);
});
   //View Hotel INfo close
 </script>
</body>