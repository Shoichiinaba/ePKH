<?php
 echo "<style>
    body{
        background-image:url(".base_url()."assets/images/image_4.jpg);
        background-attachment:fixed;
        background-size:100% 100%;
    }
 </style>";
 ?>
<div id="search" type="background-image" class="hero-wrap ftco-degree-bg" style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Hasil Pencarian</span>
                      <h3 class="mb-3">Penerima Bantuan PKH</h3>
                      <!-- conten tabel pencarian -->
                      <div class="content-wrapper">
                            <div class="container">
                                  <div class="box" class="col-sm-12" >
                                    <div class="box-header" >
                                        <div class="box-body table-responsive no-padding">
                                          <table class="table table-hover">
                                            <thead class="bg-primary" style= 'color: white'>
                                              <tr>
                                                <th width ='3%'>NO</th>
                                                <th width ='19%'>Nama</th>
                                                <th width ='28%'>Alamat</th>
                                                <th width ='15%'>Keputusan</th>
                                                <th width ='20%'>Tahun Pengajuan</th>
                                                <th width ='30%'>Action</th>
                                              </tr>
                                            </thead>
                                              <tbody >
                                              <?php foreach($bantuan as $row):?>
                                                <tr class="bg-white">
                                                              <td><?php echo $row->no_kk;?> </td>
                                                              <td><?php echo $row->nama;?></td>
                                                              <td><?php echo $row->alamat ?></td>
                                                              <td><?php echo $row->keputusan ?></td>
                                                              <td><?php echo $row->tahun ?></td>
                                                              <td>
                                                                  <a type="button" data-toggle="modal" data-target="#modal-detail<?=$row->no_kk;?>" class="btn bg-purple btn-xs"  data-placement="top"  title="Detail"><i class="icon icon-hospital-o"></i></a>
                                                                  <a type="button" href="<?php echo base_url('/laporan/laprec/'.$row->no_kk); ?>" target="_blank" class="btn bg-maroon margin btn-xs"  data-placement="top"  title="Cetak"><i class="icon icon-print"></i></a>
                                                                  <!-- <a type="button" href="<?php echo base_url('/laporan/laprec/.$row->no_kk'); ?>" target="_blank" class="btn bg-maroon margin btn-xs"  data-placement="top"  title="Cetak"><i class="icon icon-print"></i></a> -->
                                                              </td>
                                                  </tr>
                                              <?php endforeach;?> 
                                              </tbody>
                                          </table>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        <!-- end conten -->
                </div>
            </div>
        </div>
          <div class="mouse">
            <a href="" class="mouse-icon">
              <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
            </a>
          </div>
    </div>
</div> 
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="80px" height="80px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D33"/></svg></div>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>

  <!-- MODAL -->
<?php $no=  0; foreach($bantuan as $row  ): $no++;?>
  <div class="modal modal-default fade" id="modal-detail<?=$row->no_kk;?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Detail Info Penilaian</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                
              <div class="box box-success">
                <div class="box-body box-profile">
                  <center><img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/epkh.png" alt="User profile picture"></center>                   
                  <h5 class="profile-username text-center"><b><?=$row->nama;?></b></h5>
                  <p class="text-muted text-center"><?=$row->alamat;?></p>
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item">
                        <b>NO. KK :</b> <a class="pull-right"> <?=$row->no_kk;?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Status Rumah :</b> <a class="pull-right"> <?=$row->status_rumah;?></a>
                      </li>
                      <li class="list-group-item">
                        <b>JML. Tanggungan :</b> <a class="pull-right"> <?=$row->jml_tanggungan;?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Bahan Memasak :</b> <a class="pull-right"> <?=$row->bahan_bakar_m;?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Sumber Air :</b> <a class="pull-right"> <?=$row->sumber_air;?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Daya Listrik :</b> <a class="pull-right"> <?=$row->daya_listrik;?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Tahun :</b> 
                        <td><a class="pull-right"> <?=$row->tahun;?></a></td>
                      </li>
                      <li class="list-group-item bg-success">
                        <b style= 'color: white'>Klasifikasi Dapat :</b> 
                        <td><a class="pull-right" style= 'color: white'> <?=$row->prediksi_dapat;?></a></td>
                      </li>
                      <li class="list-group-item bg-danger">
                        <b style= 'color: white'>Klasifikasi Tidak Dapat :</b> 
                        <td><a class="pull-right" style= 'color: white'> <?=$row->prediksi_tdapat;?></a></td>
                      </li>
                      <li class="list-group-item bg-info">
                        <b style= 'color: white'>Keputusan :</b> 
                        <td><a class="pull-right" style= 'color: white'> <?=$row->keputusan;?></a></td>
                      </li>
                    </ul> 
                  <!-- /.box-body -->
                  </div>                             

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-left" data-dismiss="modal"><i class="icon icon-arrow-circle-left "> </i>  Close</button>
                  </div>
            </div>
            <!-- /.modal-content -->
          </div>
      </div>
    </div>
          <!-- /.modal-dialog -->
<?php endforeach;?>
        <!-- /.modal -->
        