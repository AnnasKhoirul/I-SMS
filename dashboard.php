<?php
    session_start();

    error_reporting();

     $koneksi = new mysqli ("localhost","root","","i_sms");
     

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>I SMS GATEWAY</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- css -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="asset/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="asset/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="asset/css/animations.css" rel="stylesheet" />
  <link href="asset/css/style.css" rel="stylesheet">
  <link href="asset/color/default.css" rel="stylesheet">
  <!-- -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>I SMS</b>GATEWAY</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
     <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a> 

      <div class="navbar-custom-menu">
        <ul class="nav ">
          <div style="color: white;
            padding: 5px 50px 5px 50px;
            float: right;
            font-size: 16px;"> Last acess : <?php echo date('d-M-Y'); ?> <a href="logout.php" style="margin-top: 10px" class="btn btn-danger square-btn-adjust" >Logout</a> </div>
              
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="asset/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
       <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="dashboard.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
             <li class="active"><a href="web.php"><i class="fa fa-circle-o"></i> Visite Web</a></li>
          </ul>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-header"></i>
            <span>Header</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="?page=header"><i class="fa fa-circle-o"></i> Header</a></li>
            <li><a href="?page=navbar"><i class="fa fa-circle-o"></i> Navbar</a></li>
          </ul>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-plus-square"></i>
            <span>Definisi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="?page=definisi"><i class="fa fa-circle-o"></i> Definisi</a></li>
          </ul>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-plus-square"></i>
            <span>Fitur</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="?page=fitur2"><i class="fa fa-circle-o"></i> Fitur</a></li>
          </ul>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-plus-square"></i>
            <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=produk"><i class="fa fa-circle-o"></i>  Produk</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i>
            <span>Harga</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=harga"><i class="fa fa-circle-o"></i>  Harga</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus-square"></i>
            <span>Footer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=nama_footer"><i class="fa fa-circle-o"></i> Nama Footer</a></li>
            <li><a href="?page=footer"><i class="fa fa-circle-o"></i> I SMS</a></li>
            <li><a href="?page=products"><i class="fa fa-circle-o"></i> products</a></li>
            <li><a href="?page=useful_link"><i class="fa fa-circle-o"></i> Useful Link</a></li>
            <li><a href="?page=contact"><i class="fa fa-circle-o"></i> Contact</a></li>
            <li><a href="?page=icon_sosial"><i class="fa fa-circle-o"></i> Icon Sosial</a></li>                      
          </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

       <?php

              if (isset($_GET['page'])) {

               if ($_GET['page']=="fitur") {
                   include 'pages/fitur/fitur.php';
               }elseif ($_GET['page']=="produk") {
                   include 'pages/produk/produk.php';
               }elseif ($_GET['page']=="definisi") {
                   include 'pages/definisi/definisi.php';
               }elseif ($_GET['page']=="harga") {
                   include 'pages/harga/harga.php';
               }elseif ($_GET['page']=="fitur2") {
                   include 'pages/fitur/fitur2.php';
               }elseif ($_GET['page']=="header") {
                   include 'pages/header/header.php';
               }elseif ($_GET['page']=="navbar") {
                   include 'pages/header/navbar.php';
               }elseif ($_GET['page']=="judul_fitur") {
                   include 'pages/fitur/judul_fitur.php';
               }elseif ($_GET['page']=="judul_produk") {
                   include 'pages/produk/judul_produk.php';
               }elseif ($_GET['page']=="judul_harga") {
                   include 'pages/harga/judul_harga.php';
               }elseif ($_GET['page']=="footer") {
                   include 'pages/footer/i_sms.php';
               }elseif ($_GET['page']=="nama_footer") {
                   include 'pages/footer/nama_footer.php';
               }elseif ($_GET['page']=="contact") {
                   include 'pages/footer/contact.php';
               }elseif ($_GET['page']=="useful_link") {
                   include 'pages/footer/useful_link.php';
               }elseif ($_GET['page']=="products") {
                   include 'pages/footer/products.php';
               }elseif ($_GET['page']=="icon_sosial") {
                   include 'pages/footer/icon_sosial.php';
               }

           }else{
             include "home.php";
           }
         ?>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a href="#">I SMS GATEWAY</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- Core JavaScript Files -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/jquery.sticky.js"></script>
<script src="asset/js/jquery.easing.min.js"></script>
<script src="asset/js/jquery.scrollTo.js"></script>
<script src="asset/js/jquery.appear.js"></script>
<script src="asset/js/stellar.js"></script>
<script src="asset/js/nivo-lightbox.min.js"></script>

<script src="asset/js/custom.js"></script>
<script src="asset/js/css3-animate-it.js"></script>
<script src="asset/contactform/contactform.js"></script>      
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
