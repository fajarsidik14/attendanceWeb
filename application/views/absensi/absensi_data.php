<section class="content-header">
      <h1>
        Laporan
        <small>Absensi</small>
	  </h1>
	  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Data Absensi</li>
      </ol>
    </section>
    <!-- Main content header -->

    <!-- Main content -->
    <section class="content">
    <div id="flash" data-flash="<?=$this->session->flashdata('success');?>"></div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Absensi</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <th style="width: 5%;">No.</th>
                    <th>ID Karyawan</th>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Jabatan</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Lokasi</th>
                    <th>ID User</th>
                </thead>
                <tbody>
                <?php $no =1;
                    foreach($row->result() as $key => $data) {
                ?>
                    <tr>
                       <td><?=$no++?></td>
                       <td><?=$data->idKaryawan?></td>
                       <td><?=$data->nama?></td>
                       <td><?=$data->namaB?></td>
                       <td><?=$data->jabatan?></td>
                       <td><?=$data->tanggal?></td>
                       <td>
                        <span class="label label-success"> <?=$data->status == "Hadir" ? "Hadir" : ""?></span> 
                       </td>
                       <td><?=$data->lokasi?></td>
                       <td><?=$data->idUser?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    </section>
    <!-- Main content -->