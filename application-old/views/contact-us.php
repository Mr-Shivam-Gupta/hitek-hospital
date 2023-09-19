<?php include 'common/header.php';?>
<section class="page-title overflow-hidden grey-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <h1 class="title mb-0">Contact <span>US</span></h1>
      </div>
      <div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('');?>"><i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>


<section class="contact-2">
  <div class="container">
    <div class="row g-0 box-shadow">
      <div class="col-lg-8 col-md-12 bg_gray">
        <div class="p-5">
        
          <form id="contact-form" class="row" method="post" >
            <div class="messages"></div>
            <div class="form-group col-sm-6">
              <input id="form_name" type="text" name="name" class="form-control" placeholder="User Name" required="required" data-error="Username is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <input id="form_subject" type="text" name="Subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-12">
              <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-sm-12 text-center">
              <button class="btn btn-border btn-radius"><span>Submit Enquiry</span>
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 px-4 py-4 form-info theme-bg text-white d-flex align-items-center">
        <div>
          <h2 class="title text-white">Get In <span>Touch!</span></h2>
          <p>&nbsp;</p>
          <ul class="contact-info list-unstyled mt-4">
            <li class="mb-4"><a href="https://g.page/hitekhospital?share" target="_blank"><i class="flaticon-paper-plane"></i><span>Address:</span>
              <p>Junwani Rd, near Surya TI Mall, Bhilai, Chhattisgarh 490020</p></a>
            </li>
            <li class="mb-4"><a href="tel:7884056666"><i class="flaticon-phone-call"></i><span>Phone:</span>0788-4056666
            </a>
            <br>
            <a href="tel:7389192333"><i class="flaticon-phone-call"></i>+91 73891-92333
            </a>
            </li>
           
             
            <li><a href="mailto:info@hitekhospitals.com" target="_blank"><i class="flaticon-email"></i><span>Email</span> info@hitekhospitals.com</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-0 overflow-hidden position-relative">
  <div class="container-fluid p-0 mt-5 mt-lg-0">
    <div class="row">
      <div class="col-sm-12">
        <div class="map iframe-h">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14877.569048020361!2d81.3234149!3d21.2162883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2815915bc8aecd68!2sHI-TEK%20Super%20Speciality%20Hospital!5e0!3m2!1sen!2sin!4v1656661030052!5m2!1sen!2sin"  allowfullscreen="" ></iframe>

        </div>
      </div>
    </div>
  </div>
</section>














<?php include 'common/footer.php';?>