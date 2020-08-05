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
<div class="site-section bg-dark">
    <div class="container-fluid bg-dark" data-aos="fade-up">
        <div class="site-section-heading text-center mb-5 w-border mx-auto">
            <div class="offset-md-3 col-lg-6 col-md-6 text-center">
                <h2 class="mb-5">Playlist Song</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
                officia, error reiciendis ab quod?</p>
            </div>
            <!-- databse spotify  -->
            <?php foreach ($linkPlaylist as $LP) :?>
            <iframe class="playlist-lagu-position" src="https://open.spotify.com/embed/playlist/<?php echo $LP['link_spotify']?>" width="1028px" height="500px" frameborder="2" allowtransparency="true" allow="encrypted-media"></iframe>
            <?php endforeach;?>
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