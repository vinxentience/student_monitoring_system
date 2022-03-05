<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/loginpage.css">
</head>
<body style = "overflow: hidden;">
<img src="<?php echo URL; ?>public/images/backnew.png" class="user" style="max-height:1000px; width: 1920px;background-size:cover; background-position: center; background-repeat: no-repeat;"/>

<div class="loginBox">
<div class="logoBox">
   <img src="<?php echo URL; ?>public/images/logo.png" class="user" style="padding-left:65px; padding-top:25px; height: 150px; width: 260px;" />
  </div>
  <!-- /.login-logo -->
  <div class="formBox">
    <form class="form-login" method = "GET" action="<?php echo URL ?>login/run">
      <input type="text"  name="username" placeholder="Username">
			<input type="password" name = "password" placeholder="Password">
			<input type="submit" name = "login" value="Sign In">
      <div class="col-xs-12"> 
          <center><a type="button" class="btn btn-info" href = 'register'>Create an account</a></center>
      </div>
      <!-- <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <input type="username" class="form-control" placeholder="Email" name="username">
        
      </div>
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <input type="password" class="form-control" placeholder="Password" name="password">
        
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
         /.col 
        
         /.col 
      </div> -->
    </form>
   <!--  <a href="#">I forgot my password</a><br>
    <a href="register" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</body>
</html>

