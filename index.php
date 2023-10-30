<?php
      session_start();
      // print_r($_SESSION);
             if(isset($_SESSION['email']))
                            {
                             header("location:./User_Guide/UserAfterLogin.php");
                            }
                           
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Own Way</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="./User_Guide/imgfavicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./User_Guide/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./User_Guide/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./User_Guide/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
   <?php require_once("./User_Guide/Layout/TopbarStart.php");?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php require_once("./User_Guide/Layout/NavbarStart.php");?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./User_Guide/img/orgbhedaghat.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Stay Travel Guide</h4>
                            <h1 class="display-3 text-white mb-md-4">Spend Less Travel Smart!</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./User_Guide/img/orgview.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Stay Travel Guide</h4>
                            <h1 class="display-3 text-white mb-md-4">Spend Less Travel Smart!</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
                        
    <!-- Carousel End -->

   
    


    <!-- About Start --> 
                
    <?php require_once("./User_Guide/Layout/indexAbout.php"); ?>
    <!-- About End -->


    <!-- Feature Start -->
    <?php require_once("./User_Guide/Layout/FeatureStart.php"); ?>
    <!-- Feature End -->


    <!-- Destination Start -->
    <?php require_once("./User_Guide/Layout/DestinationStart.php"); ?>
    <!-- Destination Start -->


    <!-- Service Start -->
     <?php require_once("./User_Guide/Layout/ServiceStart.php"); ?>
     <!-- Service End -->


    <!-- Packages Start -->
    <?php require_once("./User_Guide/Layout/PacckageStart.php");?>
    <!-- Packages End -->


    <!-- Registration Start -->
   <?php require_once("./User_Guide/Layout/RegistrationStart.php");?>
    <!-- Registration End -->


    <!-- Team Start -->
   <!-- require_once("./User_Guide/Layout/TeamStart.php");?> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
   <?php require_once("./User_Guide/Layout/TestimonialStart.php");?>
    <!-- Testimonial End -->

<!-- 
    Blog Start -->
   <?php require_once("./User_Guide/Layout/BlogStart.php");?>
    <!-- Blog End -->

                        </div>
    <!-- Footer Start -->
   <?php require_once("./User_Guide/Layout/FooterStart.php");?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="./User_Guide/lib/easing/easing.min.js"></script>
    <script src="./User_Guide/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./User_Guide/lib/tempusdominus/js/moment.min.js"></script>
    <script src="./User_Guide/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./User_Guide/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Template Javascript -->
<script src="./User_Guide/js/main.js"></script>
    <!-- Script For Depended Select Box -->
    <!-- Contact Javascript File -->
    <script src="./User_Guide/mail/jqBootstrapValidation.min.js"></script>
    <script src="./User_Guide/mail/contact.js"></script>
    <!-- <script src="./User_Guide/js/User_validation.js"></script> -->

    
    <script type="text/javascript">
$(document).ready(function(){
            function loadData(type, category_id){
            $.ajax({
                url : "./User_Guide/UserAction/dataload.php",
                type :"POST",
                data : {type : type, id : category_id},
                success : function(data){
                    if(type == "stateData"){
                        $('#state').html(data); 
                    }else if(type == "cityData"){
                        $('#city').html(data); 
                    }
                    else{
                        $('#country').append(data); 
                    } 
                }
            });
            }
            loadData();
            $("#country").on("change",function(){
                var country = $("#country").val();
                loadData("stateData", country); 
            })
            $("#state").on("change",function(){
                var state = $("#state").val();
                loadData("cityData", state); 
            })
            var Guru = '#Singup'
  $('#sign').attr("href",Guru);
        });

    </script>
  <script>
   function validation(){
    var user_r =document.getElementById('user').value;
    var email =document.getElementById('email').value;
    var contact =document.getElementById('contact').value;
    var address =document.getElementById('address').value;
    var file =document.getElementById('profile').value;
    var password =document.getElementById('pass').value;
    if(user_r == ""){
      document.getElementById('user_rr').innerHTML = "*Please fill the username*";
      return false;
    }
    
    if((user.length <= 4) || (user.length > 50)){
      document.getElementById('user1').innerHTML = "*Username must be between 5 to 50 character*";
      return false;
    }
    if(!isNaN(user)){
      document.getElementById('user1').innerHTML = "*Only characters are allowed*";
      return false;
    }
    if(email == ""){
      document.getElementById('email1').innerHTML = "*Please fill the email *";
      return false;
    }
    if(contact == ""){
      document.getElementById('contact1').innerHTML = "*Please enter your mobile number*";
      return false;
    }
    if(isNaN(contact)){
      document.getElementById('contact1').innerHTML = "*User must write digits only*";
      return false;
      }
      if(contact.length!=10){
      document.getElementById('contact1').innerHTML="*Moblie number be must write 10 digits*";
      return false;
    }
    if(address == ""){
      document.getElementById('address1').innerHTML = "*Please fill the address*";
      return false;
    }
    
    if((address.length <= 2) || (address.length > 50)){
      document.getElementById('address1').innerHTML = "*address must be between 2 to 50 character*";
      return false;
    }
    if( document.getElementById("profile").files.length == 0 ){
        document.getElementById('profile1').innerHTML = "*Upload Your Picture*";
        return false;
}
    if(password == ""){
      document.getElementById('pass1').innerHTML = "*Please fill the password*";
      return false;
    }
    if((password.length <= 4) || (password.length > 50)){
      document.getElementById('pass1').innerHTML = "*Password must be between 5 to 50 character*";
      return false;
    }
    
      }
  </script>
   
</body>

</html>
