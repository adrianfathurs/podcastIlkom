<head>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/article.css">
</head>
<section id="main-wrapper" data-aos="fade-up">
    <div class="container">
        <div class="row">                    
                  
      </div>
    	<div class="row">
   <h1 class="text-center" style="color:#ffffff"><span>CRAST FM <?php echo $judul;?></span></h1>
    	    <?php 
              foreach($event as $ev) :            
            ?>              		
    		<div class="col-md-4 mt-4  ">
    		    <div class="card profile-card-5 text-black">
                    <a href="<?php echo base_url('event/viewEvent/').$ev['id_event'] ?>">
                    <div class="card-img-block">
    		            <img class="card-img-tops" src="<?php echo base_url('assets/event/'.$ev['foto']) ?>" style=" max-height: 550px;" alt="Card image cap">
    		            </div>
                    
            </div>
                <br>
    		</div>                      
        <?php endforeach; ?>            
    	</div>
    </div>
    
</section> 



<?php if (isset($asidebar)) {
					$this->load->view($asidebar);
				}
?>   