<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<section class="banner-section">
    <img class="image-carousel-size" src="<?php echo base_url('assets/upload/'.$artikel->foto1) ?>"  style="width: 100%; height: 550px;"  alt="...">
</section>
<section class="post-content-section">
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
               

                 <div class="image-block">
                 <blockquote>
                 <img src="<?php echo base_url('assets/upload/'.$artikel->foto3) ?>" class="img-responsive" >
                </blockquote>
                    
                 </div>

                    

             </div>
            
      

    </div> <!-- /container -->
</section>
      