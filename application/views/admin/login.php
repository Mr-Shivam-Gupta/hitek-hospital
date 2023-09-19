<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Admin Login</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('');?>include/css/custom.css"/>
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/dist/css/adminlte.min.css">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <div class="card">
            <div class="card-body login-card-body">
               <div class="login-logo">
               <img id="logo-img" height="56" width="100" class="img-fluid auto_size" src="<?php echo base_url('');?>include/photos/Hitek_Hopispal.jpg"  alt="Jeevan Jyoti Hospital">
               </div>
               <p class="login-box-msg">Sign in to start your session</p>
               <?php if($errorMsg=$this->session->flashdata('error')):?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <?php echo $errorMsg;?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <?php endif;?>
               <?php if($successMsg=$this->session->flashdata('success')):?>
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?php echo $successMsg;?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <?php endif;?>
               <form action="<?php echo base_url('user-authentication')?>" method="post">
                  <div class="input-group mb-3">
                     <input type="email" name="username" required class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-envelope"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="hidden" class="form-check-input" name="hdnfield" value="<?php echo $salt;?>">
                     <input type="password" name="userpassword" required class="form-control" id="exampleInputPassword1" placeholder="Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block theme_button"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="<?php echo base_url('');?>include/admin/plugins/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url('');?>include/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url('');?>include/admin/dist/js/adminlte.min.js"></script>
   </body>
</html>
