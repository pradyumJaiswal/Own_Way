<?php
require_once("../../Action/Conn.php");
//session_start();
$tquary="select * from travel";
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
                <h3 class="card-title">Add Travel Agent</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                 <button type="button" class="btn btn-block btn-outline-primary"  id="addplan">Add Vehicle</button>
                 <button type="button" class="btn btn-block btn-outline-danger"  id=""> Unavailble</button>
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
                      <th>Vehcile Owner Name</th>
                      <th>Owner Contact</th>
                      <th>Vehicle Name</th>
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
                      <td><?php echo $row['vehicle_ownername'];?></td>
                      <td><?php echo $row['contact_number'];?></td>
                      <td><?php echo $row['vehicle_name'];?></td>
                      <td><a data-id="<?php echo $row['t_id'];?>" class="viewvehicle"><i class="ion ion-eye"></a></i></td>
                      <td><a data-id="<?php echo $row['t_id']?>" class="editvehicle"><i class="ion ion-edit"></a></i></td>
                      <td><a data-id="<?php echo $row['t_id']?>" class="removevehicle"><i class="fa fa-trash" aria-hidden="true"></a></i></td>
                      <td><?php 
                     if ($row['v_status']==1)
                     {
                      echo '<p><a href="../../Action/manageTravelStatus.php?id='.$row['t_id'].'&status=0" class="btn btn-success">Active</p>';
                     }else{
                      echo '<p><a href="../../Action/manageTravelStatus.php?id='.$row['t_id'].'&status=1" class="btn btn-danger">Inactive</p>';
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
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ADD TRAVEL AGENT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label >Vehicle Owner Name</label>
                    <input type="text" class="form-control" id="Ownername" placeholder="Enter Vehicle Owner Name">
                  </div>
                  <div class="form-group">
                    <label >Owner Contact Number</label>
                    <input type="text" class="form-control" id="Ownercontact" placeholder="Enter  Owner Contact Number">
                  </div>
                  <div class="form-group">
                    <label >Vehicle Type</label>
                    <select class="form-control" id="VehicleType" placeholder="Choose Type">
                    <option value="" class="form-control" selected>Choose Type</option>    
                    <option value="Two Wheeler" class="form-control">Two Wheeler</option>
                    <option value="Four Wheeler" class="form-control">Four Wheeler</option>
                    <option value="Jeep" class="form-control">Jeep</option>
                    <option value="Mini Bus" class="form-control">Mini Bus</option> 
                    <option value="Full Size Bus" class="form-control">Full Size Bus</option> 
                </select>
                  </div>
                  <div class="form-group">
                    <label>Enter Vehicle Name</label>
                    <input type="text" class="form-control" id="VehicleName" placeholder="Enter VehicleName">
                  </div>
                  <div class="form-group">
                    <label >Vehicle Capcity</label>
                    <select class="form-control" id="VehicleCapcity" placeholder="Choose Type">
                    <option value="" class="form-control" selected>Choose Capcity</option>    
                    <option value="Two Seeter" class="form-control">Two Seeter</option>
                    <option value="Four Seeter" class="form-control">Four Seeter</option>
                    <option value="Six Seeter" class="form-control">Six Seeter</option>
                    <option value="Eight Seeter" class="form-control">Eight Seeter</option>
                    <option value="Ten Seeter" class="form-control">Ten Seeter</option> 
                    <option value="Fifteen Seeter" class="form-control">Fifteen Seeter</option>
                    <option value="Twonty Seeter" class="form-control">Twonty Seeter</option>
                    <option value="Forty Seeter" class="form-control">Forty Seeter</option>
                    <option value="Fifty Seeter" class="form-control">Fifty Seeter</option>
                </select>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="submitvehicle">Submit</button>
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

</body>