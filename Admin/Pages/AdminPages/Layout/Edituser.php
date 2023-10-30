<style>


.form-control:focus {
  box-shadow: none;
  border-color: #BA68C8;
}

.profile-button {
  background: #BA68C8;
  box-shadow: none;
  border: none;
}

.profile-button:hover {
  background: #682773;
}

.profile-button:focus {
  background: #682773;
  box-shadow: none;
}

.profile-button:active {
  background: #682773;
  box-shadow: none;
}

.back:hover {
  color: #682773;
  cursor: pointer;
}
</style>

<?php
require_once("../../Action/Conn.php");
$uid = $_POST['uid'];
//echo $uid;
$quary="select * from user_table where ID=".$uid;
$result= mysqli_query($conect,$quary);
while($row=mysqli_fetch_assoc($result)){
?>    


<div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right"> 
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="square-circle mt-5" src="../Signup_file/<?php echo $row['FilesUrl'];?>" width="100px"; posstion="fixed";><span class="font-weight-bold"><?php echo $row['full_name'];?></span><span class="text-black-50"><?php echo $row['email'];?></span><span></span></div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                       
                        <h6>Back to home</h6>
                        </div>
                        <h6 class="text-right">Edit Profile</h6>
                    </div>
                    <form Action="./../Action/register_action.php" method="POST" class="form-group" enctype="multipart/form-data"> 
                     <?php  $data="select * from userinfo where ID=".$uid;?>  
                    <div class="row mt-2">
                    <input type="text"  hidden class="form-control" value="<?php echo $row['id'];?>" name="id" >
                    <div class="col-md-6"><label class="form-control" value="Name" placeholder="Name">Name</label></div>   
                    <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['full_name'];?>"  name="username"></div>
                        
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-6"><label class="form-control" value="Gmail" placeholder="Gmail">Gmail</label></div>   
                    <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['email'];?>" name="email" ></div>
                        
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-6"><label class="form-control" value="Contact" placeholder="Contact">Contact</label></div>   
                    <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['phone_number'];?>"  name="contact" ></div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="form-control" placeholder="Profile Picture" value="example">example</label></div>
                        <div class="col-md-6"><input type="file" class="form-control" value="<?php echo $row['FilesUrl'];?>" placeholder=""  name="profile"></div>
                    </div>
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit" name="update">Save Profile</button>   <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button></div>

                </div>
                </form>
            </div>
          
        </div>
    </div>
<?php
}?>