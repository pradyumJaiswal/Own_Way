<?php 
require_once("../Action/Conn.php");
//session_start();
// if(!isset($_SESSION['email'])){
//   header("location:./login.php");
// }
// echo "<pre>"; var_dump($_SESSION["user_type"]); die;
// var_dump($_SESSION["user_type"] === "Admin");
// die;
if(!isset($_SESSION['a_email']) && $_SESSION["user_roleA"] != "Admin"){
  header("location:./login.php");
}
$quary="select * from user_table";
$result= mysqli_query($conect,$quary);
?>
<!DOCTYPE html>
<html>
  <style>
    .upimgstyle{
  display: inline;
      
    }
  </style>
<head>
<?php require_once("./Layout/headerlinksloganddash.php"); ?>
 <style>
  .labelU1{
    padding-right: 360px;
  }
  .labelU2{
    padding-right: 310px;
  }
  .labelU3{
    padding-right: 300px;
  }
  .labelU4{
    padding-right: 290px;
  }
  .labelU5{
    padding-right: 270px;
  }
 </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    
      <!-- Navbar -->
      <?php require_once("./Layout/navbar.php");?>
      <!-- /.navbar -->

 <!-- Main Sidebar Container -->
<?php require_once("./Layout/sidemenu.php"); ?>
<!-- /.sidebar-menu -->
 <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content() -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active"><a href="../Action/logOut.php">LogOut<a></li>
                  <span></span>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
             <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>150</h3>
    
                    <p>New Orders</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
    
                    <p>Bounce Rate</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>44</h3>
    
                    <p>User Registrations</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>65</h3>
    
                    <p>Unique Visitors</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="./Layout/manageCountry.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
           
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
         <!--Table open-->
         <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>
              </div> 
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover" id="example1">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Username</th>
                      <th>Gmail</th>
                      <th>View More</th>
                      <th>Edit</th>
                      <th>Remove</th>
                      <th>Manage Availibity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php 
                    $count = 0;
                    while($row=mysqli_fetch_array($result)){
                      $count += 1;
                      ?>
                      <td><?php echo $count;?></td>
                      <td><?php echo $row['full_name'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><a data-id="<?php echo $row['id'];?>" class="viewmore"><i class="ion ion-eye"></a></i></td>
                      <td><a data-uid="<?php echo $row['id']?>" class="edituser"><i class="ion ion-edit"></a></i></td>
                      <td><a data-id="<?php echo $row['id']?>" class="removeuser"><i class="fa fa-trash" aria-hidden="true"></a></i></td>
                      <td><?php 
                     if ($row['status']==1)
                     {
                      echo '<p><a href="../Action/manageUserStatus.php?id='.$row['id'].'&status=0" class="btn btn-success">Active</p>';
                     }else{
                      echo '<p><a href="../Action/manageUserStatus.php?id='.$row['id'].'&status=1" class="btn btn-danger">Inactive</p>';
                     }
                     ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card -->
          </div>
        </div><!-- Table close-->
      </div>
         </div>
      <!-- /.content-wrapper -->
<!----------------------------------------------View Model---------------------------------------------------------------------------->
              <!-- Model of view more option -->
    <div class="modal fade" id="myModall" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body" style="background-color:rgb(0,0,0,0.1);">
          <p></p>
        </div> 
      </div>
    </div>
            </div>
            <!-- / Model close view more option-->
 <!--------------------------------------------View Model Colse------------------------------------------------------------------------------>       
 <!--------------------------------------------Edit Model Open------------------------------------------------------------------------------>           
  <!-- Model of edit  option -->
         <div class="modal fade" id="myModal" role="dialog">
             <div class="modal-dialog">
           <!-- Modal content-->
                <div class="modal-content">
                   <div class="modal-body" style="background-color:rgb(0,0,0,0.1);">
          <p>njoijiouoiu</p>
        </div> 
      </div>
    </div>
            </div>
            <!-- / Model close edit option-->
 <!--------------------------------------------Edit Model Colse------------------------------------------------------------------------------>       
  <!---------------------------------------UPDATE ADMIN PROFILE MODEL--------------------------------------------------------------->
  <div id="UpdateAdmin" class="modal fade" role="dialog">
  <div class="modal-dialog">      
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">UPDATE PROFILE</h4>
      </div>
      <div class="">
      <div class="container height-100 d-flex justify-content-center align-items-center">
    <div class="card text-center">    
    <div class="py-4 p-2">
            <div>
            <img src="./../Signup_file/<?php echo $_SESSION['file'];?>" class="rounded" width="150">
        </div>
        <div class="mt-3 d-flex flex-row justify-content-center">
            <h5> </h5>
        </div>
      <div class="mt-3" id="editpic">
            <button class="btn btn-warning"><a data-id="<?php echo $_SESSION['AdminId'];?>" class="UpdateImage">UPDATE PROFILE IMAGE</a></button><br>
           <br><form style="display: none;" id="AdminImageEdit" method="post" enctype="multipart/form-data">
                <div class="form-group" class="upimgstyle">
                <input type="hidden" class="form-control" id="AdminIdImg"  value="<?php echo $_SESSION['AdminId']; ?>" name="AdminId">
                    <!-- <input type="file" class="form-control" id="UpdatedFormImage" style="width: 30px; padding-right: 200px; margin-left: 50px;" name="AdminProfileImage"><br> -->
                    <div class="form-group" style="width: 350px;  margin-left: 50px;" >
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="UpdatedFormImage" name="AdminProfileImage" >
                        <label class="custom-file-label">Upload </label>
                      </div>
                      <div class="input-group-append">
                    <input type="button" value="Edit" class="btn btn-warning" id="UpdateImageNew">
                    </div>
                    </div>  
                  </div>
                    <!-- <span><i class="fa fa-check" style="font-size:28px;" id="editbutton"></i></span> -->
                   
                  </div>     
           </form>
           
            <form role="form">
                <div class="card-body">
                  <div class="form-group">
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="AdminId"  value="<?php echo $_SESSION['AdminId']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="labelU1">Name</label>
                    <input type="text" class="form-control" id="AdminName"  value="<?php echo  $_SESSION['name']; ?>">
                  </div>
                    <label for="exampleInputEmail" class="labelU2">Email address</label>
                    <input type="email" class="form-control" id="AdminEmail" placeholder="Enter email" value="<?php echo $_SESSION['email'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="labelU3">Contact Number</label>
                    <input type="text" class="form-control" id="AdminContact"  value="<?php echo $_SESSION['contact']; ?>">
                  </div>
                  <input type="hidden" class="form-control" id="Old_Pass_type"  value="<?php echo $_SESSION['AdminPwd']; ?>">
                  <div class="form-group">
                    <label for="PasswordOld" class="labelU4">Currnet Password</label>
                   
                    <input type="text" class="form-control" id="Old_Pass"  value="">

                  </div>
                  <div class="form-group">
                    <label for="PasswordOld" class="labelU5">Enter New Password</label>
                    <input type="text" class="form-control" id="New_Pass"  value="">
                  </div>
                <div class="card-footer">
                  <button class="btn btn btn-warning btn-lg"><a data-id="<?php echo $_SESSION['AdminId'];?>" class="EditProfileText"> Edit Profile</a></button>
                </div>
              </form>
        </div>   
        </div>
    </div> 
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------UPDATE ADMIN PROFILE MODEL Close--------------------------------------------------------------->  
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
<!----------------------------------------------------------------------------------------------------> 
<!-- Footer-->
<?php require_once("./Layout/footer.php")?>
<!-- Footer close -->
<!----------------------------****** links for jquery ******--------------------------------------------------->
<?php require_once("./Layout/scriptlinksfordash.php"); ?>
<!----------------------------****** links for jquery ******--------------------------------------------------->
<script type="text/javascript">   
//for sidemenu redirection   
var logoimg = '../../AssestsMain/dist/img/AdminLTELogo.png'
  $('#logoimgc').attr("src",logoimg);
//for profile img
var profileimg= './../Signup_file/<?php echo $_SESSION['file'];?>'
  $('#proimg').attr("src",profileimg);
var GURI = './Layout/GuideRegisterInfo.php'
  $('#GRI').attr("href",GURI);
  var VR = './Layout/verifyGuideInfo.php'
  $('#VG').attr("href",VR);
 var BSP = './Layout/BasicSubscription.php'
 $('#BSP').attr("href",BSP);
 var MHD ='./Layout/ManageHotel.php'
 $('#MHD').attr("href",MHD);
 var MTD = './Layout/ManageTravel.php'
 $('#MTD').attr("href",MTD);
 var MSI = './Layout/ManageSubcription.php'
 $('#MSI').attr("href",MSI);
 var MTR = './Layout/ManageTourRequest.php'
 $('#MTR').attr("href",MTR);
 var aps = './Layout/add_place_in_card.php'
 $('#aps').attr("href",aps);
 var aps1 = './Layout/sechdule_trip.php'
 $('#aps1').attr("href",aps1);
 var SPP = './Layout/sechdule_trip.php'
 $('#SPP').attr("href",SPP);
  </script>
</body>
 </html>
    