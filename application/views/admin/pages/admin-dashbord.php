<!-- <section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Dashboard</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?php echo base_url('admin-dashbord');?>">Home</a></li>
               <li class="breadcrumb-item active">Dashboard</li>
            </ol>
         </div>
      </div>
   </div>
</section> -->
<section class="d-none">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
               <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Bounce Rate</p>
               </div>
               <div class="icon">
                  <i class="ion ion-stats-bars"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
               <div class="inner">
                  <h3>44</h3>
                  <p>User Registrations</p>
               </div>
               <div class="icon">
                  <i class="ion ion-person-add"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-6">
            <div class="small-box bg-danger">
               <div class="inner">
                  <h3>65</h3>
                  <p>Unique Visitors </p>
               </div>
               <div class="icon">
                  <i class="ion ion-pie-graph"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container pt-4">
      <div class="row">
         <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
               <div class="inner">
                  <h3><?php echo $dep;?></h3>
                  <p>Department <br> List</p>
               </div>
               <div class="icon">
                  <i class="fa fa-building-o" aria-hidden="true"></i>
               </div>
               <a href="<?php echo base_url('department')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
               <div class="inner">
                  <h3><?php echo $doc;?></h3>
                  <p>Doctors <br>List</p>
               </div>
               <div class="icon">
                  <i class="fa fa-user-md"></i>
               </div>
               <a href="<?php echo base_url('doctor')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
               <div class="inner">
                  <h3><?php echo $apo;?></h3>
                  <p>Appointment <br>List </p>
               </div>
               <div class="icon">
                  <i class="fa fa-calendar"></i>
               </div>
               <a href="<?php echo base_url('appointments-report')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
               <div class="inner">
                  <h3><?php echo $upc;?></h3>
                  <p>Upcoming <br> Appointments</p>
               </div>   
               <div class="icon">
               <i class="fas fa-calendar-alt"></i>
                 
               </div>
               <a href="<?php echo base_url('appointments-upcoming')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
               <div class="inner">
                  <h3><?php echo $job;?></h3>
                  <p>Job <br>Application </p>
               </div>
               <div class="icon">
               <i class="fas fa-address-card"></i>
               </div>
               <a href="<?php echo base_url('job-application')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
