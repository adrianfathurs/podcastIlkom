<!-- Script css content -->
<?php
if (isset($css)) {
$this->load->view($css);
}
?>

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
    <div class="carousel-item active" data-interval="1000">
      <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/thumbnail/1.jpg"  style="width: 100%; height: 550px;"  alt="...">  
      </img>
    </div>

    <div class="carousel-item " data-interval="2000">
      <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/thumbnail/2.jpg" style="width: 100%; height: 550px;"   alt="...">
      </img>
    </div>

    <div class="carousel-item" data-interval="2000">
      <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/thumbnail/3.jpg" style="width: 100%; height: 550px;"  alt="...">
    </div>

    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="bg-primary" data-aos="fade">
    <div class="container">
        <div class="row">
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
            <a href="https://www.twitter.com/CrastFM/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
            <a href="https://www.instagram.com/crast1078fm/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
            <a href=""  class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
    </div>
</div>
<!--  -->
<div class="site-section bg-dark">
  <div class="wrapper-content">

    <div class="container-fluid bg-dark" data-aos="fade-up">
      <div class="site-section-heading text-center mb-5 w-border mx-auto" >
        <h2>Podcrast's Management</h2>
      </div>
      <div class="container">
        <div class="row ">
          <div class="col-lg-4 col-md-3 col-sm-2 col-xs-1"></div>
            <div class="col-lg-8 col-md-9 col-sm-10 col-xs-11">
              <div class="row">
                <div class="col-lg-2 col-md-2  col-sm-1 offset-xs-1 col-xs-1 pb-2"><button id="btnBph" class="btn btn-outline-info">BPH</button></div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pb-2"><button id="btnOnair" class="btn btn-outline-info">ON AIR</button></div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pb-2"><button id="btnOffair" class="btn btn-outline-info">OFF AIR</button></div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <hr>
        <br>
            
        <div class="container">
          <div id="bph" class="row">
            <div class="col-lg-4 pb-4 pl-4 pr-4">
              <div class="kotak-management">
                <img id="vice" src="<?php echo base_url('assets/images/bph/FEEDS_SMVICE.jpg')?>" alt="Vice & Station Manager"  >
              </div>
            </div>
            <div class="col-lg-4 pb-4 pl-4 pr-4">
              <div class="kotak-management">
                <img id="sekertaris" src="<?php echo base_url('assets/images/bph/FEEDS_SEKRETARIS.jpg')?>" alt="" >
              </div>
            </div>
            <div class="col-lg-4 pb-4 pl-4 pr-4">
              <div class="kotak-management">
                <img id="bendahara "src="<?php echo base_url('assets/images/bph/FEEDS_BENDAHARA.jpg')?>" alt="">
              </div>
            </div>
          </div>
                
          <div id="onAir" class="row">
            <div class="col-lg-4 pb-4 pl-4 pr-4">
                <div class="kotak-management">
                      <img id="CD" src="<?php echo base_url('assets/images/onair/FEEDS_CD.jpg')?>" alt="Vice & Station Manager"  >
                    </div>
                  </div>

                  <div class="col-lg-4 pb-4 pl-4 pr-4">
                    <div class="kotak-management">
                      <img id="MD" src="<?php echo base_url('assets/images/onair/FEEDS_MD.jpg')?>" alt="" >
                    </div>
                  </div>

                  <div class="col-lg-4 pb-4 pl-4 pr-4">
                    <div class="kotak-management">
                      <img id="PD"src="<?php echo base_url('assets/images/onair/FEEDS_PD.jpg')?>" alt="">
                    </div>
                  </div>
                </div>

          <div id="offAir" class="row">
            <div class="col-lg-4 pb-4 pl-4 pr-4">
              <div class="kotak-management">
                <img id="GA" src="<?php echo base_url('assets/images/offair/FEEDS_GA.jpg')?>" alt="Vice & Station Manager"  >
              </div>
            </div>

            <div class="col-lg-4 pb-4 pl-4 pr-4">
              <div class="kotak-management">
                <img id="HUMAS" src="<?php echo base_url('assets/images/offair/FEEDS_HUMAS.jpg')?>" alt="" >
              </div>
            </div>
                  
            <div class="col-lg-4 pb-4 pl-4 pr-4">
              <div class="kotak-management">
                <img id="REPORTER"src="<?php echo base_url('assets/images/offair/FEEDS_REPORTER.jpg')?>" alt="">
              </div>
            </div>
            <div class="col-lg-4 pb-4 pl-4 pr-4">
              <div class="kotak-management">
                <img id="SE "src="<?php echo base_url('assets/images/offair/FEEDS_SE.jpg')?>" alt="">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>        
  </div>
  
  <div class="bg-primary" data-aos="fade">
    <div class="container">
      <div class="row">
        <a href="https://www.twitter.com/CrastFM/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
        <a href=""   class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
        <a href="https://www.instagram.com/crast1078fm/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
      </div>
    </div>
  </div>

<!-- Script Js Content -->
<?php
    if (isset($js)) {
        $this->load->view($js);
    }
?>