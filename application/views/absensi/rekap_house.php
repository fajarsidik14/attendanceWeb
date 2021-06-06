<section class="content-header">
      <h1>
        Rekap
        <small>Absensi</small>
	  </h1>
	  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Rekap Absensi</li>
      </ol>
    </section>
    <!-- Main content header -->
    <!-- Main content -->
    <section class="content ">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data House</h3>
        </div>
        <div class="box-body">
            <form action="<?=base_url()?>rekap/printHouse" method="post">
              <div class="row">
              <div class="col-md-6">
                  <input type="hidden" class="form-control" name="nilaifilter" value="1"/>
                  <div class="form-group">
                    <label>Tanggal Awal</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control" name="tanggalawal">
                    </div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal Akhir</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                        <input type="date" class="form-control" name="tanggalakhir">
                    </div>
                  </div>
                </div>
              </div>
              <input class="btn btn-info pull-right" type="submit" value="Views"/>
            </form>
        </div>
    </div>
    </section>
    <!-- Main content -->