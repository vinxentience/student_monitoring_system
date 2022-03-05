<div class="register-box">
  
  <div class="alert alert-success" role="alert" style = "display: none;" id = "alert_success">
    Account successfully created!
  </div>

  <div class="alert alert-danger" role="alert" style = "display: none;" id = "alert_fail">
    Account already exist!
  </div>

  <div class="register-logo">
    <img src="<?php echo URL; ?>public/images/logo.png" />
  </div>
  <form action="login" method="POST" autocomplete="off">
  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="First name" id="reg_firstname" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Last name" id="reg_lastname" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" id="reg_email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

    <div class="form-group  has-feedback">
      <select class="form-control" id="reg_role" required>
        <option value="" disabled selected>Select Role</option>
        <option value="1">Admin</option>
        <option value="2">Parent / Guardian</option>
      </select>
    </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="reg_username" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="reg_password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" id="reg_repassword" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
                <a href="login" class="text-center">I already have a membership</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="register_user">Register</button>
        </div>
        <!-- /.col -->
      </div>
    
  </div>
</form>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->