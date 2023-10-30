<?php 
require_once('../Action/Conn.php');
if(isset($_SESSION['email']) && ($_SESSION['user_type'] == "Admin")){
  header("location:./dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once("./Layout/headerlinksloganddash.php"); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php $_SERVER['PHP_SELF']?>" method="POST"  onsubmit="return Logvalidation()">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="Gmail" name="Email" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <span id="mail" class="text-danger font-weight-bold"></span>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="Password" id="Pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span id="Pwd" class="text-danger font-weight-bold"></span>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"  name="SignIn">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php 

if(isset($_POST['SignIn'])){
    $EMAIL=$_POST["Email"];
    $PASSWORD=$_POST["Password"];
    $SQL="select * from user_table where email='$EMAIL' and Pwd='$PASSWORD'";
    //print_r($SQL);
    //die;
    $data=mysqli_query($conect,$SQL); 
      if($row= mysqli_fetch_array($data)){
        session_start();
        $_SESSION['AdminId']=$row['id'];
        $_SESSION['email']=$row['email'];
        $_SESSION['name']=$row['full_name'];
        $_SESSION['contact']=$row['phone_number'];
        $_SESSION['file']=$row['FilesUrl']; 
        $_SESSION['user_roleA']=$row['user_type'];
        $_SESSION['AdminPwd']=$row['Pwd']; 
        if($_SESSION['user_roleA'] == 'Admin'){
          header("location:./dashboard.php");
       } 
    }
    else { 
        
     // echo "Error:".$SQL."<br>".$conect->error;
      echo"<div class='text-danger font-weight-bold'>Invaild Username and Password</div>";
         
   }
    
}
?>
<p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="../../index.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<?php require_once("./Layout/scriptlinksfordash.php");?>
</body>
</html>
