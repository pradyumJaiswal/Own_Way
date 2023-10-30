<?php require_once("../../include/Conn.php");
//  echo "connected";
  
  $insert="SELECT * FROM basicsubcription WHERE plan_type='Sliver'";
  $result=mysqli_query($conect,$insert)or die("query failed");
  $insert1="SELECT * FROM basicsubcription WHERE plan_type='Gold'";
  $result1=mysqli_query($conect,$insert1)or die("query failed");
  $insert2="SELECT * FROM basicsubcription WHERE plan_type='Paltnium'";
  $result2=mysqli_query($conect,$insert2)or die("query failed");
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
    <link href="../css/subcriptionCard.css" rel="stylesheet">
    <!-- Custom Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="../UserAfterLogin.php" class="nav-item nav-link active">Home</a>
                        <a href="../about.php" class="nav-item nav-link">About</a>
                        <a href="../service.php" class="nav-item nav-link">Services</a>
                        <a href="#" class="nav-item nav-link">Tour Packages</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="../blog.php" class="dropdown-item">Blog Grid</a>
                                <a href="../single.php" class="dropdown-item">Blog Detail</a>
                                <a href="../destination.php" class="dropdown-item">Destination</a>
                                <a href="../guide.php" class="dropdown-item">Travel Guides</a>
                                <a href="../testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="../contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
          <!-- Subscription Card-->
<div class="demo">
    <div class="container">
        <div class="row">
        <?php while($row=mysqli_fetch_array($result)){?>
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="title">Silver</h3>
                        <span class="sub-title">Stay Travel Guide</span>
                        <span class="year">Pay only <br></span>
                    </div>
                    <div class="price-value">
                        <div class="value">
                            <span class="currency">₹
</span>
                            <span class="amount">3000</span>
                            <span class="month">/person</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                    <li><?php echo $row['Facility1'];?></li>
                        <li><?php echo $row['Facility2'];?></li>
                        <li><?php echo $row['Facility3'];?></li>
                        <li><?php echo $row['no_of_days'];?></li>
                        <li><?php echo $row['visit_places'];?></li>
                    </ul>
                    <a href="#" class="pricingTable-signup">Book Now</a>
                </div>
            </div>
            <?php } ?>
            <?php while($row=mysqli_fetch_array($result1)){?>
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="title">Gold</h3>
                        <span class="sub-title">Stay Travel Guide</span>
                        <span class="year">Pay only <br></span>
                    </div>
                    <div class="price-value">
                        <div class="value">
                            <span class="currency">₹
</span>
                            <span class="amount">5000</span>
                            <span class="month">/person</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                    <li><?php echo $row['Facility1'];?></li>
                        <li><?php echo $row['Facility2'];?></li>
                        <li><?php echo $row['Facility3'];?></li>
                        <li><?php echo $row['no_of_days'];?></li>
                        <li><?php echo $row['visit_places'];?></li>
                    </ul>
                    <a href="#" class="pricingTable-signup">Book Now</a>
                </div>
            </div>
            <?php } ?>
            <?php while($row=mysqli_fetch_array($result2)){?>
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="title">Platinum</h3>
                        <span class="sub-title">Stay Travel Guide</span>
                        <span class="year">Pay only <br></span>
                    </div>
                    <div class="price-value">
                        <div class="value">
                            <span class="currency">₹
</span>
                            <span class="amount">9000</span>
                            <span class="month">/person</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                    <li><?php echo $row['Facility1'];?></li>
                        <li><?php echo $row['Facility2'];?></li>
                        <li><?php echo $row['Facility3'];?></li>
                        <li><?php echo $row['no_of_days'];?></li>
                        <li><?php echo $row['visit_places'];?></li>
                    </ul>
                    <a href="#" class="pricingTable-signup" >Book Now</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- -----------------------------subcription card close---------------------------------------->
    <!--Modal Start-->
    <div class="container">
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
    <p class="card-title text-center shadow mb-5 rounded">Book Your Trip</p>
    <div class="icons text-center">
    <i class="fa fa-plane fa-2x" aria-hidden="true"></i>
    <i class="fa fa-taxi fa-2x" aria-hidden="true"></i>
    <i class="fa fa-train fa-2x" aria-hidden="true"></i>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    </div>
    <hr>
    <p class="searchText"><strong>Book Smart Tour</strong></p>
    <!--First Row-->
    <div class="row mb-3 mt-3">
    <p style="float: right;">
    <label class="radiobtn">User Full Name</label>
    <input type="text" name="User" value="">
    </p>
    <p>
    <label class="radiobtn">Email</label>
    <input type="email" name="email" value="">
    <br><br>
    </p>
    <p>
    <label class="radiobtn">Phone Number</label>
    <input type="text" name="p_number" value="">
    </p>
    <p>
    <label class="radiobtn">Address</label>
    <input type="text" name="address" value="">
    </p>
    </div>
    <!-- row 0.1
    <div class="row">
    <div class="col-sm-6">
    <select class="browser-default custom-select mb-4" id="select">
    <option value="" disabled="" selected="">From State</option>
    <option value="1">Madhya Pradesh</option>
    <option value="2">Goa</option>
    <option value="3">Uttar Pradesh</option>
    </select>
    </div>
    <div class="col-sm-6">
    <select class="browser-default custom-select mb-4" id="select">
    <option value="" disabled="" selected="">From City</option>
    <option value="1">Bhopal</option>
    <option value="2">Allahabad</option>
    <option value="3">Indore</option>
    </select>
    </div>
    </div> -->
    <!--Second Row-->
    <div class="row">
    <div class="col-sm-6">
    <select class="browser-default custom-select mb-4" id="select" name="to_state">
    <option value="" disabled="" selected="">To State</option>
    <option value="Madhya Paresh">M P</option>
    </select>
    </div>
    <div class="col-sm-6">
    <select class="browser-default custom-select mb-4" id="select" name="to_city">
    <option value="" disabled="" selected="">To City</option>
    <option value="Jabalpur">Jabalpur</option>
    </select>
    </div>
    </div>
    <!--Third Row-->
    <div class="row">
    <p>
    <div class="col-sm-6">
    <label>Arrival Date</label>
    <input placeholder="&#xf073; dd/mm/yyy" type="date" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome" name="a_date" >
    </div>
    </p>
    <p>
    <div class="col-sm-6">
    <label>Departure Date</label>
    <input placeholder="&#xf073; dd/mm/yyy" type="date" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome" >
    </div>
    </p>
    </div>
    <!-- Fourth Row
    <div class="row mt-4">
    <div class="col-sm-6">
    <select class="browser-default custom-select mb-4" id="select">
    <option value="" disabled="" selected="">Anytime</option>
    <option value="1">6:00 AM</option>
    <option value="2">3:00 PM</option>
    <option value="3">6:00 PM</option>
    </select>
    </div>
    <div class="col-sm-6">
    <select class="browser-default custom-select mb-4" id="select">
    <option value="" disabled="" selected="">Anytime</option>
    <option value="1">6:00 AM</option>
    <option value="2">3:00 PM</option>
    <option value="3">6:00 PM</option>
    </select>
    </div>
    </div> -->
    <!--Fifth Row-->
    <div class="row">
    <div class="col-sm-4">
    <select class="browser-default custom-select mb-4" id="select"  name="kid">
    <option value="0" disabled="" selected="">Kids(0-14)</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
    </div>
    <div class="col-sm-4">
    <select class="browser-default custom-select mb-4" id="select"  name="adult">
    <option value="0" disabled="" selected="">Adults(15-64)</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
    </div>
    <div class="col-sm-4">
    <select class="browser-default custom-select mb-4" id="select" name="senior" >
    <option value="0" disabled="" selected="">Seniors(65+)</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
    </div>
    </div>
    <input class="btn btn-primary float-right mt-5" type="submit" name="in_btn" value="Book"> 
    </div>
    </div>
    </form>
    <!-- booking form close-->
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Modal Close -->
    <?php

if(isset($_POST['in_btn']))
{

    // Array ( [User] => Pradyum [email] => jdhruva@gmail.com [p_number] => 8004635309 [address] => Jabalpur [a_date] => 12/09/2002 [kid] => 1 [adult] => 1 [senior] => 1 [in_btn] => Book )
    // echo "<per>"; print_r($_POST); die;
 
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
    
//    $t_insert="INSERT INTO tour_booking(user_name,email,phone _number,address,visit_state,visit_city,arrive_date,kids,adult,senior)VALUES('$uname','$email','$p_number','$address',' $state','$city','$a_date','$kid','$adult','$senior')";
   $t_insert="INSERT INTO `tour_booking`(`user_name`, `email_b`, `phone _number_b`, `address`, `visit_state`, `visit_city`, `arrive_date`, `kids`, `adult`, `senior`)VALUES('$uname','$email','$p_number','$address',' $state','$city','$a_date','$kid','$adult','$senior')";
    
   $inserted=mysqli_query($conect,$t_insert);
//  print_r($t_insert);
//   print_r( $insert);
  
    if($inserted)
    {
    //  echo "inserted"; die;
     ?>
    <script type="text/javascript">
       alert("We Will Contact You As Soon As Possible");
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
<!-- -----------------------------------------Template Javascript ---------------------------------------->
<script src="../js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(document).on("click",".pricingTable-signup",function(){
                   $("#myModal").modal('show');
    })
})
</script>

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