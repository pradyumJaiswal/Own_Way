<?php
require_once("../../Action/Conn.php");
//session_start();
$tquary="select * from package_places";
//print_r($quary);
$tresult= mysqli_query($conect,$tquary);
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once("./headerlinks.php"); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php require_once("./navbar.php");?>
<?php require_once("./sidemenu.php");?>
<div class="content-wrapper">
<!------------------------------------------Open Table---------------------------------------------->
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Palces</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                 <button type="button" class="btn btn-block btn-outline-primary" id="Add-place-modal">Add Places</button>
                  </div>
                </div>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                 
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
               <!-- TABLE START -->
               <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover"  id="TravelTable">
                  <thead>
                    <tr>
                    <th>S.No.</th>
                      <th>Place Name</th>
                      <th>Place City</th>
                      <th>Place Image</th>
                     
                      <th>View</th>
                      <th>Update</th>
                      <th>Remove</th>
                      <th>Manage Availibity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php 
                    $count =0;
                    while($row=mysqli_fetch_array($tresult)){
                      $count += 1;
                      ?>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row['Place'];?></td>
                      <td><?php echo $row['city'];?></td>
                      <td><img src="../../Action/place_images/<?php echo $row['place_Image']?>" style="height:100px; width:150px;"></td>

                     
                      <td><a data-id="<?php echo $row['p_p_id'];?>" class="viewvehicle"><i class="ion ion-eye"></a></i></td>
                      <td><a data-id="<?php echo $row['p_p_id']?>" class="editvehicle"><i class="ion ion-edit"></a></i></td>
                      <td><a data-id="<?php echo $row['p_p_id']?>" class="removevehicle"><i class="fa fa-trash" aria-hidden="true"></a></i></td>
                      <td><?php 
                     if ($row['p_p_id']==1)
                     {
                      echo '<p><a href="#'.$row['p_p_id'].'&status=0" class="btn btn-success">Active</p>';
                     }else{
                      echo '<p><a href="#'.$row['p_p_id'].'&status=1" class="btn btn-danger">Inactive</p>';
                     }
                     ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
<!----------------------------------------- Close Table------------------------------------------------>
<!--------------------------------------View Vehicle Open Model---------------------------------------------------> 
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            </div>
        <div class="modal-body" id="viewvehicle">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>   
<!--------------------------------------View Vehicle Close Model--------------------------------------------------->          
 <!--------------------------------------Update Vehicle Open Model---------------------------------------------------> 
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="vehicleUpdate" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            </div>
        <div class="modal-body" id="vehicleUpdateShow">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>   
<!--------------------------------------Update Vehicle Close Model--------------------------------------------------->          
<!---------------------------------- Add Vehicle Modal ------------------------------------------->
  <div class="modal fade" id="Add-place-modal-show" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ADD Place In Subscription Card</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../../Action/add_place_action.php"  method="post"  enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label >Select City</label>
                    <select class="form-control" name="city_name" placeholder="Choose Type">
                    <option value="" class="form-control" selected>City</option>    
                    <option value="Jabalpur" class="form-control">Jabalpur</option>
                </select>
                  </div>
                  <div class="form-group">
                    <label >Place</label>
                    <input type="text" class="form-control" id="add_famous_place" placeholder="Enter Place Name" name="Place_Name">
                  </div>
                  <div class="form-group">
                  <label >Upload Place Picture</label>
                  <div class="input-group">
                      <div class="custom-file">
                      <input type="file" class="custom-file-input"   name="Place_Picture" >
                        <label class="custom-file-label">Upload </label>
                      </div>
                      <div class="input-group-append">
                    <input type="button" value="Upload" class="btn btn-warning">
                    </div>
                    </div>  
                    </div>
                  <div class="form-group">
                    <?php $selectcard ="SELECT * FROM basicsubcription";
                    $cardres = mysqli_query($conect,$selectcard);
                    ?>
                    <label >Subscription Card Name</label>
                    <select class="form-control" name="card_name" placeholder="Choose Type">
                    <option value="" class="form-control" selected>Choose Type</option>  
                    <?php while($fatchc = mysqli_fetch_assoc($cardres)){?>  
                    <option value="<?php echo $fatchc['id'] ?>" class="form-control"><?php echo $fatchc['plan_name'] ?></option> 
                     <?php }?>
                </select>
                  </div>                
                  <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit_place">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>
</div>
 <!--------------------------------------Add Vehicle Modal Close---------------------------------------- -->
 <?php require_once("./footer.php");?>

<?php require_once("./scriptlinksLay.php");?>
<script>
$(document).on("click","#Add-place-modal",function(){
  $("#Add-place-modal-show").modal("show");
});

</script>
</body>