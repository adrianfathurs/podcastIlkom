<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/article.css">
</head>
<section id="main-wrapper">
    <div class="container">
      <?php if (!empty($id)) : ?>
        <div class="row">                    
                    <div class="col-md">
                        <div class="text-right">                        
                        <a href="<?php echo base_url('article/insert/') ?>" class="btn waves-effect waves-light btn-success">Tambah</a>
                        </div>
                    </div>
                </div>
      <?php endif; ?>
    	<div class="row">
    	    <h1 class="text-center"><span>Article About <?php echo $judul ?></span></h1>
    	    <?php 
              foreach($loker as $art) :            
            ?>              		
    		<div class="col-md-4 mt-4  ">
    		    <div class="card profile-card-5">
                    <a href="<?php echo base_url('article/view/').$art->id_artikel ?>">
                    <div class="card-img-block">
    		            <img class="card-img-tops" src="<?php echo base_url('assets/upload/'.$art->foto1) ?>" style=" height: 550px;" alt="Card image cap">
    		            </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title"><?php echo $art->judul; ?></h5></a>
                    <p class="card-text"><?php echo substr($art->essay, 0, 100) . '...'; ?></p>
                  </div>
                </div>
                <?php if (!empty($id)) : ?>
                <a href="<?php echo base_url('article/update/').$art->id_artikel?>" class="btn waves-effect waves-light btn-warning">Edit</a>                                             
                <a href="<?php echo base_url('article/delete/').$art->id_artikel?>" class="btn btn-danger remove">Hapus</a> 
                <?php endif; ?>
    		</div>                      
        <?php endforeach; ?>            
    	</div>
    </div>
    <div class="center-align">
            <?php echo $this->pagination->create_links(); ?>
          </div>
</section> 
<?php if (isset($asidebar)) {
					$this->load->view($asidebar);
				}
?>   
