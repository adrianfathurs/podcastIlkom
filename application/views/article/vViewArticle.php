<head>
<!-- ini yang buat berantakan link bootraps dibawah ini -->
<!--  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag asdadadsa ---------->
</head>
<section class="banner-section">                    
    <img class="image-carousel-size" src="<?php echo base_url('assets/upload/'.$artikel->foto1) ?>"  style="width: 100%; height: 550px;"  alt="...">
</section>
<section class="post-content-section" id="main-section"> 
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
               
                <h1 class="text-center"><?php echo $artikel->judul; ?></h1>
                <ul class="list-inline text-center">
                    <!-- <li>Author |</li>
                    <li>Category |</li>
                    <li>Date |</li> -->
                </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <p class="lead"><?php echo $kalimat['kalimat1']; ?></p>
                 <div class="well ">
                    <large><img src="<?php echo base_url('assets/upload/'.$artikel->foto2) ?>" class="img-responsive" ></large>
                </div>
                    <p><?php echo $kalimat['kalimat2']; ?></p>
               

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
            
      

    </div> <!-- /container -->
</section>
<section>

</section>
<div class="container">

<div class="container mb-3">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Contoh Komentar PHP Ajax</h2><hr>
		<form method="POST" id="form_komen">
			<div class="form-group">
				<input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Nama" />
			</div>
            <div class="form-group">
				<input type="text" name="username" id="email" class="form-control" placeholder="Masukkan Email" />
			</div>
			<div class="form-group">
				<textarea name="komentar" id="komen" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
			</div>
			<div class="form-group">
				<input type="hidden" name="komentar_id" id="komentar_id" value="0" />
				<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submits" />
			</div>
		</form>
		<hr>
		<h4 class="mb-3">Komentar :</h4>
		<span id="message"></span>
	   
	   	<div id="display_comment"></div>
	</div>
</div>
      