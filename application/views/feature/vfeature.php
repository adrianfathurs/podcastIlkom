<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/article.css">
</head>
<section>
    <div class="container">
    	<div class="row">
    	    <h1 class="text-center"><span>Article About Feature</span></h1>
    	    <?php for ($i = 0; $i < 10; $i++){    ?>    		
    		<div class="col-md-4 mt-4">
    		    <div class="card profile-card-5">
                    <a href="#">
                    <div class="card-img-block">
    		            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Florence Garza</h5></a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                
    		</div>
            <?php } ?>
    	</div>
    </div>
</section>    