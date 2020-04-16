<div class="content-wrapper">
  <section class="content-header">
        <h1>
          Approve
          <small>List Data approve </small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home > Approve </a></li>
        </ol>
      </section>
    <section class="content">

      <?php if ($this->session->flashdata('sukses')):?>
          <script>
            swal({
              title: 'Data Verifikasi',
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
                                    <thead class="bg-blue">
                                        <tr>
                                            <th width ='4'>No</th>
                                            <th width ='10%'>N0 KK</th>
                                            <th width ='10%'>Nama</th>
                                            <th width ='15%'>Alamat</th>
                                            <th width ='13%'>Klasifikasi Dapat</th>
                                            <th width ='14%'>Klasifikasi T Dapat</th>
                                            <th width ='9%'>Prediksi</th>
                                            <th width ='7'>Tgl Pengajuan</th>
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

                                     <a type="button" data-toggle="modal" data-target="#modal-approve<?=$g->no_kk;?>" class="btn bg-purple btn-xs"  data-placement="top"  title="Approve"><i class="fa fa-amazon"></i></a>
                                     <a type="button" data-toggle="modal" data-target="#modal-detail<?=$g->no_kk;?>" class="btn bg-olive btn-xs"  data-placement="top"  title="Detail"><i class="fa fa-file-text"></i></a>

                                </tr>

                                <?php endforeach;?>
                                </tbody>
                             </table>
                      </div>
                </div>
            </div>
    </div>
         </div>   
</div> 
<!-- Detail modal -->
<?php $no=  0; foreach($data as $g  ): $no++;?>
         <div class="modal modal-success fade" id="modal-detail<?=$g->no_kk;?>">
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
                                        <dd style= 'color: green'><?php echo $g->keputusan; ?></dd>
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
<!-- modal approve -->

<?php $no=  0; foreach($data as $g ): $no++;?>
<div class="modal modal-info fade" id="modal-approve<?=$g->no_kk;?>">
          <div class="modal-dialog">
            <form action="<?php echo site_url('Approve/verifikasi'); ?>" method="post">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Form Approve Pengajuan</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label class='col-md-4'>N0 KK</label>
                          <div class='col-md-8'>
                          <input style= 'color: blue' type="text" readonly value="<?=$g->no_kk;?>" name="no_kk" class="form-control" required="" ></div>
                        </div>
                      <br>
                        <div class="form-group">
                          <label class='col-md-4'>Nama Lengkap</label>
                          <div class='col-md-8'><input style= 'color: blue' type="text" readonly value="<?=$g->nama;?>" name="nama" autocomplete="off" class="form-control"
                            required="" ></div>
                        </div>
                      <br>
                        <div class="form-group">
                          <label class="control-label col-md-4">Status</label>
                          <div class="col-md-8">
                          <select name="status_approve" class="form-control">
                                <option value="0">Proses</option>
                                <option value="1">Approved</option>
                          </select>
                          </div>
                        </div>
                      <br>
                        <div class="form-group">
                        <label class='col-md-4'>Tanggal Pengajuan</label>
                          <div class='col-md-8'> <input style= 'color: blue'type="text" readonly id="tanggal" name="tgl_pengajuan" autocomplete="off" placeholder="Tanggal Approve" value="<?=$g->tgl_pengajuan;?>" class="form-control"
                      required="" >
                        </div>
                        </div>
                      <br>
                        <div class="form-group">
                          <label class='col-md-4'>Keterangan</label>
                          <div class='col-md-8'><input type="text" name="keterangan" autocomplete="off" class="form-control" value="<?=$g->keterangan;?>"></div>
                        </div>
                        <br>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-outline">Approve</button>
                      </div>
                    </div>
            <!-- /.modal-content -->
            </form>
          </div>
          <!-- /.modal-dialog -->
        </div>
<?php endforeach;?>
        <!-- /.modal -->

        <style>
    .datepicker{z-index:1151;}
      </style>

<script>
    $(function(){
        $("#jam").datepicker({
      format:'dd/mm/yyyy'
        });
                });
</script>