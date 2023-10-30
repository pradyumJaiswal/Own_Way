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
                        <a href="../../index.php" class="nav-item nav-link active">Home</a>
                        <a href="../about.php" class="nav-item nav-link">About</a>
                         <?php
}
else{

    ?>
    <a href="../UserAfterLogin.php" class="nav-item nav-link active">Home</a>
    <?php
}
    ?>
                        
                        <!-- <a href="../service.php" class="nav-item nav-link">Services</a>
                        <a href="../package.php" class="nav-item nav-link">Tour Packages</a> -->
                        
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="../blog.php" class="dropdown-item">Blog Grid</a>
                                <a href="../single.php" class="dropdown-item">Blog Detail</a>
                                <a href="../destination.php" class="dropdown-item">Destination</a>
                                <a href="../guide.php" class="dropdown-item">Travel Guides</a>
                                <a href="../testimonial.php" class="dropdown-item">Testimonial</a>
                                 <a href="../testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div> -->
                        <a href="../contact.php" class="nav-item nav-link">Contact</a>
                        <!-- <a href="../User_Guide/./index1.php" class="nav-item nav-link">Career Option </a> -->

                        
                    </div>
                </div>
            </nav>
        </div>
    </div>