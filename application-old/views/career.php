<?php include 'common/header.php';?>
<section class="page-title overflow-hidden grey-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <h1 class="title mb-0">Careers <span>We Offer</span></h1>
      </div>
      <div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('');?>"><i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Careers</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<div class="page-content">
<section>
  <div class="container">
    <div class="row g-0 box-shadow">
      <div class="col-lg-4 col-md-12 dark-bg image-column-h" data-bg-img="<?php echo base_url('');?>include/images/testimonial/03.jpg"></div>
      <div class="col-lg-8 col-md-12">
        <div class="white-bg p-5">

          <div class="alert alert-warning text-center" role="alert">
          Note: Please make sure all the (*) fields are mandatory to be fill. <span class="text-denger">(File Format(.doc, .docx, .pdf, jpg, jpeg ). Max Size 2MB)</span>
          </div>
          <form id="careers-form" class="row">
            <div class="messages"></div>
            <div class="form-group col-sm-6">
              <input id="form_name" type="text" name="name" class="form-control" placeholder="Your Name: *" required="required" data-error="Username is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <input id="form_email" type="email" name="email" class="form-control" placeholder="E-mail: *">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <input id="form_phone" type="tel" name="phone" pattern="[6789][0-9]{9}" maxlength="10" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <input id="form_subject" type="file" name="resume" class="form-control" required="required" data-error="Resume is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-12">
              <textarea id="form_message" name="message" class="form-control" placeholder="Please, leave us a message" rows="2"></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
              <button  class="btn btn-border btn-radius"><span>Submit Now</span></button>
            </div>
            <div class="alert alert-danger mt-2"id="error_reponse">

            </div>
            <div class="alert alert-success mt-2 text-center" id="success_reponse">

            </div>
            <div class="alert alert-info mt-2 text-center" id="ploader">
              Please Wait.....

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<?php include 'common/footer.php';?>
