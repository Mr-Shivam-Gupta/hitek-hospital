<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Department</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?php echo base_url('admin-dashbord');?>">Home</a></li>
               <li class="breadcrumb-item active">Department</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<section class="content">
<div class="container-fluid">
<div class="row">
   <div class="col-md-3">
      &nbsp;
   </div>
<div class="col-md-6">
<div class="card card-primary">
   <div class="card-header">
      <h3 class="card-title">Department Detail</h3>
   </div>
   <?php
   if ($edit=="edit") {
      ?>
         <form  action="<?php echo base_url('admin/editDep/').$depDetail->id ?>" method="post">
      <div class="card-body">
         <div class="form-group">
            <label for="departmentName">Department Name</label>
            <input type="text" required class="form-control" value="<?php echo $depDetail->department_name;?>" name="department" placeholder="Ex. General Surgery">
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
         <form id="departmentForm">
      <div class="card-body">
         <div class="form-group">
            <label for="departmentName">Department Name</label>
            <input type="text" required class="form-control" name="department" placeholder="Ex. General Surgery">
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
                                       swal({
                                                    title: "success",
                                                    text: "You successfully added a new department",
                                                    icon: "success",
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
	})
</script>
</section>
<section class="content">
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
      swal("Are you sure!", "Oppps! An attempt to delete the department failed!", "warning");
   </script>
      <?php
   }?>