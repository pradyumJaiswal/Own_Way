<?php
      session_start();
      if(!isset($_SESSION['email']) && !isset($_SESSION['g_email']) )
      {

        header("location:./Layout/login.php"); 
      }

      require_once("../include/Conn.php");
      



// $sql="SELECT * FROM user_table INNER JOIN post ON post.Id = user_table.id INNER JOIN comment ON comment.P_id = post.P_Id order by created_at_comment desc ";
// $result= mysqli_query($conect,$sql);
// print_r($result); die;

// $sql="SELECT *
// FROM comment
// INNER JOIN post
// ON post.P_Id = comment.P_id";
// print_r($sql); die;
// $result= mysqli_query($conect,$sql);

//INNER JOIN post
//ON comment.P_id = post.P_Id 
// SELECT * 
// FROM posts 
// LEFT JOIN comments 
// ON post.P_Id=comment.P_id 
// WHERE P_Id=P_id
             
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/cust_side.css" rel="stylesheet">
    <link href="css/post.css" rel="stylesheet">




<!------ Include the above in your HEAD tag ---------->
</head>

<body>

<?php
if(isset($_SESSION['email']) )
{
?>
    <!-- Topbar Start -->
    <?php require_once("./Layout/topbar_login.php");?>
    <!-- Topbar End -->
    <?php include("./Layout/sidebar.php");?>
<?php
}
else if(isset($_SESSION['g_email'])){

?>
    <!-- Topbar Start -->
    <?php require_once("./Layout/topbar_login.php");?>
    <!-- Topbar End -->
    
<?php
}
else {
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



    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Activity Feeds</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Activity</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Latest Activity</h6>
                
            </div>
        </div>
    </div>


     <!-- post Start -->

   
    <!-- Blog Start -->
    <div id="view_post-data" class="container-fluid py-2" >
        <div class="container py-1">
            <div class="row">
                <div class="col-lg-8 ">
                    <!-- Blog Detail Start -->
                        <div class="pb-3">
                            <div class="media mb-4">        
                                <div class="media-body" id="view-post">
                                    <?php 
                                    $quary="SELECT * FROM post INNER JOIN user_table ON post.Id = user_table.id ORDER BY created_at_post DESC ";
                                    $view = mysqli_query($conect,$quary);
                                    while($urow = mysqli_fetch_array($view)){
                                    ?>
                                        <div class="bg-white mb-3" style="padding: 30px;">
                                                        <div class="d-flex mb-3">
                                                            <img src="../Admin/Pages/Signup_file/<?php echo $urow['FilesUrl'];?>" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                                        <h5> 
                                                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $urow['full_name'];?></a>
                                                                <span class="text-primary px-2">|</span>
                                                            
                                                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $urow['address_user'];?></a>
                                                            </h5>
                                                        </div>
                                                                <h6 class="mb-3"><?php echo $urow['date'];?></h6>
                                                                <img class="img-fluid w-auto float-center mr-4 mb-2" id="image_preview" src="php/<?php echo $urow['Image'];?>" style="width: 100px; height: 400px;">
                                                                <p><?php echo $urow['Description'];?></p>
                                            
                                            <!--Comment List Start-->
                                                    <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                                                        <h6 class="text-uppercase mb-4" style="letter-spacing: 5px;"> Comments</h6>
                                                            <?php
                                                                // $sql1="SELECT * FROM comment where P_id =".$urow['P_Id'];
                                                                $sql1= "SELECT * FROM comment INNER JOIN post ON  comment.P_id = post.P_Id INNER JOIN user_table ON comment.U_id = user_table.id where comment.P_id =".$urow['P_Id'];
                                                                $result= mysqli_query($conect,$sql1);
                                                                while($crow=mysqli_fetch_array($result)){
                                                            ?>
                                                                <div class="media mb-4">
                                                                    <img src="../Admin/Pages/Signup_file/<?php echo $crow['FilesUrl'];?>" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                                                    <div class="media-body">
                                                                        <h6><a href=""><?php echo $crow['full_name'];?></a> <small><i><?php echo $crow['date'];?></i></small></h6>
                                                                        <p><?php echo $crow['comment'];?></p> 
                                                                    </div>
                                                                </div>
                                                            <?php  } ?>
                                                    </div> 
                                            <!-- Comment List End-->

                                
                                            <!-- Comment Form Start -->
                                                        <div class="bg-white mb-3" style="padding: 30px;">
                                                                <?php
                                                                if(!isset($_SESSION['g_email'])){
                                                                ?>
                                                                    <form method="post">
                                                                        <div class="form-group">
                                                                            <label for="name">Comment *</label>
                                                                            <input type="text" value="<?php echo  $_SESSION['id']; ?>" class="form-control" id="user_id<?php echo $urow['P_Id'];?>" hidden>
                                                                            <input type="text" value="<?php echo $urow['P_Id'];?>" class="form-control" id="post_id" hidden>
                                                                            <input type="text" class="form-control post-com" id="comment<?php echo $urow['P_Id'];?>">
                                                                        </div>
                                                                        <div class="form-group mb-0">
                                                                            <input type="button" data-id="<?php echo $urow['P_Id'];?>" id="comment_btn" value="Leave a comment"
                                                                                class="btn btn-primary font-weight-semi-bold py-2 px-3 comment_btn_new">
                                                                        </div>
                                                                    </form>
                                                                <?php 
                                                                    } 
                                                                ?>
                                                        </div> 
                                            <!-- Comment Form End -->
                                    
                                        </div>
                                
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                                </div>
                        <!-- create post Form -->
                        <?php
                        if(isset($_SESSION['email'])){
                        ?> 
                                            <div class="col-lg-4 mt-5 mt-lg-0" id="create-post-form">
                                                <div class="mb-5">    
                                                                    <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Create Post</h4>                 
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12 col-md-offset-2">
                                                                <form method="POST" enctype="multipart/form-data"  id="postForm" novalidate="novalidate">
                                                                    <input type="text" id="u_id" name="u_id" value="<?php echo  $_SESSION['id']; ?>" hidden/>
                                                                    <div class="form-group has-error">
                                                                        <label for="slug">Location <span class="require">*</span> <small>(This field use for place.)</small></label>
                                                                        <input type="text" id="location" class="form-control" name="slug" />
                                                                        <span class="help-block">Field not entered!</span>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="title">Title <span class="require">*</span></label>
                                                                        <input type="text" id="title" class="form-control" name="title" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="description">Image</label>
                                                                        <input type="file" id="image" class="form-control" placeholder="" name="file" autocomplete="off">
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="description">Description</label>
                                                                        <textarea rows="5"id="description" class="form-control" name="description" ></textarea>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <p><span class="require">*</span> - required fields</p>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <button type="submit" name="submit" id="createPostbtn" class="btn btn-primary">
                                                                            Create
                                                                        </button>
                                                                        <button class="btn btn-default">
                                                                            Cancel
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        <?php
                         }
                        ?>
                        <!-- create post Form end-->     
                </div>
            </div>
        </div>
    

<!-- post end -->


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
    <!-- <script src="js/book_query.js"></script> -->
    <script src="js/cust_side.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>