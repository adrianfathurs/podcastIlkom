<div id="aside-main" data-aos="fade-left">
  <div class="asidebar">
    <div class="wrap-widget">
        <div class="wrap-widget-header">
            <hr>
            <h5 class="text-center"><img class="images-grid" src="<?php echo base_url('./assets/images/grid.png')?>" alt="" width="20px">&nbsp;<strong>  <?php echo $jenisArtikel1 ?></strong></img></h4>
            <hr>
        </div>
        <div class="container pb-3">
            <?php foreach ($linkPlaylist as $LP) :?>
                <iframe  id="click-embed-podcrast"  width= "220px" height="120px" src="https://open.spotify.com/embed/episode/<?php echo $LP['link_spotify']; ?> " frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>  
            <?php endforeach;?> 
        </div>
    </div>      
  </div>
</div>