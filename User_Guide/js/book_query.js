$(document).ready(function(){ 
$("#submit_butn").on("click",function(){
    // alert('hello mam');
    var person = $("#no-person").val();
    var date2 = $("#dateEnd").val();
    var date1 = $("#dateStart").val();
    var city1 = $("#v_city").val();
    var silver_amount = $("#silver-amount").val();
    var gold_amount = $("#gold-amount").val();
    var plat_amount = $("#plat-amount").val();
    var card_silver_amount = $("#card-silver-amount").val();
    var card_gold_amount = $("#card-gold-amount").val();
    var card_plat_amount = $("#card-plat-amount").val();

    
    // alert(card_plat_amount);
    function daysDifference() {  
      var dateI1 = date1;  
      var dateI2 = date2;
      var datel1 = new Date(dateI1);  
      var datel2 = new Date(dateI2);  
     //calculate time difference  
      var time_difference = datel2.getTime() - datel1.getTime();  
      //calculate days difference by dividing total milliseconds in a day  
      var result = time_difference / (1000 * 60 * 60 * 24);  
      

           document.getElementById("first-date").innerHTML =    
           result + " days ";
           document.getElementById("first-date-1").innerHTML =    
           result + " days ";
           document.getElementById("first-date-2").innerHTML =    
           result + " days ";
           document.getElementById("room_day").innerHTML =    
           result + " days ";
           
           var days = result;  
           var  person_fin= person;  
     
           var amount_result = days * person_fin * silver_amount;
           var amount_result_gold = days * person_fin * gold_amount; 
           var amount_result_plat = days * person_fin * plat_amount; 

           var fix_amount_result = person_fin * card_silver_amount;
           var fix_amount_result_gold = person_fin * card_gold_amount; 
           var fix_amount_result_plat = person_fin * card_plat_amount; 
     
           document.getElementById("first_amount").innerHTML =    
           amount_result + "/-";
           document.getElementById("first_amount-gold").innerHTML =    
           amount_result_gold + "/-  ";
           document.getElementById("first_amount-plat").innerHTML =    
           amount_result_plat + "/- ";
           document.getElementById("first_amount-fixed").innerHTML =    
           fix_amount_result + " Total Amount ";
           document.getElementById("first_amount-gold-fixed").innerHTML =    
           fix_amount_result_gold + " Total Amount ";
           document.getElementById("first_amount-plat-fixed").innerHTML =    
           fix_amount_result_plat + " Total Amount ";
           document.getElementById("total_silver").innerHTML =    
           fix_amount_result + " Total Amount ";
           document.getElementById("total_gold").innerHTML =    
           fix_amount_result_gold + " Total Amount ";
           document.getElementById("total_plat").innerHTML =    
           fix_amount_result_plat + " Total Amount ";

           
           
          }  
          // debugger
    $.ajax({
                      url: "php/book_query.php",
                      type: "POST",
                      data: { b_city1: city1,  b_date1: date1, b_date2: date2, b_person: person  },
                      success : function(data){
                        if(data == 1){
                         
                        alert("Choose Your Perfect Packages");
                        

                        document.getElementById("disp-person").innerHTML =    
                        person;
                        daysDifference();
                        // document.getElementById("last-date").innerHTML =    
                        // date2;
                        document.getElementById("disp-city").innerHTML =    
                        city1;
                        document.getElementById("disp-person-1").innerHTML =    
                        person;
                        // document.getElementById("first-date-1").innerHTML =    
                        // date1 +" "+ " to " + ""+ date2;
                        
                        // document.getElementById("last-date-1").innerHTML =    
                        // date2;
                        document.getElementById("disp-city-1").innerHTML =    
                        city1;
                        document.getElementById("disp-person-2").innerHTML =    
                        person;
                        // document.getElementById("first-date-2").innerHTML =    
                        // date1 +" "+ " to " + ""+ date2;
                        
                        // document.getElementById("last-date-2").innerHTML =    
                        // date2;
                        document.getElementById("disp-city-2").innerHTML =    
                        city1;
                        document.getElementById("pack_person").innerHTML =    
                        person;
                       
                        document.getElementById("pack_city").innerHTML =    
                        city1;
                       
                        document.getElementById("disp-city-fix-1").innerHTML =    
                        city1;
                        document.getElementById("disp-person-fix-1").innerHTML =    
                        person;
                        document.getElementById("disp-city-fix-2").innerHTML =    
                        city1;
                        document.getElementById("disp-person-fix-2").innerHTML =    
                        person;
                        document.getElementById("disp-city-fix-3").innerHTML =    
                        city1;
                        document.getElementById("disp-person-fix-3").innerHTML =    
                        person;
                        date1
                        document.getElementById("date-picker-example-1").innerHTML =    
                        date1;
                        document.getElementById("blkwhfkh").innerHTML =    
                        city1;
                        

                        }else{
                            alert("try again");
                        }
                      }
            });

        });
      });

