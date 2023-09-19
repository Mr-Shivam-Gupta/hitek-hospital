<?php
   $base=realpath(__DIR__);
   include $base.'/../common/admin_header.php';
   ?>
   <div class="content-wrapper">
   
   <section class="content-header">
      <h1>
         Edit Department 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       
         <li class="active">Edit Department </li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <div class="col-md-3">
            &nbsp;
         </div>
         
         <div class="col-md-6 ">
            <div class="box box-danger">
               
               <div class="box-body">
                  
                            <?php if($this->session->flashdata('error'))
               { ?>
            <div class="alert alert-danger text-center">
               <?php echo $this->session->flashdata('error');?>
            </div>
            <?php } ?>
             <?php if($this->session->flashdata('success'))
               { ?>
            <div class="alert alert-success text-center">
               <?php echo $this->session->flashdata('success');?>
            </div>
            <?php } ?>
                         
                     <form class="quickForm" action="<?php echo base_url('admin/updateDepartment/').$departmentList->id;?>" method="post">

                    
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Department Name</label>
                           <input type="text" name="department_name" required class="form-control" id="exampleInputEmail1" value="<?php echo $departmentList->department_name;?>" placeholder="Enter Department Name">
                        </div>

                     </div>
                     <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Update Now</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>


<?php
   $base=realpath(__DIR__);
   include $base.'/../common/admin_footer.php';
   ?>
