<!-- hotelStart -->
<div class="container">
    <div id="my_hotel_model">
<?php 
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
                        ?>
                        </div>
                        </div>
    <!-- hotel End -->
