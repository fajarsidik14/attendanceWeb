form bulan
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Filter Bulan</h3>
                </div>
            <!-- /.box-header -->
            <!-- form start -->
                <form action="<?php echo base_url(); ?>Rekap/filter" method="POST" target='_blank'>
                    <div class="box-body">
                        <div class="form-group" hidden>
                            <input type="date" class="form-control" name="nilaifilter" value="2">
                        </div>
                        <div class="form-group">
                            <label> Pilih Tahun</label>
                            <select class="form-control" name="tahun1" required>
                                <?php foreach ($tahun as $row): ?>
                                <option value="<?php echo $row->tahun ?>">
                                <?php echo $row->tahun ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Bulan Awal</label>
                            <select class="form-control" name="bulanawal" required>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Bulan Akhir</label>
                            <select class="form-control" name="bulanakhir" required>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                    </div>
                <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Print"></input>
                    </div>
                </form>
            </div>
        </div>
        <!-- form bulan -->
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Filter Tahun</h3>
                </div>
            <!-- /.box-header -->
            <!-- form start -->
                <form action="<?=base_url()?>Rekap/filter" method="POST" target='_blank'>
                    <div class="box-body">
                        <div class="form-group" hidden>
                            <input type="date" class="form-control" name="nilaifilter" value="3">
                        </div>
                        <div class="form-group">
                            <label> Pilih Tahun</label>
                            <select class="form-control" name="tahun2" required>
                                <?php foreach ($tahun as $row): ?>
                                    <option value="<?php echo $row->tahun ?>">
                                    <?php echo $row->tahun ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Print"></input>
                    </div>
                </form>
            </div>
        </div>