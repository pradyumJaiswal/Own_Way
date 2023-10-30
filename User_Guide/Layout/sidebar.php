
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    
    
 

</head>

<body>
<div class="page-wrapper chiller-theme toggled" style="height: 20vh">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Own Way</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="../Admin/Pages/Signup_file/<?php echo  $_SESSION['file']; ?>"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name"><?php echo  $_SESSION['name']; ?>
          
          </span>
          <span class="user-role"><?php echo  $_SESSION['user_type']; ?></span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
          
        </div>
      </div>
      <!-- sidebar-header  -->

                  <!-- sidebar-search  -->
      <!-- sidebar-header  -->
      
                  <!-- sidebar-header  -->
                                    <div class="sidebar-search">
                                      <div>
                                        <a href="u_g_profile.php" class="header-menu">
                                          <span>Edit Profile</span>
                                        </a>
                                      </div>
                                    </div>
                  <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="fa fa-shopping-cart"></i>
            
              <span>Booking</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="u_g_dashboard.php#u_package_detail">Package Detail
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <!-- <li>
                  <a href="u_g_dashboard.php#my-hotel">Alloted Facility
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li> -->
                <li>
                  <a href="u_g_dashboard.php#u_package_sechdule">Package Sechdule
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <!-- <li>
                  <a href="u_g_dashboard.php#u_package_detail">Visiting Places
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li> -->
                
              </ul>
            </div>
          </li>
          
          
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Activity Feeds</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="blog.php#create-post-form">Create Post</a>
                </li>
                <li>
                  <a href="blog.php#view-post">View Post</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="fa fa-book"></i>
              
              <span>Blog</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="single.php#read-blog">Read Blog</a>
                </li>
                <li>
                  <a href="career_opt.php">Write Blog</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Explore</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
              <li>
                  <a href="package.php">Query</a>
                </li>
                <li>
                  <a href="package.php#show-card_after">Subscription Card</a>
                </li>
                <li>
                  <a href="package.php#package-view-silver">Perfect Packages</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="contact.php#contact-form">
             
              <span>Contact As</span>
              
            </a>
          </li>
          <li>
            <a href="career_opt.php">
              
              <span>Carrer Option</span>
            </a>
          </li>
          <li>
            <a href="feedback.php">
              <!-- <i class="fa fa-folder"></i> -->
              <span>Feedback</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <!-- <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a> -->
      <!-- <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a> -->
      <!-- <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a> -->
      <a href="./Layout/logout.php">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  
  

    
</body>

</html>