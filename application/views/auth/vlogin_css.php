<script type="text/javascript">
<script src="<?php  echo base_url() ?>includes/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php  echo base_url() ?>includes/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php  echo base_url() ?>includes/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
	$('[data-toggle="tooltip"]').tooltip();
	$(".preloader").fadeOut();
	// ==============================================================
	// Login and Recover Password
	// ==============================================================
	$('#to-recover').on("click", function() {
		$("#loginform").slideUp();
		$("#recoverform").fadeIn();
	});


	$(function() {
		// Cek apakah antara password dan confirm-password sama atau tidak
		$('#password, #confirm-password').on('keyup', function () {
			if ($('#password').val() !== $('#confirm-password').val()) {
				$('#message').html('Password berbeda');
				$('#message').addClass('alert-danger p-2');
				$('#btn-submit').prop('disabled', true);
			} else {
				$('#message').html('');
				$('#message').removeClass('alert-danger p-2');
				$('#btn-submit').prop('disabled', false);
			}
		});
	});
</script>