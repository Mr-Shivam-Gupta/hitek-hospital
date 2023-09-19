<?php include 'common/header.php';?>
<section class="page-title overflow-hidden grey-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <h1 class="title mb-0"><?php echo $director->doctor_name;?> </h1>
      </div>
      <div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/hitekhospitals/"><i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $director->doctor_name;?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>



<div class="page-content">



<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-12">
        <div class="team-single">
          <div class="team-images mt--135">
            <img class="img-fluid w-100" src="<?php echo base_url('').'uploads/doctors/'.$director->doctor_photo;?> " alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-12 mt-3 mt-lg-0">
        <div class="team-description">
          <h2 class="title z-index-1 mb-2"><?php echo $director->doctor_name;?></span></h2>
          <h6 class="text-theme">Director</h6>
          <p class="lead mb-04 text-justify"><?php echo $director->doctor_detial;?></p>
        </div>
        <div class="tab">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-tab1" data-bs-toggle="tab" data-bs-target="#tab1-1" type="button" role="tab" aria-selected="true">Key Skills</a>
              <a class="nav-item nav-link" id="nav-tab2" data-bs-toggle="tab" data-bs-target="#tab1-2" type="button" role="tab" aria-selected="false">Education </a>
              <a class="nav-item nav-link" id="nav-tab3" data-bs-toggle="tab" data-bs-target="#tab1-3" type="button" role="tab" aria-selected="false">Award's & Achievements</a>
              <a class="nav-item nav-link" id="nav-tab4" data-bs-toggle="tab" data-bs-target="#tab1-4" type="button" role="tab" aria-selected="false">Publications</a>
            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent">
            <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                            <p class="line-h-2 lead text-grey"></p>
                           </div>
            <div role="tabpanel" class="tab-pane fade" id="tab1-2">
                          <p class="line-h-2 lead text-grey"></p>
                           </div>
            <div role="tabpanel" class="tab-pane fade" id="tab1-3">
                          <p class="line-h-2 lead text-grey"></p>
                              </div>
            <div role="tabpanel" class="tab-pane fade" id="tab1-4">
                          <p class="line-h-2 lead text-grey"></p>
                              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'common/footer.php';?>