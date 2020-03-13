<div class="content-wrapper">
  <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>HOME<small><?php echo $userdata->role; ?> </small></h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
      </section>
      <section class="content">
                    <div class="callout callout-success">
                    <div class="callout callout-success" style="margin-bottom: 0!important;">
                    <center><h4><i class="fa fa-institution"></i> Selamat Datang <b>" <i><?php echo $userdata->nama; ?> " </i></b>   Anda Sudah Login Di SPK Penentuan Bantuan PKH (ePKH)<i class="fa fa-institution"></i></h4></center>
                    <center><p>.Halaman Admin ini Berfungsi Untuk Penyeleksian Calon Penerima Bantuan .</p></center>
                  </div>
                </div>

                <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box bg-aqua">
                            <a href="<?php echo base_url('List_prediksi') ?>" style= 'color: white'; class="info-box-icon"><i  class="fa fa-sign-out"></i></a>
                                <div class="info-box-content">
                                  <span class="info-box-text">Jumlah Permohonan</span>
                                  <span class="info-box-number" style= 'color: green'><?php echo $jml_pengajuan; ?></span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: <?php echo $jml_pengajuan; ?>0%"></div>
                                    </div>
                                      <span class="progress-description">
                                      <?php echo $jml_pengajuan; ?> DATA UJI <i>(Testing)</I>
                                      </span>
                                </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box bg-green">
                            <a data-toggle="modal" data-target="#modal-list" style= 'color: white'; class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></a>
                              <div class="info-box-content">
                                <span class="info-box-text">Permohonan DI Terima (Dapat)</span>
                                <span class="info-box-number" style= 'color: blue'><?php echo $jml_dapat; ?></span>
                                    <div class="progress">
                                      <div class="progress-bar" style="width: <?php echo $jml_dapat;?>%"></div>
                                    </div>
                                <span class="progress-description">
                                <?php echo $jml_dapat; ?> % dari <?php echo $jml_pengajuan; ?> data
                                </span>
                              </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box bg-yellow">
                            <span data-toggle="modal" data-target="#modal-listidak" style= 'color: white' class="info-box-icon"><i class="fa fa-thumbs-down"></i></span>
                              <div class="info-box-content">
                                <span class="info-box-text">Permohonan Ditolak (Tidak Dapat)</span>
                                <span class="info-box-number" style= 'color: purple'><?php echo $jml_tdapat; ?></span>

                                  <div class="progress">
                                    <div class="progress-bar" style="width: <?php echo $jml_tdapat; ?>%"></div>
                                  </div>
                                <span class="progress-description">
                                <?php echo $jml_tdapat; ?> % dari <?php echo $jml_pengajuan; ?> data
                                </span>
                              </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>

      </section> 
  </div>
</div>
<!-- MODAL DAPAT BANTUAN -->
  <div class="modal modal-success fade" id="modal-list">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Success Modal</h4>
        </div>
        <div class="modal-body">
                      <div class="box">
                          <div class="box-header">
                            <h3 class="box-title">Data Dapat Bantuan</h3>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-hover" >
                                  <thead class="bg-olive">
                                  <tr>
                                      <th >No</th>
                                      <th width ='12%'>N0 KK</th>
                                      <th width ='22%'>Nama</th>
                                      <th width ='20%'>Klasifikasi Dapat</th>
                                      <th width ='20%'>Klasifikasi T Dapat</th>
                                      <th width ='20%'>Prediksi</th>
                                  </tr>
                                  </thead>
                                  <tbody class="bg-olive">
                                  <?php $no= 0; foreach ($data as $g ): $no++;?>
                                    <tr style= 'color: black'>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $g->no_kk; ?></td>
                                        <td><?php echo $g->nama; ?></td>
                                        <td><?php echo $g->prediksi_dapat; ?></td>
                                        <td><?php echo $g->prediksi_tdapat; ?></td>
                                        <td><?php echo $g->keputusan; ?></td>
                                    </tr>
                                  <?php endforeach;?>
                                  </tfoot>
                                </table>
                            </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
            <!-- /.modal-dialog -->
  </div>

  <!-- MODAL TIDAK DAPAT BANTUAN -->
  <div class="modal modal-warning fade" id="modal-listidak">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Success Modal</h4>
        </div>
        <div class="modal-body">
                      <div class="box">
                          <div class="box-header">
                            <h3 class="box-title">Data Dapat Bantuan</h3>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-hover" >
                                  <thead class="bg-orange">
                                  <tr>
                                      <th >No</th>
                                      <th width ='12%'>N0 KK</th>
                                      <th width ='22%'>Nama</th>
                                      <th width ='20%'>Klasifikasi Dapat</th>
                                      <th width ='20%'>Klasifikasi T Dapat</th>
                                      <th width ='20%'>Prediksi</th>
                                  </tr>
                                  </thead>
                                  <tbody class="bg-orange">
                                  <?php $no= 0; foreach ($data2 as $g ): $no++;?>
                                    <tr style= 'color: black'>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $g->no_kk; ?></td>
                                        <td><?php echo $g->nama; ?></td>
                                        <td><?php echo $g->prediksi_dapat; ?></td>
                                        <td><?php echo $g->prediksi_tdapat; ?></td>
                                        <td><?php echo $g->keputusan; ?></td>
                                    </tr>
                                  <?php endforeach;?>
                                  </tfoot>
                                </table>
                            </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
            <!-- /.modal-dialog -->
  </div>
