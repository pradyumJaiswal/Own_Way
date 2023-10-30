<?php 
require_once("../../Action/Conn.php");
//require_once("../../Action/ManageGuideStatus.php");
//session_start();
$quary="select * from user_table where user_type='Guide' and status=0 or status=1";
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
<div class="container">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Register Guide/Guide Request To Be A Guide</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover" id="exampleG">
                  <thead>
                    <tr>
                    <th>S.No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Update Status</th>
                      <th>View</th>
                      <th>Update</th>
                      <th>Deny</th>
                      <!-- <th>Send Guide Id</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php 
                     $count = 0;
                     while($row=mysqli_fetch_array($result)){
                      $count += 1;
                      ?>
                      <td><?php echo  $count;?></td>
                      <td><?php echo $row['full_name'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php 
                     if ($row['status']==1)
                     {
                      echo '<p><a href="../../Action/ManageGuideStatus.php?id='.$row['id'].'&status=0" class="btn btn-success">Active</p>';
                     }else{
                      echo '<p><a href="../../Action/ManageGuideStatus.php?id='.$row['id'].'&status=1" class="btn btn-danger">Inactive</p>';
                     }
                     ?></td>
                      <td><a data-id="<?php echo $row['id'];?>" class="viewmore"><i class="ion ion-eye"></a></i></td>
                      <td><a data-id="<?php echo $row['id']?>" class="edituser"><i class="ion ion-edit"></a></i></td>
                      <td><a data-id="<?php echo $row['id']?>" class="removeuser"><i class="fa fa-trash" aria-hidden="true"></a></i></td>
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
        <!--view Guide Model -->
        <div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModalV" role="dialog" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body" id="modalview">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--view Guide Model close -->
        <!--Edit Guide Model -->
        <div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body" id="modaltab">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Edit Guide Model close -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
</div>
<?php require_once("./footer.php");?>

<?php require_once("./scriptlinksLay.php"); ?>
</body>
</html>