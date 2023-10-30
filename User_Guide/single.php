<?php
      session_start();
      // print_r($_SESSION);
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

<body>
<?php
if(isset($_SESSION['email']) )
{
?>
    <!-- Topbar Start -->
    <?php require_once("./Layout/topbar_login.php");?>
    <!-- Topbar End -->
    <?php include("./Layout/sidebar.php");?>
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



    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Blog - Own Way</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Blog</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Header End -->
    <?php
                      if(isset($_SESSION['email'])){
                     ?>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"></h6>
                <h1></h1>
            </div>
        </div>
    </div>
    <?php
                      }
                     ?>
</div>
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row" id="read-blog">
                <div class="col-lg-12">
                <?php
                      if(isset($_SESSION['g_email'])){
                     ?>
                <!-- create blog Form start -->


                <div class="bg-white mb-3" style="padding: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Create Blog</h4>
                        <form method="POST" enctype="multipart/form-data"  id="blogForm" novalidate="novalidate">
                        <input type="text" class="form-control" name="g_id" value="<?php echo $_SESSION['g_id'];?>" id="guide_id" hidden>
                        <div class="form-group">
                                <label for="blog_location">Location *</label>
                                <input type="text" class="form-control" name="blog_location" id="blog_location">
                            </div>  
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="file" id="blog_image">
                            </div>  
                        <div class="form-group">
                                <label for="heading">Heading *</label>
                                <input type="text" class="form-control" name="heading" id="heading">
                            </div>
                            
                            
    
                            <div class="form-group">
                                <label for="content">Content *</label>
                                <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="s_heading">Sub Heading </label>
                                <input type="s_heading" class="form-control" name="s_heading" id="s_heading">
                            </div>
                            <div class="form-group">
                                <label for="image">Sub Image</label>
                                <input type="file" class="form-control" name="sub_file" id="sub_blog_image" placeholder="100*100">
                            </div> 
                            <div class="form-group">
                                <label for="content">Sub Content </label>
                                <textarea name="sub_content" id="sub_content" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" id="createblogbtn" value="Add Blog"
                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                    <!-- create blog Form End -->
<?php
                      }
                      ?>
                    <!-- Blog Detail Start -->
                    
                    <?php
                    $blog_quary="SELECT * FROM blog INNER JOIN user_table ON blog.user_id = user_table.id ORDER BY blog_at DESC ";
                        $blog_view = mysqli_query($conect,$blog_quary);
                        while($blog_urow = mysqli_fetch_array($blog_view)){
                        ?>
                        <p>
                    <div class="pb-3">
                    
                    <div class="media mb-4">
                            <img src="../Admin/Pages/Signup_file/<?php echo $blog_urow['FilesUrl'];?>" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h3><a href=""><?php echo $blog_urow['full_name'];?></a> </h3>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="php/<?php echo $blog_urow['Blog_image'];?>" style="width: 100px; height: 600px;">
                                <div class="">
                                    <h6 class=""><small></small></h6>
                                    <!-- <small class="text-white text-uppercase">Jan</small> -->
                                </div>
                            </div>
                        </div>
                        <p>
                        <div class="bg-white-flex mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $blog_urow['Location'];?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $blog_urow['blog_at'];?></a>
                            </div>
                            <h2 class="mb-3"><?php echo $blog_urow['Heading'];?></h2>
                            <p><?php echo $blog_urow['Content'];?></p>
                            
                            <h4 class="mb-3"><?php echo $blog_urow['SubHeading'];?></h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" value="php/default.jpg" src="php/<?php echo $blog_urow['sub_image'];?>" style="width: 50px; height: 200px;">
                            <p><?php echo $blog_urow['sub_content'];?></p>
                        </div>
                        
                        </div>
                        </p><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                      
                    <!-- Blog Detail End -->
    
                    
    
                   
                
    
                
                    <!-- Search Form -->
                    <!-- <div class="mb-5">
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

                    <!-- Category List -->
                    <!-- <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Design</a>
                                    <span class="badge badge-primary badge-pill">150</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Development</a>
                                    <span class="badge badge-primary badge-pill">131</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Online Marketing</a>
                                    <span class="badge badge-primary badge-pill">78</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Keyword Research</a>
                                    <span class="badge badge-primary badge-pill">56</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Email Marketing</a>
                                    <span class="badge badge-primary badge-pill">98</span>
                                </li>
                            </ul>
                        </div>
                    </div> -->
    
                    <!-- Recent Post -->
                    <!-- <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    </div> -->
    
                    <!-- Tag Cloud -->
                    <!-- <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                        </div>
                    </div> -->
                        
                    <?php
                        }
                        ?>
                        <!-- <div class="col-lg-4 mt-5 mt-lg-0">
                     Author Bio
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <img src="img/user.png" class="img-fluid mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-primary mb-3">OWN WAY</h3>
                        <p>Stay Travel Guide<br><br> { Smart Travel & Spend Less }</p>
                        <div class="d-flex justify-content-center">
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                    </div>
                    </div>
                </div> -->
                     </div>     
            </div>
        </div>
    </div>
    </div>
        </div>
    </div> 
    </div>    
    </div>  
           
    <!-- Blog End -->


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
    <script src="js/ajax.js"></script>
</body>

</html>