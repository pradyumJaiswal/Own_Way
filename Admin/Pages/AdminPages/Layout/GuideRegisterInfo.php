<?php 
require_once("../../Action/Conn.php");
//session_start();
$quary="select * from user_table where user_type='Guide' and status='2'";
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
                <table class="table table-bordered table-hover" id="GuideRegInfoT">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>pdf</th>
                      <th>View</th>
                      <th>Update</th>
                      <th>Deny</th>
                      <th>Send Guide Id</th>

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
                      <td><a data-id="<?php echo $row['id'];?>" class="view" href="../../Action/resume.php?id" ><i class="fa fa-file" ></a></i></td>
                      <td><a data-id="<?php echo $row['id'];?>" class="viewmore"><i class="ion ion-eye"></a></i></td>
                      <td><a data-id="<?php echo $row['id'];?>" class="edituser"><i class="ion ion-edit"></a></i></td>
                      <td><a data-id="<?php echo $row['id'];?>" class="removeuser"><i class="fa fa-trash" aria-hidden="true"></a></i></td>
                      <td><a data-id="<?php echo $row['id'];?>" class="mailforGid"><i class="fa fa-envelope"></a></i></td>
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
<!--Remove Guide Model -->
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModalR" role="dialog" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <form action="#" method="post">
          <input type="text" name="g_id" id="Rid" hidden>
        <div class="modal-body" id="modaltabR">
         <h4> Are Sure You Want To Delete</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" name="close">Close</button>
          <button type="button" class="btn btn-danger" id="removeGid"  name="RemoveG">Remove</button>

        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Remove Guide Model close -->
<!---------------------------------Compose Guide Id Thruogh Mail ----------------------------------------------------------------------------->
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="MailModel" role="dialog" style="display: none;">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body" id="Mailtab"  >
       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!---------------------------------Compose Guide Id Thruogh Mail close ----------------------------------------------------------------------------->                  
<aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      </div>
<!-- Footer-->
<?php require_once("./footer.php")?>
 <!-- Footer close -->
<!-- script links -->
 <?php require_once("./scriptlinksLay.php");?>
<!-- script links -->
</body>