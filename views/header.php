<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Student Monitoring System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo URL; ?>public/components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/dist/css/AdminLTE.min.css">
  <!-- Data Table -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/dist/css/skins/skin-black.min.css">
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/calendar.css">
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/calendar.print.css" media="print">

  <link rel="stylesheet" href="<?php echo URL; ?>public/css/main.css">

  <link rel="stylesheet" href="<?php echo URL; ?>public/plugins/iCheck/all.css">
  
<script src="<?php echo URL; ?>public/components/jquery/dist/jquery.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<?php 
  $checkURL = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $url_register = URL . 'register';
  $url_login = URL . 'login';
  $url_clienthome = URL . 'clienthome';

if($checkURL ==   $url_register  ||  $checkURL == $url_login || $checkURL == $url_clienthome ){ ?>

<body class="hold-transition register-page">

<?php }else{ ?>

<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
    <!-- <img src="<?php echo URL; ?>public/images/logo.png" style="height: 0px; width: 50px;" /> -->
      <span class="logo-lg"><b>SMS</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
      
              
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a  class="dropdown-toggle" href="changepassword">
              <img src="public/images/avatar-1.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $_SESSION['userName']; ?> </span>
            </a>
            <li class="dropdown user user-menu">
            <a href="<?php echo URL; ?>login/logout" class="btn btn-warning btn-flat">Sign out</a>
  

            <!-- <ul class="dropdown-menu">
           
              <li class="user-header">
                <img src="public/images/avatar-1.jpg" class="img-circle" alt="User Image">
                <p>
                  Guidance Counselor
                </p>
              </li>
            
            
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                
              </li>
            </ul> -->
          </li>
        
        </ul>
      </div>
    
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li><a href="dashboard"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="students"><i class="glyphicon glyphicon-user"></i> <span>Student</span></a></li>
        <li><a href="monitor"><i class="fa fa-calendar-check-o"></i> <span>Daily Monitoring</span></a></li>
        <li><a href="reports"><i class="glyphicon glyphicon-th-list"></i> <span>Reports</span></a></li>
        <li><a href="settings"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
        <li><a href="<?php echo URL; ?>login/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper page-background">
<?php } ?>