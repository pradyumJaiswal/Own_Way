<!-- Subscription card Start -->
<div class="container-fluid py-5" id="show-card">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Subscription Card</h6>
                <h1>Plan Your Tour Through Perfect Subscription</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/sc82.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="package.php#package-view">
                            <h5 class="text-white">Silver Card</h5>
                            <span>3 Amazing Places</span>
                        </a>
                    </div>
                    <?php while($row=mysqli_fetch_array($result)){?>
                    <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $row['no_of_days'];?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Discover Amazing places of the Jabalpur with us</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa-solid fa-hotel"></i><br>Hotel</h6>
                                    <h6 class="m-0"><i class="fa-solid fa-person-walking-arrow-right"></i><br>Guide</H6>
                                    <h6 class="m-0"><i class="fa-solid fa-car"></i><br>Car</H6>
                                </div>
                            </div>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"> </h6>
                                    <h5 class="m-0"> <a href="#" class="pricingTable-signup">View More</a></h5>
                                </div>
                                </div>
                        </div>
                        <?php } ?>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/sc84.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Gold Card</h5>
                            <span>6 Amazing Places</span>
                        </a>
                    </div>
                    <?php while($row=mysqli_fetch_array($result1)){?>
                    <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Jabalpur</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $row['no_of_days'];?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Discover Amazing places of the Jabalpur with us</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa-solid fa-hotel"></i><br>Ac Hotel</h6>
                                    <h6 class="m-0"><i class="fa-solid fa-person-walking-arrow-right"></i><br>Guide</H6>
                                    <h6 class="m-0"><i class="fa-solid fa-car"></i><br>Ac Car</H6>
                                </div>
                            </div>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"> </h6>
                                    <h5 class="m-0"> <a href="#" class="pricingTable-signup">View More</a></h5>
                                </div>
                                </div>
                        </div>
                        <?php } ?>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/sc83.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Platinum Crad</h5>
                            <span>10 Amazing Places</span>
                        </a>
                    </div>
                    <?php while($row=mysqli_fetch_array($result2)){?>
                    <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Jabalpur</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $row['no_of_days'];?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Discover Amazing places of the Jabalpur with us</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa-solid fa-hotel"></i><br>Resourt</h6>
                                    <h6 class="m-0"><i class="fa-solid fa-person-walking-arrow-right"></i><br>Guide</H6>
                                    
                                    <h6 class="m-0"><i class="fa-solid fa-martini-glass"></i><br>Bar</h6>
                                    <h6 class="m-0"><i class="fa-solid fa-car"></i><br>VIP Car</H6>
                                </div>
                            </div>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"> </h6>
                                    <h5 class="m-0"> <a href="#" class="pricingTable-signup">View More</a></h5>
                                </div>
                                </div>
                        </div>
                        <?php } ?>
                </div>   
            </div>
        </div>
    </div>
    
    <!-- Subscription Card End -->