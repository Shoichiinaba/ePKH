
    <div id="home" class="hero-wrap ftco-degree-bg" style="background-image: url('assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text text-center">
	            <h1 class="mb-4">SPK <br>Penentuan Bantuan PKH</h1>
	            <p style="font-size: 18px;">Halaman ini berfungsi sebagai informasi sistem kepada warga yang ingin mengetahui tentang bantuan PKH dan juga dapat mengecek perkembangan bantuan</p>
	            <form action="<?= base_url('Home_c/search')?>" method="POST" class="search-location mt-md-12">
		        		<div class="row justify-content-center">
		        			<div class="col-lg-10 align-items-end">
		        				<div class="form-group">
		          				<div class="form-field">
				                <input type="text" name="no_kk" required="" autocomplete="off" class="form-control" placeholder="Masukan Nomer KK">
				                <button type="submit"> <span class="ion-ios-search"></span></button>
				              </div>
			              </div>
		        			</div>
		        		</div>
		        	</form>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </div>
		<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="50">0</strong>
                <span>Jumlah <br><b>RT</b></span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="6">0</strong>
                <span>Jumlah <br><b>RW</b></span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="10883">0</strong>
                <span>Total <br><b>Penduduk</b></span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="360">0</strong>
                <span>Total <br><b>Kepala Keluarga</b></span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section" id="tentang">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Tentang Sistem</span>
            <h2 class="mb-3">Penentuan Bantuan PKH (ePKH)</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-piggy-bank"></span></div>
              <div class="media-body py-md-4">
                <h3>ePKH</h3>
                <p>Sistem ini dibuat untuk memudahkan dalam penyeleksian calon penerima bantuan pkh dengan memenfaatkan algoritma naive bayes</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-wallet"></span></div>
              <div class="media-body py-md-4">
                <h3>Bantuan Tetap untuk Setiap Keluarga</h3>
                <p>1. Reguler          : Rp.     550.000,- / keluarga / tahun</p>
                <p>2. PKH AKSES  : Rp. 1.000.000,- / keluarga / tahun </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-file"></span></div>
              <div class="media-body py-md-4">
                <h3>Bantuan Komponen untuk Setiap Jiwa dalam Keluarga PKH</h3>
                <p>Ibu hamil: Rp. 2.400.000, Anak usia dini: Rp. 2.400.000, SD: Rp. 900.000, SMP: Rp. 1.500.000, SMA: Rp. 2.000.000, Disabilitas berat: Rp. 2.400.000, Lanjut usia: Rp. 2.400.000</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-locked"></span></div>
              <div class="media-body py-md-4">
                <h3>Manfaat sistem</h3>
                <p>Dengan adanya sistem ini maka tidak ada bantuan yang di korupsi karena bantuan akan terpantau oleh masyarakat</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<!-- javascript -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!-- javascript -->