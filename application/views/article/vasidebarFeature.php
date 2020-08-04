<div id="aside-main" >
  <div class="asidebar">
    <div class="wrap-widget">
      <h4 class="text-center"><img class="images-grid" src="<?php echo base_url('./assets/images/grid.png')?>" alt="" width="20px">&nbsp;<strong> <?php echo $jenisArtikel1 ?></strong></img></h4>
       <hr>
        <div class="container">
          <?php          
              foreach($artikelHypeLimit  as $hype) :  
            ?>  
          <div class="row mt-2">
            <div class="col-4"> <img class="card-img-top" src="<?php echo base_url('assets/upload/'.$hype['foto1']) ?>" alt="Card image cap"></div>
            <div class="col-8"><b><p>"<?php echo $hype['judul']; ?>"</p></b></div>
          </div>
              <?php endforeach;?>
        </div>
    </div>
    <div class="wrap-widget">
    <h4 class="text-center"><img class="images-grid" src="<?php echo base_url('./assets/images/grid.png')?>" alt="" width="20px">&nbsp;<strong> <?php echo $jenisArtikel2 ?></strong></img></h4>
       <hr>
        <div class="container">
          <?php 
              foreach($artikelReviewLimit as $Review) :            
            ?>  
          <div class="row mt-2">
            <div class="col-4"> <img class="card-img-top" src="<?php echo base_url('assets/upload/'.$Review['foto1']) ?>" alt="Card image cap"></div>
            <div class="col-8"><b><p>"<?php echo $Review['judul']; ?>"</p></b></div>
          </div>
              <?php endforeach;?>
        </div>
    </div>
                
  </div>
</div>