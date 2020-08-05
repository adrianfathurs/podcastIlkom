<!-- Script css content -->
<?php
if (isset($css)) {
$this->load->view($css);
}
?>

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="1000">
      <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/hero_bg_1.jpg"  style="width: 100%; height: 550px;"  alt="...">
        <h1 class="mb-4 text-white">Turn On The Feeling With Music</h1>
      </img>
    </div>

    <div class="carousel-item " data-interval="2000">
      <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/img_2.jpg" style="width: 1280px; height: 550px;"   alt="...">
        <h1 class="mb-4 text-white">Turn On The Feeling With Music</h1>
      </img>
    </div>

    <div class="carousel-item" data-interval="2000">
      <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/img_3.jpg" style="width: 1200px; height: 550px;"  alt="...">
        <h1 class="mb-4 text-white">Turn On The Feeling With Music</h1>
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
  <div class="container-fluid" data-aos="fade-up">
    <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
      <h2 class="mb-5">Top 10 Chart</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
      officia, error reiciendis ab quod?</p>
    </div>
    <table class="table table-hover table-dark">
      <thead>
        <tr>
          <th  scope="col" class="visibility2"><p class="text-center">Chart Number</p></th>
          <th  scope="col" class="visibility2"><p class="text-center">Song Title</p></th>
          <th  scope="col" class="visibility2"><p class="text-center">Play</p></th>
          <th  scope="col" class="visibility1"><p class="text-center">Song Artist</p></th>
          <th  scope="col" class="visibility1"><p class="text-center">Song Genre</th>
          <th  scope="col" class="visibility1"><p class="text-center">Chart Category</th>
          <th  scope="col" class="visibility1"><p class="text-center">Chart Status</th>
        </tr>  
      </thead>
      <tbody>
      <?php foreach ($tanggaLagu as $tL):?>
        <tr>
          <td  class="visibility2" ><p class="text-center"><?=$tL['id_lagu']?></p></td>
          <td class="visibility2"><p class="text-center"><?= $tL['judul_lagu']?></p></td>
          <td class="visibility2"><p class="text-center"><iframe class= "px-4 card-podcrast" src="https://open.spotify.com/embed/track/<?= $tL['link_lagu']?>" width="120px" height="75px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></p></td>
          <td class="visibility1"><p class="text-center"><?=$tL['artist_lagu']?></p></td>
          <td class="visibility1"><p class="text-center"><?=$tL['genre_lagu']?></p></td>
          <td class="visibility1"><p class="text-center"><?=$tL['kategori_lagu']?></p></td>
          <?php if($tL['status_lagu']==1){?>
          <td class="visibility1"><p class="text-center"><img src="<?php echo base_url()?>assets/images/up-arrow.png" alt="up" width="20px" height="20px"></p></td>
          <?php } elseif ($tL['status_lagu']==2){?>
          <td class="visibility1"><p class="text-center"><img src="<?php echo base_url()?>assets/images/down-arrow.png" alt="up" width="20px" height="20px"></p></td>
          <?php } else {?>
          <td class="visibility1"><p class="text-center"><img src="<?php echo base_url()?>assets/images/sort.png" alt="up" width="30px" height="30px"></p></td>
          <?php };?>
        </tr>
      <?php endforeach;?>
      </tbody>
    </table>
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