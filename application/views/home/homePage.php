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

    <div class="carousel-item active" data-interval="10000">
      <img class="image-carousel-size" src="assets/images/hero_bg_1.jpg"  style="width: 100%; height: 550px;"  alt="...">


      <h1 class="mb-4">Turn On The Feeling With Music</h1>
      <p><a href="#" class="btn btn-primary px-4 py-3">About Us</a></p>
      
    </img>
  </div>

  <div class="carousel-item " data-interval="2000">
    <img class="image-carousel-size" src="assets/images/img_2.jpg" style="width: 1280px; height: 550px;"   alt="...">
    <h1 class="mb-4">Turn On The Feeling With Music</h1>
    <p><a href="#" class="btn btn-primary px-4 py-3">About Us</a></p>
  </img>
</div>

<div class="carousel-item ">
  <img class="image-carousel-size" src="assets/images/img_3.jpg" style="width: 1200px; height: 550px;"  alt="...">
  <h1 class="mb-4">Turn On The Feeling With Music</h1>
  <p><a href="#" class="btn btn-primary px-4 py-3">About Us</a></p>
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

<div class="container-fluid container-margin bg-dark"> 
  <div class="row">
    <div class="col-md-2">
      <!-- KOSONG -->
    </div>
    <div class="col-md-6">
      <div class="row">
        <h1 class="animated infinite bounce animated.slow tengah">HELLO FROM CRASTFM</h1>
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
        <iframe class ="youtube-place" width="398" height="200" src="https://www.youtube.com/embed/videoseries?list=PLY1KVBn1ubF53_D9EWM2syCRkFjGSDXiw" frameborder="0" allow="autoplay; encrypted-media" alt="PlaylistYoutube" allowfullscreen></iframe>

      </div>
    </div>
    <div class="row mt-2">
      <div class="card " style="width: 25rem;">
        <h3 class="card-header  bg-secondary mb-2 px-1 text-black">PodCrast <img class="animated infinite jello"src="assets/images/logo_podcrast-2.png" width="50px" height="50px" alt="" loading="lazy" alt="PODCRAST" > </h3>
        <!-- Link buat menampilkan playlist spotify -->
        <iframe class= "px-4 card-podcrast"src="https://open.spotify.com/embed/playlist/1Vs0AmVOfmGza5oYf3Ox1B" width="390px" height="100px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> 
      </div>
    </div>  

  </div>
</div>



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
              <img class="mySlides" src='assets/images/img_3.jpg'  width="300px;" height="300px;">
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
              <img class="mySlides" src='assets/images/img_2.jpg'  width="300px;" height="300px;">
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
              <img class="mySlides" src='assets/images/img_1.jpg'  width="300px;" height="300px;">
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
              <img class="mySlides" src='assets/images/img_1.jpg'  width="300px;" height="300px;">
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
            <img class="mySlides" src='assets/images/img_2.jpg'  width="300px;" height="300px;">
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
          <img class="mySlides" src='assets/images/img_3.jpg'  width="300px;" height="300px;">
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
        <div class="col">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src='assets/images/img_3.jpg' style="cursor:pointer" onclick="currentDiv(1)">
        </div>
        <div class="col">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src="assets/images/img_2.jpg" style="cursor:pointer" onclick="currentDiv(2)">
        </div>
        <div class="col">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src="assets/images/img_1.jpg" style="cursor:pointer" onclick="currentDiv(3)">
        </div>
        <div class="col">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src='assets/images/img_1.jpg' style="cursor:pointer" onclick="currentDiv(4)">
        </div>
        <div class="col">
          <img class="demo w3-opacity w3-hover-opacity-off image-size-second-carousel" src="assets/images/img_2.jpg" style="cursor:pointer" onclick="currentDiv(5)">
        </div>
        <div class="col">
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
          <th  scope="col" class="visibility2">Chart Number</th>
          <th  scope="col" class="visibility2">Song Title</th>
          <th  scope="col" class="visibility2">Play</th>
          <th  scope="col" class="visibility1">Song Artist</th>
          <th  scope="col" class="visibility1">Song Genre</th>
          <th  scope="col" class="visibility1">Chart Category</th>
          <th  scope="col" class="visibility1">Chart Status</th>
        </tr>  
      </thead>
      <tbody>
        <tr>
           <td  class="visibility2">1</td>
            <td class="visibility2">Mark</td>
            <td class="visibility2"><iframe class= "px-4 card-podcrast"src="https://open.spotify.com/embed/track/7ytR5pFWmSjzHJIeQkgog4?si=cpla3_ZWR1SLBGLtx89NlA" width="120px" height="75px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> </td>
            <td class="visibility1">Otto</td>
            <td class="visibility1">@mdo</td>
            <td class="visibility1">@mdo</td>
            <td class="visibility1">@mdo</td>
        </tr>
        <tr>
           <td  class="visibility2">2</td>
            <td class="visibility2">Mark</td>
            <td class="visibility2"><iframe class= "px-4 card-podcrast"src="https://open.spotify.com/embed/track/7ytR5pFWmSjzHJIeQkgog4?si=cpla3_ZWR1SLBGLtx89NlA" width="120px" height="75px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> </td>
            <td class="visibility1">Otto</td>
            <td class="visibility1">@mdo</td>
            <td class="visibility1">@mdo</td>
            <td class="visibility1">@mdo</td>
        </tr>
        <tr>
           <td  class="visibility2">2</td>
            <td class="visibility2">Mark</td>
            <td class="visibility2"><iframe class= "px-4 card-podcrast"src="https://open.spotify.com/embed/track/7ytR5pFWmSjzHJIeQkgog4?si=cpla3_ZWR1SLBGLtx89NlA" width="120px" height="75px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> </td>
            <td class="visibility1">Otto</td>
            <td class="visibility1">@mdo</td>
            <td class="visibility1">@mdo</td>
            <td class="visibility1">@mdo</td>
        </tr>
        <!-- <tr>
          <th scope="row">2</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
         <tr>
          <th scope="row">3</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
         <tr>
          <th scope="row">5</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
         <tr>
          <th scope="row">7</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
         <tr>
          <th scope="row">9</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr> -->
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
  <div class="container">
    <div class="row">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
        <h2 class="mb-5">News &amp; Events</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
        <a href="single.html"><img src="assets/images/img_4.jpg" alt="Image" class="img-fluid"></a>
        <div class="p-4 bg-white">
          <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
          <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>

        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
        <a href="single.html"><img src="assets/images/img_2.jpg" alt="Image" class="img-fluid"></a>
        <div class="p-4 bg-white">
          <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
          <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>

        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
        <a href="single.html"><img src="assets/images/img_3.jpg" alt="Image" class="img-fluid"></a>
        <div class="p-4 bg-white">
          <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
          <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-primary" data-aos="fade">
  <div class="container">
    <div class="row">
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
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