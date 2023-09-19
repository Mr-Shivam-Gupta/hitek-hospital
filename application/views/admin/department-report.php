<?php
   $base=realpath(__DIR__);
   include $base.'/../common/admin_header.php';
   ?>
<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Department Report
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Dashbord</a></li>
         <li class="active">Department Report</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                
               </div>
               <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>S.No</th>
                           <th>Department Name</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $i=1;?>
                        <?php foreach($departmentList->result_array() as $list):?>
                        <tr>
                           <td><?php echo $i++?></td>
                           <td><?php echo $list['department_name'];?></td>
                           <td>
                              <a class="btn btn-outline-secondary btn-sm edit" href="<?php echo base_url('admin/deleteDepartment/').$list['id']?>" title="delete">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                              </a>
                              <a class="btn btn-outline-secondary btn-sm edit" href="<?php echo base_url('admin/editDepartment/').$list['id']?>" title="Edit">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              </a>
                           </td>
                        </tr>
                        <?php endforeach;?>
                  </table>
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
