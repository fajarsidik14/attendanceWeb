<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- data tables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- assets -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/sweetalert2/animate.min.css">
  <!-- icons -->
  <link rel="shortcut icon" href="<?=base_url()?>assets/dist/img/logo/logo.png" type="image/x-icon">
  <style>
    .swal2-popup{
      font-size: 1.6rem !important;
    }
  </style>

</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=site_url()?>dashboard" class="logo" style="background-color:white">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
		  <img src="<?=base_url()?>assets/dist/img/logo/logo.png" height="45px">
	  </span>
	  <!-- logo for regular state and mobile devices -->
	  <span class="logo-lg">
		  <img src="<?=base_url()?>assets/dist/img/logo/logo.png" height="45px">
	  </span>
    </a>
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
        <ul class="nav navbar-nav">
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/avatardefault.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->fungsi->user_login()->idUser?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/avatardefault.png" class="img-circle" alt="User Image">

                <p>
                <?=$this->fungsi->user_login()->level == 1 ? "Admin" : "Petugas"?>
                  <small><?=$this->fungsi->user_login()->lokasi?></small>
                </p>
              </li>
              <!-- userbody -->
              <li class="user-body">
                  <div class="text-center">
                    <a href=""><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
              </li>
                <!-- userbody -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="text-center">
				         <a href="<?=site_url('auth/logout')?>" class="btn btn-danger ">Log out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
          <li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
  <!-- Absensi -->
          <li class="treeview <?=$this->uri->segment(1) == 'absensi' || $this->uri->segment(1) == 'laporan'?>">
            <a href="#">
              <i class="fa fa-500px"></i>
              <span>Absensi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" >
              <?php if($this->session->userdata('level') == 2) {?>
                <li <?=$this->uri->segment(1) == 'absensi' ? 'class="active"' : ''?>><a href="<?=site_url('absensi')?>"><i class="fa fa-500px text-green"></i> Absensi</a></li>
              <?php }?>
              <li <?=$this->uri->segment(1) == 'laporan' ? 'class="active"' : ''?>><a href="<?=site_url('laporan')?>"><i class="fa fa-calendar-check-o text-blue"></i> Laporan Absensi</a></li>
              <li class="treeview <?=$this->uri->segment(2) == 'rekap/security' || $this->uri->segment(2) == 'rekap/cleaning' || $this->uri->segment(2) == 'rekap/house' ? 'active' : ''?>">
              <a href="">
              <i class="fa fa-calendar text-yellow"></i> 
              Rekap Absensi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
                <ul class="treeview-menu">
                  <li <?=$this->uri->segment(2) == 'rekap/security' ? 'class="active"' : ''?>><a href="<?=site_url('rekap/security')?>"><i class="fa fa-circle-o text-green"></i> Security</a></li>
                  <li <?=$this->uri->segment(2) == 'rekap/cleaning' ? 'class="active"' : ''?>><a href="<?=site_url('rekap/cleaning')?>"><i class="fa fa-circle-o text-blue"></i> Cleaning Services</a></li>
                  <li <?=$this->uri->segment(2) == 'rekap/house' ? 'class="active"' : ''?>><a href="<?=site_url('rekap/house')?>"><i class="fa fa-circle-o text-yellow"></i> House Keeping</a></li>
                </ul>
              </li>
            </ul>
          </li>
  <!-- Absensi -->
  <!-- Karyawan -->
            <li class="treeview <?=$this->uri->segment(1) == 'karyawan' || $this->uri->segment(1) == 'karyawan/security' || $this->uri->segment(1) == 'karyawan/cleaning' || $this->uri->segment(1) == 'karyawan/house' ? 'active' : ''?>">
            <a href="">
              <i class="fa fa-user"></i>
              <span>Karyawan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li <?=$this->uri->segment(1) == 'karyawan/security' ? 'class="active"' : ''?>><a href="<?=site_url('karyawan/security')?>"><i class="fa fa-circle-o text-green"></i> Security</a></li>
              <li <?=$this->uri->segment(1) == 'karyawan/cleaning'  ? 'class="active"' : ''?>><a href="<?=site_url('karyawan/cleaning')?>"><i class="fa fa-circle-o text-blue"></i> Cleaning Services</a></li>
              <li <?=$this->uri->segment(1) == 'karyawan/house' ? 'class="active"' : ''?>><a href="<?=site_url('karyawan/house')?>"><i class="fa fa-circle-o text-yellow"></i> House Keeping</a></li>
              <?php if($this->session->userdata('level') == 1) {?>
                <li <?=$this->uri->segment(1) == 'karyawan' ? 'class="active"' : ''?>><a href="<?=site_url('karyawan')?>"><i class="fa fa-circle-o text-red"></i> Master</a></li>
              <?php }?>
            </ul>
          </li>
  <!-- Karyawan -->
  <?php if($this->session->userdata('level') == 1) {?>
  <!-- Admin -->
              <!-- <li <?=$this->uri->segment(1) == 'bagian' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>><a href="<?=site_url('bagian')?>"><i class="fa fa-cubes "></i> <span>Bagian</span></a></li> -->
              <li <?=$this->uri->segment(1) == 'users' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>><a href="<?=site_url('users')?>"><i class="fa fa-users "></i> <span>Users</span></a></li>
  <!-- Admin -->
  <?php }?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?= $contens?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020-2021 <a href="">Stay Focus</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- datatables -->
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- date range -->
<script src="<?=base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!--script untuk menampilkan dan meyembunyikan password-->
<script src="<?=base_url()?>assets/dist/js/sh.js"></script>
<!-- script untuk sweetalert2-->
<script src="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
  var flash = $('#flash').data('flash');
  if(flash) {
    Swal.fire({
      icon: 'success',
      title: 'Success',
      text: flash,
      showClass: {
         popup: 'animate__animated animate__swing'
      },
      hideClass: {
        popup: 'animate__animated animate__zoomOut'
      }
    })
  }
  $(document).on('click', '#btn-hapus', function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    
    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Data akan dihapus!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#00a65a',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus!',
      showClass: {
         popup: 'animate__animated animate__jackInTheBox'
      },
      hideClass: {
        popup: 'animate__animated animate__zoomOut'
      }
    }).then((result) => {
      if (result.isConfirmed) {
          window.location = link;
      }
    })
  })
</script>
<!-- script untuk sweetalert2-->

<!-- datatables -->
<script>
  $(document).ready(function(){
    $('#table1').DataTable()
  })
</script>
<!-- datatables -->

<script>
    $(".reveal").on('click',function() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});
</script>
 
 <!--Untuk memamggil script sh.js-->
 <script>
   $.toggleShowPassword({
   field: '#password-input',
   control: '#enable-show'
   });   
 </script>
</script>
</body>
</html>
