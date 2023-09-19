<?php include 'common/header.php';?>
<div class="page-content">
<script type="text/javascript">
   window.jssor_1_slider_init = function() {
   
       var jssor_1_SlideoTransitions = [
         [{b:-1,d:1,rX:90},{b:0,d:4000,rX:0,e:{rX:6}}],
         [{b:-1,d:1,rX:90},{b:0,d:1000,o:1,rX:0,e:{rX:6}}],
         [{b:-1,d:1,rX:90},{b:500,d:1000,o:1,rX:0,e:{rX:6}}],
         [{b:-1,d:1,rX:90},{b:1000,d:1000,o:1,rX:0,e:{rX:6}}],
         [{b:-1,d:1,rX:90},{b:1500,d:1000,o:1,rX:0,e:{o:1,rX:6},p:{o:{dl:0.2},rX:{dl:0.2}}}],
         [{b:1500,d:1000,ls:0.2,e:{ls:6}}],
         [{b:-1,d:1,x:100,rY:180,sX:0.5,sY:0.5,p:{x:{c:0}}},{b:3000,d:1000,x:0,o:1,rY:0,sX:1,sY:1,e:{x:1,o:7,rY:1,sX:1,sY:1},p:{x:{dl:0,o:68},o:{dl:0.1,o:4,rd:2},rY:{dl:0.1,o:4,rd:2},sX:{dl:0.1,o:68},sY:{dl:0.1,o:68}}}],
         [{b:3000,d:2000,o:1,r:-360},{b:5000,d:20,o:0,e:{o:33}},{b:7500,d:20,o:1,e:{o:33}},{b:7520,d:2480,r:-720}],
         [{b:5000,d:20,o:1,e:{o:33}},{b:5020,d:2480,r:360},{b:7500,d:20,o:0,e:{o:33}}],
         [{b:3400,d:2000,o:1,r:-360},{b:5400,d:20,o:0,e:{o:33}},{b:7600,d:20,o:1,e:{o:33}},{b:7620,d:2180,r:-720}],
         [{b:5400,d:20,o:1,e:{o:33}},{b:5420,d:2180,r:360},{b:7600,d:20,o:0,e:{o:33}}],
         [{b:3800,d:2000,o:1,r:-360},{b:5800,d:20,o:0,e:{o:33}},{b:7700,d:20,o:1,e:{o:33}},{b:7720,d:1880,r:-720}],
         [{b:5800,d:20,o:1,e:{o:33}},{b:5820,d:1880,r:360},{b:7700,d:20,o:0,e:{o:33}}],
         [{b:2500,d:2000,o:0.6}],
         [{b:-1,d:1,r:-10,rX:20,tZ:50}],
         [{b:-1,d:1,rY:30}],
         [{b:-1,d:1,x:-200,y:10,rY:180,tZ:200,p:{x:{d:1,dO:9},tZ:{d:2,dO:9}}},{b:0,d:2000,x:0,y:0,o:1,rX:20,rY:10,e:{x:6,y:6,o:6,rX:6,rY:6},p:{x:{dl:0.1,o:1},y:{dl:0.1,o:1},o:{dl:0.1,o:1},rX:{dl:0.1,o:1,d:1,dO:2},rY:{dl:0.1,o:1,d:3,dO:2}}}],
         [{b:-1,d:1,ls:0.6},{b:0,d:2000,ls:0.05,e:{ls:6}}],
         [{b:1700,d:1500,pt:{d:"M32,135.4C31.7,135.4 31.3,135.4 31,135.3C29.8,115 28.6,94.7 27.3,73.6C19.6,77 12.6,80.1 5,83.5C4.7,81.9 4.4,80.7 4.4,79.5C3.2,58.2 2.2,36.9 1,15.7C0.8,12.7 1.7,11.3 4.4,10.1C11.7,7 18.9,3.7 27,0C23.9,21 20.8,41 17.7,62.1C25.1,58.8 31.8,56.1 38.1,52.8C42.7,50.3 46.5,50.8 51.1,53.8C44.8,80.9 38.4,108.1 32,135.4Z"},e:{pt:27}}],
         [{b:-1,d:1,rX:45,rY:-270},{b:1700,d:1500,y:50,o:1,rX:0,rY:0,e:{y:27,o:27,rX:27,rY:27}}],
         [{b:1600,d:1500,pt:{d:"M24.8,170.3C28.4,155.7 32,141.3 35.8,125.6C30,128.5 25.3,130.9 20.6,133.3C18.6,134.3 16.9,135.6 14.3,133.5C11.9,131.4 12.6,129.5 13.4,127.4C19.6,110.5 25.9,93.7 32.1,76.8C32.7,75.2 33.2,73.5 34.1,70.9C24.6,74.7 16,78.3 7.3,81.6C5.8,82.2 2.9,82.4 2.2,81.5C0.9,79.9-0.3,77.1 0.1,75.2C5,54.8 10.4,34.6 15.4,14.2C16.1,11.3 17.5,9.8 20.3,8.7C27.8,6 35.2,2.9 42.5,0C48.4,6.5 48.5,6.6 44.6,13.7C37.8,26.1 30.8,38.4 24,50.8C24.4,51.2 24.7,51.6 25.1,52C32.9,50.8 40.8,50.1 48.5,48.3C54.7,46.8 55.3,52 58.2,54.7C60.9,57.3 59.2,59.4 57.9,61.8C49.1,78 40.4,94.3 31.6,110.7C31.2,111.5 30.8,112.4 29.8,114.4C38.1,110.5 45.2,107.2 52.2,103.9C58.1,110.4 58.1,110.4 54.1,117.6C44.4,135.1 34.7,152.5 24.8,170.3Z"},e:{pt:27}}],
         [{b:-1,d:1,rX:45,rY:-270},{b:1600,d:1500,y:17,o:1,rX:0,rY:0,e:{y:27,o:27,rX:27,rY:27}}],
         [{b:1500,d:1500,pt:{d:"M0,166.8C8.6,148.4 17.1,130.3 25.9,111.5C18.8,113.1 12.6,114.7 6.3,116C4.9,116.3 2.3,115.8 1.8,114.9C1.1,113.6 1.2,111.1 2.1,109.8C13,92 24.2,74.5 35.3,56.9C36.2,55.4 37.1,53.8 38.6,51.3C28.4,54.2 19.3,56.7 10.3,59.3C7.9,60 5.9,60.8 3.8,58C1.6,55.1 3.8,53.6 4.9,51.9C15.8,34.7 26.8,17.5 38,0C44.7,2.4 51.2,4.7 58.5,7.4C49.4,16.9 40.5,26.2 30.9,36.3C43.6,38 55.5,39.7 68.2,41.4C54,60.4 40.2,78.8 25.7,98.2C33.6,98.1 40.5,97.9 47.3,98C48.7,98 51.1,98.7 51.3,99.6C51.9,101.8 52.5,105 51.4,106.4C34.8,126.6 18,146.5 1.2,166.5C1,166.5 0.8,166.5 0,166.8Z"},e:{pt:27}}],
         [{b:-1,d:1,rX:45,rY:-270},{b:1500,d:1500,y:12,o:1,rX:0,rY:0,e:{y:27,o:27,rX:27,rY:27}}]
       ];
   
       var jssor_1_options = {
         $AutoPlay: 1,
         $SlideDuration: 800,
         $SlideEasing: $Jease$.$OutQuint,
         $CaptionSliderOptions: {
           $Class: $JssorCaptionSlideo$,
           $Transitions: jssor_1_SlideoTransitions,
           $Controls: [{r:5000},{r:5000,e:10000},{r:5400},{r:5400,e:9800},{r:5800},{r:5800,e:9600}]
         },
         $ArrowNavigatorOptions: {
           $Class: $JssorArrowNavigator$
         },
         $BulletNavigatorOptions: {
           $Class: $JssorBulletNavigator$,
           $SpacingX: 15
         }
       };
   
       var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
   
   
   
       var MAX_WIDTH = 3000;
   
       function ScaleSlider() {
           var containerElement = jssor_1_slider.$Elmt.parentNode;
           var containerWidth = containerElement.clientWidth;
   
           if (containerWidth) {
   
               var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
   
               jssor_1_slider.$ScaleWidth(expectedWidth);
           }
           else {
               window.setTimeout(ScaleSlider, 30);
           }
       }
   
       ScaleSlider();
   
       $Jssor$.$AddEvent(window, "load", ScaleSlider);
       $Jssor$.$AddEvent(window, "resize", ScaleSlider);
       $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
   
   };
</script>
<div id="jssor_1" >
   <div data-u="loading" class="jssorl-009-spin" >
   </div>
   <div id="slider" data-u="slides">
      <div>
         <img data-u="image" src="<?php echo base_url('');?>include/images/banner/Banner_1.jpg" alt=" Most Trusted Hair clinic in Raipur" />
      </div>
      <div>
         <img data-u="image" src="<?php echo base_url('');?>include/images/banner/Banner_2.jpg" alt=" Most Trusted Hair clinic in Raipur" />
      </div>
   </div>
   <div data-u="navigator" class="jssorb057"  data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
      <div data-u="prototype" class="i" >
         <svg viewbox="0 0 16000 16000" >
            <circle class="b" cx="8000" cy="8000" r="5000"></circle>
         </svg>
      </div>
   </div>
   <div data-u="arrowleft" id="left_arrow" class="jssora051"  data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
      <svg viewbox="0 0 16000 16000" >
         <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
      </svg>
   </div>
   <div data-u="arrowright" id="right_arrow" class="jssora051" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
      <svg viewbox="0 0 16000 16000" >
         <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
      </svg>
   </div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
</section>
<section class="pt-sm-0 pb-0 pt-0 mt-sm-n11 z-index-1">
   <div class="container">
      <div class="row box-shadow text-center" id="info-sec">
         <div class="col-lg-4 col-md-12 p-lg-5 p-3 theme-bg text-white ">
            <i class="fa fa-user-md"></i>
            <h4 class="text-white text-capitalize text-center">Skilled Doctors</h4>
            <p class="lead text-center">We have got experienced and skilled doctors who will treat Patient's  with care.</p>
         </div>
         <div class="col-lg-4 col-md-12 p-lg-5 p-3 white-bg">
            <i class="fa fa-stethoscope theme_color" aria-hidden="true"></i>
            <h4 class="text-theme text-capitalize text-center">Modern Equipment</h4>
            <p class="lead text-center">Advanced and latest types of equipments are available that will create no chances of error.</p>
         </div>
         <div class="col-lg-4 col-md-12 p-lg-5 p-3 theme-bg text-white">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <h4 class="text-white text-capitalize text-center">24 hour services</h4>
            <p class="lead text-center">24 hour services is available who will always be there to help.</p>
         </div>
      </div>
   </div>
</section>
<section class="pt-0 pb-lg-0">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-5 col-md-12">
            <img class="img-fluid" src="<?php echo base_url('');?>include/photos/hitesk_hospital_bhilai.jpg" alt="">
         </div>
         <div class="col-lg-7 col-md-12 ">
            <div class="section-title mb-2">
               <h6>Our</h6>
               <h2 class="title">Director's <span>Message</span></h2>
            </div>
            <p class="text-black mb-3 lead font-w-5 text-justify">"From the Director, With advancements in medical and health care facilities, treatment options have improved many folds. But it has also raised the operating and treatment costs. Moving out of the comfort of your own city, adds to the misery. We have tried to address this issue by providing accessible and cost effective neighborhood healthcare facility for the entire Durg Division. The Hi-Tek boasts of a ‘state-of-the-art’ infrastructure committed to provide comprehensive & cost effective healthcare services through a team of qualified, competent, highly skilled & committed team of health care professionals. We already have comprehensive cardiac care, neurology and neurosurgery department, General & Laparoscopic Surgery including VATS facility. We also have a 24x7 monitored dialysis centre and joint replacement facilities. Our next step would be to come up with the first organ transplant centre of the region"</p>
            <h4 class="text-center" style="color:#dd6728">Mr. Manoj Agrawal</h4>
            <h6 class="text-center">Director</h6>
         </div>
      </div>
   </div>
</section>
<section  class="dark-bg jarallax text-center" data-bg-img="<?php echo base_url('');?>include/images/bg/01.jpg" data-overlay="9">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-sm-6">
            <div class="counter style-2"> <span class="count-number" data-to="175" data-speed="10000">175</span>
               <label>Hospital Beds</label>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="counter style-2"> <span class="count-number" data-to="85" data-speed="10000">85</span>
               <label>Success Story</label>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="counter style-2 "> <span class="count-number" data-to="45" data-speed="10000">45</span>
               <label>Our Doctors</label>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="counter style-2 "> <i class="flaticon-employee"></i>
               <span class="count-number" data-to="15125" data-speed="10000">15,125</span>
               <label>Happy Patients</label>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row text-center">
         <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
            <div class="section-title">
               <h2 class="title">Medical   <span> Services</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6">

            <a href="<?php echo base_url('neurology');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Neurology.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Neurology & Neurosurgery</h5>
               </div>
            </div>
            </a>
         </div>
         <div class="col-lg-4 col-md-6 ">
         <a href="<?php echo base_url('cardiology-and-cardiac-surgery');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Intervention_Cardiology.png" alt="Intervention Cardiology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Cardiology & Cardiac Surgery</h5>
               </div>
            </div>
      </a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('critical-care-and-emergency-medicine');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Critical_Care.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Critical Care & Emergency Medicine</h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6 ">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Gynecology_and_Obstetrics.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Obs.,Gyn & Infertility</h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('nephrology-and-dialysis');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Nephrology_and_Urology.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Nephrology & Dialysis</h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('consultant-gastro-and-laparoscopic-surgeon');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Gastro_Enterology.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Consultant Gastro & Laproscopic Surgeon</h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('medicine');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/General_Medicine.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Medicine</h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('orthopaedic-and-joint-replacement');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Osteoporosis_and_Joint_Transplantation.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Orthopaedic & Joint Replacement</h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('pediatric');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Neonatal_and_Pediatrics.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Pediatric</h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('ent-surgeon');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Throat_Department.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Ent Surgeon</h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Dermatology_Cosmetic_Surgery.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Dermatologist & Cosmetologist</h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Urology_Icon.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Urologist </h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Chest_Pulmonology.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Chest & Respiratory </h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Anaesthesia_Icon.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Anaesthesia </h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Radiologist_Dep.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Radiologist </h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Opthalmologist_Dep.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Opthalmologist & Retina  </h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Pathologist_Dep.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Pathologist </h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Dentist_Dep.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Dentist   </h5>
               </div>
            </div></a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Psychiatrist_Dep.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Psychiatrist     </h5>
               </div>
            </div>
            </a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Physiotherapist_Dep.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Physiotherapist    </h5>
               </div>
            </div>
            </a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/Dentistry_and_Physiotherapy.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>Dietician & Nutritionist  </h5>
               </div>
            </div>
            </a>
         </div>
         <div class="col-lg-4 col-md-6">
         <a href="<?php echo base_url('general-and-laparoscopic-surgery');?>">
            <div class="featured-item text-center">
               <div class="featured-icon"> <img src="<?php echo base_url('');?>include/photos/General_Medicine.png" alt="neurology">
               </div>
               <div class="featured-title text-uppercase">
                  <h5>General & Laparoscopic Surgery    </h5>
               </div>
            </div>
            </a>
         </div>
      </div>
   </div>
</section>
<!--<section class="theme-bg text-center custom-pb-3">-->
<!--   <div class="container">-->
<!--      <div class="row text-center">-->
<!--         <div class="col-lg-8 col-md-12 mx-auto">-->
<!--            <div class="section-title mb-0">-->
<!--               <h2 class="mb-0 text-white font-w-4"> <span class="font-w-7">Our Departments</span> </h2>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->
<!--<section class="text-center pt-0 mt-n15">-->
<!--   <div class="container">-->
<!--      <div class="row">-->
<!--         <div class="col-lg-12">-->
<!--            <div class="owl-carousel dark-service" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-margin="30" data-autoplay="true">-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Neurology.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Neurology</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Neuro_Surgery.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Neuro Surgery</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Cardiology.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Cardiology</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Gynecologist.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Gynecologist</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Pulmonary_Respiratory_Medicine.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Pulmonary & Respiratory Medicine</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="cardiology-depertment.html">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Gastro_Enterology.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Gastro Enterology</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Nephrology.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Nephrology</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Consultant_Physician.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Consultant Physician</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Orthopedic.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Orthopedic</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Laparoscopi_General_Surgeon.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Laparoscopic & General Surgeon</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Plastic_Surgeon.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Plastic Surgeon</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Paediatrics.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Paediatrics</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/ENT.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>ENT</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Psychiatric.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Psychiatric</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Cardiac_Anaesthesia.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Cardiac Anaesthesia</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Anaesthesia.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Anaesthesia</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Diabetology.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Diabetology</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Maxillofacial_Surgeon.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Maxillofacial Surgeon</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Opthalmology.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Opthalmology</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Radiology.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Radiology</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Pathologist.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Pathologist</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Advanced_Dermatology.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Advanced Dermatology</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Dentist.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Dentist</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="item">-->
<!--                  <div class="service-item">-->
<!--                     <div class="service-images">-->
<!--                        <img class="img-fluid" src="<?php echo base_url('');?>include/photos/Physiotherapist.jpg" alt="">-->
<!--                     </div>-->
<!--                     <h4>Physiotherapist</h4>-->
<!--                     <div class="service-description">-->
<!--                        <a href="javascript:void(0)">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->
<section class="dark-bg jarallax" data-bg-img="<?php echo base_url('');?>include/images/bg/05.jpg" data-overlay="9">
   <div class="container">
      <div class="row text-center">
         <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
            <div class="section-title">
               <h6>Story</h6>
               <h2 class="title">Patient  <span>Testimonials</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="owl-carousel no-pb slide-arrow-2" data-items="1" data-dots="false" data-nav="true" data-autoplay="false">
               <div class="item">
                  <div class="testimonial">
                     <div class="row align-items-center">
                        <div class="col-md-12">
                           <div class="testimonial-content">
                              <span><i class="fas fa-quote-left"></i></span>
                              <p>“ Thanks to all team of Hi-Tek hospital for international standard treatment. I am totally satisfied with each and every aspect of the hospital. Dr. Rekha Ratnani mam and her gynaecology department team in particular for the best treatment. All credit goes to Mr. Shrikant Ji, who made remarkable changes in the hospital and its services. All best to Hi-Tek hospital team. Keep growing and helping people. ”</p>
                              <div class="testimonial-caption">
                                 <div class="d-flex justify-content-center">
                                    <img class="img-fluid radius" src="<?php echo base_url('');?>include/images/testimonial/Female_Testimonials.png" alt="">
                                 </div>
                                 <h6>Rashi Verma</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimonial">
                     <div class="row align-items-center">
                        <div class="col-md-12">
                           <div class="testimonial-content">
                              <span><i class="fas fa-quote-left"></i></span>
                              <p>“ I am being treated at Hitech Hospital. Dr NS Dixit under my treatment and my result is very good hospital management and doctor and nursing staff is very good. I am satisfied with all the management and treatment by their staff, and the doctors are very concerned about their patient's recovery. ”</p>
                              <div class="testimonial-caption">
                                 <div class="d-flex justify-content-center">
                                    <img class="img-fluid radius" src="<?php echo base_url('');?>include/images/testimonial/Male_Testimonials.png" alt="">
                                 </div>
                                 <h6>Gajendra Banjare</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimonial">
                     <div class="row align-items-center">
                        <div class="col-md-12">
                           <div class="testimonial-content">
                              <span><i class="fas fa-quote-left"></i></span>
                              <p>“ My treatment is going on under Dr. Naveen Sharma. I had a problem with my gallbladder, which started causing coughing. I got some relief from the treatment. I want to say my heartfelt thanks to Dr. Naveen Sharma, sir, or to Yahia’s nursing staff and management. ”</p>
                              <div class="testimonial-caption">
                                 <div class="d-flex justify-content-center">
                                    <img class="img-fluid radius" src="<?php echo base_url('');?>include/images/testimonial/Male_Testimonials.png" alt="">
                                 </div>
                                 <h6>Ravi Tiwari</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimonial">
                     <div class="row align-items-center">
                        <div class="col-md-12">
                           <div class="testimonial-content">
                              <span><i class="fas fa-quote-left"></i></span>
                              <p>“ The hospital is very concerned about their patients. Dr. Deepak Bansal sir treated my daughter for multiple head injuries. we received a good response in this hospital, and I am grateful to their staff management and doctor as well.Thanks to all. ”</p>
                              <div class="testimonial-caption">
                                 <div class="d-flex justify-content-center">
                                    <img class="img-fluid radius" src="<?php echo base_url('');?>include/images/testimonial/Female_Testimonials.png" alt="">
                                 </div>
                                 <h6>Draupadi Kurait</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimonial">
                     <div class="row align-items-center">
                        <div class="col-md-12">
                           <div class="testimonial-content">
                              <span><i class="fas fa-quote-left"></i></span>
                              <p>“ My name is Savitri Devi, and I was treated by Drs. Akash Bakhshi and Deepak Sinha.All treatment was good, and I am very satisfied with treatment. Thank you to Hi-Tek management and doctors. ”</p>
                              <div class="testimonial-caption">
                                 <div class="d-flex justify-content-center">
                                    <img class="img-fluid radius" src="<?php echo base_url('');?>include/images/testimonial/Female_Testimonials.png" alt="">
                                 </div>
                                 <h6>Savitri Devi</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimonial">
                     <div class="row align-items-center">
                        <div class="col-md-12">
                           <div class="testimonial-content">
                              <span><i class="fas fa-quote-left"></i></span>
                              <p>“ My relative is admitted by the Hi-Tek hospital 10 days admitted the serious and nurse should be provided by care and normal helpful care discharge the patient is very normal conditions service provided the care. ”</p>
                              <div class="testimonial-caption">
                                 <div class="d-flex justify-content-center">
                                    <img class="img-fluid radius" src="<?php echo base_url('');?>include/images/testimonial/Female_Testimonials.png" alt="">
                                 </div>
                                 <h6>Khushi Sahu</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimonial">
                     <div class="row align-items-center">
                        <div class="col-md-12">
                           <div class="testimonial-content">
                              <span><i class="fas fa-quote-left"></i></span>
                              <p>“ The doctors' and staff's service was very good. Dr. Dixit is one of the best doctors in Bhilai. Dr. Mona was very cooperative and helpful. Thanks to the Doctor's and nursing staffs. ”</p>
                              <div class="testimonial-caption">
                                 <div class="d-flex justify-content-center">
                                    <img class="img-fluid radius" src="<?php echo base_url('');?>include/images/testimonial/Male_Testimonials.png" alt="">
                                 </div>
                                 <h6>Titu Das</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimonial">
                     <div class="row align-items-center">
                        <div class="col-md-12">
                           <div class="testimonial-content">
                              <span><i class="fas fa-quote-left"></i></span>
                              <p>“ Dr. N.S. Dixit and Dr. Akash Bakhshi are the best doctors in our c.g. and their services are also good, helping nature and seniors as their own patients. ”</p>
                              <div class="testimonial-caption">
                                 <div class="d-flex justify-content-center">
                                    <img class="img-fluid radius" src="<?php echo base_url('');?>include/images/testimonial/Male_Testimonials.png" alt="">
                                 </div>
                                 <h6>Ajay Raj Sharma</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimonial">
                     <div class="row align-items-center">
                        <div class="col-md-12">
                           <div class="testimonial-content">
                              <span><i class="fas fa-quote-left"></i></span>
                              <p>“ All staff here so cooperative and doctors also supportive and helping behaviour. Thank you to all Hospital staff and management too. ”</p>
                              <div class="testimonial-caption">
                                 <div class="d-flex justify-content-center">
                                    <img class="img-fluid radius" src="<?php echo base_url('');?>include/images/testimonial/Female_Testimonials.png" alt="">
                                 </div>
                                 <h6>Sunita Suni</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="owl-carousel no-pb pt-sm-3 dark-post" data-dots="false" data-items="1" data-autoplay="true">
               <div class="item">
                  <div class="post">
                     <div class="post-image">
                        <img class="img-fluid w-100 h-100" src="<?php echo base_url('');?>include/images/blog/03.jpg" alt="">
                        <div class="centered">
                           <div class="video-btn"> <a class="popup-youtube" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><span class="btn-play"><i class="flaticon-play-button"></i></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="post">
                     <div class="post-image">
                        <img class="img-fluid w-100 h-100" src="<?php echo base_url('');?>include/images/blog/02.jpg" alt="">
                        <div class="centered">
                           <div class="video-btn"> <a class="popup-youtube" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><span class="btn-play"><i class="flaticon-play-button"></i></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="text-center py-5">
   <div class="container pt-5">
      <div class="row text-center">
         <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
            <div class="section-title">
               <h6>Our</h6>
               <h2 class="title">Empanelment <span>TPA'S</span></h2>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div id="tpa" class="owl-carousel no-pb" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="1" data-margin="30" data-dots="false" data-autoplay="true">
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/CG_State_Government.jpg" alt="CG_State_Government">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/Central_Institute_Of_Petrochemicals_Engineering_&_Technology.jpg" alt="Central_Institute_Of_Petrochemicals_Engineering_&_Technology">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/Chola_Mandlam_Insurance.jpg" alt="Chola_Mandlam_Insurance">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/Genins_India.jpg" alt="Genins_India">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/NTPC.jpg" alt="NTPC">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/RITES_LTD.jpg" alt="RITES_LTD">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/SBI_Gen_Insurance.jpg" alt="SBI_Gen_Insurance">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/MD_India.jpg" alt="MD India">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/Health_Insurance_Tpa_of_India.jpg" alt="Health Insurance Tpa of India">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/Ericson.jpg" alt="Ericson">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/Medsave.jpg" alt="Medsave">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/Good_Health_Plan.jpg" alt="Good Health Plan ">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/BSP_(SAIL).jpg" alt="BSP (SAIL)">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/MediAssit_India.jpg" alt="MediAssit India">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/Care.jpg" alt="Care">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/Paramount.jpg" alt="Paramount">
               </div>
               <div class="item">
                  <img class="img-fluid d-inline" src="<?php echo base_url('');?>include/images/client/FHPL.jpg" alt="FHPL">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'common/footer.php';?>