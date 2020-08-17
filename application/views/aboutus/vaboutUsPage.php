<!-- Script css content -->

<?php
if (isset($css)) {
  $this->load->view($css);
}
?>

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

<div id="main-wrapper">
   <h2 class="text-white">About Us</h2>
   <div> Created <span>|</span> By : Admin <span>|</span></div>
   <hr>
   <br>
   <center><h3 class="text-white"><b><span>-- </span> CRAST FM <span> --</span></b></h3></center>
   <br>
   <p class="text-justify text-white text-arvo">&nbsp;&nbsp;Crast FM merupakan sebuah radio komunitas milik Ilmu Komunikasi Universitas
Pembangunan Nasional “Veteran” Yogyakarta. Radio ini berdiri pada 14 Mei 2003 di
Babarsari, Sleman, Yogyakarta (Kampus II UPN “Veteran” Yogyakarta). Tagline dari Crast
sendiri adalah Smart People Think Different. Crast FM memiliki pendengar setia yang biasa
dipanggil dengan sebutan Smart Listener.</p>
<p class="text-justify text-white text-arvo">&nbsp;&nbsp;Sebagai radio komunitas dengan mahasiswa dan anak muda sebagai sasaran pendengarnya,
Crast FM menyajikan berbagai informasi mengenai dunia musik, hiburan, gaya hidup, dan
informasi menarik lainnya. Selain itu, Crast FM juga menempatkan diri sebagai media
kampus Universitas Pembangunan Nasional “Veteran” Yogyakarta, dengan memberitakan
informasi seputar kampus pada program Speaker dan mengundang narasumber dari kampus
pada program Breakdown. Crast FM mengudara dari Senin sampai Jum’at, mulai pukul
08.00-15.00. Berbagai program siaran yang dimiliki oleh Crast FM diantaranya, Morning
Sunshine, Crast Hour, Speaker Traffic Zone, dan Breakdown.</p>
<p class="text-justify text-white text-arvo">&nbsp;&nbsp;Kini, Crast FM tidak hanya mengudara melalui kanal terestrial di 107.8 Fm. Crast FM sudah
merambah secara streaming melalui platform milik Jogjastreamers.com. Melalui layanan
streaming jangkauan siaran Crast FM tidak terbatas pada wilayah Daerah Istimewa
Yogyakarta. Kini, Smart Listeners dapat mendengarkan Crast FM hingga berbagai penjuru
dunia. Tidak hanya itu, Crast FM juga menyapa Smart Listeners melalui melalui media
sosialnya yaitu Instagram, Youtube, dan Twitter.</p>
</div>

<?php
if (isset($asidebar)) {
    $this->load->view($asidebar);
}
?>

<div class="clc"></div>


<div class="bg-mustard" data-aos="fade">
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