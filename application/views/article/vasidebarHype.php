<div id="aside-main" >
  <div class="asidebar">
    <div class="wrap-widget">
      <h4 class="text-center"><img class="images-grid" src="<?php echo base_url('./assets/images/grid.png')?>" alt="" width="20px">&nbsp;<strong> Article Hype</strong></img></h4>
       <hr>
        <div class="container">
          <?php 
              foreach($artikel as $tikel) :            
            ?>  
          <div class="row mt-2">
            <div class="col-4"> <img class="card-img-top" src="<?php echo base_url('assets/upload/'.$tikel->foto1) ?>" alt="Card image cap"></div>
            <div class="col-8"><b><p>"<?php echo $tikel->judul; ?>"</p></b></div>
          </div>
              <?php endforeach;?>
        </div>
    </div>
                
  </div>
</div>