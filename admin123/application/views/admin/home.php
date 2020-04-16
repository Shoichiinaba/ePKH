<div class="content-wrapper">
  <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>HOME<small><?php echo $userdata->role; ?> </small></h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
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
                        <div class="col-md-3 col-sm-6 col-xs-12">
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
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-green">
                            <a href="<?php echo base_url('Dashboard/dapat_bantuan') ?>" style= 'color: white'; class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></a>
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
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-yellow">
                            <a href="<?php echo base_url('Dashboard/tdapat_bantuan') ?>" style= 'color: white' class="info-box-icon"><i class="fa fa-thumbs-down"></i></a>
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
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-blue">
                            <a href="<?php echo base_url('Approve') ?>" style= 'color: white' class="info-box-icon"><i class="fa fa-amazon"></i></a>
                              <div class="info-box-content">
                                <span class="info-box-text">Data approved</span>
                                <span class="info-box-number" style= 'color: white'><?php echo $jml_approve; ?></span>

                                  <div class="progress">
                                    <div class="progress-bar" style="width: <?php echo $jml_approve; ?>%"></div>
                                  </div>
                                <span class="progress-description">
                                <?php echo $jml_approve; ?> % dari <?php echo $jml_dapat; ?> data
                                </span>
                              </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>

      </section> 
  </div>
</div>