<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/homearticle.css">

<section>
        <div class="container">
            <div class="row">
            <div id="content">
            <?php for($i=0;$i<3;$i++){ ?>
            <div class="col-md-4 mt-4">
            <ul>                
                <li>
                <a >
                <div class="card profile-card-5">
                    <a href="#">
                    <div class="card-img-block">
    		            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Kolom 1</h5></a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                </li>         
                </a>         
                <li>
                <div class="card profile-card-5">
                    <a href="#">
                    <div class="card-img-block">
    		            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Kolom 2</h5></a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                </li>                  
                
                <li>
                <div class="card profile-card-5">
                    <a href="#">
                    <div class="card-img-block">
    		            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Kolom 3</h5></a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                </li>                  
                                                                      
            </ul>
            <?php } ?>    
            </div>      
            </div>   
            </div>   
        </div>
</section>        

        