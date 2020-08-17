

<?php
        $this->load->view('template/header.php');		
		?>
  <?php
	if (isset($css)) {
		$this->load->view($css);
	}
	?>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->

	
			
			<div class="container-fluid" >
				<!-- Content here-->
				<?php if (isset($content)) {
					$this->load->view($content);
				}
				?>
			</div>
			
		
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
	
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
        <!-- ============================================================== -->
        
	
	
	<div class="clr"></div>


<div class="bg-mustard" data-aos="fade">
  <div class="container">
    <div class="row">
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
      <a href="https://www.twitter.com/CrastFM/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
      <a href="https://www.instagram.com/crast1078fm/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
      <a href=""   class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
      <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
    </div>
  </div>
</div>

            <?php $this->load->view('template/footer.php'); ?>
			
	
