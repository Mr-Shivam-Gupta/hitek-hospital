<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo $title;?></title>
      <meta name="keywords" value="">
      <meta name="description" value="">

      <meta name="twitter:site" content="<?php if($canonical!=''){ echo $canonical;} else{ "https://www.hitekhospitals.com/";}?>">
      <meta name="twitter:title" content="<?php echo $title;?>">
      <meta name="twitter:description" content="">
      <meta name="twitter:image" content="<?php echo base_url('');?>include/images/Favicon.png">

      <!-- Open Graph data -->
      <meta property="og:title" content="<?php echo $title;?>" />
      <meta property="og:type" content="hospital" />
      <meta property="og:url" content="<?php if($canonical!=''){ echo $canonical;} else{ "https://www.hitekhospitals.com/";}?>" />
      <meta property="og:image" content="<?php echo base_url('');?>include/images/Favicon.png" />
      <meta property="og:description" content="" />
      <meta property="og:site_name" content="HI-TEK HOSPITAL " />

      <link rel="canonical" href="<?php if($canonical!=''){ echo $canonical;} else{ "https://www.hitekhospitals.com/";}?>" />

      <meta http-equiv="cache-control" content="no-cache" />
      <meta http-equiv="Pragma" content="no-cache" />
      <meta http-equiv="Expires" content="-1" />

      <link rel="shortcut icon" href="<?php echo base_url('');?>include/images/Favicon.png" />
      <link href="<?php echo base_url('');?>include/stylesheet/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/animate.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/fontawesome-all.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/themify-icons.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/date-picker/date-picker.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/spacing.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/base.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/shortcodes.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/style.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/custom.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/stylesheet/responsive.css" rel="stylesheet" type="text/css" />
      <link href="#" data-style="styles" rel="stylesheet">
      <link href="<?php echo base_url('');?>include/stylesheet/color-customize/color-customizer.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src="<?php echo base_url('');?>include/javascript/jssor.slider.min.js"></script>
   </head>
   <body>
      <div class="page-wrapper">
      <header id="site-header" class="header">
         <div class="top-bar d-md-flex">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-8 col-md-12">
                     <div class="topbar-link">
                        <ul class="list-inline">
                           <li class="list-inline-item">
                              <a href="<?php echo base_url('');?>"> <i class="flaticon-alarm-clock"></i>Available 24x7</a>
                           </li>
                           <li class="list-inline-item">
                              <a href="tel:7884056666"> <i class="flaticon-phone-call"></i>+91 78840-56666</a>
                           </li>
                           <li class="list-inline-item"><a href="mailto:
                              info@hitekhospitals.com"><i class="flaticon-email"></i>
                              info@hitekhospitals.com</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 text-end d-lg-block d-none">
                     <div class="social-icons social-hover top-social-list">
                        <ul class="list-inline">
                           <li><a href="https://www.facebook.com/HiTekHospital" target="_blank"><i class="fab fa-facebook-f"></i></a>
                           </li>
                           <li><a href="https://goo.gl/maps/RqGqgNec6iZGYohr6" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="header-wrap">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="<?php echo base_url('');?>">
                        <img id="logo-img" class="img-fluid" src="<?php echo base_url('');?>include/images/logo.png" alt="">
                        </a>
                        <button id="appointment_button_mobile" class="navbar-toggler" data-bs-toggle="modal" data-bs-target="#appointment-modal" type="button"> <span><a href="<?php echo base_url('appointment-form');?>"><i class="fa fa-calendar" aria-hidden="true"></i></a></span>
                        </button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                           <ul class="nav navbar-nav mx-auto">
                              <li class="nav-item dropdown"> <a class="nav-link active " href="<?php echo base_url('');?>" >Home</a>
                              </li>
                              <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                                 <ul class="dropdown-menu">
                                   <li><a href="<?php echo base_url('about-us');?>">About Us</a>
                                   </li>
                                   <li><a href="">Doctors</a>
                                   </li>
                                   <li><a href="">Board Of Directors    </a>
                                   </li>
                                 
                                 </ul>
                                 </li> -->
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                                 <ul class="dropdown-menu">
                                    <li class=""> <a href="<?php echo base_url('about-us');?>">About Us</a>
                                    </li>
                                    <li class=""> <a href="<?php echo base_url('tpa-partners');?>">TPA Partners</a>
                                    </li>
                                    <li class=""> <a href="<?php echo base_url('our-doctors');?>">Our Doctors</a>
                                    </li>
                                    <!-- <li class="dropdown dropdown-submenu"> <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                       Doctors
                                       </a>
                                       <ul class="dropdown-menu">
                                         <li><a href="<?php echo base_url('');?>">Dr. Nachiket Dixit </a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Akash Bakhshi</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Ranjan Sen Gupta </a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Ashish Chand Dewangan </a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Rekha Ratnani</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Deepak Bansal</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. S S Ghosh </a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Navil Sharma</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Rajesh Singhal </a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. PremRaj Debta</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Rahul Thakur</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Deepak Ku Sinha</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Sonal Bajpayee</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Sandhya Nema</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Mithlesh Dewangan</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Apurv Verma</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Garima Balpande</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Pallavi Shende</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Zeny A. K Vyas</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Chhaya Bharti</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Rajni Prajapati</a></li>
                                         <li><a href="<?php echo base_url('');?>">Dr. Roshni Gohil</a></li>
                                       </ul>
                                       </li> -->
                                    <li class=""> <a href="<?php echo base_url('our-director');?>">Our Director</a>
                                 </ul>
                              </li>
                              <!-- <li class="nav-item dropdown position-static"> <a class="nav-link " href="#">Patient Portal</a>
                                 </li> -->
                              <li class="nav-item dropdown position-static">
                                 <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Department</a>
                                 <ul class="dropdown-menu p-2" style="width: max-content;">
                                    <li class="container">
                                       <div class="row">
                                          <div class="col-lg-4 col-md-12">
                                             <ul class="list-unstyled">
                                                <li> <a href="<?php echo base_url('neurology');?>">Neurology & Neurosurgery</a></li>
                                                <li> <a href="<?php echo base_url('cardiology-and-cardiac-surgery');?>">Cardiology & Cardiac Surgery</a></li>
                                                <li> <a href="<?php echo base_url('critical-care-and-emergency-medicine');?>">Critical Care & Emergency Medicine</a></li>
                                                <li> <a href="<?php echo base_url('');?>">Obs.,Gyn & Infertility</a></li>
                                                <li> <a href="<?php echo base_url('nephrology-and-dialysis');?>">Nephrology & Dialysis</a></li>
                                                <li> <a href="<?php echo base_url('consultant-gastro-and-laparoscopic-surgeon');?>">Consultant Gastro & Laproscopic Surgeon</a></li>
                                                <li> <a href="<?php echo base_url('medicine');?>">Medicine</a></li>
                                                <li> <a href="<?php echo base_url('orthopaedic-and-joint-replacement');?>">Orthopaedic & Joint Replacement</a></li>
                                             </ul>
                                          </div>
                                          <!-- /.col-md-4  -->
                                          <div class="col-lg-4 col-md-12">
                                             <ul class="list-unstyled">
                                               
                                                <li> <a href="<?php echo base_url('pediatric');?>">Pediatric</a></li>
                                                <li> <a href="<?php echo base_url('ent-surgeon');?>">ENT Surgeon</a></li>
                                                <li> <a href="<?php echo base_url('');?>">Dermatologist & Cosmetologist</a></li>
                                                <li> <a href="<?php echo base_url('');?>">Urologist </a></li>
                                                <li> <a href="<?php echo base_url('');?>">Chest & Respiratory </a></li>
                                                <li> <a href="<?php echo base_url('');?>">Anaesthesia </a></li>
                                                <li> <a href="<?php echo base_url('');?>">Radiologist</a></li>
                                                <li> <a href="<?php echo base_url('');?>">Opthalmologist & Retina </a></li>
                                             </ul>
                                          </div>
                                          <!-- /.col-md-4  -->
                                          <div class="col-lg-4 col-md-12">
                                             <ul class="list-unstyled">
                                               
                                                
                                                <li> <a href="<?php echo base_url('');?>">Pathologist </a></li>
                                                <li> <a href="<?php echo base_url('');?>">Dentist </a></li>
                                                <li> <a href="<?php echo base_url('');?>">Psychiatrist </a></li>
                                                <li> <a href="<?php echo base_url('');?>">Physiotherapist </a></li>
                                                <li> <a href="<?php echo base_url('');?>">Dietician & Nutritionist </a></li>
                                                <li> <a href="<?php echo base_url('general-and-laparoscopic-surgery');?>">General & Laparoscopic Surgery </a></li>
                                                
                                             </ul>
                                          </div>
                                       </div>
                                    </li>
                                    <!--  /.container  -->
                                 </ul>
                              </li>
                              <li class="nav-item dropdown"> <a class="nav-link " href="<?php echo base_url('careers');?>" >Careers</a>
                              </li>
                              <li class="nav-item dropdown"> <a class="nav-link " href="<?php echo base_url('gallery');?>" >Gallery</a>
                              </li>
                              <li class="nav-item dropdown"> <a class="nav-link " href="<?php echo base_url('contact-us');?>" >Contact us</a>
                              </li>
                           </ul>
                        </div>
                        <button id="appointment_button" type="button" class="btn btn-theme btn-sm appoint-btn mt-3 mt-sm-0" ><a class="text-white" href="<?php echo base_url('find-doctors')?>">Find a doctor</a></button>
                        <button id="appointment_button" type="button" class="btn btn-theme btn-sm appoint-btn mt-3 mt-sm-0"><a  class="text-white" href="<?php echo base_url('appointment-form');?>">Appointment</a></button>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>