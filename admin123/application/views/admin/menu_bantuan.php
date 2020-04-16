<div class="content-wrapper">
  <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Menu<small><?php echo $userdata->role; ?> </small></h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home > Menu Tentukan Bantuan</a></li>
        </ol>
      </section>
      
      <section class="content">
                   
      <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Pilih Penentuan Bantuan Sesuai Kebutuhan</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-purple">Pilih Tombol</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                    </li>
                    <li>
                    <a href="<?php echo site_url('tentukan_bantuan/form_bantuan'); ?>" ><img src="<?php echo base_url().'assets/img/form.png'; ?>" alt="User Image"></a>
                      <a class="users-list-name" href="">Menggunakan Form</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('tentukan_bantuan/excel'); ?>" ><img src="<?php echo base_url().'assets/img/excels.png'; ?>" alt="User Image"></a>
                      <a class="users-list-name" href="<?php echo site_url('tentukan_bantuan/excel'); ?>">Menggunakan File Excel</a>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a  class="uppercase">Menu Pilihan</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>

      </section> 
  </div>
</div> 