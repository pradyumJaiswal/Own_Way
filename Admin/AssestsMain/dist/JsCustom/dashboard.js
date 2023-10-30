$(function () {
    $("#example1").DataTable({
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
  //UpdateProfile View Model
  $(document).on("click","#updateAdminProfile",function(){
    alert(5);
     $("#UpdateAdmin").modal('show');
      //var userid =$(this).attr("data-id");
    })     
 //UPDATE ADMIN PROFILE SCRIPT
   
 $(document).on("click",".EditProfileText",function(){
    //var user =$(this).data("id");
    var AdminId =$("#AdminId").val();
    //alert (AdminId);
    var AdminName =$("#AdminName").val();
    var AdminEmail =$("#AdminEmail").val();
    var AdminContact =$("#AdminContact").val();
    var Adminoldtyoe =$("#Old_Pass_type").val();
  //  alert(Adminoldtyoe);
    var Adminold =$("#Old_Pass").val();
    if(Adminold != Adminoldtyoe  ){
      alert("PassWord Not Match");
      $("#UpdateAdmin").modal('hide');
      return false;
    }
    var AdminNewPwd =$("#New_Pass").val();
    //alert(AdminContact);
    $.ajax({
      url:"./../Action/UpdateAdminProfileText.php",
      type:"POST",
      data:{ AId:AdminId, AName:AdminName,AEmail:AdminEmail,AContact:AdminContact,AdminNewPwd:AdminNewPwd},
      cache: false,
      success: function(data){
       if(data == 1){
        alert("ok");
        location.reload();
        $("#UpdateAdmin").modal('hide');
       }
       
      }
    })
  });
  //UPDATE ADMIN IMAGE
  $(document).on("click",".UpdateImage",function(){
    alert('hello');
      //var userid =$(this).attr("data-id");
      //alert(userid);
      $("#AdminImageEdit").show();

});
//Image Upadte Script      
$(document).on("click","#UpdateImageNew",function(e){
          // debugger
        e.preventDefault();
      $.ajax({
         url:"./../Action/UpdateAdminProfileImage.php",
         type:"POST",
         data:new FormData($("#AdminImageEdit")[0]),
         contentType:false,
         processData: false,
         success: function(data){
         // debugger
     if(data == 1){
      $("#UpdateAdmin").modal('hide');
      location.reload();
     }
    }
      });
      //alert(img);
      });
//View All USER Data 
$(document).on("click",".viewmore",function(){
    var userid = $(this).data('id');
    $.ajax({
      url:'./Layout/ViewMore.php',
      type: 'post',
      data: {userid: userid},
      success:function(response){
        $('.modal-body').html(response);
        $('#myModall').modal('show');
      }
    });
    });
    //for edit user
    $(document).on("click",".edituser",function(){
     var uid=$(this).data('uid');
     alert( uid);
     $.ajax({
      url:'./Layout/Edituser.php',
      type:'post',
      data:{uid: uid},
      success:function(response){
        $('.modal-body').html(response);
        $('#myModal').modal('show');
      }
     });
    });
    //REmove USer
   // $('.removeuser').click(function(){
    $(document).on("click",".removeuser",function(){
     var id=$(this).data('id');
     alert(id);
      $.ajax({
      url:'../Action/deleteAction.php',
      type:'post',
      data:{id: id},
      success:function(response){
      confirm("Are Sure You Want To Delete This User ?");
       location.reload();
              }
   });
    }); 
    //for sidemenu redirection 
    //admin login  form  validation 
    function Logvalidation(){
  
      var Gmail =document.getElementById('Gmail').value;
      var Pwd =document.getElementById('Pass').value;
     
     
      if(Gmail == ""){
       document.getElementById('mail').innerHTML = "* Please Fill The Username *";
       return false;
      }
      if(Pwd == ""){
       document.getElementById('Pwd').innerHTML = "* Please Fill The Password *";
       return false;
      }
     }   
    //admin login  form  validation close 
