<?php include 'common/header.php'; ?>
<section class="page-title overflow-hidden grey-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <h1 class="title mb-0">Find <span>Doctors</span></h1>
      </div>
      <div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('');?>"><i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Find Doctors</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<section class="mt-50 d-lfex justifly-content-center">
   <div class="container contaner_box_shadow_1 mb-50 pb-30 bg_gray">
      <div class="row">
         <div class="">
            <div class="">
               <form class="query_form wrap-form pt-25 clearfix" id="searchDoctor" action="<?php echo base_url('search-doctor');?>" method="post">
                  <div class="row">
                     <div class="col-md-4 form-group ">

                      <input  name="doctor_name" class="form-control"  id="doctor_name" type="text"  placeholder="Doctor Name">
                     </div>
                     <div class="col-md-4 form-group">


                           <select class="form-control"   name="department_name" id="consultant_department" >
                            <option disabled selected>Select Department</option>
                            <?php foreach ($depList->result_array() as $dep) {?>
                                <option value="<?php echo $dep['id'];?>"><?php echo $dep['department_name'];?> </option>

                            <?php
                        }?>
                           </select>

                     </div>
                     <div class="col-md-4 form-group">

                           <select class="form-control"  name="unit" id="unit">
                            <option value="" selected disabled>Select Unit </option>
                            <option value="Regular">Regular</option>
                            <option value="Visiting Consultant">Visiting Consultant</option>
                           </select>

                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="d-flex justify-content-center">
                        <button class="book_btn" type="submit"><span><i class="fa fa-search" aria-hidden="true"></i> Search</span></button>
                     </div>
                  </div>
            </div>
            </form>
         </div>
      </div>
   </div>
   </div>
   <div class="container" id="padding_sm_0">
      <div class="table-responsive">
         <table class="table table-striped table-bordered mb-50" id="doctorTable">
            <thead>
               <tr class="text-center">
                  <th scope="col">S.No</th>
                  <th scope="col">Doctor Name </th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Specialisation</th>
                  <th scope="col">Unit</th>
                  <th scope="col">View Profile</th>
                  <th scope="col">Book Appointment</th>
               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
            if (count($docterList->result_array())>0)
            {
               foreach ($docterList->result_array() as $row) {
                  ?>
                   <tr>

                  <td class="text-center"><?php echo $i++?></td>
                  <td><?php echo ucwords($row['doctor_name']); ?></td>
                  <td><?php echo strtoupper($row['qualification']); ?></td>
                  <td><?php echo ucwords($row['specialisation']); ?></td>
                  <td><?php echo $row['unit']; ?></td>
                  <td class="text-center pt-pr-1020"><a class="book_btn" href="<?php echo base_url('hitekhospitals/doctorDetail/').$row['new_url'];?>">View</a></td>
                  <td class="text-center pt-pr-1020"><a class="view_btn" href="<?php echo base_url('hitekhospitals/appointment/').$row['id']; ?>">Book</a></td>
               </tr>
               <?php
               }
            }
            else
            {
               ?>
              <tr><td class="text-center" colspan="7">No Record Found </td></tr>
            <?php
            }
            ?>

            </tbody>
         </table>
      </div>
   </div>
</section>







<?php include 'common/footer.php'; ?>
