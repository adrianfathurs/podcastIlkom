<head>



<!-- ini yang buat berantakan link bootraps dibawah ini -->
<!--  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --> 

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag asdadadsa ---------->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/article.css">
</head>



<!-- Untuk upload foto thumb nail sebaiknya memiliki lebar 1900px -->
<section>
    <div class="banner-section ">
        <img class="image-carousel-size img-responsive" src="<?php echo base_url('assets/upload/'.$artikel->foto1) ?>"  style="opacity:50%; width: 100%; height: 550px;"  alt="..."></img>
        <div class="container judul-position">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-4">
                    
            </div>
            <div class="col-lg-7 col-md-8 col-sm-4">
                <p class="fontJudul"><?php echo $artikel->judul; ?></p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
                
                </div>
            </div>
        </div>
    </div>

</section>
<section id="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 post-title-block">
                <p class="text-align-justify"><?php echo $kalimat['kalimat1'];?></p>
                <div class="mb-3">
                    <center><img src="<?php echo base_url('assets/upload/'.$artikel->foto2) ?>" class="img-responsive image-size-foto23" ></center>
                </div>
                    <p class="text-align-justify"><?php echo $kalimat['kalimat2']; ?></p>
            
                <div class=" ">
                    <center><img src="<?php echo base_url('assets/upload/'.$artikel->foto2) ?>" class="img-responsive image-size-foto23" ></center>
                </div>
            </div>
    </div> <!-- /container -->
</section>

<?php if (isset($asidebar)) {
    $this->load->view($asidebar);
}
?>   
<div>
    <h1>Komentar</h1>
</div>


    