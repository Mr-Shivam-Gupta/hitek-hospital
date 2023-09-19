<!--<div class="footer_sticky">-->
<!--  <a href="<?php echo base_url('find-doctors');?>" id="findDoctorsBtn" class="btn btn-lg">-->
<!--  <span><i class="fa fa-user-md" aria-hidden="true"></i> Find Doctor</span>-->
<!--  </a>-->
<!--   <a href="tel:7884056666" id="callBtn" class="btn btn-lg">-->
<!--   <span><i class="fa fa-phone" aria-hidden="true"></i> +91 78840-56666</span>-->
<!--   </a>-->

<!--</div>-->


<div class="offcanvas offcanvas-start z-index-9999 side_bar" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Search Doctors:</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     
  </div>
  <div class="offcanvas-body">
      
        <form class="query_form wrap-form pt-25 clearfix" id="searchDoctor" action="<?php echo base_url('search-doctor');?>" method="post">
                  <div class="row">
                     <div class="col-md-12 form-group ">

                      <input  name="doctor_name" class="form-control"  id="doctor_name" type="text"  placeholder="Doctor Name">
                     </div>
                     <div class="col-md-12 form-group">


                           <select class="form-control"   name="department_name" id="consultant_department" >
                            <option disabled selected>Select Department</option>
                            <?php foreach ($depList->result_array() as $dep) {?>
                                <option value="<?php echo $dep['id'];?>"><?php echo $dep['department_name'];?> </option>

                            <?php
                        }?>
                           </select>

                     </div>
                     <div class="col-md-12 form-group">

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
<footer class="footer grey-bg">
   <div class="primary-footer">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6">
               <div class="footer-logo mb-3">
                  <img id="footer-logo-img" class="img-fluid" src="<?php echo base_url('');?>include/images/logo.png" alt="">
               </div>
               <p class="mb-3 text-justify">Hi Tek Hospital has over vast experience in the healthcare sector, and is known for providing quality healthcare and valuable experience to all the patients. </p>
               <a class="btn-simple" href="<?php echo base_url('about-us')?>"><span>Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></span></a>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0 footer-list ps-lg-5">
               <h5>Our <span class="text-theme">Department</span></h5>
               <ul class="list-unstyled">
               <li ><a href="<?php echo base_url('neurology');?>"><i class="fas fa-angle-right"></i> Neurology & Neurosurgery</a></li>
                  <li ><a href="<?php echo base_url('cardiology-and-cardiac-surgery');?>"><i class="fas fa-angle-right"></i> Cardiology & Cardiac Surgery</a></li>
                  <li ><a href="<?php echo base_url('critical-care-and-emergency-medicine');?>"><i class="fas fa-angle-right"></i> Critical Care & Emergency Medicine</a></li>
                  <li ><a href="<?php echo base_url('nephrology-and-dialysis');?>"><i class="fas fa-angle-right"></i> Nephrology & Dialysis</a></li>
                  <li ><a href="<?php echo base_url('consultant-gastro-and-laparoscopic-surgeon');?>"><i class="fas fa-angle-right"></i> Consultant Gastro & Laproscopic Surgeon</a>
</ul>
            </div>
            <div class="col-lg-6 col-md-12 mt-5 mt-lg-0 ps-lg-5">
               <div class="row">
                  <div class="col-sm-5 footer-list">
                     <h5>Quick <span class="text-theme">Link</span></h5>
                     <ul class="list-unstyled">
                         <li><a href="<?php echo base_url('');?>">Home</a>
                        </li>
                        <li><a href="<?php echo base_url('about-us');?>">About us</a>
                        </li>
                        <li><a href="<?php echo base_url('tpa-partners');?>">TPA Partners</a>
                        </li>
                        
                        <li><a href="<?php echo base_url('our-doctors');?>">Our Doctors</a>
                        </li>
                        <li><a href="<?php echo base_url('contact-us');?>">Contact us</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-7 mt-5 mt-sm-0">
                     <h5>Get In <span class="text-theme">Touch</span></h5>
                     <ul class="media-icon list-unstyled">
                        <li class="mb-4">
                        <a href="https://goo.gl/maps/ZAd6TerXrR149qrk6" target="_blank">
                            <i class="flaticon-paper-plane"></i></a>
                           <p class="mb-0"><a href="https://goo.gl/maps/ZAd6TerXrR149qrk6" target="_blank">Junwani Rd, Near Surya TI Mall, Bhilai, Chhattisgarh</a></p>
                        </li>
                        <li class="mb-4">   <a href="mailto: info@hitekhospitals.com">  <i class="flaticon-email"></i></a>
                           <a href="mailto: info@hitekhospitals.com"> info@hitekhospitals.com</a>
                        </li>
                        <li><a href="tel:917884056666"> <i class="flaticon-phone-call"></i></a>
                           <a href="tel:917884056666">+91-7884056666</a>
                        </li>
                     </ul>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
   <div class="secondary-footer">
      <div class="container text-center">
         <div class="copyright">
            <div class="row">
               <div class="col"> <span> Copyright © 2022 HiTek Hospital Website Design & Developed By  <a target="_blank" href="https://www.sirmor.com">  Sirmor Software Solution Pvt. Ltd. </a> </span>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
</div>

<div class="sticky-social">
     <!--<button class="btn btn-primary" type="button"></button>-->
   <ul class="social">
   
      <li class="twitter"><a href="tel:+917884056666"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
       <li class="pin"><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
      <li class="insta"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
     
      <li class="fb"><a href="mailto:info@hitekhospitals.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
      <li class="pin bg-info"><a  class="text-white"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" href="#"><i class="fa fa-user-md" aria-hidden="true"></i></a></li>
    
     
   </ul>
</div>
<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-stethoscope"></i></a></div>
<script src="<?php echo base_url('');?>include/javascript/theme.js"></script>
<script src="<?php echo base_url('');?>include/javascript/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url('');?>include/javascript/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url('');?>include/javascript/jarallax/jarallax.min.js"></script>
<script src="<?php echo base_url('');?>include/javascript/counter/counter.js"></script>
<script src="<?php echo base_url('');?>include/javascript/skill/circle-progressbar.js"></script>
<script src="<?php echo base_url('');?>include/javascript/countdown/jquery.countdown.min.js"></script>
<script src="<?php echo base_url('');?>include/javascript/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url('');?>include/javascript/contact-form/contact-form.js"></script>
<script src="<?php echo base_url('');?>include/javascript/date-picker/date-picker.js"></script>
<script src="<?php echo base_url('');?>include/javascript/color-customize/color-customizer.js"></script>
<script src="<?php echo base_url('');?>include/javascript/wow.min.js"></script>
<script src="<?php echo base_url('');?>include/javascript/theme-script.js"></script>
<script type="text/javascript">
      $(function(){
     $("#preloader").hide();
     $("#successMsg").hide();
     $("#errorMsg").hide();
     $('#doctorList').on('change',function(){
         Name=$(this).val();
        $.ajax({
            url:"<?php echo base_url('Hitekhospitals/sendDocId')?>",
            type:"POST",
            data:{
               doctor_id:Name
                 },
            success:function(data){

               $("#consultancyList").html(data);

            },
            error:function(){
                alert('Error');
            },
         });
    });
    });
   $(function(){
     $("#preloader").hide();
     $("#successMsg").hide();
     $("#errorMsg").hide();
     $('#departmentId').on('change',function(){
         departmentName=$(this).val();
        $.ajax({
            url:"<?php echo base_url('Hitekhospitals/sendDepId')?>",
            type:"POST",
            data:{
                  department:departmentName
                 },
            success:function(data){

               $("#doctorList").html(data);

            },
            error:function(){
                alert('Error');
            },
         });
    });


         $("#appointmentForm").submit(function (e) {
            e.preventDefault();
            $.ajax({
               url : '<?php echo base_url('submit-appointment')?>',
               processData : false,
               contentType : false,
               cache :false,
               type: 'POST',
               async : false,
               data : new FormData(this),
               success : function (data){
               if (data!= "error")
             {
                        $("#preloader").hide();
                        $("#successMsg").show();
                        $("#submitBtn").attr("disabled", false);
                        setTimeout(function() {
                   $("#successMsg").hide();
                   window.location.href = "<?php echo base_url();?>/appointment-data/" + data;
               }, 4000);
                        $('#appointmentForm')[0].reset();
                }
             else
             {

                        //  container.html(data);
                        //  window.location.replace("<?php echo base_url();?>/appointment-data");
                        $("#preloader").hide();
                        $("#errorMsg").show();
                        $("#submitBtn").attr("disabled", false);
                        setTimeout( "$('#errorMsg').hide();", 4000);
             }
         },
         error:function(){
                          $('#errorMsg').show();
                          setTimeout( "$('#errorMsg').hide();", 4000);
                      }
            });

         });
         $(function () {
      var today = new Date();
      var month = ('0' + (today.getMonth() + 1)).slice(-2);
      var day = ('0' + today.getDate()).slice(-2);
      var year = today.getFullYear();
      var date = year + '-' + month + '-' + day;

      $('[id*=appointmentDate]').attr('min', date);

  });

   });

</script>
<script type="text/javascript">
    $(function () {
        var today = new Date();
        var month = ('0' + (today.getMonth() + 1)).slice(-2);
        var day = ('0' + today.getDate()).slice(-2);
        var year = today.getFullYear();
        var date = year + '-' + month + '-' + day;
        $('[id*=txtdateofreservation]').attr('min', date);
    });
</script>
<script type="text/javascript">
   $(document).ready(function() {
     $("#success_reponse").hide();
     $("#error_reponse").hide();
     $("#ploader").hide();

      $("#careers-form").submit(function(e) {

         e.preventDefault();

         $.ajax({

            url : "<?php echo base_url('careers-form');?>",

            type : "POST",

            processData : false,

            contentType : false,

            cache :false,

            async : false,

            data : new FormData(this),
            beforeSend : function () {
              $("#ploader").show();
            },

            success : function (data)
            {
              if (data == 1)
              {
                $("#success_reponse").html("Your application has been submitted successfully");
                $("#success_reponse").show();
                $("#ploader").hide();
                setTimeout( "$('#success_reponse').hide();", 4000);
              }
              else
              {
                $("#error_reponse").html(data);
                 $("#error_reponse").show();
                 $("#ploader").hide();
                setTimeout( "$('#error_reponse').hide();", 4000);
              }
            },
         });
      });
   });
</script>
</body>
</html>
