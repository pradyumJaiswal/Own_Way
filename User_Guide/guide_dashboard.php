<?php
      session_start();
      require_once("../include/Conn.php");
      // print_r($_SESSION);
      if(!isset($_SESSION['g_email']) )
      {

          header("location:./Layout/login.php"); 
      }
      $get_guide_id=$_SESSION['g_id'];
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
if(isset($_SESSION['g_email']))
{
?>
    <!-- Topbar Start -->
    <?php require_once("./Layout/topbar_login.php");?>
    <!-- Topbar End -->
    
<?php
}
else{

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
    
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Alloted Package</h6>
                <h1>User Details</h1>
            </div>
        </div>
    </div>
                        <?php 
                        $guide_allot_pack_quary="SELECT * FROM tour_booking WHERE alot_guide_id = '$get_guide_id' ORDER BY booking_id DESC";
                        $guide_allot_pack_view = mysqli_query($conect,$guide_allot_pack_quary);
                        while($guide_allot_pack_urow = mysqli_fetch_array($guide_allot_pack_view)){
                            $guide_allot_book_id=$guide_allot_pack_urow['booking_id'];
                            if($guide_allot_pack_urow == 0)
                            {
                        ?>
                    <div class="container-fluid py-5">
                        <div class="container pt-5 pb-3">
                            <div class="text-center mb-3 pb-3">
                            <h1 class="text-primary text-uppercase" style="letter-spacing: 5px;">No Data Found</h1>
                
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        else
                        {
                            ?>
                          

<!-- Team Start -->
  <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                
                <h3>Place - <small><?php echo $guide_allot_pack_urow['visit_city'];?>[<?php echo $guide_allot_pack_urow['visit_state'];?>]</small>  Arrival Date - <small><?php echo $guide_allot_pack_urow['arrive_date'];?></small></h3>
            </div>
            <div class="row">
            <?php 
            $guide_allot_book_quary="SELECT * FROM tour_booking INNER JOIN user_table ON tour_booking.user_id = user_table.id   WHERE  alot_guide_id = '$get_guide_id' and tour_booking.booking_id = '$guide_allot_book_id'";
            $guide_allot_book_view = mysqli_query($conect,$guide_allot_book_quary);
            while($guide_allot_book_urow = mysqli_fetch_array($guide_allot_book_view)){
                         
                        ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Booking Id</h5>
                            <p class="m-0"><?php echo $guide_allot_book_urow['booking_id'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="text-center py-4">
                            <h5 class="text-truncate">User Name</h5>
                            <p class="m-0"><?php echo $guide_allot_book_urow['full_name'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Visiting City</h5>
                            <p class="m-0"><?php echo $guide_allot_book_urow['visit_city'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Person</h5>
                            <p class="m-0">kids-<?php echo $guide_allot_book_urow['kids'];?>,Adult-<?php echo $guide_allot_book_urow['adult'];?>,Senior-<?php echo $guide_allot_book_urow['senior'];?></p>
                            
                        </div>
                    </div>
                </div>
                
                <?php
                         }

                        ?>
            </div>
        </div>
    </div>
<!-- Team End -->

 <!-- Package View Start -->
 <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">More Details</h6>
            </div>
            <div class="row">
            
                
                <div class="col-lg-4 col-md-6 mb-4">
                <?php 
                        $guide_allot_guide_quary="SELECT * FROM tour_booking INNER JOIN user_table ON tour_booking.user_id = user_table.id   WHERE  alot_guide_id = '$get_guide_id' and tour_booking.booking_id = '$guide_allot_book_id'";
                        $guide_allot_guide_view = mysqli_query($conect,$guide_allot_guide_quary);
                        while($guide_allot_guide_urow = mysqli_fetch_array($guide_allot_guide_view)){
                        ?>
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <h5 class="mb-2 text-primary">Visitor</h5>
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2"><?php echo $guide_allot_guide_urow['full_name'];?></h5>
                        <p class="m-0"><?php echo $guide_allot_guide_urow['address_user'];?></p>
                        <br><h6 class="text-primary"><a href="u_g_dashboard.php#my-guide">View Detail</a></h6>
                    </div>
                    <?php
                         }

                        ?>
                </div>
                <?php 
                        $guide_allot_card_quary="SELECT * FROM tour_booking INNER JOIN basicsubcription ON tour_booking.card_id = basicsubcription.id   WHERE  alot_guide_id = '$get_guide_id' and tour_booking.booking_id = '$guide_allot_book_id'";
                        $guide_allot_card_view = mysqli_query($conect,$guide_allot_card_quary);
                        while($guide_allot_card_urow = mysqli_fetch_array($guide_allot_card_view)){
                            $get_card_id_pack=$guide_allot_card_urow['card_id'];
                        ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <h5 class="mb-2 text-primary">Places</h5>
                        <i class="fa fa-2x fa-map-marker-alt mx-auto mb-4"></i>
                        <h5 class="mb-2"><?php echo $guide_allot_card_urow['visit_city'];?></h5>
                        
                        <br><h5 class="text-primary">View Detail</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <h5 class="mb-2 text-primary">Days</h5>
                        <i class="fa fa-2x fa-calendar-alt mx-auto mb-4"></i>
                        
                        <h5 class="mb-2"><?php echo $guide_allot_card_urow['no_of_days'];?> </h5>
                        <br><br>
                        <p class="m-0">Arrival Date : <?php echo $guide_allot_card_urow['arrive_date'];?></p>
                        <br><br>
                        <h5 class="text-primary">View Detail</h5>
                    </div>
                </div>
                <!-- Sechduling Start -->
 <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sechdule</h6>
                <h1>Your Trip Sechduled </h1>
            </div>
            <div class="row">
                
            <?php 
                        $allot_sechdule_quary="SELECT * FROM schedule_bookig INNER JOIN package_places on schedule_bookig.place_id=package_places.p_p_id  where card_id='$get_card_id_pack'";
                        $allot_sechdule_view = mysqli_query($conect,$allot_sechdule_quary);
                        while($allot_sechdule_urow = mysqli_fetch_array($allot_sechdule_view)){
                           
                        ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        
                        
                        <h5 class="mb-2">Day : <small><?php echo $allot_sechdule_urow['day'];?></small></h5>
                        <img class="img-fluid mx-auto" src="../Admin/Pages/Action/place_images/<?php echo $allot_sechdule_urow['place_Image']; ?>" style="width: 100px; height: 100px;" >
                       <br> <h6 class="m-1" style="text-aling:left"><?php echo $allot_sechdule_urow['day_part'];?> :<small><?php echo $allot_sechdule_urow['Place'];?></small></6>
                       
                    </div>
                </div>
                <?php
                        }
                        ?>
                
                
                
                
                
                
                
            </div>
        </div>
    </div>
    <!-- sechduling End -->


                <?php
                         }

                        ?>
                <!-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <h5 class="mb-2 text-primary">Travel card</h5>
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                        <h5 class="text-primary">View Detail</h5>
                    </div>
                </div> -->
            </div>
        </div>
   
<!-- Package End -->
<?php
                        }
?>
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