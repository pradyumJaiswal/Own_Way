<?php

require_once("include/Conn.php");

?> 
<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
                <h1>Latest From Our Blog</h1>
            </div>
            
            
            
            <div class="row pb-3">
               
            <?php
                    $blog_quary="SELECT * FROM blog INNER JOIN user_table ON blog.user_id = user_table.id ORDER BY blog_at DESC limit 3 ";
                        $blog_view = mysqli_query($conect,$blog_quary);
                        while($blog_urow = mysqli_fetch_array($blog_view)){
                        ?>
            
            
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="./User_Guide/php/<?php echo $blog_urow['Blog_image'];?>" style="width: 100px; height: 300px;">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"><?php echo $blog_urow['blog_id'];?></h6>
                                <small class="text-white text-uppercase"></small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $blog_urow['Location'];?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $blog_urow['blog_at'];?></a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href=""><?php echo $blog_urow['Heading'];?></a>
                        </div>
                    </div>
                </div>
                
                
                <?php
                        }
                        ?>
            </div>
        </div>
    </div>