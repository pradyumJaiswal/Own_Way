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
    <link href="../img/favicon.ico" rel="icon">

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
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Career</h6>
                        <h1 class="text-white"><span class="text-primary">Login</span>As Guide</h1>
                    </div>
                    <p class="text-white">After Login You can Earn</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Do You Have Your Guide id</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Do You Have Your Password</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>If Don't Have Your Guide id And Password Then You Need To Register</li>
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
                                    <input type="text" class="form-control p-4" placeholder="Guide id" name="Gid" required="required" />
                                </div> 
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" placeholder="Password" name="G_PWd" required="required" />
                                </div>
                               
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit" name="guide_login">Log in </button><br>
                                    <!--Code For User Login -->                                 
<?php 
if(isset($_POST['guide_login'])){
    $Gid=$_POST["Gid"];
    $PASSWORD=$_POST["G_PWd"];
    $SQL="select * from user_table where guide_id='$Gid' and guide_pwd='$PASSWORD' and status='0'";
    // print_r($SQL);
    // die;
    $data=mysqli_query($conect,$SQL); 
      if($row= mysqli_fetch_array($data)){
        //session_start();
        $_SESSION['g_email']=$row['email'];
        $_SESSION['guide_id']=$row['guide_id'];
        $_SESSION['g_name']=$row['full_name'];
        $_SESSION['g_id']=$row['id'];
        $_SESSION['g_file']=$row['FilesUrl'];
        $_SESSION['user_role']=$row['user_type']; 
        $_SESSION['g_phone_number']=$row['phone_number'];
        $_SESSION['g_aadhar_no']=$row['aadhar_no'];
      if($_SESSION['user_role'] == 'Guide'){
        // echo"ok loginn";
        
        header("location:../UserAfterLogin.php"); 
        
    }
    else{
        echo"<div class='text-danger font-weight-bold'>Invaild Username and Password</div>";
    }
}
    else { 
        
     // echo "Error:".$SQL."<br>".$conect->error;
      echo"<div class='text-danger font-weight-bold'>Invaild Username and Password</div>";
         
   }   
}
?>
                                    <a href="./index1.php">I Don't Have Account I Need To Register </a>
                                    <a href="" id="ForgetPassModel">Forget Password </a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------- Forget Password Model-------------------------------------------->
    <!-- Modal -->
<div class="modal fade" id="ForgetModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <div class="card border-0">
                        <div class="card-header bg-primary text-center p-2">
                            <h1 class="text-white m-0">Create New Password</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form action="../UserAction/GuideForgetPassword.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Guide id" name="Gid_F_Pwd" required="required" />
                                </div> 
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" placeholder="Password" name="G_PWd_F_Pwd" required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit" name="guide_Forget_Pwd">Change Password</button><br>
      </div>     

                                </div>
                            </form>
                        </div>
                    </div>
    </div>
  </div>
</div>
    <!------------------------- Forget Password Model-------------------------------------------->

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
    <script>
        $(document).on("click","#ForgetPassModel",function(e){
          e.preventDefault();
            alert("ok");
$("#ForgetModel").modal('show');
        })
    </script>
</body>