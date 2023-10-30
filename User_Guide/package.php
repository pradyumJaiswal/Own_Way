<?php
    session_start();
    // print_r($_SESSION);         
?>
<?php require_once("../include/Conn.php");
if(isset($_GET["card_id"])){
echo $card_id_1=$_GET["card_id"];
} 
// $select_last_bookig_query="SELECT * FROM booking_query order by  id desc limit 1";
// $result_last_query_id=mysqli_query($conect,$select_last_bookig_query);
// if (mysqli_num_rows($result_last_query_id) > 0) {
//     // output data of each row
//     $row = mysqli_fetch_assoc($result_last_query_id);
//     $last_query_id=$row["Id"];
//  
// }
//   else 
//   {
//     echo "0 results";
//   }

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


<?php
if(isset($_SESSION['email']))
{
?>
<!-- Topbar Start -->
<?php require_once("./Layout/topbar_login.php");?>
<!-- Topbar End -->
<?php include("./Layout/sidebar.php");?>
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
<?php require_once("./Layout/NavbarStart1.php");

?>
<!-- Navbar End -->



<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Packages</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Packages</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Booking Start -->
 <!-- require_once("./Layout/Booking_query.php");?> -->
<!-- Booking End -->




    

    <!-- fixed Subscription card Start -->
                <div class="container-fluid py-5" id="show-card_after">
                    <div class="container pt-5 pb-3">
                            <div class="text-center mb-3 pb-3">
                                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Subscription Card</h6>
                                <h1>Planed Your Trip Through Perfect Subscription</h1>
                            </div>
                
                            <div class="row">
                                
                                    <?php
                                        $insert="SELECT * FROM basicsubcription WHERE plan_type='Sliver'";
                                        $result=mysqli_query($conect,$insert)or die("query failed");
                                        while($to_silver = mysqli_fetch_assoc($result)){
                                            $get_card_to_view_pack=$to_silver['id'];
                                    ?>
                                                    
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                                                    <div class="destination-item position-relative overflow-hidden mb-2">
                                                                                        <img class="img-fluid" src="img/sc82.jpg" alt="">
                                                                                        <a class="destination-overlay text-white text-decoration-none" href="package.php?card_id_view_pack=<?php echo $get_card_to_view_pack ?>#view_package_fixed">
                                                                                            <h5 class="text-white">Silver Card</h5>
                                                                                            <span>3 Amazing Places</span>
                                                                                        </a>
                                                                                    </div>
                                                            
                                                            <div class="p-4">
                                                                    <div class="d-flex justify-content-between mb-3">
                                                                        <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><a id="disp-city-fix-1"></a></small>
                                                                        <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><a Placeholder="Date" class="m-0"><?php echo $to_silver['no_of_days']; ?></a>  <small class="m-0" id="last-date"></small></small>
                                                                        <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><a class="m-0" id="disp-person-fix-1"></a></small>
                                                                        
                                                                    </div>
                                                                    <a class="h5 text-decoration-none" href="">Discover Amazing places of the Jabalpur with us</a>
                                                                    <div class="border-top mt-4 pt-4">
                                                                        <div class="d-flex justify-content-between">
                                                                            <h6 class="m-0"><i class="fa-solid fa-hotel text-primary mr-2"></i><br><?php echo $to_silver['Facility1']; ?></h6>
                                                                            <h6 class="m-0"><i class="fa-solid fa-person-walking-arrow-right text-primary mr-2"></i><br><?php echo $to_silver['Facility2']; ?></H6>
                                                                            <h6 class="m-0"><i class="fa-solid fa-car text-primary mr-2"></i><br><?php echo $to_silver['Facility3']; ?></H6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="border-top mt-4 pt-4">
                                                                        <div class="d-flex justify-content-between">
                                                                            <h6 class="m-0"> ₹ <?php echo $to_silver['package_amont']; ?> per person<br><a class="m-0 text-primary mr-2" id="first_amount-fixed"></a></h6>
                                                                            <h6 class="m-0"> <a href="package.php?card_id_view_pack=<?php echo $get_card_to_view_pack ?>#view_package_fixed">View More</a></h6>
                                                                        </div>
                                                                        </div>
                                                            </div>
                                                                
                                                        </div>
                                                        
                                    <?php } ?>
                                    <?php
                                            $insert1="SELECT * FROM basicsubcription WHERE plan_type='Gold'";
                                            $result1=mysqli_query($conect,$insert1)or die("query failed");
                                            while($to_gold = mysqli_fetch_assoc($result1)){
                                                $get_card_to_view_pack=$to_gold['id'];
                                    ?>
                                                        
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                                        <div class="destination-item position-relative overflow-hidden mb-2">
                                                                            <img class="img-fluid" src="img/sc84.jpg" alt="">
                                                                            <a class="destination-overlay text-white text-decoration-none" href="package.php?card_id_view_pack=<?php echo $get_card_to_view_pack ?>#view_package_fixed">
                                                                                <h5 class="text-white">Gold Card</h5>
                                                                                <span>6 Amazing Places</span>
                                                                            </a>
                                                                        </div>
                                                                <div class="p-4">
                                                                    <div class="d-flex justify-content-between mb-3">
                                                                        <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><a id="disp-city-fix-2"></a></small>
                                                                        <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><a class="m-0" ><?php echo $to_gold['no_of_days']; ?></a></small></small>
                                                                        <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><a class="m-0" id="disp-person-fix-2"></a></small>
                                                                    </div>
                                                                    <a class="h5 text-decoration-none" href="">Discover Amazing places of the Jabalpur with us</a>
                                                                    <div class="border-top mt-4 pt-4">
                                                                        <div class="d-flex justify-content-between">
                                                                        <h6 class="m-0"><i class="fa-solid fa-hotel text-primary mr-2" ></i><br><?php echo $to_gold['Facility1']; ?></h6>
                                                                            <h6 class="m-0"><i class="fa-solid fa-person-walking-arrow-right text-primary mr-2"></i><br><?php echo $to_gold['Facility2']; ?></H6>
                                                                            <h6 class="m-0"><i class="fa-solid fa-car text-primary mr-2"></i><br><?php echo $to_gold['Facility3']; ?></H6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="border-top mt-4 pt-4">
                                                                        <div class="d-flex justify-content-between">
                                                                            <h6 class="m-0">₹<?php echo $to_gold['package_amont']; ?> per person<br><a class="m-0 text-primary mr-2" id="first_amount-gold-fixed"></a> </h6>
                                                                            <h6 class="m-0"> <a href="package.php?card_id_view_pack=<?php echo $get_card_to_view_pack ?>#view_package_fixed">View More</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                    <?php } ?>
                                    <?php
                                    $insert2="SELECT * FROM basicsubcription WHERE plan_type='Paltnium'";
                                    $result2=mysqli_query($conect,$insert2)or die("query failed");
                                    while($to_plat = mysqli_fetch_assoc($result2)){
                                        $get_card_to_view_pack=$to_plat['id'];
                                    ?>
                                                    
                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                        <div class="destination-item position-relative overflow-hidden mb-2">
                                                                            <img class="img-fluid" src="img/sc83.jpg" alt="">
                                                                            <a class="destination-overlay text-white text-decoration-none" href="package.php?card_id_view_pack=<?php echo $get_card_to_view_pack ?>#view_package_fixed">
                                                                                <h5 class="text-white">Platinum Crad</h5>
                                                                                <span>10 Amazing Places</span>
                                                                            </a>
                                                                        </div>
                                                                <div class="p-4">
                                                                <div class="d-flex justify-content-between mb-3">
                                                                        <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><a id="disp-city-fix-3"></a></small>
                                                                        <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><a class="m-0" ><?php echo $to_plat['no_of_days']; ?></a></small>
                                                                        <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><a class="m-0" id="disp-person-fix-3"></a></small>
                                                                    </div>
                                                                    <a class="h5 text-decoration-none" href="">Discover Amazing places of the Jabalpur with us</a>
                                                                    <div class="border-top mt-4 pt-4">
                                                                        <div class="d-flex justify-content-between">
                                                                        <h6 class="m-0"><i class="fa-solid fa-hotel text-primary mr-2"></i><br><?php echo $to_plat['Facility1']; ?></h6>
                                                                            <h6 class="m-0"><i class="fa-solid fa-person-walking-arrow-right text-primary mr-2"></i><br><?php echo $to_plat['Facility2']; ?></H6>
                                                                            
                                                                            <h6 class="m-0"><i class="fa-solid fa-martini-glass text-primary mr-2"></i><br>Bar</h6>
                                                                            <h6 class="m-0"><i class="fa-solid fa-car text-primary mr-2"></i><br><?php echo $to_plat['Facility3']; ?></H6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="border-top mt-4 pt-4">
                                                                        <div class="d-flex justify-content-between">
                                                                        <h6 class="m-0">₹<?php echo $to_plat['package_amont']; ?> per person<br><h6 class="m-0 text-primary mr-2" id="first_amount-plat-fixed"></46> </h6>
                                                                            <h6 class="m-0"> <a href="package.php?card_id_view_pack=<?php echo $get_card_to_view_pack ?>#view_package_fixed">View More</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                    <?php } ?>   
                            </div>
                    </div>
                </div>
    <!-- fixed Subscription Card End -->
    




<!--Show Packages Start -->
<?php

if(isset($_GET["card_id_view_pack"])){
    $card_id_get_pack=$_GET["card_id_view_pack"];
   
$insert="SELECT * FROM basicsubcription WHERE id='$card_id_get_pack'";
$result=mysqli_query($conect,$insert)or die("query failed");
while($to_silver = mysqli_fetch_assoc($result)){
    $allot_card_get=$to_silver['id'];

?>
                <div class="container pt-5 pb-3" id="view_package_fixed">
                    <div class="text-center mb-3 pb-3">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php echo $to_silver['plan_name']; ?> Packages</h6>
                        <h1>Your <?php echo $to_silver['plan_name']; ?> Packages</h1>
                        <h5><?php echo $to_silver['no_of_days']; ?><h5>
                    </div>
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Your Visiting Places</h4>
                    <div class="row">
                    <?php 
                        $allot_place_package_quary="SELECT * FROM package_places where silver='$allot_card_get'";
                        $allot_place_package_view = mysqli_query($conect,$allot_place_package_quary);
                        while($allot_place_package_urow = mysqli_fetch_array($allot_place_package_view)){
                           
                        ?>
                    
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="destination-item position-relative overflow-hidden mb-2">
                                <img class="img-fluid" src="../Admin/Pages/Action/place_images/<?php echo $allot_place_package_urow['place_Image']; ?>">
                                <a class="destination-overlay text-white text-decoration-none" href="single.php">
                                    <h5 class="text-white"><?php echo $allot_place_package_urow['Place']; ?></h5>
                                    <!-- <span>Dhoonaan Dhar Waterfall</span> -->
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                       
                       
                        
            </div>
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Your facilities</h4>
                        <div class="row">
                        <?php 
                        $allot_place_package_quary="SELECT * FROM hotels where card='$allot_card_get'";
                        $allot_place_package_view = mysqli_query($conect,$allot_place_package_quary);
                        while($allot_place_package_urow = mysqli_fetch_array($allot_place_package_view)){
                           $hotel_allot_id_get=$allot_place_package_urow['hotel_id'];
                           ?>

                        <div class="col-lg-4 col-md-6 mb-4">
                        <h1>Stay</h1>
                            <div class="package-item bg-white mb-2">
                                <img class="img-fluid" src="../Admin/Pages/Action/<?php echo $allot_place_package_urow['hotel_img'];?>" alt="">
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-hotel text-primary mx-auto mb-4"></i><a class="m-0" id="room_day"></a></small>
                                    </div>
                                    <a class="h5 text-decoration-none show_hotel_package" href="package.php?card_id_view_pack=<?php echo $card_id_get_pack ?>&&hotel_id_view_pack=<?php echo $hotel_allot_id_get ?>#view_package_fixed_hotel">Hotel-<small><?php echo $allot_place_package_urow['hotel_name']; ?> {<?php echo $allot_place_package_urow['venue']; ?>}</small></a>  
                                
                                </div>
                            </div>
                        </div>
<?php
                        }
?>

                        <div class="col-lg-4 col-md-6 mb-4">
                        <h1>Guide</h1>
                            <div class="package-item bg-white mb-2">
                                <img class="img-fluid" src="" alt="">
                                <br>
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><a id="pack_person"></a>Person</small>
                                    </div>
                    </br>
                    <br>
                                    <a class="h5 text-decoration-none" href="">Guide- <small>We will allot local , Guide. <p>Help You to visit your favourite Place<p></small></a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                        <h1>Travel</h1>
                        <?php 
                        $allot_place_package_quary="SELECT * FROM travel where card_id='$allot_card_get'";
                        $allot_place_package_view = mysqli_query($conect,$allot_place_package_quary);
                        while($allot_place_package_urow = mysqli_fetch_array($allot_place_package_view)){
                           
                        ?>
                            <div class="package-item bg-white mb-2">
                                <img class="img-fluid" src="" alt="">
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><a id="pack_city"></a></small>
                                    </div>
                                    <a class="h5 text-decoration-none" href="">Travel-<small><?php echo $allot_place_package_urow['vehicle_name']; ?></small></a>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                        <h4 class="m-0  mr-2">₹<?php echo $to_silver['package_amont'];?> Per Person <br><a class="m-0 text-primary mr-2" id="total_silver"></a></h4> 
                                            <?php
                                            
                                                ?>
                                            <div class="col-md-2">
                            <a href="package.php?card_id=<?php echo $to_silver['id'];?>"> <button class="btn btn-primary btn-block pricingTable-signup" style="height: 47px; margin-top: -2px;">Book Package</button></a>
                            </div>

                            

                            <?php
                                            }
                                            ?>
                                            
                                            
                                            <?php
                                        }
                            ?>
                                        </div>
                                    </div>
                </div>
                
         
<!--Show Packages End -->




<!-- hotelStart -->
<div class="container">
    <div id="my_hotel_model">
<?php 
if(isset($_GET["card_id_view_pack"])){
if(isset($_GET["hotel_id_view_pack"])){
    $card_id_get_pack=$_GET["hotel_id_view_pack"];
                        $allot_hotel_quary="SELECT * FROM hotels  WHERE  hotel_id = '$card_id_get_pack'";
                        $allot_hotel_view = mysqli_query($conect,$allot_hotel_quary);
                        while($allot_hotel_urow = mysqli_fetch_array($allot_hotel_view)){
                            
                        ?>
    <div class="container-fluid py-5" id="view_package_fixed_hotel">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Hotel</h6>
                <h1>Your Alloted Hotel</h1>
            </div>
           
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                         <div class="text-center py-4">
                            <h5 class="text-truncate">Hotel Name</h5>
                            <p class="m-0"><?php echo $allot_hotel_urow['hotel_name'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                         <div class="text-center py-4">
                            <h5 class="text-truncate">Venue</h5>
                            <p class="m-0"><?php echo $allot_hotel_urow['venue'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Hotel Type</h5>
                            <p class="m-0"><?php echo $allot_hotel_urow['hotel_type'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Owner Name</h5>
                            <p class="m-0"><?php echo $allot_hotel_urow['owner_name'];?></p>
                        </div>
                    </div>
                </div>
                
               <div class="row">
                    <?php 
                        $allot_hotel_image_quary="SELECT * FROM hotel_image WHERE hotel_id = '$card_id_get_pack' ";
                        $allot_hotel_image_view = mysqli_query($conect,$allot_hotel_image_quary);
                        while($allot_hotel_image_urow = mysqli_fetch_array($allot_hotel_image_view)){
                        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../Admin/Pages/Action/<?php echo $allot_hotel_image_urow['image_img'];?>" alt="">
                            
                        </div>
                        
                        
                    </div>
                </div>
                        
                        <?php
                        }
                        ?>
                        
                    
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php
                         }
                        }
                    }
                        ?>
                        </div>
                        </div>
    <!-- hotel End -->

           

<!-- Custom Subscription card Start -->
<!-- <div class="container-fluid py-5" id="custom-show-card_after">
                        <div class="container pt-5 pb-3">
                                    <div class="text-center mb-3 pb-3">
                                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Subscription Card</h6>
                                        <h1>Plan Your Tour Through Perfect Subscription</h1>
                                    </div>
                                        <div class="row">
                                       
                                                                <div class="col-lg-4 col-md-6 mb-4">
                                                                                            <div class="destination-item position-relative overflow-hidden mb-2">
                                                                                                <img class="img-fluid" src="img/sc82.jpg" alt="">
                                                                                                <a class="destination-overlay text-white text-decoration-none" href="package.php#package-view-silver">
                                                                                                <h5 class="text-white">Silver Card</h5>
                                                                                                <span>3 Amazing Places</span>
                                                                                                </a>
                                                                                            </div>
                                                                     
                                                                <div class="p-4">
                                                                                                <div class="d-flex justify-content-between mb-3">
                                                                                                    <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><a id="disp-city"></a></small>
                                                                                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><a Placeholder="Date" class="m-0" id="first-date"></a>  <small class="m-0" id="last-date"></small></small>
                                                                                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><a class="m-0" id="disp-person"></a></small>
                                                                                                    
                                                                                                </div>
                                                                                  <a class="h5 text-decoration-none" href="">Discover Amazing places of the Jabalpur with us</a>
                                                                            <div class="border-top mt-4 pt-4">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <h6 class="m-0"><i class="fa-solid fa-hotel text-primary mr-2"></i><br>Hotel</h6>
                                                                                    <h6 class="m-0"><i class="fa-solid fa-person-walking-arrow-right text-primary mr-2"></i><br>Guide</H6>
                                                                                    <h6 class="m-0"><i class="fa-solid fa-car text-primary mr-2"></i><br>Car</H6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="border-top mt-4 pt-4">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <h6 class="m-0"> <a id="first_amount"></a></h6>
                                                                                    <h5 class="m-0"> <a href="package.php#package-view-silver">View More</a></h5>
                                                                                </div>
                                                                            </div>
                                                                </div>
                                                        </div>
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="destination-item position-relative overflow-hidden mb-2">
                                                        <img class="img-fluid" src="img/sc84.jpg" alt="">
                                                        <a class="destination-overlay text-white text-decoration-none" href="package.php#package-view-gold">
                                                            <h5 class="text-white">Gold Card</h5>
                                                            <span>6 Amazing Places</span>
                                                        </a>
                                                    </div>
                                                    <div class="p-4">
                                                        <div class="d-flex justify-content-between mb-3">
                                                            <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><a id="disp-city-1"></a></small>
                                                            <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><a class="m-0" id="first-date-1"></a></small></small>
                                                            <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><a class="m-0" id="disp-person-1"></a></small>
                                                        </div>
                                                            <a class="h5 text-decoration-none" href="">Discover Amazing places of the Jabalpur with us</a>
                                                        <div class="border-top mt-4 pt-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="m-0"><i class="fa-solid fa-hotel text-primary mr-2" ></i><br>Hotel</h6>
                                                                <h6 class="m-0"><i class="fa-solid fa-person-walking-arrow-right text-primary mr-2"></i><br>Guide</H6>
                                                                <h6 class="m-0"><i class="fa-solid fa-car text-primary mr-2"></i><br>Car</H6>
                                                            </div>
                                                        </div>
                                                        <div class="border-top mt-4 pt-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="m-0"><a id="first_amount-gold"></a> </h6>
                                                                <h5 class="m-0"> <a href="package.php#package-view-gold">View More</a></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                        <div class="destination-item position-relative overflow-hidden mb-2">
                                                                <img class="img-fluid" src="img/sc83.jpg" alt="">
                                                            <a class="destination-overlay text-white text-decoration-none" href="package.php#package-view-plat">
                                                                <h5 class="text-white">Platinum Crad</h5>
                                                                <span>10 Amazing Places</span>
                                                            </a>
                                                        </div>
                                                     <div class="p-4">
                                                        <div class="d-flex justify-content-between mb-3">
                                                            <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><a id="disp-city-2"></a></small>
                                                            <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><a class="m-0" id="first-date-2"></a></small>
                                                            <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><a class="m-0" id="disp-person-2"></a></small>
                                                        </div>
                                                          <a class="h5 text-decoration-none" href="">Discover Amazing places of the Jabalpur with us</a>
                                                        <div class="border-top mt-4 pt-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="m-0"><i class="fa-solid fa-hotel text-primary mr-2"></i><br>Resourt</h6>
                                                                <h6 class="m-0"><i class="fa-solid fa-person-walking-arrow-right text-primary mr-2"></i><br>Guide</H6>
                                                                <h6 class="m-0"><i class="fa-solid fa-martini-glass text-primary mr-2"></i><br>Bar</h6>
                                                                <h6 class="m-0"><i class="fa-solid fa-car text-primary mr-2"></i><br>Car</H6>
                                                            </div>
                                                        </div>
                                                        <div class="border-top mt-4 pt-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="m-0"><a id="first_amount-plat"></a> </h6>
                                                                <h5 class="m-0"> <a href="package.php#package-view-plat" >View More</a></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>   
                                        </div>
                        </div>
            </div> -->
<!--Custom Subscription Card End -->
<!-- </div> -->

    

<!-------------- booking Form------------------->
<!--Modal Start-->
<div class="container" >
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-body">
<!-- Booking Form -->
<!--Card-->
<div class="card shadow mb-5 bg-white rounded">
<!--Card-Body-->
<div class="card-body">
<!--Card-Title-->
<div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Book Your Trip</h6>
            <h4>Plan Your Perfect package</h4>
        </div>
<div class="icons text-center">
<i class="fa fa-plane fa-2x text-primary mr-2" aria-hidden="true"></i>
<i class="fa fa-taxi fa-2x text-primary mr-2" aria-hidden="true"></i>
<i class="fa fa-train fa-2x text-primary mr-2" aria-hidden="true"></i>
</div>
<hr>




<p class="searchText"><strong>Book Smart Tour</strong></p>
<!--First Row-->
<div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div class="row">
<div class="col-sm-12">

<input type="hidden"  name="to_card" value="<?php echo $card_id_1; ?>" class="form-control" >
<input type="hidden"  name="user_id_booking" value="<?php echo $user_id_book=$_SESSION['id'];?>">


<label >User Name</label>
<input class=" form-control px-12"type="text" name="User" value="">
<br>

<label >Email</label>
<input class="form-control px-12" type="email" name="email" value="">
<br>


<label>Phone Number</label>
<input class="form-control px-12" type="text" name="p_number" value="">
<br>

<label >Address</label>
<input class="form-control px-12" type="text" name="address" id="blkwhfkh" value="">

</div>
</div>
</div>
<br><br>
<!--Second Row-->
<div class="row">
<div class="col-sm-6">
<select class="custom-select px-4" id="select" name="to_state">
<option value="" disabled="" selected="">To State</option>
<option value="Madhya Paresh">M P</option>
</select>
</div>
<div class="col-sm-6">
<select class="custom-select px-4" id="select" name="to_city">
<option value="" disabled="" selected="">To City</option>
<option value="Jabalpur">Jabalpur</option>
</select>
</div>
</div>
<br><br>
<!--Third Row-->
<div class="row">
<p>
<div class="col-sm-6">
<label>Arrival Date</label>
<input placeholder="&#xf073; dd/mm/yyy" type="date" id="date-picker-example-1" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome" name="a_date" >
</div>
</p>
<p>
<div class="col-sm-6">
<label>Arrival Time</label>
<input placeholder="" type="time" id="date-picker-example"  style="font-family:Arial, FontAwesome" >
</div>
</p>
</div>
<!--Fifth Row-->
<br><br>
<div class="row">
<div class="col-sm-4">
<select class="custom-select px-4" id="select"  name="kid">
<option value="0" disabled="" selected="">Kids(0-14)</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
</div>
<div class="col-sm-4">
<select class="custom-select px-4" id="select"  name="adult">
<option value="0" disabled="" selected="">Adults(15-64)</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
</div>
<div class="col-sm-4">
<select class="custom-select px-4" id="select" name="senior" >
<option value="0" disabled="" selected="">Seniors(65+)</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
</div>
</div>
<h6 class="btn btn-primary float-right mt-5" style="letter-spacing: 5px;">₹<a id="total_amount"></a></h6>

                
                
               <input class="btn btn-primary float-right mt-5" type="submit" name="in_btn" value="Book" id="BtnForPayment"> 
 
            </div>
<div class="modal-footer">

<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</div>
</div>
</form>
<!-------------------------------------- booking form close--------------------------------------------------------------->
</div>
</div>
</div>
</div>
</div>
                      
<!------------------------------------------------- Modal Close ----------------------------------------------------------------------->
<!------------------------------------------------- Booking Paymet Model----------------------------------------------------------------------->
<!-- Modal -->

<!------------------------------------------------- Booking Paymet Model close - ---------------------------------------------------------------------->

<?php
if(isset($_POST['in_btn']))
{
$user_id_ref_booking =$_POST["user_id_booking"];
$card_id_B = $_POST['to_card'];
$uname=$_POST["User"];
$email=$_POST["email"];
$p_number=$_POST["p_number"];
$address=$_POST["address"];
$a_date=date("Y-m-d",strtotime($_POST["a_date"]));
$kid=$_POST["kid"];
$state=$_POST["to_state"];
$city=$_POST["to_city"];
$adult=$_POST["adult"];
$senior=$_POST["senior"];
$card=$_POST["to_card"];
//echo $card;
if($card == 2){
$matchSubPrice1 ="SELECT * FROM basicsubcription WHERE id='$card_id_B '";
$resbasicsub1 = mysqli_query($conect,$matchSubPrice1);
while($subprice = mysqli_fetch_assoc($resbasicsub1)){
$SilverPrice = $subprice['package_amont'];
};
$total_payable_amount =( $kid*$SilverPrice +$adult*$SilverPrice +$senior*$SilverPrice );
echo $total_payable_amount;
}
elseif($card == 3){
$matchSubPrice2 ="SELECT * FROM basicsubcription WHERE id='$card_id_B '";
$resbasicsub2 = mysqli_query($conect,$matchSubPrice2);
while($subprice = mysqli_fetch_assoc($resbasicsub2)){
$GoldPrice = $subprice['package_amont'];
$total_payable_amount =( $kid*$GoldPrice+$adult*$GoldPrice+$senior*$GoldPrice);
}
}
elseif($card == 4){
$matchSubPrice3 ="SELECT * FROM basicsubcription WHERE id='$card_id_B '";
$resbasicsub2 = mysqli_query($conect,$matchSubPrice3 );
while($subprice = mysqli_fetch_assoc($resbasicsub2)){
$PaltniumPrice = $subprice['package_amont'];
$total_payable_amount =( $kid* $PaltniumPrice+$adult* $PaltniumPrice+$senior* $PaltniumPrice);
}
}

$t_insert="INSERT INTO `tour_booking`(`user_name`, `email_b`, `phone _number_b`, `address`, `visit_state`, `visit_city`, `arrive_date`, `kids`, `adult`, `senior`,card_id,Payble_ammount,Payment_Status,user_id)VALUES('$uname','$email','$p_number','$address',' $state','$city','$a_date','$kid','$adult','$senior','$card',$total_payable_amount,'Panding',$user_id_ref_booking)";

//$inserted=;

if(mysqli_query($conect,$t_insert) == TRUE)
{
    $Lastbooking_id= mysqli_insert_id($conect);
    echo $Lastbooking_id;
?>
<script type="text/javascript">
   
   alert("We Will Contact You As Soon As Possible");
   window.location.assign("testbooking.php?get_bookig_id=<?php echo $Lastbooking_id; ?>");
//  
  
 </script> 
<?php
}
else
{
// echo "nahi ja raha hein quary ko sahi se dale";
    ?>
    <script type="text/javascript">
    alert("Oops ! , Try Again My Dear");
    </script>
        <?php  
}
}
?>    



<!-- Footer Start -->
<!-- require_once("./Layout/footer.php");?> -->
<!-- Footer End -->
<script>
$(document).ready(function(){ 

<?php 
$test = null;
if(isset($_GET["card_id"])){
    $test = $_GET["card_id"];
} 

if($test != null)
{ ?>
$("#myModal").modal('show');
<?php } ?>

});
</script>   

<?php if(isset($_SESSION['id'])){ ?>
<script>

$(document).on("click",".pricingTable-signup",function(){
    // e.preventDefault();
    $("#myModal").modal('show');
});

</script>
<?php }else { ?>
<script>
$(document).on("click",".pricingTable-signup",function(e){
    e.preventDefault();
    window.location.assign("Layout/login.php");
})

</script>
<?php } ?>

<script>
$(document).on("click",".show_hotel_package",function(){
    // e.preventDefault();
    $("#my_hotel_model").modal('show');
});
    </script>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
<script>
  
$(document).on("click","#paymentDone",function(){
    alert("helo");
});
</script>
</body>
</html>