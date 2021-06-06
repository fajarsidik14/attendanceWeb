<!-- Main content header -->
<section class="content-header">
      <h1>
        Form Absensi
        <small></small>
	    </h1>
	    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Absensi</li>
      </ol>
</section>
    <!-- Main content header -->
    <!-- Main content -->
<section class="content">
<div class="box">
        <div class="box-header">
            <h3 class="box-title">Form input data absensi</h3>
            <div class="pull-right">
                <a href="<?=site_url('dashboard')?>" class="btn btn-warning btn-flat">
                   <i class="fa fa-undo"></i> Back 
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                    <div class="form-group" hidden>
                            <label for="">ID Absensi</label>
                            <input type="text" name="idAbsensi" class="form-control" value="<?=set_value('idAbsensi')?>">
                        </div>
                        <div class="form-group <?=form_error('idKaryawan') ? 'has-error':null?>">
                            <label for="">ID Karyawan</label>
                            <input type="text" name="idKaryawan" class="form-control" value="<?=set_value('idKaryawan')?>">
                            <?=form_error('idKaryawan')?>
                        </div>
                        <div class="form-group <?=form_error('tanggal') ? 'has-error':null?>">
                            <label for="">Date</label>
                            <input type="date" name="tanggal" class="form-control" value="<?=set_value('tanggal')?>">
                        </div>
                        <div class="form-group <?=form_error('idUser') ? 'has-error':null?>" hidden>
                            <label for="">ID User</label>
                            <input type="text" name="idUser" class="form-control" value="<?=$this->fungsi->user_login()->idUser?>">
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success btn-flat" name="status" value="Hadir" <?=set_value('status') == "Hadir" ? "selected" : null?>>
                                <i class="fa fa-paper-plane"></i> Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</section>
    <!-- Main content -->