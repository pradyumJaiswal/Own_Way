<!-- jQuery -->
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
<script src="../../../AssestsMain/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<script src="../../../AssestsMain/dist/js/adminlte.min.js?v=3.2.0"></script>
<script src="../../../AssestsMain/plugins/filterizr/jquery.filterizr.min.js">
  //Multiple Image View Insertion for hotel open
$(function () {
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
      alwaysShowClose: true
    });
  });

  $('.filter-container').filterizr({gutterPixels: 3});
  $('.btn[data-filter]').on('click', function() {
    $('.btn[data-filter]').removeClass('active');
    $(this).addClass('active');
  });
})
//Multiple Image Insertion View for hotel close
</script>
<!-- custom js -->
<script src="../../../AssestsMain/dist/JsCustom/layoutpages.js"></script>
<script>
  $(function () {
    $("#BasicSubTab").DataTable({
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
  $(function () {
    $("#GuideRegInfoT").DataTable({
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
  $(function () {
    $("#exampleG").DataTable({
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
  $(function () {
    $("#TravelTable").DataTable({
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
  $(function () {
    $("#TourRequestTable").DataTable({
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
//for Logo img 
//for Logo img 
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
 var aps = './add_place_in_card.php'
 $('#aps').attr("href",aps);
 var SPP = './sechdule_trip.php'
 $('#SPP').attr("href",SPP);
});
  </script>
  <script>
$(document).ready(function(){ 
  //for Logo img 
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
 var aps = './add_place_in_card.php'
 $('#aps').attr("href",aps);
 var SPP = './sechdule_trip.php'
 $('#SPP').attr("href",SPP);
});
</script>
<script>
$(document).ready(function(){ 
  
//Script For Multiple Image close
//for Logo img 
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
 var aps = './add_place_in_card.php'
 $('#aps').attr("href",aps);
 var SPP = './sechdule_trip.php'
 $('#SPP').attr("href",SPP);
  //for Logo img close
});
  </script>
  <script>
$(document).ready(function(){ 
//Script For Multiple Image close
 //for Logo img 
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
 var aps = './add_place_in_card.php'
 $('#aps').attr("href",aps);
 var SPP = './sechdule_trip.php'
 $('#SPP').attr("href",SPP);
  //for Logo img close
});
  </script>
  <script>
  $(function () {
    $("#SubcriptionInfo").DataTable({
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
 var aps = './add_place_in_card.php'
 $('#aps').attr("href",aps);
 var SPP = './sechdule_trip.php'
 $('#SPP').attr("href",SPP);
});
  </script>
  <script>
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
 var aps = './add_place_in_card.php'
 $('#aps').attr("href",aps);
 var SPP = './sechdule_trip.php'
 $('#SPP').attr("href",SPP);
});
  </script>
  <script>
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
 var aps = './add_place_in_card.php'
 $('#aps').attr("href",aps);
 var SPP = './sechdule_trip.php'
 $('#SPP').attr("href",SPP);
});
</script>
<script>
//for Logo img 
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
 var aps = './add_place_in_card.php'
 $('#aps').attr("href",aps);
 var SPP = './sechdule_trip.php'
 $('#SPP').attr("href",SPP);
</script>
