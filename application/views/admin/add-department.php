<?php
   $base=realpath(__DIR__);
   include $base.'/../common/admin_header.php';
   ?>
   <div class="content-wrapper">
   
   <section class="content-header">
      <h1>
         Add Department 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       
         <li class="active">Add Department </li>
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
                     <form class="quickForm" id="add_department" method="post">
                    
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Department Name</label>
                           <input type="text" name="department_name" required class="form-control" id="exampleInputEmail1" placeholder="Enter Department Name">
                        </div>
                     </div>
                     <div class="card-footer text-center">
                        <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                     </div>
                    
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>


<script type="text/javascript">
   var base_url="<?php echo base_url();?>";
     $("#preloader").hide();
     $("#successMsg").hide();
     $("#errorMsg").hide();
    $(document).ready(function () {
       $("#add_department").submit(function (e) {
          e.preventDefault();
          $.ajax({
         url : base_url+"admin/addDepartmentFun",
   
         type : "POST",
   
         processData : false,
   
         contentType : false,
   
         cache :false,
   
         async : false,
   
         data : new FormData(this),
          beforeSend: function(){
                 
                       $("#preloader").show();
                       $("#submitBtn").attr("disabled", true);
                   },
            success : function(data) {
          
            if (data==1)
             {
   
                        $("#preloader").hide();
                        $("#successMsg").show();
                        $("#submitBtn").attr("disabled", false);
                        setTimeout( "$('#successMsg').hide();", 4000);
                        $('#add_department')[0].reset();
   
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
