
<!-- Main content header -->
<section class="content-header">
      <h1>
        Form Karyawan
        <small></small>
	    </h1>
	    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Karyawan</li>
      </ol>
</section>
    <!-- Main content header -->
    <!-- Main content -->
<section class="content">
<div class="box">
        <div class="box-header">
            <h3 class="box-title">Form input data karyawan</h3>
            <div class="pull-right">
                <a href="<?=site_url('dashboard')?>" class="btn btn-warning">
                   <i class="fa fa-undo"></i> Back 
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('karyawan/process')?>" method="post">
                        <div class="form-group">
                            <label for="">ID Karyawan</label>
                            <input type="text" name="idKaryawan" class="form-control" value="<?=$row->idKaryawan?>">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="nama-input" class="form-control" value="<?=$row->nama?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Bagian</label>
                            <select name="bagian" class="form-control">
                                <option>--Pilih--</option>
                                <?php foreach($bagian->result() as $key => $data) { ?>
                                    <option value="<?=$data->idBagian?>" <?=$data->idBagian == $row->idBagian ? "selected" : null?>><?=$data->namaB?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <select name="jabatan" class="form-control" required>
                            <?php $jabatan = $this->input->post('jabatan') ? $this->input->post('jabatan') : $row->jabatan?>
                                <option value="">--Pilih--</option>
                                <option value="Admin" <?=$jabatan == 'Admin' ? 'selected' : null?>>Admin</option>
                                <option value="Mandor" <?=$jabatan == 'Mandor' ? 'selected' : null?>>Mandor</option>
                                <option value="Anggota" <?=$jabatan == 'Anggota' ? 'selected' : null?>>Anggota</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Telpon</label>
                            <input type="text" name="telpon" class="form-control" value="<?=$row->telpon?>">
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success" name="<?=$page?>">
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