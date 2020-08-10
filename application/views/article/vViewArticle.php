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
                    <center><img src="<?php echo base_url('assets/upload/'.$artikel->foto3) ?>" class="img-responsive image-size-foto23" ></center>
                </div>
            </div>
    </div> <!-- /container -->
</section>

<?php if (isset($asidebar)) {
    $this->load->view($asidebar);
}
?> 

<section class="container mb-3">

<div class="alert alert-success" id="alert" role="alert"></div>
		
        <form method="POST" id="form_komen" action="<?php echo base_url('article/tambahKomen')?>">
			<div class="form-group ">
				<input type="text" name="namaPengirim" id="namaPengirim" class="form-control text-white" placeholder="Masukkan Nama" />
				
			</div>
			<div class="form-group text-white">
				<input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" />
			</div>
			<div class="form-group text-white">
				<textarea name="komen" id="komen" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
			</div>
			<div class="form-group">
				<input type="hidden" name="idArtikel" id="idArtikel" value="<?php echo $idArtikel?>" />
				<button type="submit" name="submit" id="btnSubmit"  class="btn btn-info">Komentar</button>
			</div>
		</form>
		<hr>
		<h4 class="mb-3">Komentar :</h4>
<?php if ($jumlahidkomentar !=0){ foreach ($komentar as $key) :?>        
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-2">
         <?php if($role==1){?>
      <img  class="card-img" src="<?php echo base_url('assets/images/avatar04.png')?>" style="width:100px;height:50px;" alt="Komentar Admin">
      <?php } elseif ($role==2) {?>
        <img class="card-img" src="<?php echo base_url('assets/images/avatar.png')?>" style="width:50px;height:50px;" alt="Komentar Member">
        <?php } else{?>
            <img class="card-img" src="<?php echo base_url('assets/images/avatar2.png')?>" style="width:50px;height:50px;" alt="Komentar User">
             <?php }?>
    </div>
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title text-black"><?php echo $key['username']?></h5>
        <p class="card-text text-black"><?php echo $key['komentar']?></p>
      </div>
    </div>
  </div>
</div>
<?php endforeach; } ?>


        <span id="message"></span>
	   	<div id="display_comment"></div>
</section>


    