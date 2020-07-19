<!-- Script css content -->
<?php
if (isset($css)) {
  $this->load->view($css);
}
?>

<!-- <div class="site-blocks-cover overlay" style="" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
        <h1 class="mb-4">Turn On The Feeling With Music</h1>
        <p><a href="#" class="btn btn-primary px-4 py-3">About Us</a></p>
      </div>
    </div>
  </div>
</div>  -->

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
      <a href=""   class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
    </div>
  </div>
</div>

<div class="container-fluid container-margin bg-dark"> 
  <div class="row">
    <div class="col-md-2"><!-- KOSONG --></div>
      <div class="col-md-5 offset-md-1">
        <div class="row">
          <h2 class=" tengah text-hello-crast animated infinite bounce animated.slow  text-white">HELLO FROM CRASTFM</h2>
        </div>
        <div class="row ">
          <img class="tengah"src="assets/images/lambang_crast.png" width="250" height="150" class="d-inline-block align-top" alt="" loading="lazy">
        </div>
      <div class="row ">
        <audio class=" tengah padding-top-row radius" src="http://streaming.rri.co.id:9025/web-rrijakartapro1.mp3" preload="auto" controls>PLAY</audio>
      </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-2 fix-image-right" >
      <div class="row ">
        <div class="card position-widget" style="width: 12rem;">
          <h3 class="card-header  bg-secondary mb-2 px-1 text-black" style="font-size: 14px;"><b>Youtube &nbsp;</b><a href="https://www.youtube.com/embed/videoseries?list=PLY1KVBn1ubF53_D9EWM2syCRkFjGSDXiw"></h3></a>
          <iframe class ="youtube-place" width="150" height="75" src="https://www.youtube.com/embed/videoseries?list=PLelgONxZAasx0aTReRHqYHz---NYmA6mn" frameborder="0" allow="autoplay; encrypted-media" alt="PlaylistYoutube" allowfullscreen></iframe>
        </div>
      </div>
      <div class="row mt-2">
        <div class="card " style="width: 12rem;">
          <h3 class="card-header  bg-secondary mb-2 px-1 text-black" style="font-size: 14px;"><b>Podcrast &nbsp;</b><a href="https://www.youtube.com/embed/videoseries?list=PLY1KVBn1ubF53_D9EWM2syCRkFjGSDXiw"></h3></a>
          <!-- Link buat menampilkan podcrast playlist spotify -->
          <?php foreach ($linkPodcrast as $LP) :?>
            <iframe class= "px-4 card-podcrast " id="click-embed-podcrast" src="https://open.spotify.com/embed/episode/<?php echo $LP['link_spotify']; ?> "width="200px" height="150px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>  
            <?php endforeach;?>  
        </div>
      </div>
    </div> 
  </div>
</div>
<!-- https://open.spotify.com/show/095GreX08Xkfo299FxrPim?si=L1JafZJ9QdC2V1KgE6mp5w
        https://open.spotify.com/show/095GreX08Xkfo299FxrPim?si=L1JafZJ9QdC2V1KgE6mp5w
        playlist/L1JafZJ9QdC2V1KgE6mp5w
        https://open.spotify.com/episode/6eJ1odPM6i5wOr0ImglriU -->
        <!--  Tampilan awal untuk card youtube dan podcrast -->
<!-- <div class="container-fluid container-margin bg-dark"> 
  <div class="row">
    <div class="col-md-2">
      
    </div>
    <div class="col-md-6">
      <div class="row">
        <h2 class=" tengah text-hello-crast animated infinite bounce animated.slow  text-white">HELLO FROM CRASTFM</h2>
      </div>
      <div class="row ">
       <img class="tengah"src="assets/images/lambang_crast.png" width="250" height="150" class="d-inline-block align-top" alt="" loading="lazy">
     </div>
     <div class="row ">
      <audio class=" tengah padding-top-row radius" src="http://streaming.rri.co.id:9025/web-rrijakartapro1.mp3" preload="auto" controls>PLAY</audio>
    </div>
  </div>
  <div class="col-md-4 ">
    <div class="row">
      <div class="card" style="width: 25rem;">
        <h3 class="card-header  bg-secondary mb-2 px-1 text-black ">Youtube &nbsp;<a href="https://www.youtube.com/embed/videoseries?list=PLY1KVBn1ubF53_D9EWM2syCRkFjGSDXiw"><img class="animated infinite jello " src="assets/images/youtube.png" width="50px" height="50px"></h3></a>
        <iframe class ="youtube-place" width="373" height="200" src="https://www.youtube.com/embed/videoseries?list=PLelgONxZAasx0aTReRHqYHz---NYmA6mn" frameborder="0" allow="autoplay; encrypted-media" alt="PlaylistYoutube" allowfullscreen></iframe>

      </div>
    </div>
    <div class="row mt-2">
      <div class="card " style="width: 25rem;">
        <h3 class="card-header  bg-secondary mb-2 px-1 text-black">PodCrast <img class="animated infinite jello"src="assets/images/logo_podcrast-2.png" width="50px" height="50px" alt="" loading="lazy" alt="PODCRAST" > </h3>
        <!-- Link buat menampilkan playlist spotify -->
        <!-- <iframe class= "px-4 card-podcrast"src="https://open.spotify.com/embed/episode/6eJ1odPM6i5wOr0ImglriU "width="380px" height="200px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> 
        https://open.spotify.com/show/095GreX08Xkfo299FxrPim?si=L1JafZJ9QdC2V1KgE6mp5w
        https://open.spotify.com/show/095GreX08Xkfo299FxrPim?si=L1JafZJ9QdC2V1KgE6mp5w
        playlist/L1JafZJ9QdC2V1KgE6mp5w
        https://open.spotify.com/episode/6eJ1odPM6i5wOr0ImglriU
      </div>
    </div>  

  </div>
</div> -->




<!-- <iframe class ="youtube-place clear-float" width="300" height="150" src="https://www.youtube.com/embed/videoseries?list=PLY1KVBn1ubF53_D9EWM2syCRkFjGSDXiw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->

</div>

<div class="site-section clear-float">
  <div class="container">
    <div class="row">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
        <h2 class="mb-5">Schedule Shows</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
        officia, error reiciendis ab quod?</p>
      </div>
    </div>
    <div class="w3-container">
      <button class="btn-primary btn-border btn-prev" onclick="plusDivs(-1)">&#10094; Prev</button>
      <button class="btn-primary btn-border btn-next" onclick="plusDivs(1)">Next &#10095;</button>
      <div class="w3-content" style="max-width:1200px">
        <div class="margin-main-carousel">

          <div class="element effect" style="display:none">
            <div class="front">
              <img class="mySlides" src='<?php echo base_url()?>assets/images/img_3.jpg'  width="300px;" height="300px;">
            </div>
            <div class="back" >
              <div class="back-content">
                <h3 class="text-white">Senin</h3>
                <h5 class="text-white">11.10-12.40</h5>
              </div>
            </div>
          </div>

          <div class="element effect" style="display:none">
            <div class="front">
              <img class="mySlides" src='<?php echo base_url()?>assets/images/img_2.jpg'  width="300px;" height="300px;">
            </div>
            <div class="back" >
              <div class="back-content">
                <h3 class="text-white">Selasa</h3>
                <h5 class="text-white">11.10-12.40</h5>
              </div>
            </div>
          </div>

          <div class="element effect" >
            <div class="front">
              <img class="mySlides" src='<?php echo base_url()?>assets/images/img_1.jpg'  width="300px;" height="300px;">
            </div>
            <div class="back" >
              <div class="back-content">
                <h3 class="text-white">Rabu</h3>
                <h5 class="text-white">11.10-12.40</h5>
              </div>
            </div>
          </div>

          <div class="element effect" >
            <div class="front">
              <img class="mySlides" src='<?php echo base_url()?>assets/images/img_1.jpg'  width="300px;" height="300px;">
            </div>
            <div class="back" >
              <div class="back-content">
                <h3 class="text-white">Kamis</h3>
                <h5 class="text-white">11.10-12.40</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="element effect" >
          <div class="front">
            <img class="mySlides" src='<?php echo base_url()?>assets/images/img_2.jpg'  width="300px;" height="300px;">
          </div>
          <div class="back" >
            <div class="back-content">
              <h3 class="text-white">Jumat</h3>
              <h5 class="text-white">11.10-12.40</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="element effect" >
        <div class="front">
          <img class="mySlides" src='<?php echo base_url()?>assets/images/img_3.jpg'  width="300px;" height="300px;">
        </div>
        <div class="back" >
          <div class="back-content">
            <h3 class="text-white">Senin</h3>
            <h5 class="text-white">11.10-12.40</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row padding-row-carousel mt-4">
        <div class="col col-md-2 col-sm-6 col-xs-6">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src='assets/images/img_3.jpg' style="cursor:pointer" onclick="currentDiv(1)">
        </div>
        <div class="col col-md-2 col-sm-6 col-xs-6">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src="assets/images/img_2.jpg" style="cursor:pointer" onclick="currentDiv(2)">
        </div>
        <div class="col col-md-2 col-sm-6 col-xs-6">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src="assets/images/img_1.jpg" style="cursor:pointer" onclick="currentDiv(3)">
        </div>
        <div class="col col-md-2 col-sm-6 col-xs-6">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src='assets/images/img_1.jpg' style="cursor:pointer" onclick="currentDiv(4)">
        </div>
        <div class="col col-md-2 col-sm-6 col-xs-6">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src="assets/images/img_2.jpg" style="cursor:pointer" onclick="currentDiv(5)">
        </div>
        <div class="col col-md-2 col-sm-6 col-xs-6">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src="assets/images/img_1.jpg" style="cursor:pointer" onclick="currentDiv(6)">
        </div>
      </div>
      <br>
      <center><a href=""><bold>Read More</bold></a></center>
    </div>
  </div>
</div>
<div class="site-section bg-dark block-13">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
        <h2 class="mb-5">Announcer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
      </div>
    </div>
    <div class="nonloop-block-13 owl-carousel">
      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="assets/images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Megan Smith</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="assets/images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Brooke Cagle</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="assets/images/person_3.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Philip Martin</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="assets/images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Steven Ericson</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="assets/images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Nathan Dumlao</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="assets/images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Brook Smith</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="assets/images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Brook Smith</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>
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




<div class="site-section">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
        <h2 class="mb-5">Our DJs</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
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

<div class="site-section bg-dark">
  <div class="container" data-aos="fade-up">
    <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
      <h2 class="mb-5">Articles</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
      officia, error reiciendis ab quod?</p>
    </div>
    <div class="row">
      <?php for($i=0;$i<3;$i++){?>
      <div class="row" ><h3 class="text-heading-article">Info Music</h3></div>
      <div class="row">
        <div class="col-md-4 mt-2">               
          <div class="card profile-card-5 mt-5">       
            <div class="card-img-block">
              <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c" alt="Card image cap">
            </div>
            <div class="card-body pt-0">
              <h5 class="card-title">Kolom 1</h5></a>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div> 
          </div>            
        </div> 
        <div class="col-md-4 mt-2">   
          <div class="card profile-card-5 mt-5">
            <a href="#">
              <div class="card-img-block">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">Kolom 2</h5></a>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>   
        </div>                  
        <div class="col-md-4 mt-2"> 
          <div class="card profile-card-5 mt-5">
            <a href="#">
              <div class="card-img-block">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">Kolom 3</h5></a>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
          <div class="mt-3"><center><a href=""><bold>Read More...</bold></a></center></div>  
        </div>
        </div>               
          <?php } ?>         
    </div>   
  </div>
</div>

    <div class="bg-primary" data-aos="fade">
      <div class="container">
        <div class="row">
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
          <a href="https://www.instagram.com/crast1078fm/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
          <a href="https://twitter.com/CrastFM/" target="_blank"  class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
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