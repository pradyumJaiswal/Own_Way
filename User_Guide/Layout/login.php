<?php
ob_start();
require_once("../../include/Conn.php");
session_start();
?>
<head>
    <meta charset="utf-8">
    <title>TRAVELER - Free Travel Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="./img/favicon.ico" rel="icon">

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

<div class="container-fluid bg-registration py-5" style="margin: 0px 0; height: 120%;" >
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> Book Package</h1>
                    </div>
                    <p class="text-white">You Can do</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Book Package</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Activity Feeds</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Read Blog</li>
                    </ul>
                </div>
                <div class="col-lg-5" style="margin: -30px 0;">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Login Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email" name="email" required="required" />
                                </div> 
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" placeholder="Password" name="pass" required="required" />
                                </div>
                                <!--   <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Select a destination</option>
                                        <option value="1">destination 1</option>
                                        <option value="2">destination 1</option>
                                        <option value="3">destination 1</option>
                                    </select> 
                                </div>-->
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit" name="user_login">Log in </button><br>
                                    <!--Code For User Login -->                                 
<?php 
if(isset($_POST['user_login'])){
    $EMAIL=$_POST["email"];
    $PASSWORD=$_POST["pass"];
    $SQL="select * from user_table where email='$EMAIL' and Pwd='$PASSWORD'";
    //print_r($SQL);
    //die;
    $data=mysqli_query($conect,$SQL); 
      if($row= mysqli_fetch_array($data)){
        //session_start();
        $_SESSION['email']=$row['email'];
        $_SESSION['name']=$row['full_name'];
        $_SESSION['id']=$row['id'];
        $_SESSION['file']=$row['FilesUrl'];
        $_SESSION['user_type']=$row['user_type'];
        $_SESSION['phone_number']=$row['phone_number'];
        
        $_SESSION['address_user']=$row['address_user']; 
      if($_SESSION['user_type'] == 'user'){
       
        header("location:../../User_Guide/UserAfterLogin.php"); 
        
    }
    elseif($_SESSION['user_type'] == 'Admin'){
       
        header("location:../../Admin/Pages/AdminPages/dashboard.php"); 
       // require_once("");
        
    }
    else{
        echo"<div class='text-danger font-weight-bold'>Please Enter vaild User Details</div>";
    }
}
    else { 
        
     // echo "Error:".$SQL."<br>".$conect->error;
      echo"<div class='text-danger font-weight-bold'>Invaild Username and Password</div>";
         
   }   
}
?>
                                    <a href="../../index.php#Singup">I Don't Have Account I Need To Sign Up </a>
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
</body>