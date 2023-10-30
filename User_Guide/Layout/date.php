<html>   
<head>   
    <title> Calculate days between dates </title>   
      <script>  
       function daysDifference() {  
         //define two variables and fetch the input from HTML form  
         var dateI1 = document.getElementById("dateInput1").value;  
         var dateI2 = document.getElementById("dateInput2").value;  
  
        //define two date object variables to store the date values  
         var date1 = new Date(dateI1);  
         var date2 = new Date(dateI2);  
   
        //calculate time difference  
         var time_difference = date2.getTime() - date1.getTime();  
  
         //calculate days difference by dividing total milliseconds in a day  
         var result = time_difference / (1000 * 60 * 60 * 24);  
  
         return document.getElementById("result").innerHTML =    
              result + " days between both dates. ";  
                    }  
      </script>    
</head>    
<body>   
    
    <h2 style="color: 32A80F" align="Center">    
            Javatpoint : Calculate days between dates   
        <br> <br> </h2>   
    
        <p align="Center"> <b> Enter date1   </b>   
        <input type="date" id="dateInput1">   
        <br> <br>   
          
        <p align="Center"> <b> Enter date2   </b>   
        <input type="date" id="dateInput2">   
        <br> <br>       
    
        <button onclick="daysDifference()">   
          Calculate number of days   
        </button>   
    </p>   
    
    <h3 style="color:32A80F" id="result" align="center"></h3>   
    
</body>    
</html>  