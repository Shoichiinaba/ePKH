<div class="content-wrapper">
  <section class="content-header">
        <h1>
          Proses
          <small>List Data Sudah Diseleksi </small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('admin/'); ?>"><i class="fa fa-dashboard"></i> Home > List Data </a></li>
        </ol>
      </section>
    <section class="content">

      <?php if ($this->session->flashdata('sukses')):?>
          <script>
            swal({
              title: 'Data Permohonan',
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
                                    <thead class="bg-olive">
                                        <tr>
                                            <th>No</th>
                                            <th width ='12%'>N0 KK</th>
                                            <th width ='22%'>Nama</th>
                                            <th width ='20%'>Alamat</th>
                                            <th width ='20%'>Status Rumah</th>
                                            <th width ='20%'>Pekerjaan</th>
                                            <th width ='20%'>Jumlah Tanggungan</th>
                                            <th width ='20%'>Bahan Bakar</th>
                                            <th width ='20%'>Sumber Air</th>
                                            <th width ='20%'>Daya Listrik</th>
                                            <th width ='20%'>Klasifikasi Dapat</th>
                                            <th width ='20%'>Klasifikasi T Dapat</th>
                                            <th width ='20%'>Prediksi</th>
                                            <th width ='20%'>Tahun</th>
                                            <th width ='25%'>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php $no= 0; foreach ($data as $g ): $no++;?>
                                  <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $g->no_kk; ?></td>
                                    <td><?php echo $g->nama; ?></td>
                                    <td><?php echo $g->alamat; ?></td>
                                    <td><?php echo $g->status_rumah; ?></td>
                                    <td><?php echo $g->pekerjaan; ?></td>
                                    <td><?php echo $g->jml_tanggungan; ?></td>
                                    <td><?php echo $g->bahan_bakar_m; ?></td>
                                    <td><?php echo $g->sumber_air; ?></td>
                                    <td><?php echo $g->daya_listrik; ?></td>
                                    <td><?php echo $g->prediksi_dapat; ?></td>
                                    <td><?php echo $g->prediksi_tdapat; ?></td>
                                    <td><?php echo $g->keputusan; ?></td>
                                    <td><?php echo $g->tahun; ?></td>
                                    <td>

                                      <a type="button" href="<?php echo base_url('/laporan/laprec/'.$g->no_kk); ?>" target="_blank" class="btn bg-maroon margin btn-xs"  data-placement="top"  title="Cetak"><i class="fa fa-print"></i></a>

                                     <a type="button" data-toggle="modal" data-target="#modal-edit<?=$g->no_kk;?>" class="btn bg-purple btn-xs"  data-placement="top"  title="Edit"><i class="fa fa-spinner"></i></a>

                                     <a href="<?php echo site_url('List_prediksi/delete/'.$g->no_kk); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');"type="button" class="btn bg-navy btn-xs"  data-placement="top"  title="Hapus"><i class="fa fa-trash-o"></i></a>
                                </tr>

                                <?php endforeach;?>
                                </tbody>
                             </table>
                             <div class="row">
                                <div class="col-xs-12">
                                  <div class="box box-success">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Menu</h3>
                                    </div>
                                    <div class="box-body">
                                      <a href="<?php echo base_url()?>index.php/laporan/lapall" target="_blank"> 
                                          <button type="submit" class="btn bg-maroon margin" target="_blank">
                                              <i  class="glyphicon glyphicon-print"></i>&nbsp; Cetak
                                          </button>
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

<!-- Modal edit Permohonan -->
<?php $no=  0; foreach($data as $g  ): $no++;?>
<div id="modal-edit<?=$g->no_kk;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('List_prediksi/adit_pered'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-olive">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Edit Data</h4>
        </div>
        
        <div class="box-body">
            <div class="modal-body">
                  <div class="form-group">
                  <label class='col-md-4'>NO KK</label>
                  <div class='col-md-8'>
                  <input type="text" value="<?=$g->no_kk;?>" name="no_kk" class="form-control" required="" ></div>
                </div>
          <br>
                <div class="form-group">
                  <label class='col-md-4'>Nama Lengkap</label>
                  <div class='col-md-8'>
                  <input type="text" value="<?=$g->nama;?>" name="nama" class="form-control" required="" ></div>
                </div>
          <br>
                 <div class="form-group">
                  <label class='col-md-4'>Alamat Lengkap</label>
                  <div class='col-md-8'>
                  <input type="text" value="<?=$g->alamat;?>" name="alamat" class="form-control" required="" ></div>
                </div>
                <div class="form-group">
                  <label class='col-md-4'>Status Rumah</label>
                  <div class='col-md-8'><input type="text" value="<?=$g->status_rumah;?>" name="status_rumah" autocomplete="off" class="form-control"
                     readonly="" ></div>
                </div>
                <br>
                <div class="form-group">
                  <label class='col-md-4'>Pekerjaan</label>
                  <div class='col-md-8'><input type="text" value="<?=$g->pekerjaan;?>" name="pekerjaan" autocomplete="off" class="form-control"
                     readonly="" ></div>
                </div>
                <br>
                <div class="form-group">
                  <label class='col-md-4'>Jumlah Tanggungan</label>
                  <div class='col-md-8'><input type="text" value="<?=$g->jml_tanggungan;?>" name="jml_tanggungan" autocomplete="off" class="form-control"
                     readonly="" ></div>
                </div>
                <br>
                <div class="form-group">
                  <label class='col-md-4'>Bahan Bakar</label>
                  <div class='col-md-8'><input type="text" value="<?=$g->bahan_bakar_m;?>" name="bahan_bakar_m" autocomplete="off" class="form-control"
                     readonly="" ></div>
                </div>
                <br>
                <div class="form-group">
                  <label class='col-md-4'>Sumber Air</label>
                  <div class='col-md-8'><input type="text" value="<?=$g->sumber_air;?>" name="sumber_air" autocomplete="off" class="form-control"
                     readonly="" ></div>
                </div>
                <br>
                <div class="form-group">
                  <label class='col-md-4'>Daya Listrik</label>
                  <div class='col-md-8'><input type="text" value="<?=$g->daya_listrik;?>" name="daya_listrik" autocomplete="off" class="form-control"
                     readonly="" ></div>
                </div>
                <br>
                <div class="form-group">
                  <label class='col-md-4'>Keputusan</label>
                  <div class='col-md-8'><input type="text" value="<?=$g->keputusan;?>" name="keputusan" autocomplete="off" class="form-control"
                     readonly="" ></div>
                </div>
                <!--input group-->
                <br>
              <br>
              
      </div>
  </div>
              <div class="modal-footer">
                  <button type="button" class="btn bg-orange" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Edit</button>
              </div>
            </div>
            <!--box-body -->
          </div>
    </div>
</form>
</div>
</div>
</div>
<?php endforeach;?>