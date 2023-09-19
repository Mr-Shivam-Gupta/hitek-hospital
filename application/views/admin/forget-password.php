<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin Login</title>

      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/bootstrap/css/bootstrap.min.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/dist/css/AdminLTE.min.css">
      <link rel="shortcut icon" href="<?php echo base_url('');?>include/images/Favicon.png" />
      <link href="<?php echo base_url('');?>include/stylesheet/custom.css" rel="stylesheet" type="text/css" />

      <link rel="stylesheet" href="<?php echo base_url('');?>include/admin/plugins/iCheck/square/blue.css">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <div class="login-logo">
           <img src="<?php echo base_url('');?>include/images/HiTek_Hospital.png" class="admin_logo" alt="HiTek Hospital">
         </div>
       
         <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?php if($this->session->flashdata('error'))
               { ?>
            <div class="alert alert-danger text-center m-1">
               <?php echo $this->session->flashdata('error');?>
            </div>
            <?php } ?>
            <?php if($this->session->flashdata('logout'))
               { ?>
            <div class="alert alert-info">
               <?php echo $this->session->flashdata('logout');?>
            </div>
            <?php } ?>
            <form  id="quickForm" action="<?php echo base_url('user-authentication')?>" method="post">
               <div class="card-body">
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" name="username" required class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Password</label>
                     <input type="hidden" class="form-check-input" name="hdnfield" value="<?php echo $salt;?>">
                     <input type="password" name="userpassword" required class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
               </div>
               <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary">Login</button>
               </div>
            </form>

            <a href="#">I forgot my password</a><br>
            <a href="<?php echo base_url('user-register');?>" class="text-center">Register a new membership</a>
         </div>

      </div>

      <script src="<?php echo base_url('');?>include/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>

      <script src="<?php echo base_url('');?>include/admin/bootstrap/js/bootstrap.min.js"></script>

      <script src="<?php echo base_url('');?>include/admin/plugins/iCheck/icheck.min.js"></script>
      <script>
         $(function () {
           $('input').iCheck({
             checkboxClass: 'icheckbox_square-blue',
             radioClass: 'iradio_square-blue',
             increaseArea: '20%'
           });
         });
      </script>
   </body>
</html>
