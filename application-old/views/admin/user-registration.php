<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>User Register</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/fontawesome-free/css/all.min.css">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/dist/css/adminlte.min.css">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <div class="login-logo">
            <a href=""><b>Admin</b>Login</a>
         </div>
         <div class="card">
            <div class="card-body login-card-body">
               <p class="login-box-msg">Sign in to start your session</p>
               <?php if($errorMsg=$this->session->flashdata('error')):?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Something Wrong!</strong> <?php echo $errorMsg;?>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <?php endif;?>
               <?php if($successMsg=$this->session->flashdata('success')):?>
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> <?php echo $successMsg;?>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <?php endif;?>
               <form action="<?php echo base_url('user-registration')?>" method="post">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" required name="fullname" placeholder="Enter full name">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="email" class="form-control" required name="username" placeholder="Enter email">   
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-envelope"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="hidden" class="form-check-input" required name="hdnfield" value="<?php echo $salt;?>">
                     <input type="password" class="form-control" required name="userpassword" placeholder="Enter password"> 
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12 text-center">
                        <div class="d-flex justify-content-center">
                           <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
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
