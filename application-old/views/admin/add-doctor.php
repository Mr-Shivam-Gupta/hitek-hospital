<?php
   $base=realpath(__DIR__);
   include $base.'/../common/admin_header.php';
   ?>
<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Add Doctor
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Add Doctor</li>
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
                    <div class="alert alert-info m-1 text-center" id="preloader">
                        <h5 > Please Wait...</h5>
                     </div>
                     <div class=" alert alert-success text-center m-1" id="successMsg" >
                        <h5>New Department Added Successfully!</h5>
                     </div>
                     <div class=" alert alert-danger text-center m-1" id="errorMsg">
                        <h5>Something went wrong, Please try again.</h5>
                     </div>   
                    <form id="add_doctor_form">
                  <div class="form-group">
                     <label for="exampleInputPassword1">Department Name</label>
                     <select class="form-control select2" name="department_name" id="department_name" value="here">
                        <option selected="selected" disabled>Department</option>
                        <?php foreach ($departmentList->result_array() as $list): ?>
                        <option value="<?php echo $list['id']?>"><?php echo $list['department_name']?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Doctor Name</label>
                     <input type="email" class="form-control" name="doctor_name" id="doctor_name" aria-describedby="emailHelp" placeholder="Doctor Name">
                  </div>
               </form>
               <button type="button" class="btn btn-primary" id="add_doctor_btn">Add doctor</button>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               
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
                        <?php foreach($doctorList->result_array() as $list):?>
                        <tr>
                           <td><?php echo $i++?></td>
                           <td><?php echo $list['doctor_name'];?></td>
                           <td>
                              <a class="btn btn-outline-secondary btn-sm edit" href="<?php echo base_url('admin/deleteDoctor/').$list['id']?>" title="delete">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                              </a>
                              <a class="btn btn-outline-secondary btn-sm edit" href="<?php echo base_url('admin/editDoctor/').$list['id']?>" title="Edit">
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
<script type="text/javascript">
   $(document).ready(function() {
       $("#preloader").hide();
     $("#successMsg").hide();
     $("#errorMsg").hide();
    
   
      $("#add_doctor_btn").click(function () {
         var doctor_name = $('input[name=doctor_name]').val();
         var department_name = $('select[name=department_name]').val();
         if(doctor_name.length==0 && doctor_name=='')
          {
              alert('Please Enter Doctor Name');
              return;
          }
   
          if(department_name.length==0 && department_name=='')
          {
              alert('Please Select Department');
              return;
          }
          $.ajax({
            url : '<?php echo base_url('admin/addDoctorFun')?>',
            type : 'POST',
            data : {doctor_name:doctor_name,department_name:department_name},
            beforeSend:function() {
                       $("#preloader").show();
                       $("#submitBtn").attr("disabled", true);
            },
            success :function (data) {
                          if (data==1)
             {
   
                        $("#preloader").hide();
                        $("#successMsg").show();
                        $("#submitBtn").attr("disabled", false);
                        setTimeout( "$('#successMsg').hide();", 4000);
                        $('#add_doctor_form')[0].reset();
                         $("#add_doctor_modal").modal('hide');
                         showDocterList();
   
             }
             else 
             {
               
                        $("#preloader").hide();
                        $("#errorMsg").show();
                        $("#submitBtn").attr("disabled", false);
                        setTimeout( "$('#errorMsg').hide();", 4000);
   
   
             }
            },
          complete:function(){
                          $("#preloader").hide();
                          $("#submitBtn").attr("disabled", false);
   
                         },
   
         error:function(){
                          $('#errorMsg').show();
                          setTimeout( "$('#errorMsg').hide();", 4000);
                      }            
          });
      });

   });
</script>

<?php
   $base=realpath(__DIR__);
   include $base.'/../common/admin_footer.php';
   ?>