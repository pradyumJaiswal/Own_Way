<?php

require_once("include/Conn.php");

?> 
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Clients Review</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
            <?php
                    $feedback_quary="SELECT * FROM feedback INNER JOIN user_table ON feedback.client_id = user_table.id ORDER BY feedback_at DESC";
                        $feedback_view = mysqli_query($conect,$feedback_quary);
                        while($feedback_urow = mysqli_fetch_array($feedback_view)){
                        ?>
            
            <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="./Admin/Pages/Signup_file/<?php echo $feedback_urow['FilesUrl']; ?>" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5"><?php echo $feedback_urow['Feedback'];?>
                        </p>
                        <h5 class="text-truncate"><?php echo $feedback_urow['Client_name'];?></h5>
                        <span><?php echo $feedback_urow['address_user'];?></span>
                    </div>
                </div>
                <?php
                        }
                        ?>
            </div>
        </div>
    </div>