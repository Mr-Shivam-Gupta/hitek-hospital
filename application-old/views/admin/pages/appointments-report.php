<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Appointment</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?php echo base_url('admin-dashbord');?>">Home</a></li>
               <li class="breadcrumb-item active">Appointment</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Appointment Details</h3>
               </div>
               <div class="card-body">
                  <?php if ($this->session->flashdata('success'))
                     {
                       ?>
                  <script>
                     swal("Good job!", "Your request has been successfully completed", "success");
                  </script>
                  <?php
                     }?>
                  <?php if ($this->session->flashdata('error'))
                     {
                       ?>
                  <script>
                     swal("Are you sure!", "Oppps! An attempt to delete the doctor failed!", "warning");
                  </script>
                  <?php
                     }?>
                  <?php if($msgError = $this->session->flashdata('error')):?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <?php echo $msgError;?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <?php endif;?>
                  <div class="row">
                     <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped table-hover data_list">
                           <thead>
                              <tr>
                                 <th class="text-center">S.NO</th>
                                 <th class="text-center"> Name</th>
                                 <th class="text-center"> Number</th>
                                 <th class="text-center"> Email</th>
                                 <th class="text-center">Appointment Date</th>
                                <th class="text-center">Doctor</th>
                                <th class="text-center">Department</th>
                                <!-- <th class="text-center">Consultancy Fees</th> -->
                                 
                                 <th class="text-center">Message</th>
                                 <th class="text-center">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i=1; foreach ($appointmentReport->result_array() as $appointmentReport): ?>
                              <tr>
                                 <td><?php echo $i++;?></td>
                                 <td><?php echo ucwords($appointmentReport['paitent_name']);?></td>
                                 <td><?php echo $appointmentReport['paitent_number']?></td>
                                 <td><?php echo $appointmentReport['paitent_email']?></td>
                                 <td><?php echo $appointmentReport['appointment_date']?></td>
                                 <td><?php echo $appointmentReport['doctor_name']?></td>
                                <td><?php echo $appointmentReport['department_name']?></td>                               
                                <!-- <td><?php echo $appointmentReport['consultancy']?></td>-->
                                 <td><?php echo $appointmentReport['message']?></td>
                                 <td>
                                    <a href="<?php echo base_url('admin/deleteAppointment/').$appointmentReport['id'];?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                 </td>
                              </tr>
                              <?php endforeach ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>