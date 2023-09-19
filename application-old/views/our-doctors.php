<?php include 'common/header.php';?>
<section class="page-title overflow-hidden grey-bg">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-12">
            <h1 class="title mb-0">Our <span>Doctors</span></h1>
         </div>
         <div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url('');?>"><i class="fas fa-home"></i></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Our Doctors </li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<section >
   <div class="container">
      <div class="row text-center">
         <div class="col-lg-8 col-md-12 mx-auto">
            <div class="section-title">
               <h6>Team</h6>
               <h2 class="title">Meet Our <span>Doctors</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
        
            <?php foreach ($doclist->result_array() as $list)
            {
            ?>
            <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                <a href="<?php  echo base_url('hitekhospitals/doctorDetail/').$list['new_url'];?>">

                     <div class="team-member style-2 text-center">
              <div class="team-images">
                 <img class="img-fluid" src="<?php echo base_url('').'uploads/doctors/'.$list['doctor_photo'];?>" alt="Hitek Hospital">
              </div>
              <div class="team-description">

                 <h5 class="mb-2"><a href="<?php  echo base_url('hitekhospitals/doctorDetail/').$list['new_url'];?>"><?php echo $list['doctor_name'];?> </a></h5>
                  
                   <a href="<?php  echo base_url('hitekhospitals/doctorDetail/').$list['new_url'];?>"> <span><?php echo $list['specialisation'];?></span></a>

              </div>

           </div>
                </a>
            
          </div>
                
            <?php 
                
            }
            
            
            
            ?>
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->

        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Nachiket Dixit </a></h5>-->
        <!--           <span>Neurologist (MBBS, MD, DM)</span>-->

        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2">Dr. Akash Bakhshi<a href="javascript:void(0)"></a></h5>-->
        <!--         <span>Cardiologist (MBBS, DNB, DNB)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Ranjan Sen Gupta </a></h5>-->
        <!--         <span>Cardiac Surgeon (MBBS, MS , MCH)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Ashish Chand Dewangan </a></h5>-->
        <!--         <span>Gastroenterologist (MBBS , MD, DNB)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Rekha Ratnani</a></h5>-->
        <!--         <span>OBS, Gyn & Infertility (MBBS, MD)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Deepak Bansal</a></h5>-->
        <!--         <span>Neuro-Surgeon (MBBS, MS , MCh)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. S S Ghosh </a></h5>-->
        <!--         <span>Chest & Respiratory (MBBS, MD)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->

        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Rajesh Singhal </a></h5>-->
        <!--         <span>Medicine (MD, DNB)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. PremRaj Debta</a></h5>-->
        <!--         <span>Nephrologist (MBBS, MD, DNB)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->


        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Sonal Bajpayee</a></h5>-->
        <!--         <span>Critical Care Medicine (MBBS, DNB, IDCCM)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Sandhya Nema</a></h5>-->
        <!--         <span>General Medicine (MBBS, MD)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Mithlesh Dewangan</a></h5>-->
        <!--         <span>Peadtric (MBBS, MD)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Apurv Verma</a></h5>-->
        <!--         <span>Ent Surgeon (MBBS, MS)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Garima Balpande</a></h5>-->
        <!--         <span>Dermatologist & Cosmetologist (MBBS, MD)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Pallavi Shende</a></h5>-->
        <!--         <span>Anaesthetic (MBBS, MD)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Zeny A. K Vyas</a></h5>-->
        <!--         <span>Radiologist (MBBS, MD)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->

        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Rajni Prajapati</a></h5>-->
        <!--         <span>Pathologist (MBBS, DCP, DNB)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Roshni Gohil</a></h5>-->
        <!--         <span>Dentist (BDS)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Rahul Thakur</a></h5>-->
        <!--         <span>Orthopaedic & Joint Replacement (MBBS, MS)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Deepak Ku Sinha</a></h5>-->
        <!--         <span>Orthopaedic & Joint Replacement (MBBS, DNB)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Navil Sharma</a></h5>-->
        <!--         <span>Consultant Gastro & Laproscopic Surgeon (MBBS, MS, EFIAGES,FMAS,FALS)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-12 mt-5 mt-lg-0">-->
        <!--   <div class="team-member style-2 text-center">-->
        <!--      <div class="team-images">-->
        <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
        <!--      </div>-->
        <!--      <div class="team-description">-->
        <!--         <h5 class="mb-2"><a href="javascript:void(0)">Dr. Chhaya Bharti</a></h5>-->
        <!--         <span>Opthalmologist & Retina (MBBS, MS, FTVPEI)</span>-->
        <!--      </div>-->

        <!--   </div>-->
        <!--</div>-->

      </div>
   </div>
</section>
<?php include 'common/footer.php';?>
