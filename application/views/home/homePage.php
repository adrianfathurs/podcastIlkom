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
        <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/thumbnail/1.jpg"   style="width: 100%; height: 550px;"  alt="...">  </img>
    </div>
    
    <div class="carousel-item " data-interval="2000">
      <img class="image-carousel-size" src="<?php echo base_url(); ?>assets/images/thumbnail/2.jpg" style="width: 100%; height: 550px;"   alt="..."></img>
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



<div class="bg-mustard" data-aos="fade">
  <div class="container">
    <div class="row">
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
      <a href="https://www.twitter.com/CrastFM/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
      <a href="https://www.instagram.com/crast1078fm/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
      <a href="#"   class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
      <a href="https://www.youtube.com/channel/UCVw2hX3tXPK44WR7a-qXAVg/featured" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
    </div>
  </div>
</div>

<div class="container-fluid  bg-dark container-margin-bottom" data-aos="fade-up">
  <div id="main-content-homepage">
    <img class="tengah" src="<?php echo base_url('')?>assets/images/lambang_crast.png" width="40px" height="400px" class="d-inline-block align-top" alt="" loading="lazy">
   <a href="http://jogjastreamers.com/crastfm.html" target="_blank"> <button class="tengah" id="btnplay" ><strong>Play</strong></button></a>
    <br>
  </div>
  <div id="aside-content-homepage">
    <div id="youtube-position">
      <h3>Youtube</h3>
      <hr>
      <?php foreach ($youtube as $yt):?>
      <iframe  width="250" height="125" target="_blank" src="<?php echo $yt['link_youtube']?>" frameborder="0" allow="autoplay; encrypted-media" alt="PlaylistYoutube" allowfullscreen></iframe>
      </div>
      <?php endforeach;?>
      <hr>
      <br>
    <div id="podcrast-position">
      <h3>PodCrast FM</h3>
      <hr>
      <?php foreach ($linkPodcrast as $LP) :?>
        <iframe  id="click-embed-podcrast"  width= "320px" height="120px" src="<?php echo $LP['link_spotify']?>" width="200px" height="150px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>  
      <?php endforeach;?> 
      <!-- https://open.spotify.com/embed/show/095GreX08Xkfo299FxrPim?si=QFlNkF2vRPSAyBrC-IrLHA -->
      <hr>
    </div>
  </div>
  <div class="clc"></div>
</div>



<!-- <div class="container-fluid container-margin bg-dark"> --> 
  <!-- <div class="row"> -->
    <!-- <div class="col-md-2"> --><!-- KOSONG --><!-- </div> -->
     <!--  <div class="col-md-5 offset-md-1">
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
          <iframe class ="youtube-place" width="150" height="75" target="_blank" src="https://www.youtube.com/embed/videoseries?list=PLelgONxZAasx0aTReRHqYHz---NYmA6mn" frameborder="0" allow="autoplay; encrypted-media" alt="PlaylistYoutube" allowfullscreen></iframe>
        </div>
      </div>
      <div class="row mt-2">
        <div class="card " style="width: 12rem;">
          <h3 class="card-header  bg-secondary mb-2 px-1 text-black" style="font-size: 14px;"><b>Podcrast &nbsp;</b><a href="https://www.youtube.com/embed/videoseries?list=PLY1KVBn1ubF53_D9EWM2syCRkFjGSDXiw"></h3></a>
          <!-- Link buat menampilkan podcrast playlist spotify -->
          <!-- <?php foreach ($linkPodcrast as $LP) :?>
            <iframe class= "px-4 card-podcrast " id="click-embed-podcrast" src="https://open.spotify.com/embed/episode/<?php echo $LP['link_spotify']; ?> "width="200px" height="150px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>  
            <?php endforeach;?>  
        </div>
      </div>
    </div> 
  </div>
</div> --> 
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

<div class="site-section clear-float" data-aos="fade-up">
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
              <img class="mySlides" src='<?php echo base_url()?>assets/images/schedule/Isu_Morsun_4Agt.png'  width="300px;" height="300px;">
            </div>
            
            <div class="back" >
              <div class="back-content">
                <h5 class="text-white">Senin-Jumat</h5>
                <h5 class="text-white">08.00-10.00</h5>
              </div>
            </div>
          </div>

          <div class="element effect" style="display:none">
            <div class="front">
              <img class="mySlides" src='<?php echo base_url()?>assets/images/schedule/Isu_CH_5Agt-copy.png'  width="300px;" height="300px;">
            </div>
            
            <div class="back" >
              <div class="back-content">
                <h5 class="text-white">Senin-Jumat</h5>
                <h5 class="text-white">10.00-12.00</h5>
              </div>
            </div>
          </div>

          <div class="element effect" >
            <div class="front">
              <img class="mySlides" src='<?php echo base_url()?>assets/images/schedule/Isu_TZ_7Agt-copy.png'  width="300px;" height="300px;">
            </div>
            <div class="back" >
              <div class="back-content">
                <h5 class="text-white">Senin-Jumat</h5>
                <h5 class="text-white">13.00-15.00</h5>
              </div>
            </div>
          </div>
        </div>

          <div class="element effect" >
            <div class="front">
              <img class="mySlides" src='<?php echo base_url()?>assets/images/schedule/Isu_BD_8Agt-copy.png'  width="300px;" height="300px;">
            </div>
            <div class="back" >
              <div class="back-content">
                <p class="text-white">Sabtu,Minggu</p>
                <h5 class="text-white">19.30/16.00</h5>
              </div>
            </div>
          </div>
</div>


    <div class="container">
      <div class="row padding-row-carousel mt-4">
        <div class=" col-lg col-md col-sm col-xs pb-2">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src='<?php echo base_url()?>assets/images/schedule/Isu_Morsun_4Agt.png' style="cursor:pointer" onclick="currentDiv(1)">
        </div>
        <div class="col-lg col-md col-sm col-xs pb-2">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src="<?php echo base_url()?>assets/images/schedule/Isu_CH_5Agt-copy.png" style="cursor:pointer" onclick="currentDiv(2)">
        </div>
        <div class="col-lg col-md col-sm col-xs pb-2">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src='<?php echo base_url()?>assets/images/schedule/Isu_TZ_7Agt-copy.png' style="cursor:pointer" onclick="currentDiv(3)">
        </div>
        <div class="col-lg col-md col-sm col-xs pb-2">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src="<?php echo base_url()?>assets/images/schedule/Isu_BD_8Agt-copy.png" style="cursor:pointer" onclick="currentDiv(4)">
        </div>
      </div>
      <br>
      <center><a href="<?php echo site_url('schedule')?>"><bold>Read More</bold></a></center>
      <br>
    </div>
  </div>
</div>

<!-- COBA -->
<!-- COBA -->



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
          <img src="<?php echo base_url('')?>assets/images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Megan Smith</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="<?php echo base_url('')?>assets/images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Brooke Cagle</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="<?php echo base_url('')?>assets/images/person_3.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Philip Martin</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="<?php echo base_url('')?>assets/images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Steven Ericson</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="<?php echo base_url('')?>assets/images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Nathan Dumlao</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="<?php echo base_url('')?>assets/images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Brook Smith</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>
      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="<?php echo base_url('')?>assets/images/announcer/penyiar/Nicola.JPG" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Brook Smith</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">            
          <img src="<?php echo base_url('')?>assets/images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
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
  <div class="container" data-aos="fade-up">
    <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
      <h2 class="mb-5">Top 10 Chart</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
      officia, error reiciendis ab quod?</p>
    </div>
    <table class="table-responsive table-hover table-dark">
      <thead>
        <tr>
          <th  scope="col" ><p class="text-center">Chart Number</p></th>
          <th  scope="col"><p class="text-center">Song Title</p></th>
          <th  scope="col" ><p class="text-center">Play</p></th>
          <th  scope="col" class=""><p class="text-center">Song Artist</p></th>
          <th  scope="col" class=""><p class="text-center">Song Genre</th>
          <th  scope="col" class=""><p class="text-center">Chart Category</th>
          <th  scope="col" class=""><p class="text-center">Chart Status</th>
        </tr>  
      </thead>
      <tbody>
      <?php foreach ($tanggaLagu as $tL):?>
        <tr>
          <td  class="" ><p class="text-center"><?=$tL['id_lagu']?></p></td>
          <td class=""><p class="text-center"><?= $tL['judul_lagu']?></p></td>
          <td class=""><p class="text-center"><iframe class= "px-4 card-podcrast" src="https://open.spotify.com/embed/track/<?= $tL['link_lagu']?>" width="120px" height="75px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></p></td>
          <td class=""><p class="text-center"><?=$tL['artist_lagu']?></p></td>
          <td class=""><p class="text-center"><?=$tL['genre_lagu']?></p></td>
          <td class=""><p class="text-center"><?=$tL['kategori_lagu']?></p></td>
          <?php if($tL['status_lagu']==1){?>
          <td class=""><p class="text-center"><img src="<?php echo base_url()?>assets/images/up-arrow.png" alt="up" width="20px" height="20px"></p></td>
          <?php } elseif ($tL['status_lagu']==2){?>
          <td class=""><p class="text-center"><img src="<?php echo base_url()?>assets/images/down-arrow.png" alt="up" width="20px" height="20px"></p></td>
          <?php } else {?>
          <td class=""><p class="text-center"><img src="<?php echo base_url()?>assets/images/sort.png" alt="up" width="30px" height="30px"></p></td>
          <?php };?>
        </tr>
      <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>
<!-- <div class="site-section bg-dark">
  <div class="container" data-aos="fade-up">
    <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
      <h2 class="mb-5">Articles</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
      officia, error reiciendis ab quod?</p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4"><h3 class="text-center visibility-users">Feature</h3></div>
      <div class="col-lg-4 col-md-4"><h3 class="text-center visibility-users">Hype</h3></div>
      <div class="col-lg-4 col-md-4"><h3 class="text-center visibility-users">Review</h3></div>
    </div>
    <div class="row" >      
      <div class="col-lg-4 col-md-4 col-sm-12">   
        <h3 class="text-center visibility-user">Feature</h3>               
        <div class="row-md-4 mt-2">
         <?php foreach($artikelFeatureLimit as $feature):?>
          <div class="card profile-card-5 mt-5">
            <a href="<?php echo site_url('article/view/').$feature['id_artikel'];?>">
              <div class="card-img-block">
                <img class="card-img-top" src="<?php echo base_url('/assets/upload/'.$feature['foto1'])?>"  style=" height: 350px;" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title" title="<?php echo $feature['judul']?>">"<?php echo substr($feature['judul'], 0, 28) . '[..]'; ?>"</h5>
              </div>
            </a>              
          </div>
         <?php endforeach; ?> 
          <div class="mt-3"><center><a href="<?php echo base_url('article/getArtikel/1')?>"><bold>Read More...</bold></a></center></div>  
        </div>
      </div> 
      
      <div class="col-lg-4 col-md-4 col-sm-12">  
        <h3 class="text-center visibility-user">Hype</h3>                  
        <div class="row-md-4 mt-2">
        <?php foreach($artikelHypeLimit as $hype):?>
          <div class="card profile-card-5 mt-5">
            <a href="<?php echo site_url('article/view/').$hype['id_artikel'];?>">
              <div class="card-img-block">
                <img class="card-img-top" src="<?php echo base_url('/assets/upload/'.$hype['foto1'])?>" style=" height: 350px;" alt="Card image cap" >
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title" title="<?php echo $hype['judul']?>">"<?php echo substr( $hype['judul'], 0, 28) . '[..]'; ?>"</h5>
              </div>
            </a>    
          </div>
        <?php endforeach; ?> 
          <div class="mt-3"><center><a href="<?php echo base_url('article/getArtikel/2')?>"><bold>Read More...</bold></a></center></div>  
        </div>
      </div>  

      <div class="col-lg-4 col-md-4 col-sm-12">      
        <h3 class="text-center visibility-user">Review</h3>            
        <div class="row-md-4 mt-2">
        <?php foreach($artikelReviewLimit as $review):?>
          <div class="card profile-card-5 mt-5">
            <a href="<?php echo site_url('article/view/').$review['id_artikel'];?>">
              <div class="card-img-block">
                <img class="card-img-top" src="<?php echo base_url('/assets/upload/'.$review['foto1'])?>" style=" height: 350px;" alt="Card image cap" >
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title" title="<?php echo $review['judul']?>">"<?php echo substr( $review['judul'], 0, 28) . '[..]'; ?>"</h5>
              </div>
            </a>
          </div>
        <?php endforeach; ?> 
          <div class="mt-3"><center><a href="<?php echo base_url('article/getArtikel/3')?>"><bold>Read More...</bold></a></center></div>  
        </div>
      </div>  


    </div>   
  </div>
</div> -->

<div class="site-section bg-dark">
  <div class="container" data-aos="fade-up">
    <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
      <h2 class="mb-5">Articles</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
      officia, error reiciendis ab quod?</p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4"><h3 class="text-center visibility-users">Feature</h3></div>
      <div class="col-lg-4 col-md-4"><h3 class="text-center visibility-users">Hype</h3></div>
      <div class="col-lg-4 col-md-4"><h3 class="text-center visibility-users">Review</h3></div>
    </div>
    <div class="row" >      
      <div class="col-lg-4 col-md-4 col-sm-12">   
        <h3 class="text-center visibility-user">Feature</h3>               
        <div class="row-md-4 mt-2">
         <?php $no=1; foreach($artikelFeatureLimit as $feature):?>
          <div class="kotak">
            <a href="<?php echo site_url('article/view/').$feature['id_artikel'];?>">
              <img  src="<?php echo base_url('/assets/upload/'.$feature['foto1'])?>" alt="Card image cap" >
                <div class="kotak-judul<?php echo $no?>">
                  <p  title="<?php echo $feature['judul']?>"><?php echo strtoupper(substr($feature['judul'], 0, 32)) . '[..]'; ?></p>
                </div>
            </a>
          </div> 
         <?php $no++; endforeach; ?> 
          <div class="mt-3"><center><a href="<?php echo base_url('article/getArtikel/1')?>"><bold>Read More...</bold></a></center></div>  
        </div>
      </div> 
      
      <div class="col-lg-4 col-md-4 col-sm-12">  
        <h3 class="text-center visibility-user">Hype</h3>                  
        <div class="row-md-4 mt-2">
        <?php $no=1; foreach($artikelHypeLimit as $hype):?>
          <div class="kotak">
           <a href="<?php echo site_url('article/view/').$hype['id_artikel'];?>"> 
              <img  src="<?php echo base_url('/assets/upload/'.$hype['foto1'])?>" alt="Card image cap" >
                <div class="kotak-judul<?php echo $no?>">
                  <p  title="<?php echo $hype['judul']?>"><?php echo strtoupper(substr($hype['judul'], 0, 32)) . '[..]'; ?></p>
                </div>
            </a>
          </div> 
        <?php $no++; endforeach; ?> 
          <div class="mt-3"><center><a href="<?php echo base_url('article/getArtikel/2')?>"><bold>Read More...</bold></a></center></div>  
        </div>
      </div>  

      <div class="col-lg-4 col-md-4 col-sm-12">      
        <h3 class="text-center visibility-user">Review</h3>            
        <div class="row-md-4 mt-2">
        <?php $no=1; foreach($artikelReviewLimit as $review):?>
          <div class="kotak">
           <a href="<?php echo site_url('article/view/').$review['id_artikel'];?>"> 
              <img  src="<?php echo base_url('/assets/upload/'.$review['foto1'])?>" alt="Card image cap" >
                <div class="kotak-judul<?php echo $no?>">
                  <p  title="<?php echo $review['judul']?>"><?php echo strtoupper(substr($review['judul'], 0, 32)) . '[..]'; ?></p>
                </div>
            </a>
          </div> 
        <?php $no++; endforeach; ?> 
          <div class="mt-3"><center><a href="<?php echo base_url('article/getArtikel/3')?>"><bold>Read More...</bold></a></center></div>  
        </div>
      </div>  


    </div>   
  </div>
</div>

    <div class="bg-mustard" data-aos="fade">
      <div class="container">
        <div class="row">
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
          <a href="https://www.instagram.com/crast1078fm/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
          <a href="https://twitter.com/CrastFM/" target="_blank"  class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
          <a href="https://www.youtube.com/channel/UCVw2hX3tXPK44WR7a-qXAVg/featured" target="_blank"class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
      </div>
    </div>

    <!-- Script Js Content -->
    <?php
    if (isset($js)) {
      $this->load->view($js);
    }
    ?>