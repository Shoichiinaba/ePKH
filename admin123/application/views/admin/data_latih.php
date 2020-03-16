<div class="content-wrapper">
        <section class="content-header">
        <h1>
          Data Master
          <small>Data Latih </small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('admin/'); ?>"><i class="fa fa-dashboard"></i> Home > Data Latih</a></li>
        </ol>
      </section>
    <section class="content">

      <?php if ($this->session->flashdata('sukses')):?>
          <script>
            swal({
              title: 'Data Latih!!',
              text: "<?php echo $this->session->flashdata('sukses');?>",
              type: 'success'
            });
          </script>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')):?>
          <script>
            swal({
              title: 'Oops!!',
              text: "<?php echo $this->session->flashdata('error');?>",
              type: 'error'
            });
          </script>
        <?php endif; ?>


      <div class="row">
                <div class="col-xs-12">
                    <div class="box box-success">
                        
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped" >
                                    <thead class="bg-maroon">
                                        <tr>
                                            <th>No</th>
                                            <th width ='15%'>Nama</th>
                                            <th width ='18%'>Alamat</th>
                                            <th width ='14%'>Status Rumah</th>
                                            <th>Pekerjaan</th>
                                            <th>Jml. Tanggungan</th>
                                            <th width ='14%'>Bahan Bakar</th>
                                            <th width ='12%'>Sumber Air</th>
                                            <th width ='12%'>Daya Listrik</th>
                                            <th width ='10%'>Status</th>
                                            <th width ='6%'>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php $no= 0; foreach ($list as $g ): $no++;?>
                                  <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $g->nama; ?></td>
                                    <td><?php echo $g->alamat; ?></td>
                                    <td><?php echo $g->status_rumah; ?></td>
                                    <td><?php echo $g->pekerjaan; ?></td>
                                    <td><?php echo $g->jml_tanggungan	; ?></td>
                                    <td><?php echo $g->bahan_bakar_m; ?></td>
                                    <td><?php echo $g->sumber_air; ?></td>
                                    <td><?php echo $g->daya_listrik; ?></td>
                                    <td><?php echo $g->setatus; ?></td>
                                    <td>

                                     <a type="button" data-toggle="modal" data-target="#modal-edit<?=$g->id;?>" class="btn btn-primary btn-xs"  data-placement="top"  title="Edit"><i class="fa fa-recycle"></i></a>

                                     <a href="<?php echo site_url('Data_latih/delete/'.$g->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');"type="button" class="btn btn-danger btn-xs"  data-placement="top"  title="Hapus"><i class="fa fa-trash-o"></i></a>
                                </tr>

                                <?php endforeach;?>
                                </tbody>
                             </table>
                             <div class="row">
                                <div class="col-xs-12">
                                  <div class="box box-success">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Menu & Informasi</h3>
                                    </div>
                                    <div class="box-body">
                                      <button type="button" class="btn bg-maroon margin" data-toggle="modal" data-target="#modal-tambah" ><i class="fa fa-file-word-o"></i> Tambah Data Latih </button>
                                      </a>
                                      <a class="btn btn-social pull-right btn-bitbucket">
                                          <i class="fa fa-bitbucket"></i> Jumlah Tidak Dapat <h4><?php echo $jml_tdapat; ?></h4>
                                      </a>
                                      <a class="btn btn-social pull-right btn-foursquare">
                                          <i class="fa fa-foursquare"></i> Jumlah Dapat :  <h4><?php echo $jml_dapat; ?></h4>
                                      </a>
                                      <a class="btn btn-social pull-right btn-vk">
                                          <i class="fa fa-vk"></i> Jumlah Data Latih <h4><?php echo $jml_latih; ?></h4>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                </div>
                </div>
            </div>
    </div>
         </div>   
</div> 
<!-- modal tambah Data -->

<div id="modal-tambah" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('Data_latih/tambah_data'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-purple">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Isikan Data & Kriteria</h4>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
            <label class='col-md-4'>Nama Lengkap</label>
            <div class='col-md-8'><input type="text" name="nama" autocomplete="off" placeholder="Nama Penduduk" class="form-control"
              required="" ></div>
          </div>
          <div class="form-group">
                    <label class='col-md-4'>Alamat</label>
                    <div class='col-md-8'><textarea type="text" name="alamat" autocomplete="off" required placeholder="ALAMAT" class="form-control" required=""></textarea></div>
                  </div>
          <br>
          <div class="form-group">
              <label class="control-label col-md-4">Status Rumah</label>
              <div class="col-md-8">
              <select name="status_rumah" class="form-control">
                    <option value="">Pilih Status</option>
                    <option value="MILIK SENDIRI">Milik Sendiri</option>
                    <option value="BEBAS SEWA">Bebas Sewa</option>
              </select>
              </div>
              </div>
              <br>
            <div class="form-group">
              <label class="control-label col-md-4">Pekerjaan</label>
              <div class="col-md-8">
              <select name="pekerjaan" class="form-control">
                    <option value="">Pekerjaan</option>
                    <option value="BURUH">Buruh</option>
                    <option value="SEKOLAH">Sekoklah</option>
                    <option value="TIDAK KERJA">Tidak Kerja</option>
                    <option value="PEGAWAI SWASTA">Pegawai Swasta</option>
                    <option value="KEHUTANAN DAN PERTANIAN">kehutanan dan Pertanian</option>
                    <option value="BERUSAHA SENDIRI">Berusaha Sendiri</option>
                    <option value="PEKERJA BEBAS">Pekerja Bebas</option>
              </select>
              </div>
              </div>
              <br>
              <div class="form-group">
              <label class="control-label col-md-4">Jumlah Tanggungan</label>
              <div class="col-md-8">
              <select name="jml_tanggungan" class="form-control">
                    <option value="">Pilih jumlah Tanggungan</option>
                    <option value="1 ORANG">1 Orang</option>
                    <option value="2 ORANG">2 Orang</option>
                    <option value="3 ORANG">3 Orang</option>
                    <option value="4 ORANG">4 Orang</option>
                    <option value="5 ORANG">5 Orang</option>
                    <option value="6 ORANG">6 Orang</option>
                    <option value="7 ORANG">7 Orang</option>
                    <option value="12 ORANG">12 Orang</option>
              </select>
              </div>
              </div>
                <br>
              <div class="form-group">
              <label class="control-label col-md-4">Bahan Bakar</label>
              <div class="col-md-8">
              <select name="bahan_bakar_m" class="form-control">
                    <option value="GAS 3 KG">GAS 3 KG</option>
              </select>
              </div>
              </div>
              <br>
               <div class="form-group">
                          <label class="control-label col-md-4">Sumber Air</label>
                          <div class="col-md-8">
                          <select name="sumber_air" class="form-control">
                              <option value="">Pilih Sumber Air</option>
                              <option value="SUMUR BOR">Sumur Bor</option>
                              <option value="MATA AIR TERLINDUNG">Mata Air Terlindung</option>
                              <option value="SUMUR TERLINDUNG">Sumur Terlindung</option>
                              <option value="AIR ISI ULANG">Air Isi Ulang</option>
                              <option value="LEDENG METERAN">Ledeng Meteran</option>
                              <option value="LAINNYA">Lainya</option>
                          </select>
                          </div>
                      </div>
          <br>
          <div class="form-group">
                          <label class="control-label col-md-4">Daya Listrik</label>
                          <div class="col-md-8">
                          <select name="daya_listrik" class="form-control">
                              <option value="">Pilih Daya Listik</option>
                              <option value="450 W">450 W</option>
                              <option value="900 W">900 W</option>
                              <option value="1300 W">1300 W</option>
                              <option value="TANPA METERAN">Tanpa Meteran</option>
                          </select>
                          </div>
                      </div>
              <br>
              <div class="form-group">
              <label class="control-label col-md-4">Status</label>
              <div class="col-md-8">
              <select name="setatus" class="form-control">
                    <option value="">Pilih Status</option>
                    <option value="DAPAT">Dapat</option>
                    <option value="TIDAK DAPAT">Tidak Dapat</option>
                    
              </select>
              </div>
              </div>
      </br><br><br><br>
          <div class="modal-footer">
            <button type="button" class="btn bg-orange pull-left" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-send-o"></i> Simpan</button>
          </div>
        </form>
    </div>
  </div>
</div>    
</div>
</div>
</div>

<!-- modal Edit -->
<?php $no=  0; foreach($list as $g  ): $no++;?>
<div id="modal-edit<?=$g->id;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('Data_latih/adit_latih'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-purple">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Isikan Data & Kriteria</h4>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
            <label class='col-md-4'>ID</label>
            <div class='col-md-8'><input type="text" value="<?=$g->id;?>" name="id" autocomplete="off" class="form-control" readonly=""
              required="" ></div>
          </div>
          <div class="form-group">
            <label class='col-md-4'>Nama Lengkap</label>
            <div class='col-md-8'><input type="text" value="<?=$g->nama;?>" name="nama" autocomplete="off" class="form-control"
              required="" ></div>
          </div>
          <div class="form-group">
            <label class='col-md-4'>Alamat</label>
            <div class='col-md-8'><input type="text" value="<?=$g->alamat;?>" name="alamat" autocomplete="off"  class="form-control"
              required="" ></div>
          </div>
          <br>
          <div class="form-group">
              <label class="control-label col-md-4">Status Rumah</label>
              <div class="col-md-8">
              <select name="status_rumah" class="form-control">
                    <option value="<?=$g->status_rumah;?>"><?=$g->status_rumah;?></option>
                    <option value="Milik Sendiri">Milik Sendiri</option>
                    <option value="Bebas Sewa">Bebas Sewa</option>
              </select>
              </div>
              </div>
              <br>
            <div class="form-group">
              <label class="control-label col-md-4">Pekerjaan</label>
              <div class="col-md-8">
              <select name="pekerjaan" class="form-control">
                    <option value="<?=$g->pekerjaan;?>"><?=$g->pekerjaan;?></option>
                    <option value="BURUH">Buruh</option>
                    <option value="SEKOLAH">Sekoklah</option>
                    <option value="TIDAK KERJA">Tidak Kerja</option>
                    <option value="PEGAWAI SWASTA">Pegawai Swasta</option>
                    <option value="KEHUTANAN DAN PERTANIAN">kehutanan dan Pertanian</option>
                    <option value="BERUSAHA SENDIRI">Berusaha Sendiri</option>
                    <option value="PEKERJA BEBAS">Pekerja Bebas</option>
              </select>
              </div>
              </div>
              <br>
              <div class="form-group">
              <label class="control-label col-md-4">jml_tanggungan</label>
              <div class="col-md-8">
              <select name="jml_tanggungan" class="form-control">
                    <option value="<?=$g->jml_tanggungan;?>"><?=$g->jml_tanggungan;?></option>
                    <option value="1 ORANG">1 Orang</option>
                    <option value="2 ORANG">2 Orang</option>
                    <option value="3 ORANG">3 Orang</option>
                    <option value="4 ORANG">4 Orang</option>
                    <option value="5 ORANG">5 Orang</option>
                    <option value="6 ORANG">6 Orang</option>
                    <option value="7 ORANG">7 Orang</option>
                    <option value="12 ORANG">12 Orang</option>
              </select>
              </div>
              </div>
                <br>
              <div class="form-group">
              <label class="control-label col-md-4">Bahan Bakar</label>
              <div class="col-md-8">
              <select name="bahan_bakar_m" class="form-control" readonly="">
                    <option value="<?=$g->bahan_bakar_m;?>"><?=$g->bahan_bakar_m;?></option>
              </select>
              </div>
              </div>
              <br>
               <div class="form-group">
                          <label class="control-label col-md-4">Sumber Air</label>
                          <div class="col-md-8">
                          <select name="sumber_air" class="form-control">
                              <option value="<?=$g->sumber_air;?>"><?=$g->sumber_air;?></option>
                              <option value="SUMUR BOR">Sumur Bor</option>
                              <option value="MATA AIR TERLINDUNG">Mata Air Terlindung</option>
                              <option value="SUMUR TERLINDUNG">Sumur Terlindung</option>
                              <option value="AIR ISI ULANG">Air Isi Ulang</option>
                              <option value="LEDENG METERAN">Ledeng Meteran</option>
                              <option value="LAINNYA">Lainya</option>
                          </select>
                          </div>
                      </div>
          <br>
          <div class="form-group">
                          <label class="control-label col-md-4">Daya Listrik</label>
                          <div class="col-md-8">
                          <select name="daya_listrik" class="form-control">
                              <option value="<?=$g->daya_listrik;?>"><?=$g->daya_listrik;?></option>
                              <option value="450 W">450 W</option>
                              <option value="900 W">900 W</option>
                              <option value="1300 W">1300 W</option>
                              <option value="TANPA METERAN">Tanpa Meteran</option>
                          </select>
                          </div>
                      </div>
              <br>
              <div class="form-group">
              <label class="control-label col-md-4">Status</label>
              <div class="col-md-8">
              <select name="setatus" class="form-control">
                    <option value="<?=$g->setatus;?>"><?=$g->setatus;?></option>
                    <option value="DAPAT">Dapat</option>
                    <option value="TIDAK DAPAT">Tidak Dapat</option>
                    
              </select>
              </div>
              </div> 
      </br><br><br><br>
          <div class="modal-footer">
            <button type="button" class="btn bg-orange pull-left" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-send-o"></i> Ubah</button>
          </div>
        </form>
    </div>
  </div>
</div>    
</div>
</div>
</div>
<?php endforeach;?>