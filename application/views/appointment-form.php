<?php include 'common/header.php'; ?>
<section class="page-title overflow-hidden grey-bg">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-12">
            <h1 class="title mb-0">Book <span>Appointment</span></h1>
         </div>
         <div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url('');?>"><i class="fas fa-home"></i></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Appointment</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<div class="page-content">
   <section>
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-12 mx-auto">
               <div class="light-bg p-5">
                 <div class="alert alert-warning text-center" role="alert">
                    Note: Please make sure all the (*) fields are mandatory to be fill.
                  </div>
                  <form id="" method="post" action="submit-appointment" class="row">
                     <div class="messages"></div>
                     <div class="form-group col-sm-6">
                        <label>Patient Name <span class="text_denger">*</span></label>
                        <input id="form_name1" type="text" name="patient_name" class="form-control" placeholder="Ex. abc" required="required" data-error="Name is required.">
                        <div class="help-block with-errors"></div>
                     </div>
                     <div class="form-group col-sm-6">
                        <label>Email ID</label>
                        <input id="form_email1" type="email" name="patient_email" class="form-control" placeholder="Ex. abc@gmail.com">
                        <div class="help-block with-errors"></div>
                     </div>
                     <div class="form-group col-sm-6">
                        <label>Mobile Number <span class="text_denger">*</span></label>
                        <input id="form_number" type="text" name="patient_phone" maxlength="10" pattern="[6789][0-9]{9}" class="form-control" placeholder="Ex. 9876543210" required="required">
                     </div>
                     <div class="form-group col-sm-6">
                        <label>Department  <span class="text_denger">*</span></label>
                        <select class="form-control" name="department_id" id="departmentId">
                          <option value="" selected disabled>--Select Department--</option>
                          <?php foreach ($depList->result_array() as $List)
                          {
                            ?>
                          <option value="<?php echo $List['id']?>"><?php echo $List['department_name'];?></option>
                          <?php
                          }
                          ?>
                        </select>
                  
                     </div>
                     <div class=""id="consultancyList" ></div>
                     <div class="form-group col-sm-6">
                        <label>Consultant  <span class="text_denger">*</span></label>
                        
                        <select class="form-control" name="doctor_id" id="doctorList">
                          <option selected>--Select Doctor--</option>
                        </select>
                     </div>  
                     <div class="form-group col-sm-6">
                        <label>Appointment Date <span class="text_denger">*</span></label>
                        <input type="date" class="form-control" id="appointmentDate" name="appointment_date"  required>
                     </div>
                     <div class="form-group col-sm-12">
                     <textarea name="message" class="form-control" placeholder="Your message"></textarea>
                     </div>
                     <div class="col-sm-12 mt-5 mt-3 mt-sm-0">
                        <div class="d-flex justify-content-center">
                           <button class="btn btn-theme btn-radius"><span>Make Appointment</span>
                           </button>
                        </div>
                     </div>
                     <div id="successMsg">
                    <div class="alert mt-2 alert-success text-center">
                       Contact you soon!
                    </div>
                 </div>
                 <div id="errorMsg">
                    <div class="alert mt-2 alert-danger text-center">
                       Something went wrong, Please try again!!
                    </div>
                 </div>
                 <div id="preloader">
                    <div class="alert mt-2 alert-info text-center">
                       Please wait...
                    </div>
                 </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<?php include 'common/footer.php';?>
