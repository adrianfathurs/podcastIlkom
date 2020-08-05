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

<div class="site-section">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                <h2 class="mb-5">Our Announcer</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">
                    <img src="assets/images/person_1.jpg" alt="Image" class="img-fluid">
                        <div class="text">
                            <h2 class="mb-2 font-weight-light h4">Megan Smith</h2>
                            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                            <p>
                                <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                </div>
            </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
                <img src="assets/images/person_2.jpg" alt="Image" class="img-fluid">
                    <div class="text">
                        <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
                <img src="assets/images/person_3.jpg" alt="Image" class="img-fluid">
                    <div class="text">
                        <h2 class="mb-2 font-weight-light h4">Philip Martin</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>
            </div>
        </div>

      <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
        <div class="team-member">
          <img src="assets/images/person_4.jpg" alt="Image" class="img-fluid">
          <div class="text">
            <h2 class="mb-2 font-weight-light h4">Steven Ericson</h2>
            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
            <p>
              <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
              <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
              <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
        <div class="team-member">
          <img src="assets/images/person_5.jpg" alt="Image" class="img-fluid">
          <div class="text">
            <h2 class="mb-2 font-weight-light h4">Nathan Dumlao</h2>
            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
            <p>
              <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
              <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
              <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
        <div class="team-member">
          <img src="images/person_6.jpg" alt="Image" class="img-fluid">
          <div class="text">
            <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
            <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
            <p>
              <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
              <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
              <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-primary" data-aos="fade">
    <div class="container">
        <div class="row">
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
            <a href="https://www.twitter.com/CrastFM/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
            <a href="https://www.instagram.com/crast1078fm/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
            <a href=""   class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
    </div>
</div>

<!-- Script Js Content -->
<?php
    if (isset($js)) {
        $this->load->view($js);
    }
?>