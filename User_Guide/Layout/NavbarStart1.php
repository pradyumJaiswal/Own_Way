<div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">OWN</span>WAY</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        
                        <?php
 if(!isset($_SESSION['email']) && !isset($_SESSION['g_email']) )
{
?>
                        <a href="../index.php" class="nav-item nav-link active">Home</a>
                         <a href="./about.php" class="nav-item nav-link">About</a> 
                         <?php
}
else{

    ?>
    <a href="./UserAfterLogin.php" class="nav-item nav-link active">Home</a>
    <?php
}
    ?>
                        <!-- <a href="service.php" class="nav-item nav-link">Services</a> -->
                        
                       
                        

   
    

    <!-- Not SC Card -->
    <?php
if(!isset($_SESSION['user_role']) == "guide")
{
    ?>
    <a href="package.php" class="nav-item nav-link">Tour Packages</a>
    <?php
}
    ?>
  

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Explore</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                            <?php
if(isset($_SESSION['email']) )
{
?>
                      <a href="blog.php" class="dropdown-item">Activity Feeds</a>

<?php
}

    ?>
    <?php
    if(isset($_SESSION['g_email']) )
{
?>
                      <a href="blog.php" class="dropdown-item">Activity Feeds</a>

<?php
}

    ?>
                                
                                <a href="single.php" class="dropdown-item">Blogs</a>
                                <!-- <a href="destination.php" class="dropdown-item">Destination</a>
                                <a href="guide.php" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a> -->
                            </div>
                        </div>
                       
                        <?php
if(!isset($_SESSION['g_email']) && !isset($_SESSION['email'])){
?>
                        <a href="career_opt.php" class="nav-item nav-link">Career Option</a>
<?php
}

    ?>


             
                       
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <?php
                        if(isset($_SESSION['email']) )
{
?>
                      <a href="u_g_dashboard.php" class="nav-item nav-link">Booking</a>

<?php
}

    ?>
    <?php
    if(isset($_SESSION['g_email']) )
{
?>
                      <a href="guide_dashboard.php" class="nav-item nav-link">Package Detail</a>

<?php
}

    ?>

                        <!-- <a href="#Singup" class="nav-item nav-link">Singup/Login</a> -->
                    </div>
                </div>
            </nav>
        </div>
    </div>