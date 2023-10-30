<?php
      session_start();
      // print_r($_SESSION);
      if(!isset($_SESSION['email']) && !isset($_SESSION['g_email']) )
      {

          header("location:./Layout/login.php"); 
      }
      require_once("../include/Conn.php");
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRAVELER - Free Travel Website Template</title>
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
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- side baar -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/cust_side.css" rel="stylesheet">
</head>
<style>
   
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<body>


<?php
if(isset($_SESSION['email']) )
{
?>
    <!-- Topbar Start -->
    <?php require_once("./Layout/topbar_login.php");?>
    <!-- Topbar End -->
   
<?php
}
else if(isset($_SESSION['g_email'])){

?>
    <!-- Topbar Start -->
    <?php require_once("./Layout/topbar_login.php");?>
    <!-- Topbar End -->
    
<?php
}
else {
?>
     <!-- Topbar Start -->
    <?php require_once("./Layout/TopbarStart.php");?>
    <!-- Topbar End -->   
<?php
}
?>

    <!-- Navbar Start -->
    <?php require_once("./Layout/NavbarStart1.php");?>
    <!-- Navbar End -->
    <?php
    
if(isset($_SESSION['user_type']) == "user")
{
?>
 <!-- profile Start -->
 <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="../Admin/Pages/Signup_file/<?php echo $_SESSION['file'];?>" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php echo $_SESSION['name'];?>
                                    </h5>
                                    <h6 class="text-primary">
                                        Your Information                                    </h6>
                                    <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                            
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Activity</a>
                                </li>
                                
                            </ul>
                                
                               
                            
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Change Password</a><br/>
                            <a href="">Add More Deatails</a><br/>
                        </div>
                    </div>
                
                <div class="row">
                
                    <div class="col-md-8">
                        
                    </div>
                    <div class="col-md-10">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Type</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p class="text-primary"> <?php echo $_SESSION['user_type'];?>  </p>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="message" placeholder="<?php echo $_SESSION['name'];?>" >
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p class="text-primary"> <?php echo $_SESSION['email'];?>  </p>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="message" placeholder="<?php echo $_SESSION['phone_number'];?>" >
                                            </div>
                                        </div>
                                        <br><br>
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="message" placeholder="<?php echo $_SESSION['address_user'];?>" >
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>
 <!-- profile End -->
 <?php
}
else{
?>
 <!-- profile Start -->
 <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="../Admin/Pages/Signup_file/<?php echo $_SESSION['g_file'];?>" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php echo $_SESSION['g_name'];?>
                                    </h5>
                                    <h6 class="text-primary">
                                        Your Information                                    </h6>
                                    <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                            
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Activity</a>
                                </li>
                                
                            </ul>
                                
                               
                            
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Change Password</a><br/>
                            <a href="">Add More Deatails</a><br/>
                        </div>
                    </div>
                
                <div class="row">
                
                    <div class="col-md-8">
                        
                    </div>
                    <div class="col-md-10">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Type</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p class="text-primary"> <?php echo $_SESSION['user_role'];?>  </p>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="message" placeholder="<?php echo $_SESSION['g_name'];?>" >
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p class="text-primary"> <?php echo $_SESSION['g_email'];?>  </p>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="message" placeholder="<?php echo $_SESSION['g_phone_number'];?>" >
                                            </div>
                                        </div>
                                        <br><br>
                                        
                                        
                                       
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="message" placeholder="<?php echo $_SESSION['address_user'];?>" >
                                            </div>
                                        </div> -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>
 <!-- profile End -->
 <?php
}
?>
</div>
</div>


    <!-- Footer Start -->
    <?php require_once("./Layout/footer.php");?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/book_query.js"></script>
    <script src="js/cust_side.js"></script>
</body>

</html>