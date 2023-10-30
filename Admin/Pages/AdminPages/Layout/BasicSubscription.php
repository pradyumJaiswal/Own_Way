<?php
require_once("../../Action/Conn.php");
//session_start();
$quary="select * from basicsubcription";
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
<div class="content-wrapper">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Basic Subcription Offer </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  <button type="button" class="btn btn-block btn-outline-primary"  id="addplan">Add Offer</button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ADD SUBCRIPTION OFFER</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label >Enter Plan Name</label>
                    <input type="text" class="form-control" id="BasicSubcriptionName" placeholder="Enter Plan Name">
                  </div>
                  <div class="form-group">
                    <label >Plan Type</label>
                    <select class="form-control" id="BasicSubcriptionType" placeholder="Choose Plan Type">
                    <option value="" class="form-control" selected>Choose Plan</option>    
                    <option value="Sliver" class="form-control">Sliver</option>
                    <option value="Gold" class="form-control">Gold</option>
                    <option value="Paltnium" class="form-control">Paltnium</option>   
                </select>
                  </div>
                  <div class="form-group">
                    <label>Enter Visit Places Name</label>
                    <textarea rows="4" cols="50" name="comment" form="usrform"  class="form-control" id="VisitPlaces" placeholder="Enter text here...">
</textarea>
                  </div>
                  <div class="form-group">
                    <label >Number Of Days In Trip</label>
                    <input type="text" class="form-control" id="TripDayas" placeholder="Enter Days">
                  </div>
                  <div class="form-group">
                    <label >Facility 1</label>
                    <input type="text" class="form-control" id="Facilityone" placeholder="Enter Hotel">
                  </div>
                  <div class="form-group">
                    <label>Facility 2</label>
                    <input type="text" class="form-control" id="Facilitytwo" placeholder="Enter Guide">
                  </div>
                  <div class="form-group">
                    <label>Facility 3</label>
                    <input type="text" class="form-control" id="Facilitythree" placeholder="Enter Travel">
                  </div>
                </div>
                
    </div>
    <!-- /.content -->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="submitplan">Submit</button>
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
    <!-- Modal -->
              <!-- TABLE START -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover"  id="BasicSubTab">
                  <thead>
                    <tr>
                    <th>S.NO.</th>
                      <th>Plan Name</th>
                      <th>Plan Type</th>
                      <th>Visit Places</th>
                      <th>View</th>
                      <th>Update</th>
                      <th>Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php
                      $count = 0;
                    while($row=mysqli_fetch_array($result)){
                       $count += 1;
                      ?>
                       <td><?php echo $count; ?></td>
                      <td><?php echo $row['plan_name'];?></td>
                      <td><?php echo $row['plan_type'];?></td>
                      <td><?php echo $row['visit_places'];?></td>
                      <td><a data-id="<?php echo $row['id'];?>" class="viewBasicsub"><i class="ion ion-eye"></a></i></td>
                      <td><a data-id="<?php echo $row['id']?>" class="editBasicsub"><i class="ion ion-edit"></a></i></td>
                      <td><a data-id="<?php echo $row['id']?>" class="removeBasicsub"><i class="fa fa-trash" aria-hidden="true"></a></i></td>
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
                    </div>
<?php require_once("./footer.php")?>
 <!-- Add Subcription Offer -->
 <?php require_once("./scriptlinksLay.php")?>
</body>