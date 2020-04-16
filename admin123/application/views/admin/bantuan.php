 <script>
$(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>
  

  <div class="content-wrapper">
  <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Tentukan<small>Prediksi Penerima Bantuan </small></h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home > Prediksi Penerima</a></li>
        </ol>
      </section>
            <section class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box-header with-border">
                        <i ><h3 class="box-title">Masukkan File Excel</h3><i>
                            <div class="bg-olive" class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                        <i class="fa fa-times"></i></button>
                            </div>

                                  <div class="box-body" >
                                <!-- START LOCK SCREEN ITEM -->
                                <div class="lockscreen-item" >
                                  <!-- lockscreen image -->
                                  <div class="lockscreen-image">
                                    <img src="<?php echo base_url().'assets/img/excel1.png'; ?>" alt="User Image">
                                  </div>
                                  <!-- /.lockscreen-image -->

                                  <!-- lockscreen credentials (contains the form) -->
                                  <form class="lockscreen-credentials">
                                    <div class="input-group has-error">
                                      <input type="botton" id="inputSuccess" class="form-control" placeholder="Tekan Pilih File ">

                                      <div class="input-group-btn">
                                        <button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                <!-- /.lockscreen-item -->
                                
                            <form method="post" action="<?php echo base_url("tentukan_bantuan/form"); ?>" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-xs-5"></div>
                                <div class="col-xs-2">
                                                <input type="file" name="file">
                                </div>
                                </div>
                                <br>
                                <div class="text-center">
                                <div class="col-xs-12">
                                              <button class="btn btn-primary btn-lrg ajax" type="submit"  name="preview"><i class="fa fa-mail-reply-all"></i> Prediksi </button>
                                            </div>
                                </div>
                                    <br/>
                            </form>
                    </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                            <spam class="text-green"> Menentuakan siapa yang mendapatkan Bantuan dengan banyak data </spam> 
                          </div>
                  <!-- /.widget-user -->
                  </div>
                </div>
            </section>

                <section class="content">
                  <div class="row">
                    <div class="col-md-12">
                       <div class="box box-primary">
                          <div class="box-header with-border">
                          <h3 class="box-title">Tabel Preview</h3> 
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                      </div>
                      <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
 
                            <?php
                                if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
                                  if(isset($upload_error)){ // Jika proses upload gagal
                                    echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
                                    die; // stop skrip
                                  }
                                  
                                  // Buat sebuah div untuk alert validasi kosong
                                  echo "<div style='color: red;' id='kosong'>
                                  Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                                  </div>";
                                  // Buat sebuah tag form untuk proses import data ke database
                                  echo "<form id='form-save' method='post' action=''";
                                  
                                  
                                  echo "<table border='1' cellpadding='8'>
                                  <tr>
                                   <div class='box-body'>
                                    <div class='table-responsive'>
                                    <table class='table table-bordered table-striped' id='example2'>
                                  <th colspan='17'>Tampil Data Prediksi</th>
                                  </tr>
                                  <tr class='bg-olive'>
                                      <th>NO KK</th>
                                      <th>Nama</th>
                                      <th>Alamat</th>
                                      <th>Status Rumah</th>
                                      <th>Pekerjaan</th>
                                      <th>Jumlah Tanggungan</th>
                                      <th>Bahan Bakar </th>
                                      <th>Sumber Air</th>
                                      <th>Daya Listrik</th>
                                      <th style= 'color: purple';>Hasil Dapat</th>
                                      <th style= 'color: purple';>Hasil T.Dapat</th>
                                      <th style='color: blue;'>Keputusan </th>
                                  </tr>";
                                  
                                  $numrow = 1;
                                  $kosong = 0;
                                  
                                  // Lakukan perulangan dari data yang ada di excel
                                  // $sheet adalah variabel yang dikirim dari controller
                                  foreach($sheet as $row){ 
                                    // Ambil data pada excel sesuai Kolom
                                    $no_kk = $row['A']; 
                                    $nama = $row['B']; 
                                    $alamat = $row['C']; 
                                    $status_rumah = $row['D']; 
                                    $pekerjaan = $row['E'];
                                    $jml_tanggungan = $row['F'];
                                    $bahan_bakar_m = $row['G'];
                                    $sumber_air = $row['H'];
                                    $daya_listrik = $row['I'];

                                    $naive->data_set(
                                      $status_rumah,
                                      $pekerjaan,
                                      $jml_tanggungan,
                                      $bahan_bakar_m,
                                      $sumber_air,
                                      $daya_listrik);

                                    $perhitungan = $naive->mining();
                                    // Cek jika semua data tidak diisi
                                    if(empty($no_kk) && empty($nama) && empty($alamat) && empty($status_bangunan) && empty($jenis_lantai) && empty($jenis_dinding) && empty($kualitas_bang) && empty($kualitas_atap) && empty($jenis_atap) && empty($sumber_air) && empty($daya_listrik))
                                      continue; // Tambah 1 variabel $kosong
                                    
                                  
                                    if($numrow > 1)
                                    {
                                      // Validasi apakah semua data telah diisi
                                      $no_kk_td = ( ! empty($no_kk))? "" : " style='background: #E07171;'"; 
                                      $nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'";
                                      $alamat_td = ( ! empty($alamat))? "" : " style='background: #E07171;'"; 
                                      $status_rumah_td = ( ! empty($status_rumah))? "" : " style='background: #E07171;'"; 
                                      $pekerjaan_td = ( ! empty($pekerjaan))? "" : " style='background: #E07171;'"; // 
                                      $jml_tanggungan_td = ( ! empty($jml_tanggungan))? "" : " style='background: #E07171;'"; 
                                      $bahan_bakar_m_td = ( ! empty($bahan_bakar_m))? "" : " style='background: #E07171;'"; 
                                      $sumber_air_td = ( ! empty($sumber_air))? "" : " style='background: #E07171;'"; 
                                      $daya_listrik_td = ( ! empty($daya_listrik))? "" : " style='background: #E07171;'";  
                                      
                                      // Jika salah satu data ada yang kosong
                                          if(empty($no_kk) or empty($nama) or empty($alamat) or empty($status_rumah) or empty($pekerjaan) or empty($jml_tanggungan) or empty($bahan_bakar_m) or empty($sumber_air) or empty($daya_listrik)){
                                              $kosong++;
                                    }
                                      echo "<tr>";
                                      echo "<td".$no_kk_td.">".$no_kk."<input type='hidden' name='no_kk[]' value='$no_kk'/> </td>";
                                      echo "<td".$nama_td.">".$nama."<input type='hidden' name='nama[]' value='$nama'/></td>";
                                      echo "<td".$alamat_td.">".$alamat."<input type='hidden' name='alamat[]' value='$alamat'/></td>";
                                      echo "<td".$status_rumah_td.">".$status_rumah."<input type='hidden' name='status_rumah[]' value='$status_rumah'/></td>";
                                      echo "<td".$pekerjaan_td.">".$pekerjaan."<input type='hidden' name='pekerjaan[]' value='$pekerjaan'/></td>";
                                      echo "<td".$jml_tanggungan_td.">".$jml_tanggungan."<input type='hidden' name='jml_tanggungan[]' value='$jml_tanggungan'/></td>";
                                      echo "<td".$bahan_bakar_m_td.">".$bahan_bakar_m."<input type='hidden' name='bahan_bakar_m[]' value='$bahan_bakar_m'/></td>";
                                      echo "<td".$sumber_air_td.">".$sumber_air."<input type='hidden' name='sumber_air[]' value='$sumber_air'/></td>";
                                      echo "<td".$daya_listrik_td.">".$daya_listrik."<input type='hidden' name='daya_listrik[]' value='$daya_listrik'/></td>";
                                      echo "<td style= 'color: green';>".round($perhitungan['nilai']['DAPAT'], 5)."<input type='hidden' name='prediksi_dapat[]' value='".round($perhitungan['nilai']['DAPAT'], 5)."'/></td>";
                                      echo "<td style= 'color: green';>".round($perhitungan['nilai']['TIDAK DAPAT'], 5)."<input type='hidden' name='prediksi_tdapat[]' value='".round($perhitungan['nilai']['TIDAK DAPAT'], 5)."'/></td>";
                                      echo "<td style= 'color: blue';>".$perhitungan['Status']."<input type='hidden' name='keputusan[]' value='".$perhitungan['Status']."'/></td>";
                                      echo "</tr>";
                                    }
                                    $numrow++;
                                  }
                                  
                                  echo "</table>";
                                  
                                  // Cek apakah variabel kosong lebih dari 0
                                  // Jika lebih dari 0, berarti ada data yang masih kosong
                                  if($kosong > 0){
                                  ?>  
                                    <script>
                                    $(document).ready(function(){
                                      // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                                      $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                                      
                                      $("#kosong").show(); // Munculkan alert validasi kosong
                                    });
                                    </script>
                                  </div>
                                  </div>
                                  <?php
                                  }else{ // Jika semua data sudah diisi
                                    echo "<hr>";
                                    
                                    // Buat sebuah tombol untuk mengimport data ke database
                                    echo "<button type='submit' class='btn btn-success'> <i class='fa fa-rocket'>  Simpan</i></button>";
                                    echo " ";
                                    echo "<a href='".base_url("tentukan_bantuan")."'class='btn bg-navy'> <i class='fa fa-times-circle'> Cancel </i></a>";
                                    echo " <br>";
                                    echo " <br>";
                                    // echo "<button type='button' name='save' id='save' class='btn btn-info'>Simpan</button>";
                                  }
                                  echo "</form>";
                                }
                                ?>     
                                  <div id="insert_item_data"></div>
                        </div>
                          </div>
                            </table>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </section>
        </div>
</div>
<script>
  $(document).ready(function(){
    
    $('.btn-success').click(function(e){
      e.preventDefault();
      $.ajax({
        url:"<?php echo base_url().'tentukan_bantuan/simpan/'; ?>",
        data:$('#form-save').serialize(),
        method:'POST',
        success:function(data){
          console.log(data);
          swal("sukses","Data Berhasil Di Simpan", "success");
        },
        error:function(data){
          swal("Oops....", "Data Gagal Disimpan (NO.kk Sudah Ada) :(", "error");
        }

      }).fail(function(t, j){
      
      });
    });
      
  });

</script>
