<body class="hold-transition skin-green sidebar-mini">
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url(''); ?>" class="logo">
      <span class="logo-mini"><small>
                            <img width="50%" height="50%" src="<?php echo base_url(); ?>assets/img/epkh.png">
                        </small>
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <b>e</b>PKH</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $userdata->nama; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="background: url('assets/img/prof.jpg') center;">
                <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">

                <p style= 'color: purple'>
                  <?php echo $userdata->nama; ?> / <?php echo $userdata->role; ?>
                  <small>Member since Nov. 2018</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
            <div class="pull-left">
              <a href="<?php echo base_url()?>index.php/Profile" class="btn bg-olive btn-flat"><i class="fa fa-optin-monster"></i> Profile</a>
            </div>
            <div class="pull-right">
              <a href="<?php echo base_url()?>index.php/Auth/logout" class="btn bg-purple btn-flat"><i class="fa fa-share-square-o"></i> Sign out</a>
               
            </div>
          </li>
            </ul>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
</body>