<?php
require_once("../../Action/Conn.php");
//session_start();
$H_id = $_GET['id'];
// select hotel_image.image_img,hotel_image.hotel_id from hotels right join hotel_image on hotels.hotel_id=hotel_image.hotel_id WHERE hotels.hotel_id =27;
$quary="select hotel_image.image_img,hotel_image.hotel_id from hotels right join hotel_image on hotels.hotel_id=hotel_image.hotel_id WHERE hotels.hotel_id =$H_id";
//$quary="SELECT  hotel_id FROM hotels WHERE hotel_id IN( SELECT * FROM hotel_image WHERE hotel_id = $H_id) ";
$result= mysqli_query($conect,$quary);   

?>
<!DOCTYPE html>
<html>
<head>
<?php require_once("./headerlinks.php"); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php require_once("./navbar.php");?>
<?php require_once("./sidemenu.php");?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            
          </div>
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  Ekko Lightbox
                </div>
              </div>
              <div class="card-body">
             
                <div class="row">
                <?php 
                // echo "<pre>"; print_r($result);die;
                    while($row=mysqli_fetch_array($result)){
                      // echo "<pre>"; print_r($row[0]);
                      // echo "<pre>"; print_r($row['image_img']);
                        $image =$row['image_img'];
                        // foreach($result as $image){
                        //echo $row['image_img'];
                       // echo $row['hotel_id '];
                      //  echo  $image ;  
                    ?>
                    
                  <div class="col-sm-2">
                    <a href="../../Action/<?php echo $image ?>" data-toggle="lightbox" data-title="HOTEL IMAGES" data-gallery="gallery">
                      <img src="../../Action/<?php echo $image ?>" class="img-fluid mb-12" alt=""/>
                    </a>
                  </div>
                 
                  
                 
                  <?php }  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- footer -->
<?php require_once("./footer.php");?>
<!-- script links -->
<?php require_once("./scriptlinksLay.php");?>


</body>