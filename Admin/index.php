<!DOCTYPE html>
<html>
<head>
 <?php require_once("./Pages/AdminPages/Layout/headerlinksIndex.php"); ?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <form action="./Pages/Action/register_action.php" method="post" onsubmit="return validation()" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="username" id="user" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span id="username" class="text-danger font-weight-bold"></span>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email"  name="email" id="email"  autocomplete="off" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <span id="mail" class="text-danger font-weight-bold"></span>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password"  autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span id="pwd" class="text-danger font-weight-bold"></span>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" id="rpwd"  autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span id="repwd" class="text-danger font-weight-bold"></span>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Contact Number" name="contact" id="con_no" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span id="connum" class="text-danger font-weight-bold"></span>
        <div class="input-group mb-3">
          <input type="file" class="form-control" placeholder="" name="file" id="file" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span id="fileup" class="text-danger font-weight-bold"></span>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="./Pages/AdminPages/login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<!-- jQuery -->
<script src="./AssestsMain/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./AssestsMain/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./AssestsMain/dist/js/adminlte.min.js"></script>
<script src="./AssestsMain/dist/JsCustom/RegisterScript.js">
</script>
</body>
</html>
