<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<link rel="shortcut icon" href="assets/images/lambang_crast.png" width="20px">
	<title>Crast Radio FM</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/lambang_crast.png">
	
	<!-- CSS tambahan untuk halaman tertentu -->
	<?php
	if (isset($css)) {
		$this->load->view($css);
	}
	?>
	<!-- Custom CSS -->
	<link href="<?php echo base_url() ?>assets/css/style.min.css" rel="stylesheet">
    
</head>

<body class="container bg-light" >

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper bg-trans">
        <div class="site-section ">
		<?php
        $this->load->view('template/header.php');		
		?>
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div >			
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->
			<div class="container-fluid" >
				<!-- Content here-->
				<?php if (isset($content)) {
					$this->load->view($content);
				}
				?>
			</div>
			<footer class="footer text-center">
            <?php $this->load->view('template/footer.php'); ?>
			</footer>
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
        <!-- ============================================================== -->
        </div>
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Customizer Panel -->
	<!-- ============================================================== -->	
	<div class="chat-windows"></div>
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<!-- apps -->
	<script src="<?php echo base_url() ?>assets/js/app.min.js"></script>
	<!-- Theme settings -->
	<script src="<?php echo base_url() ?>assets/js/app.init.horizontal.js"></script>
	<script src="<?php echo base_url() ?>assets/js/app-style-switcher.horizontal.js"></script>
	<!-- slimscrollbar scrollbar JavaScript -->
	<script src="<?php echo base_url() ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/sparkline.js"></script>
	<!--Wave Effects -->
	<script src="<?php echo base_url() ?>assets/js/waves.js"></script>
	<!--Menu sidebar -->
	<script src="<?php echo base_url() ?>assets/js/sidebarmenu.js"></script>
	<!--Custom JavaScript -->
	<script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
	<!--Javascript tambahan untuk halaman tertentu -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.PrintArea.js"></script>
    <script>
    $(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>
	<?php
	
	if (isset($js)) {
		
		$this->load->view($js);
	}
	?>

</body>

</html>
