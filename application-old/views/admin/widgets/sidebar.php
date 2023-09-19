<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <a href="javascript:void(0)" class="brand-link d-flex justify-content-center">
      <img src="<?php echo base_url('');?>include/photos/Hitek_Hopispal.jpg" alt="AdminLTE Logo" style="width: 100px;background-color: aliceblue;padding: 8px;border-radius: 5px;">
      <span class="brand-text font-weight-light">
         <!-- <?php echo $user_name;?>  -->
      </span>
   </a>
   <div class="sidebar">
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
               <a href="<?php echo base_url('admin-dashbord');?>" class="nav-link <?php if($page_name == 'admin-dashbord'){echo 'active';}?>">
                  <i class="nav-icon fa fa-tachometer" aria-hidden="true"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('department');?>" class="nav-link <?php if($page_name == 'department'){echo 'active';}?>">
                  <i class="nav-icon fa fa-th-list" aria-hidden="true"></i>
                  <p>
                  Manage Department
                  </p>
               </a>
               <div class="">
                  <ul class="nav nav-treeview" style="display: block;">
                     <li class="nav-item">
                        <a href="<?php echo base_url('add-department');?>" class="nav-link">
                           <i class="fa fa-angle-right nav-icon"></i>
                           <p>Add Department</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?php echo base_url('department');?>" class="nav-link">
                           <i class="fa fa-angle-right nav-icon"></i>
                           <p>List Department</p>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('doctor');?>" class="nav-link <?php if($page_name == 'doctor'){echo 'active';}?>">
                  <i class="nav-icon fa fa-user-md" aria-hidden="true"></i>
                  <p>
                  Manage Doctor
                  </p>
               </a>
               <div class="">
                  <ul class="nav nav-treeview" style="display: block;">
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fa fa-angle-right nav-icon"></i>
                           <p>Add Doctor</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fa fa-angle-right nav-icon"></i>
                           <p>List Doctor</p>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>

            <li class="nav-item">
               <a href="<?php echo base_url('appointments-report');?>" class="nav-link <?php if($page_name == 'appointments-report'){echo 'active';}?>">
                  <i class="nav-icon fa fa-calendar" aria-hidden="true"></i>
                  <p>
                  Appointments Report
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('job-application');?>" class="nav-link <?php if($page_name == 'job-application'){echo 'active';}?>">
                  <i class="nav-icon fa fa-pencil-square-o" aria-hidden="true"></i>
                  <p>
                  Job Application
                  </p>
               </a>
            </li>

         </ul>
      </nav>
   </div>
</aside>
