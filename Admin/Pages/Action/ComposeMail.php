<?php
$Requst_Gid = $_POST['Gid'];
require_once("../Action/Conn.php");
$quaryvd="select * from user_table where id=".$Requst_Gid;
$resultvd= mysqli_query($conect,$quaryvd);
$randId = rand(10000,100000);
$srt="";
while($row=mysqli_fetch_array($resultvd)){
    $srt .=" <div class='col-md-12'>
    <form action='../../Action/mailsntp.php' method='POST' >
    <div class='card card-primary card-outline'>
      <div class='card-header'>
        <h3 class='card-title'>Compose New Message</h3>
      </div>
      <!-- /.card-header -->
      <div class='card-body'>
        <div class='form-group'>
          <input class='form-control' placeholder='To:'  value='{$row['email']}' name='RequstGamil'>
          <input type='text' class='form-control' placeholder='' value='{$row['id']}' name='RGid'>
        </div>
        <div class='form-group'>
          <input class='form-control' placeholder='Subject:' value='GUIDE PROVIDE BY OWNWAY' name='mailsubeject'>
        </div>
        <div class='form-group'>
          <input class='form-control' type='text' placeholder='' value='{$row['guide_id']}$randId' name='guivefiyid'>
        </div>
        <div class='form-group'>
          <div class='btn btn-default btn-file'>
            <i class='fas fa-paperclip'></i> Attachment
            <input type='file' name='attachment'>
          </div>
          <p class='help-block'>Max. 32MB</p>
        </div>
      </div>
      <!-- /.card-body -->
      <div class='card-footer'>
        <div class='float-right'>
          <button type='button' class='btn btn-default'><i class='fas fa-pencil-alt'></i> Draft</button>
          <input type='submit' class='btn btn-primary' name='guidemail' value='Send'>
        </div>
        <button type='reset' class='btn btn-default'><i class='fas fa-times'></i> Discard</button>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
    </form>
  </div>";
}
echo $srt; 