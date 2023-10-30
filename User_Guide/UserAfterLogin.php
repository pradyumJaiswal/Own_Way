<?php
      session_start();
                            if(!isset($_SESSION['email']) && !isset($_SESSION['g_email']) )
                            {

                                header("location:./Layout/login.php"); 
                            }
                         require_once("../include/Conn.php");   
?> 
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/cust_side.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
   <?php require_once("./Layout/topbar_login.php");?>
    <!-- Topbar End -->
    <?php
if(isset($_SESSION['email']) )
{
?>
    <?php include("./Layout/sidebar.php");?>
    <?php
}
?>
 <!-- Navbar Start -->
 <?php require_once("./Layout/NavbarStart1.php");?>
    <!-- Navbar End -->

    <!-- PHP CODE -->
<?php 

?>
    <!-- PHP CODE -->

    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Welcome to your OWN WAY</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Profile</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
   <!-- Blog Start -->
   <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/blog-10.jpg" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <h2 class="mb-3">Bhedaghat , Dhooandhar Waterfall</h2>
                            <p>The Dhuandhar Falls is located on the Narmada River in Bhedaghat and are 30 meters high. The Narmada River, making its way through the world-famous Marble Rocks, narrows down and then plunges into a waterfall known as Dhuandhar. The plunge, which creates a bouncing mass of mist, is so powerful that its roar can be heard from a far distance. Boating is available at Dhuandhar Falls.</p>
                            <!-- <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                                vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                                nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                                ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                                clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                                justo dolore sit invidunt.</p> -->
                            <!-- <h4 class="mb-3">Est dolor lorem et ea</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-2.jpg">
                            <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                                invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                                lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                                rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                                sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                                lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                                sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam
                                dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna
                                sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et
                                duo tempor sea kasd clita ipsum et.</p>
                            <h5 class="mb-3">Est dolor lorem et ea</h5> -->
                            <!-- <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-3.jpg">
                            <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                                invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                                lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                                rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                                sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                                lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                                sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam
                                dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna
                                sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et
                                duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat
                                aliquyam et ut.</p>-->
                        </div>
                    </div> 
                     <!--Blog Detail End -->
    
                    <!-- Comment List Start -->
                    <!-- <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h4>
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                            </div> -->
                        <!-- </div>
                        <div class="media">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                                <div class="media mt-4">
                                    <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                            labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                            eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet
                                            ipsum diam tempor consetetur at sit.</p>
                                        <button class="btn btn-sm btn-outline-primary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Comment List End -->
    
                    <!-- Comment Form Start -->
                    <!-- <div class="bg-white mb-3" style="padding: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Leave a comment</h4>
                        <form>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label> -->
                                <!-- <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>
    
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment"
                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div> -->
                    <!-- Comment Form End -->
                </div>
                <?php
if(isset($_SESSION['user_type']) == "user")
{
?>
    <div class="col-lg-4 mt-5 mt-lg-0">
                   <!-- Author Bio -->
                     <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <div class="input-group">
                                
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary text-white"><H4>
                                        Profile
                                    </h4></span>
                                </div>
                            </div>
                        </div>
                    </div> 
                         <img src="../Admin/Pages/Signup_file/<?php echo $_SESSION['file'];?>" class="img-fluid mx-auto mb-3" style="width: 100px;">
                        <h3 class="mb-3"><?php echo $_SESSION['name'];?></h3>
                        <h6 class=" mb-3"><?php echo $_SESSION['email'];?></h6>
                        <p><h6 class=" mb-3">Bio -</h6><small></small></p>
                        
                        <div class="d-flex justify-content-center">
                           
                            <a class="text-primary px-2" href="u_g_profile.php">
                                Edit Your Profile
                            </a>
                        </div> 
                    </div>
<?php
}
else 
{
?>
   <div class="col-lg-4 mt-5 mt-lg-0">
                   <!-- Author Bio -->
                     <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <div class="input-group">
                                
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary text-white"><H2>
                                        Profile
                                    </h2></span>
                                </div>
                            </div>
                        </div>
                    </div> 
                         <img src="../Admin/Pages/Signup_file/<?php echo $_SESSION['g_file'];?>" class="img-fluid mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-primary mb-3"></h3>
                        <h3 class=" mb-3"><?php echo $_SESSION['g_name'];?></h3>
                        <h6 class="mb-3"><?php echo $_SESSION['g_email'];?></h6>
                        <p><h6 class=" mb-3">Bio -</h6><small></small></p>
                        
                        <div class="d-flex justify-content-center">
                           
                            <a class="text-primary px-2" href="u_g_profile.php">
                                Edit Your Profile
                            </a>
                        </div> 

                    </div>
    
    
<?php
}

?>
     
                
                     <!-- Search Form-->
                    <!--<div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <div class="input-group">
                                <input type="text" class="form-control p-4" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary text-white"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div> -->

                        </div>
                        </div>
                        </div>
                        </div>
                        
          <!---------------------- blog--------------->             
<div>


<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
                <h1>Latest From Our Blog</h1>
            </div>
            
            
            
            <div class="row pb-3">
               
            <?php
                    $blog_quary="SELECT * FROM blog INNER JOIN user_table ON blog.user_id = user_table.id ORDER BY blog_at DESC limit 3";
                        $blog_view = mysqli_query($conect,$blog_quary);
                        while($blog_urow = mysqli_fetch_array($blog_view)){
                        ?>
            
            <a href="single.php">
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="php/<?php echo $blog_urow['Blog_image'];?>" style="width: 100px; height: 300px;">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"><?php echo $blog_urow['blog_id'];?></h6>
                                <small class="text-white text-uppercase"></small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $blog_urow['Location'];?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $blog_urow['blog_at'];?></a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href=""><?php echo $blog_urow['Heading'];?></a>
                        </div>
                    </div>
                </div>
                        </a>
                
                <?php
                        }
                        ?>
            </div>
        </div>
    </div>
    <!---------------------- blog end---------------> 

    <!---------------------- feed back start---------------> 
    <?php



?> 
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Clients Review</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
            <?php
                    $feedback_quary="SELECT * FROM feedback INNER JOIN user_table ON feedback.client_id = user_table.id ORDER BY feedback_at DESC";
                        $feedback_view = mysqli_query($conect,$feedback_quary);
                        while($feedback_urow = mysqli_fetch_array($feedback_view)){
                        ?>
            
            <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="../Admin/Pages/Signup_file/<?php echo $feedback_urow['FilesUrl']; ?>" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5"><?php echo $feedback_urow['Feedback'];?>
                        </p>
                        <h5 class="text-truncate"><?php echo $feedback_urow['Client_name'];?></h5>
                        <span><?php echo $feedback_urow['address_user'];?></span>
                    </div>
                </div>
                <?php
                        }
                        ?>
            </div>
        </div>
    </div>
    <!---------------------- feedback end---------------> 
      <!-- Footer Start -->
   <?php require_once("./Layout/FooterStart.php");?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

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
    <script src="js/cust_side.js"></script>
