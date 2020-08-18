<head>
<!-- ini yang buat berantakan link bootraps dibawah ini -->
<!--  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet"> 
<!------ Include the above in your HEAD tag asdadadsa ---------->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/article.css"> -->
</head>


<!-- Untuk upload foto thumb nail sebaiknya memiliki lebar 1900px -->
<section>    
    <div class="banner-section mb-5 " data-aos="fade-down">
        <img class="image-carousel-size img-responsive" src="<?php echo base_url('assets/upload/'.$artikel->foto1) ?>"  style=" width: 100%; max-height: 550px;"  alt="..."></img>
        
                <p class="fontJudul"><?php echo $artikel->judul; ?></p>
                <p>Uploaded By <?php echo $artikel->username; ?></p>
                <p><?php echo $artikel->create_at; ?></p>
                <hr>
    </div>
</section>
<section  id="main-wrapper" data-aos="fade-up">
    
    <div class="container">
        <div class="row">
            <div id="text" class="col-lg-9 col-md-9 col-sm-12 post-title-block text-white">
                <label class="essay text-align-justify"><?php echo $artikel->essay;?></label>
                <div class="mb-3">
                    <center><img src="<?php echo base_url('assets/upload/'.$artikel->foto2) ?>" class="img-responsive image-size-foto23" ></center>
                </div>
                    <label id="essay" class="essay text-align-justify"><?php echo $artikel->essay2; ?></label>
            
                <div class=" ">
                    <center><img src="<?php echo base_url('assets/upload/'.$artikel->foto3) ?>" class="img-responsive image-size-foto23" ></center>
                </div>
                <label class="essay text-align-justify"><?php echo $artikel->essay3; ?></label>
            </div>
    </div> <!-- /container -->
   
</section>

<?php if (isset($asidebar)) {
    $this->load->view($asidebar);
}
?> 

<section class="bg-komentar container mb-3 text-white " data-aos="fade-up">
    <h3>KOMENTAR :</h3>
    <hr>
    <?php


?>


        <form method="POST" id="form_komen" action="<?php echo base_url('article/tambahKomen')?>">
			<div class="form-group ">
				<input type="text" name="namaPengirim" id="namaPengirim" class="form-control " style="background-color:white" required=""  placeholder="Masukkan Nama" />
			</div>
			<div class="form-group text-white">
				<input type="email" name="email" id="email" class="form-control" style="background-color:white" required="" placeholder="Masukkan Email" />
			</div>
			<div class="form-group text-white">
				<textarea name="komen" id="komen" class="form-control" required="" style="background-color:white" placeholder="Tulis Komentar" rows="5"></textarea>
                <small class="text-gray-100">Tersisa : <span id="hitung">150</span> Karakter</small>
			</div>
			<div class="form-group">
                <input type="hidden" name="idArtikel" id="idArtikel" value="<?php echo $idArtikel?>" />
			</div>
				<button type="submit" name="btnSubmit" id="btnSubmit" value="submit" class="btn btn-info">Komentar</button>
		</form>
		<hr>
		<h4 class="mb-3 text-white">Komentar :</h4>
<?php if ($jumlahidkomentar !=0){ foreach ($komentar as $key) :?>        
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-2" id="image-komentar">
         <?php if($key['simbol']==1 || $key['simbol']==2 ){?>
      <img  class="card-img" src="<?php echo base_url('assets/images/admin.png')?>"  alt="Komentar Admin">
      <?php } else{?>
        <img class="card-img" src="<?php echo base_url('assets/images/2-users.png')?>" alt="Komentar User">
        <?php }?>
            
    </div>
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title text-black pl-3"><strong><?php echo $key['username']?></strong></h5>
        
        <p class="card-text text-black text-align-justify  pl-3"><span class="text-grey">Comment :</span><?php echo $key['komentar']?></p>
      </div>
    </div>
  </div>
</div>
<?php endforeach; } ?>


        <span id="message"></span>
	   	<div id="display_comment"></div>
</section>


    