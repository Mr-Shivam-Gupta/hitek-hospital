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
                  Manage Departments
                  </p>
               </a>
               
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('doctor');?>" class="nav-link <?php if($page_name == 'doctor'||$page_name == 'add-doctor'){echo 'active';}?>">
                  <i class="nav-icon fa fa-user-md" aria-hidden="true"></i>
                  <p>
                  Manage Doctors
                  </p>
               </a>
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
               <a href="<?php echo base_url('appointments-upcoming');?>" class="nav-link <?php if($page_name == 'appointments-upcoming'){echo 'active';}?>">
                  <i class="nav-icon 	fas fa-calendar-alt" aria-hidden="true"></i>
                  <p>
                  Upcoming Appointments
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('appointments-search');?>" class="nav-link <?php if($page_name == 'appointments-search'){echo 'active';}?>">
                  <i class="nav-icon 	fas fa-search" aria-hidden="true"></i>
                  <p>
                  Search Appointments
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
