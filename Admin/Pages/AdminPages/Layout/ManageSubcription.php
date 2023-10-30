<?php
require_once("../../Action/Conn.php");
//session_start();
$quary="select * from subscription_plan";
$result= mysqli_query($conect,$quary);
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once("./headerlinks.php"); ?>
</head>
<?php require_once("./navbar.php");?>
<?php require_once("./sidemenu.php");?>
<div class="content-wrapper">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Register Guide/Guide Request To Be A Guide</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  <button type="button" class="btn btn-block btn-outline-primary"  id="addoffer">Add Offer</button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- Modal -->
              
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
                    <input type="text" class="form-control" id="exampleInputpname" placeholder="Enter Plan Name">
                  </div>
                  <div class="form-group">
                    <label >Plan Type</label>
                    <select class="form-control" id="exampleInputSelect" placeholder="Choose Plan Type">
                    <option value="" class="form-control" selected>Choose Plan</option>    
                    <option value="Sliver" class="form-control">Sliver</option>
                    <option value="Gold" class="form-control">Gold</option>
                    <option value="Paltnium" class="form-control">Paltnium</option>   
                </select>
                  </div>
                  <div class="form-group">
                    <label>Enter Visit Places Name</label>
                    <textarea rows="4" cols="50" name="comment" form="usrform"  class="form-control" id="exampleInputTxt" placeholder="Enter text here...">
</textarea>
                  </div>
                  <div class="form-group">
                    <label >Enter Hotel Id</label>
                    <input type="text" class="form-control" id="exampleInputHid" placeholder="Enter Hotel Id">
                  </div>
                  <div class="form-group">
                    <label >Enter Guide Id</label>
                    <input type="text" class="form-control" id="exampleInputGid" placeholder="Enter Guide Id">
                  </div>
                  <div class="form-group">
                    <label>Enter Travel Id</label>
                    <input type="text" class="form-control" id="exampleInputTid" placeholder="Enter Travel Id">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="submitoffer">Submit</button>
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
  
    
      
              <!-- TABLE START -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover" id="SubcriptionInfo">
                  <thead>
                    <tr>
                    <th>S.No.</th>
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
                    $count =0;
                    while($row=mysqli_fetch_array($result)){
                      $count += 1;
                      ?>
                      <td><?php echo $count;?></td>
                      <td><?php echo $row['plan_name'];?></td>
                      <td><?php echo $row['plan_type'];?></td>
                      <td><?php echo $row['visit_place'];?></td>
                      <td><a data-id="<?php echo $row['s_id'];?>" class="viewmore"><i class="ion ion-eye"></a></i></td>
                      <td><a data-id="<?php echo $row['s_id']?>" class="edituser"><i class="ion ion-edit"></a></i></td>
                      <td><a data-id="<?php echo $row['s_id']?>" class="removeuser"><i class="fa fa-trash" aria-hidden="true"></a></i></td>
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
        <!-- jQuery -->
<?php require_once("./scriptlinksLay.php");?>

