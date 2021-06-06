
<!-- Main content header -->
<section class="content-header">
      <h1>
        Form Users
        <small></small>
	    </h1>
	    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
      </ol>
</section>
    <!-- Main content header -->
    <!-- Main content -->
<section class="content">
<div class="box">
        <div class="box-header">
            <h3 class="box-title">Form input data users</h3>
            <div class="pull-right">
                <a href="<?=site_url('dashboard')?>" class="btn btn-warning">
                   <i class="fa fa-undo"></i> Back 
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('users/process')?>" method="post">
                        <div class="form-group">
                            <label for="">ID User</label>
                            <input type="text" name="idUser" class="form-control" value="<?=$row->idUser?>">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password-input" class="form-control" value="<?=$row->password?>" required>
                        </div>
                        <div class="checkbox">
                            <label>
                            <input type="checkbox" id="enable-show"> Show Password
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="">Lokasi</label>
                            <select name="lokasi" class="form-control" required>
                            <?php $lokasi = $this->input->post('lokasi') ? $this->input->post('lokasi') : $row->lokasi?>
                                <option value="">--Pilih--</option>
                                <option value="Kantor Pusat" <?=$lokasi == 'Kantor Pusat' ? 'selected' : null?>>Kantor Pusat</option>
                                <option value="Km.Umsini" <?=$lokasi == 'Km.Umsini' ? 'selected' : null?>>Km.Umsini</option>
                                <option value="Km.Tidar" <?=$lokasi == 'Km.Tidar' ? 'selected' : null?>>Km.Tidar</option>
                                <!-- <option value="Km.Bukit Siguntang" <?=set_value('lokasi') == 'Km.Bukit Siguntang' ? "selected" : null?>>Km.Bukit Siguntang</option>
                                <option value="Km.Lambelu" <?=set_value('lokasi') == 'Km.Lambelu' ? "selected" : null?>>Km.Lambelu</option>
                                <option value="Km.Sinabung" <?=set_value('lokasi') == 'Km.Sinabung' ? "selected" : null?>>Km.Sinabung</option>
                                <option value="Km.Lambelu" <?=set_value('lokasi') == 'Km.Lambelu' ? "selected" : null?>>Km.Dorolonda</option>
                                <option value="Km.Nggapulu" <?=set_value('lokasi') == 'Km.Nggapulu' ? "selected" : null?>>Km.Nggapulu</option>
                                <option value="Km.Gunung Dempo" <?=set_value('lokasi') == 'Km.Gunung Dempo' ? "selected" : null?>>Km.Gunung Dempo</option>
                                <option value="Km.Bukit Raya" <?=set_value('lokasi') == 'Km.Bukit Raya' ? "selected" : null?>>Km.Bukit Raya</option>
                                <option value="Km.Binaiya" <?=set_value('lokasi') == 'Km.Binaiya' ? "selected" : null?>>Km.Binaiya</option>
                                <option value="Km.Leuser" <?=set_value('lokasi') == 'Km.Leuser' ? "selected" : null?>>Km.Leuser</option>
                                <option value="Km.Lawit" <?=set_value('lokasi') == 'Km.Lawit' ? "selected" : null?>>Km.Lawit</option>
                                <option value="Km.Awu" <?=set_value('lokasi') == 'Km.Awu' ? "selected" : null?>>Km.Awu</option>
                                <option value="Km.Ciremai" <?=set_value('lokasi') == 'Km.Ciremai' ? "selected" : null?>>Km.Ciremai</option>
                                <option value="Km.Tatamailau" <?=set_value('lokasi') == 'Km.Tatamailau' ? "selected" : null?>>Km.Tatamailau</option>
                                <option value="Km.Dobonsolo" <?=set_value('lokasi') == 'Km.Dobonsolo' ? "selected" : null?>>Km.Dobonsolo</option>
                                <option value="Km.Kelud" <?=set_value('lokasi') == 'Km.Kelud' ? "selected" : null?>>Km.Kelud</option>
                                <option value="Km.Sirimau" <?=set_value('lokasi') == 'Km.Sirimau' ? "selected" : null?>>Km.Sirimau</option>
                                <option value="Km.Kelimutu" <?=set_value('lokasi') == 'Km.Kelimutu' ? "selected" : null?>>Km.Kelimutu</option>
                                <option value="Km.Sangiang" <?=set_value('lokasi') == 'Km.Sangiang' ? "selected" : null?>>Km.Sangiang</option>
                                <option value="Km.Pangrango" <?=set_value('lokasi') == 'Km.Pangrango' ? "selected" : null?>>Km.Pangrango</option>
                                <option value="Km.Wilis" <?=set_value('lokasi') == 'Km.Wilis' ? "selected" : null?>>Km.Wilis</option>
                                <option value="Km.Egon" <?=set_value('lokasi') == 'Km.Egon' ? "selected" : null?>>Km.Egon</option>
                                <option value="Kfc.Jetliner" <?=set_value('lokasi') == 'Kfc.Jetliner' ? "selected" : null?>>Kfc.Jetliner</option> -->
                            </select>
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
                            <label for="">Level</label>
                            <select name="level" class="form-control">
                                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level?>
                                <option>--Pilih--</option>
                                <option value="1">Admin</option>
                                <option value="2" <?=$level == 2 ? 'selected' : null?>>Petugas</option>
                            </select>
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