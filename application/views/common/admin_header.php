<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
      <!-- Theme style -->
         <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/datatables/dataTables.bootstrap.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/dist/css/skins/_all-skins.min.css">
        <script src="<?php echo base_url('');?>include/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>



   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <header class="main-header">
            <a href="" class="logo">
               <!-- mini logo for sidebar mini 50x50 pixels -->
               <span class="logo-mini"><b>A</b>LT</span>
               <!-- logo for regular state and mobile devices -->
               <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
               <!-- Sidebar toggle button-->
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a>
               <!-- Navbar Right Menu -->
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                    
                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('');?>include/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">Alexander Pierce</span>
                        </a>
                        <ul class="dropdown-menu">
                           <!-- User image -->
                           <li class="user-header">
                              <img src="<?php echo base_url('');?>include/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                              <p>
                                 Alexander Pierce - Web Developer
                                 <small>Member since Nov. 2012</small>
                              </p>
                           </li>
                           <!-- Menu Body -->
                           <li class="user-body">
                              <div class="col-xs-4 text-center">
                                 <a href="#">Followers</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                 <a href="#">Sales</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                 <a href="#">Friends</a>
                              </div>
                           </li>
                           <!-- Menu Footer-->
                           <li class="user-footer">
                              <div class="pull-left">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                              </div>
                              <div class="pull-right">
                                 <a href="<?php echo base_url('logout')?>" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                           </li>
                        </ul>
                     </li>
                     
                  </ul>
               </div>
            </nav>
         </header>
         <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
               <!-- Sidebar user panel -->
               <div class="user-panel">
                  <div class="pull-left image">
                     <img src="<?php echo base_url('');?>include/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                     <p>Alexander Pierce</p>
                     <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
               </div>
               <!-- search form -->
               <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                     <input type="text" name="q" class="form-control" placeholder="Search...">
                     <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                     </span>
                  </div>
               </form>

               <ul class="sidebar-menu">
                 
                  <li class="treeview">
                     <a href="<?php echo base_url('admin-dashbord')?>">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
                     </a>
                     
                  </li>
                  <li class=" treeview">
                     <a href="">
                     <i class="fa fa-dashboard"></i> <span>Department</span> <i class="fa fa-angle-left pull-right"></i>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('add-department')?>"><i class="fa fa-circle-o"></i> Add Department </a></li>
                        <li><a href="<?php echo base_url('department-report')?>"><i class="fa fa-circle-o"></i>Department Report</a></li>
                        <li></li>
                        
                     </ul>
                  </li>
                  <li class="treeview">
                   <a href="<?php echo base_url('add-doctor')?>">
                     <i class="fa fa-user-md" aria-hidden="true"></i><span>Doctor</span> 
                     </a>
                     
                  </li>

               </ul>
            </section>
         </aside>
        
        