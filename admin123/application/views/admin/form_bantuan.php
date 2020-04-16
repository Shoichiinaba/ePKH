<!-- Alert Sweet -->
<?php if ($this->session->flashdata('sukses')):?>
          <script>
            swal({
              title: 'Data Prediksi!!',
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

<div class="content-wrapper">
  <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Form Bantuan<small><?php echo $userdata->role; ?> </small></h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home > Form Bantuan</a></li>
        </ol>
      </section>
      <section class="content">
      <div class="row">
          <div class="col-md-6">

                <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Identitas Pemohon</h3>
                        </div>
                         <form name="form_" action="<?= base_url('tentukan_bantuan/simpan_predform')?>" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class='col-md-4'>No. KK</label>
                                    <div class='col-md-7'>
                                    <input type="text" id="NIK" name="no_kk" placeholder="Masukan No. KK" class="form-control" required="" ></div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-4'>Nama Lengkap</label>
                                    <div class='col-md-7'><input type="text" name="nama" autocomplete="off" placeholder="Nama Penduduk" class="form-control"
                                        required="" ></div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class='col-md-4'>Alamat</label>
                                    <div class='col-md-7'><input type="text" name="alamat" autocomplete="off" placeholder="Alamat" class="form-control"
                                        required="" ></div>
                                </div>
                            </div>

                <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Kategori Penilaian</h3>
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label col-md-4">Status Rumah</label>
                                <div class="col-md-7">
                                <select name="status_rumah" class="form-control">
                                        <option value="">Pilih Status Rumah</option>
                                        <option value="MILIK SENDIRI">MILIK SENDIRI</option>
                                        <option value="BEBAS SEWA">BEBAS SEWA</option>
                                </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label class="control-label col-md-4">Pekerjaan</label>
                                <div class="col-md-7">
                                <select name="pekerjaan" class="form-control">
                                        <option value="">Pilih Pekerjaan</option>
                                        <option value="BURUH">BURUH</option>
                                        <option value="SEKOLAH">SEKOLAH</option>
                                        <option value="TIDAK KERJA">TIDAK KERJA</option>
                                        <option value="PEGAWAI SWASTA">PEGAWAI SWASTA</option>
                                        <option value="KEHUTANAN DAN PERTANIAN">KEHUTANAN DAN PERTANIAN</option>
                                        <option value="BERUSAHA SENDIRI">BERUSAHA SENDIRI</option>
                                        <option value="PEKERJA BEBAS">PEKERJA BEBAS</option>
                                </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group has-warning">
                                <label class="control-label col-md-4">Jumlah Tanggungan</label>
                                <div class="col-md-7">
                                <select name="jml_tanggungan" class="form-control">
                                        <option value="">Pilih jumlah Tanggungan</option>
                                        <option value="1 ORANG">1 ORANG</option>
                                        <option value="2 ORANG">2 ORANG</option>
                                        <option value="3 ORANG">3 ORANG</option>
                                        <option value="4 ORANG">4 ORANG</option>
                                        <option value="5 ORANG">5 ORANG</option>
                                        <option value="6 ORANG">6 ORANG</option>
                                        <option value="7 ORANG">7 ORANG</option>
                                        <option value="12 ORANG">12 ORANG</option>
                                </select>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group has-warning">
                                <label class="control-label col-md-4">Bahan Bakar</label>
                                    <div class="col-md-7">
                                    <select name="bahan_bakar_m" class="form-control">
                                        <option value="GAS 3 KG">GAS 3 KG</option>
                                    </select>
                                    </div>
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label col-md-4">Sumber Air</label>
                                <div class="col-md-7">
                                    <select name="sumber_air" class="form-control">
                                        <option value="">Pilih Sumber Air</option>
                                        <option value="SUMUR BOR">SUMUR BOR</option>
                                        <option value="MATA AIR TERLINDUNG">MATA AIR TERLINDUNG</option>
                                        <option value="SUMUR TERLINDUNG">SUMUR TERLINDUNG</option>
                                        <option value="AIR ISI ULANG">AIR ISI ULANG</option>
                                        <option value="LEDENG METERAN">LEDENG METERAN</option>
                                        <option value="LAINNYA">LAINNYA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label col-md-4">Daya Listrik</label>
                                <div class="col-md-7">
                                    <select name="daya_listrik" class="form-control">
                                        <option value="">Pilih Daya Listik</option>
                                        <option value="450 W">450 W</option>
                                        <option value="900 W">900 W</option>
                                        <option value="1300 W">1300 W</option>
                                        <option value="TANPA METERAN">TANPA METERAN</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <br>
                      <!-- /.box-body -->
                </div>

                    <!-- /.box -->
                    <div class="box-footer">
                    <button style="float:left;" class="btn btn bg-navy"  onclick="getReady(event);"><i class="fa fa-subscript"> Prediksi</i></button>
                          <div style="clear:both;"></div>
                    </div>
            </div>
          </div>

          <div class="col-md-6">
          <!-- Horizontal Form -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Informasi Hasil Prediksi</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                    <div class="form-group has-error">
                      <label class="col-sm-4 control-label">Hasil Dapat</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="prediksi_dapat" id="hasildapat" readonly="true">
                      </div>
                    </div>
                    <br>
                    <div class="form-group has-error">
                          <label class='col-sm-4'>Hasil Tidak Dapat</label>
                          <div class='col-sm-8'><input type="text" name="prediksi_tdapat" id="hasiltidak" readonly="true" class="form-control"></div>
                      </div>
                      <br><br>
                    <div class="form-group has-success">
                          <label class='col-sm-4'>Hasil Prediksi</label>
                          <div class='col-sm-8'><input type="text" name="keputusan" id="hasil" readonly="true" class="form-control"
                            required="" ></div>
                    </div>

                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <td><a href="<?php echo base_url("tentukan_bantuan/form_bantuan"); ?>">
                    <button type="button" class="btn bg-orange"><i class="fa fa-houzz">  Reset</i></button>
                    </td></a>

                    <button type="submit" class="btn bg-maroon pull-right"><i class="fa fa-save"> Simpan</i></button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
          </div>
        </div>          

      </section> 
  </div>
</div>


<!-- Mesin Penghitung -->

<script>
  function presentasi(dapat,tidak_dapat){
    var persentasi = (dapat + tidak_dapat);
    var dapat_all = (dapat)*100;
    var tidak_dapat_all = (tidak_dapat)*100;
    return {"dapat":dapat_all.toFixed(2),"tidak_dapat":tidak_dapat_all.toFixed(2)};
  }
  function naive_bayes(status_rumah, pekerjaan,jml_tanggungan, bahan_bk, sumber_air,daya_listrik)
  {
    var dapat,tidak_dapat;
    var dapat_status_rumah,tidak_dapat_status_rumah, 
        dapat_pekerjaan,tidak_dapat_pekerjaan, 
        dapat_jml_tanggungan,tidak_dapat_jml_tanggungan,
        dapat_bahan_bk,tidak_dapat_bahan_bk,
        dapat_sumber_air,tidak_dapat_sumber_air,
        dapat_daya_listrik,tidak_dapat_daya_listrik;
    var dapat_x,tidak_dapat_x;
    var dapat_all,tidak_dapat_all;
    var dapat_prediction,tidak_prediction;
    
    if(status_rumah =="MILIK SENDIRI"){
        dapat_status_rumah =13/23;
        tidak_dapat_status_rumah = 18/27
    }else if(status_rumah == "BEBAS SEWA"){
        dapat_status_rumah = 10/23;
        tidak_dapat_status_rumah = 9/27;
    }

    if(pekerjaan == "BURUH"){
        dapat_pekerjaan = 5/23;
        tidak_dapat_pekerjaan = 7/27;
      }else if(pekerjaan == "SEKOLAH"){
        dapat_pekerjaan = 1/23;
        tidak_dapat_pekerjaan = 0/27;
      }else if(pekerjaan == "TIDAK KERJA"){
        dapat_pekerjaan = 7/23;
        tidak_dapat_pekerjaan = 10/27;
      }else if(pekerjaan == "PEGAWAI SWASTA"){
        dapat_pekerjaan = 1/23;
        tidak_dapat_pekerjaan = 6/27;
      }else if(pekerjaan == "KEHUTANAN DAN PERTANIAN"){
        dapat_pekerjaan = 1/23;
        tidak_dapat_pekerjaan = 1/27;
      }else if(pekerjaan == "BERUSAHA SENDIRI"){
        dapat_pekerjaan = 3/23;
        tidak_dapat_pekerjaan = 2/27;
      }else if(pekerjaan == "PEKERJA BEBAS"){
        dapat_pekerjaan = 5/23;
        tidak_dapat_pekerjaan = 1/27;
      } 

      if(jml_tanggungan == "1 ORANG"){
          dapat_jml_tanggungan = 0/23;
          tidak_dapat_jml_tanggungan = 2/27;
      }else if(jml_tanggungan == "2 ORANG"){
          dapat_jml_tanggungan = 2/23;
          tidak_dapat_jml_tanggungan = 4/27;
      }else if(jml_tanggungan == "3 ORANG"){
          dapat_jml_tanggungan = 3/23;
          tidak_dapat_jml_tanggungan = 8/27;
      }else if(jml_tanggungan == "4 ORANG"){
          dapat_jml_tanggungan = 10/23;
          tidak_dapat_jml_tanggungan = 7/27;
      }else if(jml_tanggungan == "5 ORANG"){
          dapat_jml_tanggungan = 6/23;
          tidak_dapat_jml_tanggungan = 3/27;
      }else if(jml_tanggungan == "6 ORANG"){
          dapat_jml_tanggungan = 1/23;
          tidak_dapat_jml_tanggungan = 0/27;
      }else if(jml_tanggungan == "7 ORANG"){
          dapat_jml_tanggungan = 1/23;
          tidak_dapat_jml_tanggungan = 2/27;
      }else if(jml_tanggungan == "12 ORANG"){
          dapat_jml_tanggungan = 0/23;
          tidak_dapat_jml_tanggungan = 1/27;
      }

       bahan_bk == "GAS 3 KG"
          dapat_bahan_bk = 23/23;
          tidak_dapat_bahan_bk = 27/27;
      

      if(sumber_air == "SUMUR BOR"){
          dapat_sumber_air = 17/23;
          tidak_dapat_sumber_air = 16/27;
      }else if(sumber_air == "MATA AIR TERLINDUNG"){
          dapat_sumber_air = 0/16;
          tidak_dapat_sumber_air = 2/27;
      }else if(sumber_air == "SUMUR TERLINDUNG"){
          dapat_sumber_air = 2/23;
          tidak_dapat_sumber_air = 4/27;
      }else if(sumber_air == "AIR ISI ULANG"){
          dapat_sumber_air = 1/23;
          tidak_dapat_sumber_air = 1/27;
      }else if(sumber_air == "LEDENG METERAN"){
          dapat_sumber_air = 1/23;
          tidak_dapat_sumber_air = 4/27;
      }else if(sumber_air == "LAINNYA"){
          dapat_sumber_air = 2/23;
          tidak_dapat_sumber_air = 0/27;
      }

      if(daya_listrik == "450 W"){
          dapat_daya_listrik = 12/23;
          tidak_dapat_daya_listrik = 18/27;
      }else if(daya_listrik == "900 W"){
          dapat_daya_listrik = 4/23;
          tidak_dapat_daya_listrik = 7/27;
      }else if(daya_listrik == "1300 W"){
          dapat_daya_listrik = 1/23;
          tidak_dapat_daya_listrik = 1/27;
      }else if(daya_listrik == "TANPA METERAN"){
          dapat_daya_listrik = 6/23;
          tidak_dapat_daya_listrik = 1/27;
      }
      
    dapat = 23;
    tidak_dapat = 27;
    dapat_all = dapat/50;
    tidak_dapat_all = tidak_dapat/50;

    dapat_x = dapat_status_rumah * dapat_pekerjaan * dapat_jml_tanggungan * dapat_bahan_bk * dapat_sumber_air * dapat_daya_listrik ;

    tidak_dapat_x = tidak_dapat_status_rumah * tidak_dapat_pekerjaan * tidak_dapat_jml_tanggungan * tidak_dapat_bahan_bk * tidak_dapat_sumber_air * tidak_dapat_daya_listrik;

    dapat_prediction = dapat_x * dapat_all;
    tidak_prediction = tidak_dapat_x * tidak_dapat_all;
    document.querySelectorAll("#hasil")[0].value = (dapat_prediction > tidak_prediction)? "DAPAT ":"TIDAK DAPAT";
    document.form_.elements["hasildapat"].value = dapat_prediction.toFixed(5);
    document.form_.elements["hasiltidak"].value = tidak_prediction.toFixed(5);
  }
  function getReady(e){
    e.preventDefault();
    var status_rumah = document.form_.elements["status_rumah"].value;
    var pekerjaan = document.form_.elements["pekerjaan"].value;
    var jml_tanggungan = document.form_.elements["jml_tanggungan"].value;
    var bahan_bk = document.form_.elements["bahan_bakar_m"].value;
    var sumber_air = document.form_.elements["sumber_air"].value;
    var daya_listrik = document.form_.elements["daya_listrik"].value;
  
     naive_bayes(status_rumah, pekerjaan, jml_tanggungan, bahan_bk, sumber_air, daya_listrik);
  }
</script>


<!-- if(status_rumah == "MILIK SENDIRI"){
          dapat_status_rumah = 13/23;
          tidak_dapat_status_rumah = 18/27;
      }else if(status_rumah == "BEBAS SEWA"){
          dapat_status_rumah = 10/16;
          tidak_dapat_status_rumah = 9/54;
      }

      if(pekerjaan == "BURUH"){
          dapat_pekerjaan = 5/23;
          tidak_dapat_pekerjaan = 7/27;
      }else if(pekerjaan == "SEKOLAH"){
          dapat_pekerjaan = 1/23;
          tidak_dapat_pekerjaan = 0/27;
      }else if(pekerjaan == "TIDAK KERJA"){
          dapat_pekerjaan = 7/23;
          tidak_dapat_pekerjaan = 10/27;
      }else if(pekerjaan == "PEGAWAI SWASTA"){
          dapat_pekerjaan = 1/23;
          tidak_dapat_pekerjaan = 6/27;
      }else if(pekerjaan == "KEHUTANAN DAN PERTANIAN"){
          dapat_pekerjaan = 1/23;
          tidak_dapat_pekerjaan = 1/27;
      }else if(pekerjaan == "BERUSAHA SENDIRI"){
          dapat_pekerjaan = 3/23;
          tidak_dapat_pekerjaan = 2/27;
      }else if(pekerjaan == "PEKERJA BEBAS"){
          dapat_pekerjaan = 5/23;
          tidak_dapat_pekerjaan = 1/27;
      }

      if(jml_tanggungan == "1 ORANG"){
          dapat_jml_tanggungan = 0/23;
          tidak_dapat_jml_tanggungan = 2/27;
      }else if(jml_tanggungan == "2 ORANG"){
          dapat_jml_tanggungan = 2/23;
          tidak_dapat_jml_tanggungan = 4/27;
      }else if(jml_tanggungan == "3 ORANG"){
          dapat_jml_tanggungan = 3/23;
          tidak_dapat_jml_tanggungan = 8/27;
      }else if(jml_tanggungan == "4 ORANG"){
          dapat_jml_tanggungan = 10/23;
          tidak_dapat_jml_tanggungan = 7/27;
      }else if(jml_tanggungan == "5 ORANG"){
          dapat_jml_tanggungan = 6/23;
          tidak_dapat_jml_tanggungan = 3/27;
      }else if(jml_tanggungan == "6 ORANG"){
          dapat_jml_tanggungan = 0/23;
          tidak_dapat_jml_tanggungan = 1/27;
      }else if(jml_tanggungan == "7 ORANG"){
          dapat_jml_tanggungan = 1/23;
          tidak_dapat_jml_tanggungan = 2/27;
      }else if(jml_tanggungan == "12 ORANG"){
          dapat_jml_tanggungan = 0/23;
          tidak_dapat_jml_tanggungan = 1/27;
      }

      if(bahan_bk == "GAS 3 KG"){
          dapat_bahan_bk = 23/23;
          tidak_dapat_bahan_bk = 27/27;
      }else if(bahan_bk == "GAS 3 KG"){
          dapat_bahan_bk = 23/23;
          tidak_dapat_bahan_bk = 27/27;
      }

      if(sumber_air == "SUMUR BOR"){
          dapat_sumber_air = 17/23;
          tidak_dapat_sumber_air = 16/27;
      }else if(sumber_air == "MATA AIR TERLINDUNG"){
          dapat_sumber_air = 0/16;
          tidak_dapat_sumber_air = 2/27;
      }else if(sumber_air == "SUMUR TERLINDUNG"){
          dapat_sumber_air = 2/23;
          tidak_dapat_sumber_air = 4/27;
      }else if(sumber_air == "AIR ISI ULANG"){
          dapat_sumber_air = 1/23;
          tidak_dapat_sumber_air = 1/27;
      }else if(sumber_air == "LEDENG METERAN"){
          dapat_sumber_air = 1/23;
          tidak_dapat_sumber_air = 4/27;
      }else if(sumber_air == "LAINNYA"){
          dapat_sumber_air = 2/23;
          tidak_dapat_sumber_air = 0/27;
      }

      if(daya_listrik == "450"){
          dapat_daya_listrik = 18/23;
          tidak_dapat_daya_listrik = 12/27;
      }else if(daya_listrik == "900"){
          dapat_daya_listrik = 7/23;
          tidak_dapat_daya_listrik = 4/27;
      }else if(daya_listrik == "1300"){
          dapat_daya_listrik = 1/23;
          tidak_dapat_daya_listrik = 1/27;
      }else if(daya_listrik == "TANPA METERAN"){
          dapat_daya_listrik = 1/23;
          tidak_dapat_daya_listrik = 6/27;
      } -->