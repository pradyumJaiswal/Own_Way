//Add Basic Subcription Pack Open
$(document).ready(function(){ 
    // $('.textarea').summernote();
    $(document).on("click","#addplan",function(){
     $("#myModal").modal('show');
    });
    //Insert Subcription Plan
    $(document).on("click","#submitplan",function(e){
      alert(5);
      e.preventDefault();
      var pname = $("#BasicSubcriptionName").val();
      var ptype = $("#BasicSubcriptionType").val();
     // alert ( ptype );
      var pvplaces = $("#VisitPlaces").val();
      alert( pvplaces);
      var no_of_days = $("#TripDayas").val();
      var fhotel = $("#Facilityone").val();
      var fguide = $("#Facilitytwo").val();
      var ftravel= $("#Facilitythree").val();
      $.ajax({
          url: "../../Action/basicSubcription.php",
          type: "POST",
          data: {pname:pname, ptype:ptype, pvplaces:pvplaces, no_of_days:no_of_days, fhotel:fhotel, fguide:fguide, ftravel:ftravel},
          success : function(data){
              alert(19);
              if(data == 1){
                  location.reload();
              }else{
                  alert("ok nahi hein");
              }
              
          }
      })
  });
});
//Add Basic Subcription Pack Close
//Guide Register request Info Script Open
$(document).on("click",".viewmore",function(){
    $("#myModalV").modal('show');
    var userid =$(this).data('id');
    //alert(userid);
    $.ajax({
     url:"../../Action/ViewRegisterGuide.php",
     type:"POST",
     data:{id: userid},
     success: function(data){
      $("#modalview").html(data);
     }
    })
   });
   //Update View Form 
 $(document).on("click",".edituser",function(){
     $("#myModal").modal('show');
     var userid = $(this).data('id');
     $.ajax({
         url:"../../Action/verifyGuide.php",
         type:"POST",
         data:{id: userid },
         success: function(data){
          $("#modaltab").html(data);
         }
     })
 });
 //Save Verfiy User
 $(document).on("click","#edit-submit",function(e){
   e.preventDefault();
     var userId = $("#idG").val();
     var name = $("#name").val();
     var email = $("#email").val();
     var contact = $("#contact").val();
     var adrees = $("#adrees").val();
     var Gstatus = $("#status").val();
     var Istatus= $("#istatus").val();
     var Gid = $("#Gid").val();
     var pass = $("#pass").val();
     //alert(5);
     $.ajax({
       url:"../../Action/UpdateVerifyGuide.php",
       type:"POST",
       data:{userid: userId, name: name, email: email,contact: contact,adrees: adrees,Gstatus: Gstatus,Istatus: Istatus ,Gid: Gid,pass: pass},
       cache: false,
       success: function(data){
         if(data == 1){
         $("#myModal").modal('hide');
       } 
     }
     })
     location.reload();
 });
 $(document).on("click",".removeuser",function(e){
     e.preventDefault();
     $("#myModalR").modal('show');
     var Guideid = $(this).data('id');   
     $('#Rid').val(Guideid);
     $(document).on("click","#removeGid",function(){
     var Rid = $("#Rid").val(); 
     $.ajax({
       url:"../../Action/RemoveGuideRequest.php",
       type:'POST',
       data:{Rid: Rid},
       cache: false,
       success: function(dataa){
         if(dataa == 1){
          // alert('ok');
           $("#myModalR").modal('hide');
           location.reload();
         }
       }
     })
   })
   });
   //Compose Mail Guide Id
   $(document).on("click",".mailforGid",function(){
     var id=  $(this).attr("data-id");
     $("#MailModel").modal('show');
     alert(id);
     $.ajax({
         url:"../../Action/ComposeMail.php",
         type:"POST",
         data:{Gid: id },
         cache: false,
         success: function(data){
          // alert ( );
          $("#Mailtab").html(data);         
         }
     })
   // 
   })
//Guide Register request Info Script close

//Mange Verify Guide
$(document).on("click",".viewmore",function(){
    $("#myModalV").modal('show');
    var userid =$(this).data('id');
    $.ajax({
     url:"../../Action/ViewRegisterGuide.php",
     type:"POST",
     data:{id: userid},
     success: function(data){
      $("#modalview").html(data);
     }
    })
   });
   //Update View Form 
 $(document).on("click",".edituser",function(){
     $("#myModal").modal('show');
     var userid = $(this).data('id');
     $.ajax({
         url:"../../Action/viewupdateverifygui.php",
         type:"POST",
         data:{id: userid },
         success: function(data){
          $("#modaltab").html(data);
         }
     })
 });
 //Save Verfiy User
 $(document).on("click","#edit-submit",function(e){
   e.preventDefault();
     var userId = $("#idG").val();
     var name = $("#name").val();
     var email = $("#email").val();
     var contact = $("#contact").val();
     var adrees = $("#adrees").val();
     var Gstatus = $("#status").val();
     var Istatus= $("#istatus").val();
     var Gid = $("#Gid").val();
     var pass = $("#pass").val();
     //alert(5);
     $.ajax({
       url:"../../Action/UpdateVerifyGuide.php",
       type:"POST",
       data:{userid: userId, name: name, email: email,contact: contact,adrees: adrees,Gstatus: Gstatus,Istatus: Istatus ,Gid: Gid,pass: pass},
       cache: false,
       success: function(data){
         if(data == 1){
         $("#myModal").modal('hide');
       } 
     }
     })
     location.reload();
 });

//Mange Verify Close

//Mange Travel/vehicle script open
$(document).on("click","#addplan",function(){
    $("#myModal").modal('show');
    });
    //Insert Vehicle 
    $(document).on("click","#submitvehicle",function(e){
    alert(5);
    e.preventDefault();
    var OwnerName = $("#Ownername").val();
    var Ownercontact = $("#Ownercontact").val();
    alert ( Ownercontact );
    var VehicleType = $("#VehicleType").val();
    alert( VehicleType);
    var VehicleName = $("#VehicleName").val();
    var VehicleCapcity = $("#VehicleCapcity").val();
    $.ajax({
    url: "../../Action/addTravelVehicle.php",
    type: "POST",
    data: {OwnerName:OwnerName, Ownercontact:Ownercontact, VehicleType:VehicleType, VehicleName:VehicleName, VehicleCapcity:VehicleCapcity},
    success : function(data){
        alert(19);
        if(data == 1){
            location.reload();
        }else{
            alert("ok nahi hein");
        } 
    }
    })
    });
      //view Vehicle Details
    $(document).on("click",".viewvehicle",function(){
        $("#myModal2").modal('show');
        var vehicleid = $(this).data('id');
        $.ajax({
            url:"../../Action/VehicleDetails.php",
            type:"POST",
            data:{tid: vehicleid },
            cache: false,
            success: function(data){
              alert ( vehicleid);
             $("#viewvehicle").html(data);         
            }
        })
    });
    //update vehicle 
    $(document).on("click",".editvehicle",function(){
        $("#vehicleUpdate").modal('show');
        var vehicleid = $(this).data('id');
       // alert(vehicleid);
        $.ajax({
            url:"../../Action/VehicleInfoUpdate.php",
            type:"POST",
            data:{tid: vehicleid },
            cache: false,
            success: function(data){
              //alert ( vehicleid);
             $("#vehicleUpdateShow").html(data);         
            }
        })
    });
    //update vehicle  close
    //Update Vehicle quary
    $(document).on("click","#Vehicle-update-submit",function(){
      //e.preventDefault();
      //alert(6);
      var V_id = $("#v_id").val();
      var ownername = $("#vehicle_ownername").val();
      alert(ownername);
      var contact = $("#contact_number").val();
      var vehicle_type = $("#vehicle_type").val();
      var vehicle_name = $("#vehicle_name").val();
      var vehicle_cpacity = $("#vehicle_cpacity").val();
    //alert(V_id);
    $.ajax({
          url:"../../Action/UpdateVehicleDone.php",
          type:"POST",
          data:{V_id: V_id, ownername: ownername, contact: contact,vehicle_type: vehicle_type,vehicle_name: vehicle_name,vehicle_cpacity: vehicle_cpacity},
          cache: false,
          success: function(data){
            if(data == 1){
           // $("#vehicleUpdateShow").modal('hide');
          } 
        }
        })
        //location.reload();
    });
    
    $(document).on("click",".removevehicle",function(){
      var vehicleid = $(this).data('id');
      alert(vehicleid);
    $. ajax({
      url:"../../Action/RemoveVehicle.php",
      type:"POST",
      data:{vehicleid: vehicleid},
      cache: false,
      success:function(VData){
        if(VData == 1){
          //alert(8);
          location.reload();
        }
      }
     })
    
    });
//Mange Travel/vehicle script close

//Manages Subcription Pack offer and Add new Ofeers
$(document).on("click","#addoffer",function(){
  $("#myModal").modal('show');
 });
 //Insert Subcription Plan
 $(document).on("click","#submitoffer",function(e){
   alert(5);
   e.preventDefault();
   var pname = $("#exampleInputpname").val();
   var ptype = $("#exampleInputSelect").val();
   alert ( ptype );
   var pvplaces = $("#exampleInputTxt").val();
  alert( pvplaces);
   var phid = $("#exampleInputHid").val();
   var pgid = $("#exampleInputGid").val();
   var ptid = $("#exampleInputTid").val();
   $.ajax({
       url: "../../Action/subcriptionAdd.php",
       type: "POST",
       data: {pname: pname, ptype:ptype, pvplaces:pvplaces, phid:phid, pgid:pgid, ptid:ptid},
       success : function(data){
           alert(19);
           if(data == 1){
               location.reload();
           }else{
               alert("ok nahi hein");
           }
           
       }
   })

});
//Mange Booking And Tour Pakage For Close
    
 