<section class="content-header card ">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Search Appointments</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?php echo base_url('admin-dashbord');?>">Home</a></li>
               <li class="breadcrumb-item active">Search Appointments</li>
            </ol>
         </div>
      </div>
   </div>

<?php if ($this->session->flashdata('success'))
                     {
                       ?>
                  <script>
                     swal("Successful", "Your request has been successfully completed", "success");
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
<div class="container ">
   <div class="card-body ">
      <form action="<?= base_url('Admin/appointmentsSearch') ?>" method="post">
         <div class="row">
            <div class="col-6">
               <label>Start Date </label>
               <input class="form-control sf-form-control"   type="date" id="start_date" name="start_date" required />
            </div>
            <div class="col-6">
               <label>End Date </label>
               <input class="form-control sf-form-control" type="date" id="end_date" name="end_date" required/>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-center">
               <button type="submit" class="btn btn-primary mt-3">Search</button>
            </div>
         </div>
      </form>
   </div>
</div>
</section>
<?php if($appointmentReport !=''){?>
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
            <div class="card-header">
                  <h3 class="card-title">Search List</h3>
               </div>
               <div class="card-body">
                  
                  <div class="row">
                     <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped table-hover data_list">
                           <thead>
                              <tr>
                                 <th class="text-center">S.NO</th>
                                 <th class="text-center"> Name</th>
                                 <th class="text-center"> Number</th>
                                 <th class="text-center"> Email</th>
                                 <th  class="text-center">Appointment Date</th>
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
                                <!-- <td><?php echo $appointmentReport['consultancy']?></td> -->
                                 <td><?php echo $appointmentReport['message']?></td>
                                 <td>
                                    <a href="<?php echo base_url('admin/deleteSearch/').$appointmentReport['id'];?>" data-id="<?php echo $appointmentReport['id']?>" class="btn btn-danger del-doc"><i class="fas fa-trash"></i></a>
                                    <!-- <a href="#" data-id="<?php echo $appointmentReport['id']?>" class="btn btn-danger del-doc"><i class="fas fa-trash"></i></a> -->
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
<?php }?>
<script>
                $("#start_date").on("change", function() {
                    $("#end_date").attr("min", $(this).val());
                });
                $("#end_date").on("change", function() {
                    $("#start_date").attr("max", $(this).val());
                });

                //delete the data of doctor 
                $(document).on("click", ".del-doc", function(e) {
        e.preventDefault();

        var Id = $(this).data("id");
        var start = $("#start_date").val();
        var end = $("#end_date").data("id");
        $.ajax({
            url: "<?php echo base_url('Admin/deleteSearch'); ?>", 
            type: "post",
            data: { id: Id, start:start,end:end},
            success: function(data) {
            },
        });
    });

</script>