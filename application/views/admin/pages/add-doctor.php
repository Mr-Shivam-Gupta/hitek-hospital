<!-- <section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Doctor</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin-dashbord');?>">Home</a></li>
               <li class="breadcrumb-item active">Doctor</li>
               <a href="<?php echo base_url('doctor')?>" class="btn btn-block btn-primary" ><i class="fas fa-share" aria-hidden="true"> </i> Back</a>
            </ol>
         </div>
      </div>
   </div>
</section> -->




<section class="content pt-4">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card card-primary">
               <div class="card-header">
                  <h3 class="card-title">Doctor Detail</h3>
               </div>
               <?php if ($edit == "edit")
                  {
                     ?>
               <form action="<?php echo base_url('Admin/editSubmitDoctor/').$docDetail->id;?>" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Doctor Name</label>
                              <input type="text" required class="form-control" name="doctor_name" value="<?php echo $docDetail->doctor_name;?>" placeholder="Ex. abc">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Role  </label>
                              <select required class="form-control select2" style="width: 100%;" name="role">
                                 <option class="d-none" value="<?php echo $docDetail->role;?>" selected disabled><?php echo $docDetail->role;?> </option>
                                 <option value="Doctor">Doctor</option>
                                 <option value="Director">Director</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Unit  </label>
                              <select required class="form-control select2" style="width: 100%;" name="unit">
                                 <option style="display:none" value="<?php echo $docDetail->unit;?>" selected ><?php echo $docDetail->unit;?> </option>
                                 <option value="Regular">Regular</option>
                                 <option value="Visiting Consultant">Visiting Consultant</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Department </label>
                              <select required class="form-control select2" style="width: 100%;" name="department_name">
                                 <option style="display:none" value="<?php echo $docDetail->department_id;?>" selected><?php echo $docDetail->department_name;?></option>
                                 <?php foreach ($depList->result_array() as $key => $depName) {
                                    ?>
                                 <option value="<?php echo $depName['id']?>"><?php echo $depName['department_name']?></option>
                                 <?php }?>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Specialisation</label>
                              <input type="text" required class="form-control" value="<?php echo $docDetail->specialisation;?>" name="specialisation" placeholder="Ex. Neurosurgery Surgeon">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Qualification</label>
                              <input type="text" required class="form-control" value="<?php echo $docDetail->qualification;?>" name="qualification" placeholder="Ex. MBBS">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Doctor Photo <span class="text-danger"><b>(Note:- Width:300px, Height:400px, File Max Size 250KB)</b></span></label>
                              <input type="file" required class="form-control" name="doctor_photo" placeholder="Ex. abc">
                              <div class="d-flex justify-content-center">
                                 <img height="150" class="border mt-1" src="<?php echo base_url('').'uploads/doctors/'.$docDetail->doctor_photo;?>">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="educational_field_wrapper">
                              <div class="form-group">
                                 <div class="row mb-2">
                                    <div class="col-md-11">
                                       <label for="departmentName">Educational Background </label>
                                    </div>
                                    <div class="col-md-1">
                                       <a href="javascript:void(0);" class="add_educational_button btn btn-primary" title="Add field"><i class="fa fa-plus-square-o"></i></a>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <?php  $list = $docDetail->educational_background;
                                          $arr = json_decode($list, true);
                                          $count = count($arr)-1;
                                          
                                          if (isset($count)) 
                                          {
                                             for ($i=0; $i <=$count ; $i++) { 
                                              ?>
                                       <div class="row mb-2" id="eduction_field_row">
                                          <div class="col-md-11"><input type="text" class="form-control"  name="educational_background[]" value="<?php echo $arr[$i];?>"></div>
                                          <div class="col-md-1"><a href="javascript:void(0);" class="remove_skill_button btn btn-danger" title="Add field"><i class="fa fa-minus-square-o"></i></a></div>
                                       </div>
                                       <?php 
                                          }
                                          
                                          }
                                          else
                                          {
                                             echo "No record found";
                                          }
                                          
                                          ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="skill_field_wrapper">
                              <div class="form-group">
                                 <div class="row mb-2">
                                    <div class="col-md-11">
                                       <label for="departmentName">Experience </label>
                                    </div>
                                    <div class="col-md-1">
                                       <a href="javascript:void(0);" class="skill_button  btn btn-primary" title="Add field"><i class="fa fa-plus-square-o"></i></a>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <?php  $list = $docDetail->key_skills;
                                          $arr = json_decode($list, true);
                                         
                                          $count = count($arr)-1;
                                         
                                          if (isset($count)) 
                                          {
                                             for ($i=0; $i <=$count ; $i++) { 
                                              ?>
                                       <div class="row mb-2" id="skill_field_row">
                                          <div class="col-md-11"><input type="text" class="form-control" placeholder="Enter Experience" name="key_skills[]" value="<?php echo $arr[$i];?>"></div>
                                          <div class="col-md-1"><a href="javascript:void(0);" class="remove_skill_button btn btn-danger" title="Add field"><i class="fa fa-minus-square-o"></i></a></div>
                                       </div>
                                       <?php 
                                          }
                                          
                                          }
                                          else
                                          {
                                             echo "No record found";
                                          }
                                          
                                          ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Consultancy Fees</label>
                              <input type="text" required class="form-control"  value="<?php echo $consultancy->consultancy;?>" name="consultancy" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="4" placeholder="Ex. 500">
                           </div>
                        </div>               

                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="departmentName">Doctor Detail</label>
                              <textarea class="form-control"  name="doctor_detial" id="exampleFormControlTextarea1" rows="3"><?php echo $docDetail->doctor_detial;?></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-footer">
                     <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                     </div>
                  </div>
               </form>
               <?php
                  }
                  else
                  {
                    ?>
               <form id="doctorForm" >
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Doctor Name</label>
                              <input type="text" required class="form-control" name="doctor_name" placeholder="Ex. abc">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Role  </label>
                              <select required class="form-control select2" style="width: 100%;" name="role">
                                 <option value="" selected disabled>Select Unit </option>
                                 <option value="Doctor">Doctor</option>
                                 <option value="Director">Director</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Unit  </label>
                              <select required class="form-control select2" style="width: 100%;" name="unit">
                                 <option value="" selected disabled>Select Unit </option>
                                 <option value="Regular">Regular</option>
                                 <option value="Visiting Consultant">Visiting Consultant</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Department </label>
                              <select required class="form-control select2" style="width: 100%;" name="department_name">
                                 <option value="" selected disabled>Select Department</option>
                                 <?php foreach ($depList->result_array() as $key => $depName) {
                                    ?>
                                 <option value="<?php echo $depName['id']?>"><?php echo $depName['department_name']?></option>
                                 <?php }?>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Specialisation</label>
                              <input type="text" required class="form-control" name="specialisation" placeholder="Ex. Neurosurgery Surgeon">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Qualification</label>
                              <input type="text" required class="form-control" name="qualification" placeholder="Ex. MBBS">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Doctor Photo <span class="text-danger"><b>(Note:- Width:300px, Height:400px, File Max Size 250KB)</b></span></label>
                              <input type="file" required class="form-control" name="doctor_photo" placeholder="Ex. abc">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="educational_field_wrapper">
                              <div class="form-group">
                                 <label for="departmentName">Educational Background</label>
                                 <div class="row">
                                    <div class="col-md-11">
                                       <input type="text" class="form-control"  name="educational_background[]" value="" placeholder="Enter Educational Background">
                                    </div>
                                    <div class="col-md-1">
                                       <a href="javascript:void(0);" class="add_educational_button btn btn-primary" title="Add field"><i class="fa fa-plus-square-o"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="skill_field_wrapper">
                              <div class="form-group">
                                 <label for="departmentName">Experience</label>
                                 <div class="row">
                                    <div class="col-md-11">
                                       <input type="text" class="form-control"  name="key_skills[]" value="" placeholder="Enter Experience">
                                    </div>
                                    <div class="col-md-1">
                                       <a href="javascript:void(0);" class="skill_button btn btn-primary" title="Add field"><i class="fa fa-plus-square-o"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="departmentName">Consultancy Fees</label>
                              <input type="text" required class="form-control" name="consultancy" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="4" placeholder="Ex. 500">
                           </div>
                        </div>
                        <!--<div class="col-md-6">-->
                        <!--   <div class="award_field_wrapper">-->
                        <!--      <div class="form-group">-->
                        <!--         <label for="departmentName">Award's & Achievements</label>-->
                        <!--         <div class="row">-->
                        <!--            <div class="col-md-11">-->
                        <!--               <input type="text" class="form-control"  name="award[]" value="" placeholder="Enter Award's & Achievements">-->
                        <!--            </div>-->
                        <!--            <div class="col-md-1">-->
                        <!--               <a href="javascript:void(0);" class="award_button btn btn-primary" title="Add field"><i class="fa fa-plus-square-o"></i></a>-->
                        <!--            </div>-->
                        <!--         </div>-->
                        <!--      </div>-->
                        <!--   </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--   <div class="publications_field_wrapper">-->
                        <!--      <div class="form-group">-->
                        <!--         <label for="departmentName">Publications</label>-->
                        <!--         <div class="row">-->
                        <!--            <div class="col-md-11">-->
                        <!--               <input type="text" class="form-control"  name="publications[]" value="" placeholder="Enter Publications Detail">-->
                        <!--            </div>-->
                        <!--            <div class="col-md-1">-->
                        <!--               <a href="javascript:void(0);" class="publications_button btn btn-primary" title="Add field"><i class="fa fa-plus-square-o"></i></a>-->
                        <!--            </div>-->
                        <!--         </div>-->
                        <!--      </div>-->
                        <!--   </div>-->
                        <!--</div>-->
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="departmentName">Doctor Detail</label>
                              <textarea class="form-control" name="doctor_detial" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Details"></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-footer">
                     <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </div>
               </form>
               <?php
                  }
                  ?>
            </div>
         </div>
      </div>
   </div>
</section>
<script type="text/javascript">
   $(document).ready(function () {
   
   
      	$("#doctorForm").submit(function (e) {
   		e.preventDefault();
   		$.ajax({
                 url : '<?php echo base_url('submit-doctor')?>',
                 type : 'post',
                  processData : false,
                  contentType : false,
                  cache :false,
                  async : false,
                  data : new FormData(this),
   
                  beforeSend:function () {
                  	swal({
                                  title: "Please Wait",
                                //   text: "",
                                  icon: "info",
   
                              });
                  },
                  success : function (data) {
   
                  	if(data==1)
                                    {
                                         $('#doctorForm')[0].reset();
                                         swal({
                                                      title: "successful",
                                                      text: "Doctor added successfully",
                                                      icon: "success",
                                                   }).then(function () {
                                                   window.location.href="<?php echo base_url('doctor'); ?>";
                                                    });
                              
                                    }
   
                                    else{
                                      swal({
                                      title: "Opps!",
                                      text: data,
                                    //   text: "Oops! The form submission has failed",
   
                              });
                          }
                  },
                  error: function () {
                      swal({
                                      title: "Opps!",
                                      text: "Please send the right request",
   
                              });
                  }
   
   
   		});
   	});
   
   
   
      $("#editdoctorForm").submit(function (e) {
   		e.preventDefault();
   		$.ajax({
                 url : "<?php echo base_url('edit-submit-doctor')?>",
                 type : 'post',
                  processData : false,
                  contentType : false,
                  cache :false,
                  async : false,
                  data : new FormData(this),
   
                  beforeSend:function () {
                  	swal({
                                  title: "Please Wait",
                                //   text: "",
                                  icon: "info",
   
                              });
                  },
                  success : function (data) {
   
                  	if(data==1)
                                    {
                                         $('#editdoctorForm')[0].reset();
                                         swal({
                                                      title: "successful",
                                                      text: "Details updated successfully",
                                                      icon: "success",
                                                  }).then(function () {
                                                   window.location.href="<?php echo base_url('doctor');?>";
                                                    });
                                    }
                                    else{
                                      swal({
                                      title: "Opps!",
                                      text: data,
                                    //   text: "Oops! The form submission has failed",
   
                              });
                          }
                  },
                  error: function () {
                      swal({
                                      title: "Opps!",
                                      text: "Please send the right request",
   
                              });
                  }
   
   
   		});
   	});
   
   
   })
</script>
<script type="text/javascript">
   $(document).ready(function(){
       var maxField = 50; 
       var addButton = $('.add_educational_button'); 
       var wrapper = $('.educational_field_wrapper'); 
       var fieldHTML = '<div class="row mb-2" id="eduction_field_row"><div class="col-md-11"><input type="text" class="form-control"  name="educational_background[]" value=""/></div><div class="col-md-1"><a href="javascript:void(0);" class="remove_skill_button btn btn-danger" title="Add field"><i class="fa fa-minus-square-o"></i></a></div></div>'; //New input field html 
       var x = 1; 
       $(addButton).click(function(){
      
           if(x < maxField){ 
               x++; 
               $(wrapper).append(fieldHTML);
           }
       });
       $(wrapper).on('click', '.remove_skill_button', function(e){
           e.preventDefault();
           $('#eduction_field_row').remove(); 
           x--; 
       });
       var skill_button = $('.skill_button');
       var skill_field_wrapper = $('.skill_field_wrapper');
       var skillFieldHTML ='<div class="row mb-2" id="skill_field_row"><div class="col-md-11"><input type="text" class="form-control"  name="key_skills[]" value=""/></div><div class="col-md-1"><a href="javascript:void(0);" class="remove_skill_button btn btn-danger" title="Add field"><i class="fa fa-minus-square-o"></i></a></div></div>'
            $(skill_button).click(function(){
            
            if(x < maxField){ 
               x++; 
               $(skill_field_wrapper).append(skillFieldHTML);
            }
      });
   
      $(skill_field_wrapper).on('click', '.remove_skill_button', function(e){
            e.preventDefault();
            $('#skill_field_row').remove(); 
            x--; 
      });
       var award_button  = $('.award_button ');
       var award_field_wrapper = $('.award_field_wrapper');
       var awardFieldHTML ='<div class="row mb-2" id="award_field_row"><div class="col-md-11"><input type="text" class="form-control"  name="award[]" value=""/></div><div class="col-md-1"><a href="javascript:void(0);" class="remove_award_button btn btn-danger" title="Add field"><i class="fa fa-minus-square-o"></i></a></div></div>'
            $(award_button).click(function(){
            
            if(x < maxField){ 
               x++; 
               $(award_field_wrapper).append(awardFieldHTML);
            }
      });
   
      $(award_field_wrapper).on('click', '.remove_award_button', function(e){
            e.preventDefault();
            $('#award_field_row').remove(); 
            x--; 
      });
      var publications_button = $('.publications_button');
       var publications_field_wrapper = $('.publications_field_wrapper');
       var publicationsFieldHTML ='<div class="row mb-2" id="publication_field_row"><div class="col-md-11"><input type="text" class="form-control"  name="publications[]" value=""/></div><div class="col-md-1"><a href="javascript:void(0);" class="remove_publications_button btn btn-danger" title="Add field"><i class="fa fa-minus-square-o"></i></a></div></div>'
            $(publications_button).click(function(){
            
            if(x < maxField){ 
               x++; 
               $(publications_field_wrapper).append(publicationsFieldHTML);
            }
      });
   
      $(publications_field_wrapper).on('click', '.remove_publications_button', function(e){
            e.preventDefault();
            $('#publication_field_row').remove(); 
            x--; 
      });
   });
</script>