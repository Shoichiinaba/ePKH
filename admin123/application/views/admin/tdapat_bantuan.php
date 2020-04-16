<div class="content-wrapper">
  <section class="content-header">
        <h1>
          Proses
          <small>List Data Tidak Dapat Bantuan </small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home > List Data </a></li>
        </ol>
      </section>
    <section class="content">

      <?php if ($this->session->flashdata('sukses')):?>
          <script>
            swal({
              title: 'Data Tidak Dapat Bantuan',
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
                                    <thead class="bg-orange">
                                        <tr>
                                            <th width ='4'>No</th>
                                            <th width ='10%'>N0 KK</th>
                                            <th width ='10%'>Nama</th>
                                            <th width ='15%'>Alamat</th>
                                            <th width ='13%'>Klasifikasi Dapat</th>
                                            <th width ='14%'>Klasifikasi T Dapat</th>
                                            <th width ='9%'>Prediksi</th>
                                            <th width ='9'>Tgl Pengajuan</th>
                                            <th width ='28'>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php $no= 0; foreach ($data as $g ): $no++;?>
                                  <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $g->no_kk; ?></td>
                                    <td><?php echo $g->nama; ?></td>
                                    <td><?php echo $g->alamat; ?></td>
                                    <td><?php echo $g->prediksi_dapat; ?></td>
                                    <td><?php echo $g->prediksi_tdapat; ?></td>
                                    <td><?php echo $g->keputusan; ?></td>
                                    <td><?php echo $g->tgl_pengajuan; ?></td>
                                    <td>

                                     <a type="button" href="<?php echo base_url('/laporan/laprec/'.$g->no_kk); ?>" target="_blank" class="btn bg-maroon margin btn-xs"  data-placement="top"  title="Cetak"><i class="fa fa-print"></i></a>

                                     <a type="button" data-toggle="modal" data-target="#modal-detail<?=$g->no_kk;?>" class="btn bg-purple btn-xs"  data-placement="top"  title="Detail"><i class="fa fa-file-text"></i></a>

                                     <a href="<?php echo site_url('List_prediksi/delete_tidak/'.$g->no_kk); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');"type="button" class="btn bg-navy btn-xs"  data-placement="top"  title="Hapus"><i class="fa fa-trash-o"></i></a>
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
                                      <a href="<?php echo base_url()?>index.php/laporan/laptdapat" target="_blank"> 
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
         <!-- Detail modal -->
         <?php $no=  0; foreach($data as $g  ): $no++;?>
         <div class="modal modal-warning fade" id="modal-detail<?=$g->no_kk;?>">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title">Detai Penilaian PKH</h4>
                 </div>
                    <div class="modal-body">
                              <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                  <span class="direct-chat-name pull-left">Detail</span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/img/epkh.png "alt="Message User Image"><!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                      <dl class="dl-horizontal">
                                        <dt></dt>
                                        <dd></dd>
                                        <dt style= 'color: blue'>No. KK :</dt>
                                        <dd style= 'color: blue'><?php echo $g->no_kk; ?></dd>
                                        <dd</dd>
                                        <br>
                                        <dt style= 'color: green'>Status Rumah :</dt>
                                        <dd style= 'color: green'><?php echo $g->status_rumah; ?></dd>
                                        <dt style= 'color: green'>Pekerjaan :</dt>
                                        <dd style= 'color: green'><?php echo $g->pekerjaan; ?></dd>
                                        <dt style= 'color: green'>Jumlah Tanggungan :</dt>
                                        <dd style= 'color: green'><?php echo $g->jml_tanggungan; ?></dd>
                                        <dt style= 'color: green'>Bahan Bakar M. :</dt>
                                        <dd style= 'color: green'><?php echo $g->bahan_bakar_m; ?></dd>
                                        <dt style= 'color: green'>Sumber Air :</dt>
                                        <dd style= 'color: green'><?php echo $g->sumber_air; ?></dd>
                                        <dt style= 'color: green'>Daya Listrik :</dt>
                                        <dd style= 'color: green'><?php echo $g->daya_listrik; ?></dd>
                                        <br>
                                        <dt style= 'color: purple'>Penilaian Dapat :</dt>
                                        <dd style= 'color: purple'><?php echo $g->prediksi_dapat; ?></dd>
                                        <dt style= 'color: purple'>Penilaian Tidak Dapat :</dt>
                                        <dd style= 'color: purple'><?php echo $g->prediksi_tdapat; ?></dd>
                                        <dt style= 'color: purple'>Keputusan :</dt>
                                        <dd style= 'color: red'><?php echo $g->keputusan; ?></dd>
                                        <dt style= 'color: navy'>Tanggal Pengajuan :</dt>
                                        <dd style= 'color: navy'><?php echo $g->tgl_pengajuan; ?></dd>
                                      </dl>
                                    </div>
                                <!-- /.direct-chat-text -->
                            </div>
                          <!--/.direct-chat-messages-->
                    </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Close</button>
                 </div>
               </div>
               <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
                 <!-- /.modal -->
         <?php endforeach;?>
</div> 
