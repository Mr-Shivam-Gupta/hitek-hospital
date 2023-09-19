<!-- <section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Department</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-add-department"><i class="fa fa-plus" aria-hidden="true"> </i> Add Department</button>  
            </ol>
         </div>
      </div>
   </div>
</section> -->
<!-- // add department -->

<section >
   <div class="modal fade" id="modal-add-department">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header bg-primary">
               <h4 class="modal-title">Add Department</h4>
               <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form id="departmentForm">
               <div class="modal-body">
                  <div class="card-body">
                     <div class="form-group">
                        <label for="departmentName">Department Name</label>
                        <input type="text" required class="form-control" name="department" placeholder="Ex. General Surgery">
                     </div>
                  </div>
               </div>
               <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- // Edit department -->
<section >
   <div class="modal fade" id="modal-edit-department">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header bg-primary">
               <h4 class="modal-title">Edit Department </h4>
               <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form id="departmentEdit">
                  <div class="card-body">
                     <div class="form-group">
                        <label for="departmentName">Department Name</label>
                        <input type="hidden" id="h-id" name="id">
                        <input type="text"  id ="e-department" required class="form-control" name="department" placeholder="Ex. General Surgery">
                     </div>
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <script type="text/javascript">
      $(document).ready(function () {
      
      
      	$("#departmentEdit").submit(function (e) {
      		e.preventDefault();
      		$.ajax({
                    url : '<?php echo base_url('admin/editDep')?>',
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
                                            $('#departmentEdit')[0].reset();
                                            $('#modal-edit-department').modal('hide');
                                            swal({
                                                         title: "success",
                                                         text: "Details successfully updated ",
                                                         icon: "success",
                                                        }).then(function () {
                                                   window.location.reload();
                                                    });
                                                       
      
                                       }
      
                                       else{
                                         swal({
                                         title: "Opps!",
                                         text: "Failed to  submit the form",
      
                                 });
                             }
                     },
                     error: function () {
                         swal({
                                         title: "Opps!",
                                         text: "Try again!",
      
                                 });
                     }
      
      
      		});
      	});

      	$("#departmentForm").submit(function (e) {
      		e.preventDefault();
      		$.ajax({
                    url : '<?php echo base_url('submit-department')?>',
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
                                            $('#departmentForm')[0].reset();
                                            $('#modal-add-department').modal('hide');
                                            swal({
                                                         title: "successful",
                                                         text: "Department added successfully",
                                                         icon: "success",
                                                        }).then(function () {
                                                   window.location.reload();
                                                    });
                                                       
      
                                       }
      
                                       else{
                                         swal({
                                         title: "Opps!",
                                         text: "Failed to  submit the form",
      
                                 });
                             }
                     },
                     error: function () {
                         swal({
                                         title: "Opps!",
                                         text: "Try again!",
      
                                 });
                     }
      
      
      		});
      	});
           $(document).on("click", ".dep-edit", function(e) {
         e.preventDefault();
      
         var Id = $(this).data("id");
         $("#h-id").val(Id);
         $.ajax({
             url: "<?php echo base_url('admin/getDepartment/');?>", 
             type: "post", 
             data: { id: Id },// Assuming you want to retrieve data via a GET request
             success: function(data) {
                 // Assuming the server responds with the department data
                 $("#e-department").val(data);
             },
         });
      });
       
      
      })
   </script>
</section>
<section class="content">
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
      swal("Are you sure!", "Oppps! An attempt to delete the department failed!", "warning");
   </script>
   <?php
      }?>
   <div class="container-fluid pt-4">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Department  List </h3>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <table id="example1" class="table table-bordered table-striped table-hover data_list">
                        <thead>
                           <tr class="text-center">
                              <th>S.NO</th>
                              <th>Department Name</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i=1; foreach ($depList->result_array() as $depList): ?>
                           <tr>
                              <td class="text-center"><?php echo $i++;?></td>
                              <td><?php echo ucwords($depList['department_name'])?></td>
                              <td class="text-center">
                                 <?php  if ($depList['status']==0)
                                    {?>
                                 <spna class="btn btn-success">Active</spna>
                                 <?php
                                    }
                                    else
                                    {
                                      ?>
                                 <spna class="btn btn-info">De-Active</spna>
                                 <?php
                                    }?>
                              </td>
                              <td class="text-center">
                              <a href="<?php echo base_url('admin/deleteDepartment/').$depList['id'];?>" id="deleteDoctor" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                 <!-- <a href="<?php echo base_url('admin/department/').$depList['id'];?>" class="btn btn-info"><i class="fas fa-pen"></i></a> -->
                                 <a href="#" class="btn btn-info dep-edit" data-id="<?php echo $depList['id'];?>" data-toggle="modal" data-target="#modal-edit-department"><i class="fas fa-pen"></i></a>
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