<?php 
                        $allot_place_package_quary="SELECT * FROM hotels INNER JOIN hotel_image ON hotels.hotel_id  = hotel_image.hotel_id where card='$allot_card_get'";
                        $allot_place_package_view = mysqli_query($conect,$allot_place_package_quary);
                        while($allot_place_package_urow = mysqli_fetch_array($allot_place_package_view)){

                        }
                           
                        ?>