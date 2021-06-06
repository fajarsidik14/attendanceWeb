<!-- Main content header -->
<section class="content-header">
      <h1>
        Form Bagian
        <small></small>
	    </h1>
	    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Bagian</li>
      </ol>
</section>
    <!-- Main content header -->
    <!-- Main content -->
<section class="content">
<div class="box">
        <div class="box-header">
            <h3 class="box-title">Form input data Bagian</h3>
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
                        <div class="form-group <?=form_error('idBagian') ? 'has-error':null?>" hidden>
                                <label for="">ID Bagian</label>
                                <input type="text" name="idBagian" class="form-control" value="<?=set_value('idBagian')?>">
                                <?=form_error('idBagian')?>
                            </div>
                        <div class="form-group <?=form_error('namaB') ? 'has-error':null?>">
                            <label for="">Nama</label>
                            <input type="text" name="namaB" class="form-control" value="<?=set_value('namaB')?>">
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-warning">
                                <i class="fa fa-circle-o-notch"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</section>
    <!-- Main content -->