<section class="content-header">
      <h1>
        Karyawan
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
    <div id="flash" data-flash="<?=$this->session->flashdata('success');?>"></div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Karyawan</h3>
            <div class="pull-right">
                <a href="<?=site_url('karyawan/add')?>" class="btn btn-primary">
                   <i class="fa fa-user-plus"></i> Create 
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <th style="width: 5%;">No.</th>
                    <th>ID Karyawan</th>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Jabatan</th>
                    <th>Telpon</th>
                    <th class="text-center">Actions</th>
                </thead>
                <tbody>
                <?php $no =1;
                    foreach($row->result() as $key => $data) {?>
                    <tr>
                       <td><?=$no++?></td>
                       <td><?=$data->idKaryawan?></td>
                       <td><?=$data->nama?></td>
                       <td><?=$data->namaB?></td>
                       <td><?=$data->jabatan?></td>
                       <td><?=$data->telpon?></td>
                        <td class="text-center" width="20%">
                            <a href="<?=site_url('karyawan/edit/'.$data->idKaryawan)?>" class="btn btn-warning btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>   
                            <a href="<?=site_url('karyawan/delete/'.$data->idKaryawan)?>" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    </section>
    <!-- Main content -->