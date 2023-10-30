<?php
ob_start();
require_once("../../include/Conn.php");
session_start();
?><head>
    <meta charset="utf-8">
    <title>Career OPtion Own_Way</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
     <!-- Navbar Start -->
  <?php require_once("./nav3.php");?>
    <!-- Navbar End -->
<div class="container-fluid bg-registration py-5" style="margin: 0px 0;" id="Singup">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">To Be A Guide</h6>
                        <h1 class="text-white"><span class="text-primary">You Have To</span> Register</h1>
                    </div>
                    <p class="text-white">After Registration You Get Career Option
                        </p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>You Have To Use Your Adhar</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>You Have To Use Authntic Email</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>You Have To Use Authntic Phone</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>You Have To Use Authntic Phone</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>You Have To Use Authntic Adhar</li>
                        <!-- <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>You Have To Create Your Password</li> -->
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Submit Your Resume in Pdf</li>   


                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Register Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form action="../UserAction/guideSignup.php" method="post" onsubmit="return validationGuide()" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name" name="name" id="userGuide"   />
                                    <span id="useralert" class="text-danger font-weight-bold"></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email" name="email" id="email"  />
                                    <span id="email1" class="text-danger font-weight-bold"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your contact number" name="contact" id="contact"  />
                                    <span id="contact1" class="text-danger font-weight-bold"></span>
                                </div>
                               
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your Address" name="address" id="address"  />
                                    <span id="address1" class="text-danger font-weight-bold"></span>

                                </div>

                                <!-- <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Password" name="pass"  />
                                </div> -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control p-4"  name="profile" id="guideResume"  />
                                    <label class="custom-file-label">Upload Resume</label>
                                </div>
                                <span id="guideResume1" class="text-danger font-weight-bold"></span>
                                <br><br>
                                <!-- <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Select a destination</option>
                                        <option value="1">destination 1</option>
                                        <option value="2">destination 1</option>
                                        <option value="3">destination 1</option>
                                    </select>
                                </div> -->
                                <div class="custom-file">
                        <input type="file" class="custom-file-input" id="UpdatedFormImage" name="GuideProfilePicture" />
                        <label class="custom-file-label">Upload Profile Image</label>
                      </div>
                      <span id="GuideProfilePicture1" class="text-danger font-weight-bold"></span>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit" name="guide_signup">Register</button>
                                   <a href="guidelogin.php">Already Registered </a><br><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <!-- <script src="../js/guide_validation.js"></script> -->
    <script>
    function validationGuide(){
     
        alert("ok");
    var user =document.getElementById('userGuide').value;
    alert(user);
    var email =document.getElementById('email').value;
    var contact =document.getElementById('contact').value;
    var address =document.getElementById('address').value;

  // var filep =document.getElementById('profile').value;
   // var GuideProfilePicture =document.getElementById('GuideProfilePicture').value;
    
    
    if(user == ""){
      document.getElementById('useralert').innerHTML = "*Please fill the username*";
      return false;
    }
    
    if((user.length <= 2) || (user.length > 50)){
      document.getElementById('useralert').innerHTML = "*Username must be between 2 to 50 character*";
      return false;
    }
    if(!isNaN(user)){
      document.getElementById('useralert').innerHTML = "*Only characters are allowed*";
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
      document.getElementById('address1').innerHTML = "*Please Fill This Field*";
      return false;
    }
    if((address.length <= 2) || (address.length > 50)){
      document.getElementById('address1').innerHTML = "*Username must be between 2 to 50 character*";
      return false;
    }
    if( document.getElementById("guideResume").files.length == 0 ){
        document.getElementById('guideResume1').innerHTML = "*Upload Your Resume*";
        return false;

}
if( document.getElementById("UpdatedFormImage").files.length == 0 ){
        document.getElementById('GuideProfilePicture1').innerHTML = "*Upload Your Picture*";
        return false;
}
    // if(file == ""){
    //   document.getElementById('profile1').innerHTML = "*Please upload your Resume first*";
    //   return false;
    // }
    // if(GuideProfilePicture == ""){
    //   document.getElementById('GuideProfilePicture1').innerHTML = "*Please upload your Profile*";
    //   return false;
    // }
    
      }
</script>
</body>