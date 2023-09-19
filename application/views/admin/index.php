<?php include_once 'widgets/include_top.php';?>
<?php include_once 'widgets/sidebar.php';?>
<div class="content-wrapper">
   <?php include 'pages/'.$page_name.'.php';?>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Change password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
           <div class="text-center alert alert-success alert-dismissible fade show" id="response_1">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>
           <div class="text-center alert alert-danger alert-dismissible fade show" id="response_error_1">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>
            <form  class="needs-validation" id="changePassword" >
               <div class="form-group">
                  <label for="exampleInputEmail1">Old Password</label>
									<input type="hidden" class="form-check-input" required name="hdnfield" value="<?php echo $salt;?>">
                  <input type="password" required class="form-control" name="previous_password" aria-describedby="emailHelp" placeholder="Enter old password">
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input type="password" required class="form-control" name="new_password" placeholder="Enter new password">
               </div>
							 <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" required class="form-control" name="confirm_password" placeholder="Confirm your password">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
               </div>
         </div>
         </form>
      </div>
   </div>
</div>
<script>
$(document).ready(function ()
{
	$("#response_1").hide();
	$("#response_error_1").hide();
	$("#changePassword").submit(function (e) {
		e.preventDefault();
		$.ajax({
			url :'<?php echo base_url('admin/changePassword/').$user_id?>',
			type:"POST",
			processData:false,
			contentType:false,
			cache:false,
			async:false,
			data:new FormData(this),
			success:function(response)
			{

				          if (response==1)
				          {

				            $("#response_1").html("Your password will be changed");
                    $("#response_1").show();
                    setTimeout( "$('#response_1').hide();", 5000);
				            $("#changePassword")[0].reset();



				          }
				          else
				          {

				              $("#response_error_1").html(response);
				              $("#response_error_1").show();
				              setTimeout( "$('#response_error_1').hide();", 5000);
				          }
			},
			error:function()
			{
				alert("error");
			}


		});
	});


});
</script>
<?php include_once 'widgets/include_bottom.php';?>
