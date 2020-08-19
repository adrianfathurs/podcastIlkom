<head>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<section id="main-wrapper" data-aos="fade-up">
        <div class="judul-center">
            <p id="judulEvent" class="text-center" style="color:#ffffff"><span>CRAST FM EVENTS</span></p>
            
        </div>
        
        <?php foreach ($event as $ev) :?>
        <p id="judulEvent2" class="text-center" style="color:#ffffff"><span><?php echo $ev['judul']?></span></p>
        <div id="imageEvent">
            <center><img class="image-responsive" src="<?php echo base_url('assets/event/').$ev['foto']?>" width="940px" height="600px" alt="<?php echo $ev['judul'] ?>"></center>
        </div>
        
        <div id="keterangan">
            <p>Keterangan : <?php echo $ev['keterangan']?></p>    
        </div>
        <?php endforeach;?>
</section> 



<?php if (isset($asidebar)) {
					$this->load->view($asidebar);
				}
?>   