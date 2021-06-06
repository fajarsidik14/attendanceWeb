<title>House Keeping</title>
<div class="text-center">
    <img src="<?=site_url()?>assets/dist/img/logo/logo1.png" width="80" height="60">
</div>
<div class="box-header text-center">
    <h3 class="box-title"><b><?=$title?></b></h3> <br><br>
    <h4 class="box-title"><?=$subtitle?></h4>
</div>
<div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
            <!-- id="table1" -->
                <thead>
                    <th style="width: 5%;">No.</th>
                    <th>ID Karyawan</th>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Jabatan</th>
                    <th>Total</th>
                </thead>
                <tbody>
                <?php $no =1; foreach ($datafilter as $row):?>
                    <tr>
                       <td><?=$no++?></td>
                       <td><?=$row->idKaryawan?></td>
                       <td><?=$row->nama?></td>
                       <td><?=$row->namaB?></td>
                       <td><?=$row->jabatan?></td>
                       <td><?=$row->total?></td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>
        
        <footer>
        <div  class="pull-right" style="margin-right:1%">
            <h5 class="box-title"><b><?=format_indo(date('Y-m-d'));?></b></h5> <br>
            <h6 class="box-title"><b><?=$footer?></b></h6> <br><br>
            <h6 class="box-title"><b><?=$subfooter?><b></h6>
        </div> 
        <div  class="pull-left" style="margin-left:1%">
            <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
        </div>
        </footer>
        
        <script>
        function myFunction() {
            window.print();
        }
        </script>