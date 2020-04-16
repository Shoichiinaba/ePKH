<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $userdata->nama; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview active">
          <li <?= $this->uri->segment(1) == 'Dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
          	<a href="<?php echo site_url('Dashboard'); ?>">
            <i style= 'color: yellow' class=" fa fa-user-secret"></i> <span>Dashboard</span>
          </a></li >
        </li>

        <li class="treeview active">
          <li <?=$this->uri->segment(1) =='Data_latih' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
            <a href="<?php echo site_url('Data_latih'); ?>">
            <i style= 'color: yellow' class=" fa fa-clipboard"></i> <span>Data Latih</span>
          </a></li>

          <li <?=$this->uri->segment(1) =='tentukan_bantuan' ? 'class="active"' : ''?>>
            <a href="<?php echo site_url('tentukan_bantuan'); ?>">
            <i style= 'color: yellow' class=" fa fa-balance-scale"></i> <span>Tentukan Penerima Bantuan</span>
          </a></li>

          <li <?=$this->uri->segment(1) =='Approve' ? 'class="active"' : ''?>>
              <a href="<?php echo site_url('Approve'); ?>">
              <i style= 'color: yellow' class="fa fa-amazon"></i><span>Approve </span>
              <span class="badge bg-green right"><?php echo $blm_approve; ?></span>
              </a>
          </li>

          <li <?=$this->uri->segment(1) =='List_prediksi' ? 'class="active"' : ''?>>
            <a href="<?php echo site_url('List_prediksi'); ?>">
            <i style= 'color: yellow' class=" fa fa-newspaper-o"></i> <span>Data Pengajuan Bantuan</span>
          </a></li>

</li> 

<li class="treeview <?=$this->uri->segment(1) == 'admin' || $this->uri->segment(1) == 'User' ? 'active' : ''?>">
          <a href="#">
            <i style= 'color: yellow' class="fa fa-users"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i style= 'color: yellow' class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?= $this->uri->segment(1) == 'admin' ? 'class="active"' : ''?>>
            <a href="<?php echo site_url('admin'); ?>"><i style= 'color: orange' class="fa fa-user-plus"></i> Tambah Admin</a></li>
            <li <?= $this->uri->segment(1) == 'User' ? 'class="active"' : ''?>>
            <a href="<?php echo site_url('User'); ?>"><i style= 'color: orange' class="fa  fa-list-alt"></i> List Data Admin</a></li>
          </ul>
</li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>