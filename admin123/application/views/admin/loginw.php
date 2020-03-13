<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>System | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="shortcut icon" href="assets/img/pkh.png" type="image/x-icon">
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet" >
        <link href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">  
        <link href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">        
         <!-- <link href="<?php echo base_url('assets/js/plugins/iCheck/square/blue.css'); ?>" rel="stylesheet">  -->
        <link href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>" rel="stylesheet"> 
        <link href="<?php echo base_url('assets/plugins/iCheck/square/blue.css'); ?>" rel="stylesheet">
    </head>
    <?php
 echo "<style>
    body{
        background-image:url(".base_url()."assets/img/beckround/bglog1.jpg);
        background-attachment:fixed;
        background-size:100% 100%;
    }
 </style>";
 ?>
    <body >
        <div class="login-box">
            <div class="login-logo">
                <small>
                            <img src="assets/img/pkh.png" alt="" />
                        </small>

                <a href="" > <b class= "text-red"> ePKH Login</b> <i class="text-green">Admin </i></a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Silahkan Masukan Username & Password Anda </p>
                <form action="<?php echo site_url('Auth/login'); ?>" method="post">
                    <?php
                    if (validation_errors() || $this->session->flashdata('result_login')) {
                        ?>
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_login'); ?>
                        </div>    
                    <?php } ?>

                   <div><?php 
                            $data=$this->session->flashdata('sukses');
                            if($data!=""){ ?>
                            <div class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
                    <?php } ?>
                </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="username" class="form-control" autofocus="" autocomplate="off" placeholder="Username"/>
                        <span class="fa fa-odnoklassniki  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-blackboard form-control-feedback"></span>
                    </div>
                        <div class="cform-group has-feedback">
                            <button type="submit" class="btn bg-olive btn-block btn-flat"><i class="fa fa-sign-in"></i> Sign In</button>
                        </div>
                </form>                

            </div><!-- /.login-box-body -->
            <div class="lockscreen-footer text-center">
            <b class="text-green">
             Copyright &copy; <script>document.write(new Date().getFullYear());</script> <strong>System Bantuan kota Semarang</strong> <i class="text-red"> (ePKH).</i> All Rights Reserved
  </div>
        </div><!-- /.login-box -->

 <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script> 
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script> 
<!-- iCheck -->
 <script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script> 

    </body>
</html>