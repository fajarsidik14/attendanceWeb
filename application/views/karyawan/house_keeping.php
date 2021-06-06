<section class="content-header">
      <h1>
        House Keeping
        <small></small>
	  </h1>
	  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">House Keeping</li>
      </ol>
    </section>
    <!-- Main content header -->

    <!-- Main content -->
    <section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Karyawan </h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <th style="width: 5%;">No.</th>
                    <th>ID Karyawan</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Telpon</th>
                </thead>
                <tbody>
                <?php $no =1;
                    foreach($row->result() as $key => $data) {
                ?>
                    <tr>
                       <td><?=$no++?></td>
                       <td><?=$data->idKaryawan?></td>
                       <td><?=$data->nama?></td>
                       <td><?=$data->jabatan?></td>
                       <td><?=$data->telpon?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    </section>
    <!-- Main content -->