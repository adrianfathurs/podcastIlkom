<!-- <div id="aside-main" data-aos="fade-left" >
  <div class="asidebar">
    <div class="wrap-widget">
        <div class="wrap-widget-header">
            <hr>
            <h5 class="text-center text-black"><img class="images-grid" src="<?php echo base_url('./assets/images/grid.png')?>" alt="" width="20px">&nbsp;<strong> Artikel <?php echo $jenisArtikel1 ?></strong></img></h4>
            <hr>
        </div>
        <div class="container pb-3">
          <?php          
              foreach($artikelFeatureLimit  as $feature) :  
            ?>  
          <div class="row mt-2">
                  <div class="col-4"> <img class="card-img-top" src="<?php echo base_url('assets/upload/'.$feature['foto1']) ?>" alt="Card image cap"></div>
                  <div class="col-8"><b><a class="text-color-mustard" href="<?php echo base_url('article/view/').$feature['id_artikel']?>">"<?php echo $feature['judul']; ?>"</a></p></b></div>
          </div>
              <?php endforeach;?>
        </div>
    </div>
    <div class="wrap-widget">
        <div class="wrap-widget-header">
            <hr>
                <h5 class="text-center text-black"><img class="images-grid" src="<?php echo base_url('./assets/images/grid.png')?>" alt="" width="20px">&nbsp;<strong> Artikel <?php echo $jenisArtikel2 ?></strong></img></h4>
            <hr>
        </div>
        <div class="container pb-3">
          <?php 
              foreach($artikelHypeLimit as $hype) :            
            ?>  
          <div class="row mt-2">
            <div class="col-4"> <img class="card-img-top" src="<?php echo base_url('assets/upload/'.$hype['foto1']) ?>" alt="Card image cap"></div>
            <div class="col-8"><b><a class="text-color-mustard" href="<?php echo base_url('article/view/').$hype['id_artikel']?>">"<?php echo $hype['judul']; ?>"</a></b></div>
          </div>
              <?php endforeach;?>
        </div>
    </div>
                
  </div>
</div> -->

<div id="aside-main" data-aos="fade-left">
  <div class="asidebar">
    <div class="">
        <div class="">
            <hr>
            <h5 class="text-center text-white">&nbsp;<strong> Artikel <?php echo $jenisArtikel1 ?></strong></img></h4>
            <hr>
        </div>
        <div class="container pb-3">
          <?php $no=1; foreach($artikelFeatureLimit  as $feature) :  ?>  
          <div class="row mt-2">
            <div class="kotak-asidebar">
              <a href="<?php echo site_url('article/view/').$feature['id_artikel'];?>"> 
                <img  src="<?php echo base_url('/assets/upload/'.$feature['foto1'])?>" alt="Card image cap" >
                  <div class="kotak-judul-asidebar<?php echo $no?>">
                    <p  title="<?php echo $feature['judul']?>"><?php echo strtoupper(substr($feature['judul'], 0, 32)) . '[..]'; ?></p>
                  </div>
              </a>
            </div>       
          </div>
          
              <?php $no++;endforeach;?>
        </div>
    </div>
    <div class="">
        <div class="">
            <hr>
                <h5 class="text-center text-white">&nbsp;<strong> Artikel <?php echo $jenisArtikel2 ?></strong></img></h4>
            <hr>
        </div>
        <div class="container pb-3">
          <?php 
              $no=4; foreach($artikelHypeLimit as $hype) :            
            ?>  
          <div class="row mt-2">
            <div class="kotak-asidebar">
              <a href="<?php echo site_url('article/view/').$hype['id_artikel'];?>"> 
                <img  src="<?php echo base_url('/assets/upload/'.$hype['foto1'])?>" alt="Card image cap" >
                  <div class="kotak-judul-asidebar<?php echo $no?>">
                    <p  title="<?php echo $hype['judul']?>"><?php echo strtoupper(substr($hype['judul'], 0, 32)) . '[..]'; ?></p>
                  </div>
              </a>
            </div>       
          </div>
              <?php $no++;endforeach;?>
        </div>
    </div>
                
  </div>
</div>
