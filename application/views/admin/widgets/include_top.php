<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Admin | Dashboard</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/jqvmap/jqvmap.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/dist/css/adminlte.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/daterangepicker/daterangepicker.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/summernote/summernote-bs4.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url('include/admin/');?>plugins/summernote/summernote-bs4.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
      <script src="<?php echo base_url('');?>include/admin/plugins/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url('');?>include/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
      <link href='https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css' rel='stylesheet'>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
      <!-- <div class="preloader flex-column justify-content-center align-items-center">
         <img class="animation__shake" src="<?php echo base_url('');?>include/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
         </div> -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
         <li class="nav-item">
         <?php if($page_name == 'department'){ ?>
            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-add-department"><i class="fa fa-plus" aria-hidden="true"> </i> Add Department</button>  
         <?php }if($page_name == 'doctor'){ ?>
            <a href="<?php echo base_url('add-doctor')?>" class="btn btn-block btn-primary" ><i class="fa fa-plus" aria-hidden="true"> </i> Add Doctor</a>
            <?php }if($page_name == 'add-doctor'){?>
               <a href="<?php echo base_url('doctor')?>" class="btn btn-block btn-primary" ><i class="fas fa-share" aria-hidden="true"> </i> Back</a>
            <?php }?>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#">
               <i class="far fa-user"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <div class="dropdown-divider"></div>
                  <a href="" data-toggle="modal" data-target="#exampleModal" class="dropdown-item">
                  <i class="fa fa-unlock mr-2" aria-hidden="true"></i>Change password
                  </a>

                  <a href="<?php echo base_url('logout');?>" class="dropdown-item" id="logout">
                  <i class="fa fa-sign-out mr-2"></i>Logout
                  </a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="#" role="button">
               <i class="fas fa-expand-arrows-alt"></i>
               </a>
            </li>
            
         </ul>
      </nav>
