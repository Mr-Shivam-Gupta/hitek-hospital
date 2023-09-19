<section>
   <div class="container">
      <div class="row mb-3">
         <div class="col-md-12 text-center">
            <div class="section-title mb-3">
               <h6>Team</h6>
               <h2 class="title">Our<span> Doctors</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="owl-carousel dark-team" data-items="3" data-md-items="2" data-sm-items="1" data-margin="30">
              <?php foreach ($doclist->result_array() as $list)
              {
              ?>
              <div class="item">
                 <div class="team-member text-center">
                    <div class="team-images">
                         <a href="<?php echo base_url('hitekhospitals/doctorDetail/').$list['new_url'];?>">
                       <img class="img-fluid" src="<?php echo base_url('').'uploads/doctors/'.$list['doctor_photo'];?>" alt="Best Hopsital in Bhilai">
                       </a>

                    </div>
                    <div class="team-description">
                       <h5> <a href="<?php echo base_url('hitekhospitals/doctorDetail/').$list['new_url'];?>"><?php echo $list['doctor_name']?></a></h5>
                      <a href="<?php echo base_url('hitekhospitals/doctorDetail/').$list['new_url'];?>">  <span><?php echo $list['specialisation']?></span></a>
                    </div>
                 </div>
              </div>
              <?php 
              }?>
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->
                      
              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Akash Bakhshi</a></h5>-->
              <!--         <span>Cardiologist</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Ranjan Sen Gupta </a></h5>-->
              <!--         <span>Cardiac Surgeon </span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Ashish Chand Dewangan </a></h5>-->
              <!--         <span>Gastroenterologist</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Rekha Ratnani</a></h5>-->
              <!--         <span>OBS, Gyn & Infertility</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Deepak Bansal</a></h5>-->
              <!--         <span>Neuro-Surgeon</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. S S Ghosh </a></h5>-->
              <!--         <span>Chest & Respiratory </span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Navil Sharma</a></h5>-->
              <!--         <span>Consultant Gastro & Laproscopic Surgeon</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Rajesh Singhal </a></h5>-->
              <!--         <span>Medicine</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Prem Raj Debta</a></h5>-->
              <!--         <span>Nephrologist</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Rahul Thakur</a></h5>-->
              <!--         <span>Orthopaedic & Joint Replacement</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Deepak Ku Sinha</a></h5>-->
              <!--         <span>Orthopaedic & Joint Replacement</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Sonal Bajpayee</a></h5>-->
              <!--         <span>Critical Care Medicine</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Sandhya Nema</a></h5>-->
              <!--         <span>General Medicine </span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Male_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Mithlesh Dewangan</a></h5>-->
              <!--         <span>Peadtric</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Apurv Verma</a></h5>-->
              <!--         <span>Ent Surgeon</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Garima Balpande</a></h5>-->
              <!--         <span>Dermatologist & Cosmetologist</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Pallavi Shende</a></h5>-->
              <!--         <span>Anaesthetic</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Zeny A. K Vyas</a></h5>-->
              <!--         <span>Radiologist</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Chhaya Bharti</a></h5>-->
              <!--         <span>Opthalmologist & Retina </span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Rajni Prajapati</a></h5>-->
              <!--         <span>Pathologist</span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--   <div class="team-member text-center">-->
              <!--      <div class="team-images">-->
              <!--         <img class="img-fluid" src="<?php echo base_url('');?>include/images/doctors/Female_Doctor.jpg" alt="">-->

              <!--      </div>-->
              <!--      <div class="team-description">-->
              <!--         <h5><a href="<?php echo base_url('');?>">Dr. Roshni Gohil</a></h5>-->
              <!--         <span>Dentist </span>-->
              <!--      </div>-->
              <!--   </div>-->
              <!--</div>-->




            </div>
         </div>
      </div>
   </div>
</section>
