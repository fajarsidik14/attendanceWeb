<section class="content-header">
      <h1>
        Bagian
        <small>Divisi</small>
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
            <h3 class="box-title">Data Bagian</h3>
            <div class="pull-right">
                <a href="<?=site_url('bagian/add')?>" class="btn btn-primary">
                   <i class="fa fa-user-plus"></i> Create 
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <th style="width: 5%;">No.</th>
                    <th style="width: 20%;">ID Bagian</th>
                    <th>Nama</th>
                    <th class="text-center">Actions</th>
                </thead>
                <tbody>
                <?php $no =1;
                    foreach($row->result() as $key => $data) {
                ?>
                    <tr>
                       <td><?=$no++?></td>
                       <td><?=$data->idBagian?></td>
                       <td><?=$data->namaB?></td>
                        <td class="text-center" width="160px">
                        <form action="<?=site_url('bagian/delete')?>" method="post">
                                <a href="<?=site_url('bagian/edit'.$data->idBagian)?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Update
                                </a>
                                <input type="hidden" name="idBagian" value="<?=$data->idBagian?>">
                                <button class="btn btn-danger btn-xs" onclick="return confirm('Yakin hapus data?')">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    </section>
    <!-- Main content -->