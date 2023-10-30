$(document).ready(function(){

    $("#chat-btn-message-2354").on("click",function(e){
        // alert("hi");
        e.preventDefault();
        var from = $("#from-chat").val();
        var to = $("#to-chat").val();
        var message = $("#message-chat").val();
        // alert(message);
         $.ajax({
         url: "php/chat_box.php",
         type: "POST",
         data: { c_from: from , c_to: to ,  c_message: message},
         success : function(data)
         {
            if(data == 1){
                location.reload();
            }
            else{
                alert("Whome You wanna send");
            }
         }
         });
        });

    // $("#chat-btn-message-2354").on("click",function(e){
    //     alert("hi");
    //     e.preventDefault();
    //     var from = $("#from-chat").val();
    //     var to = $("#to-chat").val();
    //     var message = $("#message-chat").val();
    //     // alert(comment);
    //      $.ajax({
    //      url: "php/chat_box.php",
    //      type: "POST",
    //      data: { c_message: message , c_to_id:to , c_from_id:from},
    //      success : function(data)
    //      {
    //         if(data==1){
    //             alert("send message");
    //             $("#message-chat").val('');
    //             location.reload();
    //         }
    //         else{
    //             alert("try again");
    //         }
    //      }
    //      });
    //     });




    $("#sendMessageButton").on("click",function(){
        
        var name = $("#Uname").val();
        
        var email = $("#Uemail").val();
        var subject = $("#subject").val();
        
        var message = $("#message").val();

        $.ajax({
              url: "php/contact_query.php",
              type: "POST",
              data: {q_name:name, q_email:email, q_subject: subject, q_message: message},
              success : function(data)
                                {
                                         if(data==1){
                                                     alert("Message successfully");
                                                    }
                                                    else{
                                                         alert("try again");
                                                        }
                                }
                });
    });



$("#postForm").on("submit",function(e){
    e.preventDefault();
     
    var formData = new FormData(this);

    $.ajax({
        url: "php/post.php",
        type: "POST",
        data: formData,
        contentType:false,
        processData:false,
        success: function(data){
            if(data==1){
                alert("Upload successfully");
                $("#location").val('');
                $("#title").val('');
                $("#image").val('');
                $("#description").val('');
                location.reload();
               }
               else{
                    alert("try again");
                   }
            
        }
            
    });


});

$("#feedback-form").on("submit",function(e){
    e.preventDefault();

        var formData = new FormData(this);

                    $.ajax({
                        url: "php/create_feedback.php",
                        type: "POST",
                        data: formData,
                        contentType:false,
                        processData:false,
                        success: function(data){
                            if(data==1){
                                alert("Thank You for Feedback  !");
                                location.reload();
                            }
                            else{
                                    alert("try again");
                                }
                            
                        }
                            
                    });
});

$("#blogForm").on("submit",function(e){
    e.preventDefault();
     
    var formData = new FormData(this);

    $.ajax({
        url: "php/create_blog.php",
        type: "POST",
        data: formData,
        contentType:false,
        processData:false,
        success: function(data){
            if(data==1){
                alert("Upload successfully");
                $("#heading").val('');
                $("#s_heading").val('');
                $("#blog_image").val('');
                $("#content").val('');
                location.reload();
               }
               else{
                    alert("try again");
                   }
            
        }
            
    });


});

// $("#createPostbtn").on("click",function(e){
//     e.preventDefault();
     
    

//     $.ajax({
//         url: "../blog.php",
//         type: "POST",
//         success: function(data){
//             $("#view_post-data").html(data);

//                }
               
            
//         });
            
//     });


    // $("#comment_btn").on("click",function(e){
    // e.preventDefault();
    // // alert("hello");
    // var comment = $("#comment").val();
    // var p_id = $("#post_id").val();
    // $.ajax({
    // url: "php/comment.php",
    // type: "POST",
    // data: { k_comment: comment , k_id: p_id },
    // success : function(data)
    // {
    //     if(data==1){
    //         alert("Message successfully");
    //         $("#comment").val('');
    //         location.reload();
    //     }
    //     else{
    //         alert("try again");
    //     }
    // }
    // });
    // });


  $(".comment_btn_new").on("click",function(e){
    e.preventDefault();
    var dataid = $(this).attr("data-id");
    var comment = $("#comment"+dataid).val();
    var p_id = dataid;
    var user_id = $("#user_id"+dataid).val();
    // alert(comment);
     $.ajax({
     url: "php/comment.php",
     type: "POST",
     data: { k_comment: comment , k_id: p_id , k_user_id: user_id},
     success : function(data)
     {
        if(data==1){
            alert("Add Comment");
            $("#comment").val('');
            location.reload();
        }
        else{
            alert("try again");
        }
     }
     });
    });


});








    

//-------------------------post--------------------------//
    // $(document).on("click","#createPostbtn",function(e){
    //     e.preventDefault();
    //     var id = $("#u_id").val();
    //     var location = $("#location").val();
    //     var title = $("#title").val();
    //     // var image = $("#image").val();
    //     var image = new FormData("#image");
    //     var description = $("#description").val();
    //     $.ajax({
    //         url: "php/post.php",
    //         type: "POST",
    //         data: {p_id: id,p_location: location, p_title: title, p_image: image, p_description: description },
    //         contentType:false,
    //         processData:false,
    //         success : function(data){
    //             if(data == 1){
    //                 alert("Created Post successfully"); 
    //                 $("#image").show();  
    //             } else {
    //                 alert("try again , After sometime");
    //             }
    //         }
    //     });
    // });

    //---------------------------------------------------new post--------------------------------//










