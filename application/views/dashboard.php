<title>Dashboard</title>
<!-- Main content header -->
<section class="content-header">
      <h1>
        Dashboard
        <small></small>
	  </h1>
	  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content header -->

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green" ><i class="fa fa-500px"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Absensi</span>
              <span class="info-box-number"><?=$this->fungsi->count_absensi()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Karyawan</span>
              <span class="info-box-number"><?=$this->fungsi->count_karyawan()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Users</span>
              <span class="info-box-number"><?=$this->fungsi->count_users()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- Main content -->