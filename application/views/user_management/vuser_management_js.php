<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js" ></script>
<script src="<?php echo base_url() ?>assets/js/datatables.min.js" ></script>
<script src="<?php echo base_url() ?>assets/js/datatable-basic.init.js" ></script>
<!-- Custom script -->
<script type="text/javascript">

$(document).on('click', '.open-modal', function () {
			var id			= $(this).data('id');
			var password		= $(this).data('password');
			var username	= $(this).data('username');
			var email		= $(this).data('email');
			var role		= $(this).data('role');
			var link		= '<?php echo base_url('user_management/update/') ?>' + id;
			

			$("#modal-id").val(id);
			$("#modal-password").val(password);
			$("#modal-username").val(username);
			$("#modal-email").val(email);
			$("#select-role").val(role);
			$('#form-modal-edit').attr('action', link);
			$('#modal-name-edit').text(username);
						
		});
	$('.remove').on('click', function(e){
		e.preventDefault();
		const href = $(this).attr('href');

		Swal.fire({
				title: 'Apakah Anda Yakin ?',
				text: "Anda akan menonaktifkan Akun Ini",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#DD6B55',
				confirmButtonText: 'Ya, Nonaktifkan!'
				}).then((result) => {
				if (result.value) {
					document.location.href = href;
				}
		});
    });
	$('.active').on('click', function(e){
		e.preventDefault();
		const href = $(this).attr('href');

		Swal.fire({
				title: 'Apakah Anda Yakin ?',
				text: "Anda akan mengaktifkan Akun Ini",
				icon: 'succes',
				showCancelButton: true,
				confirmButtonColor: '#7cbd1e',
				confirmButtonText: 'Ya, Aktifkan!'
				}).then((result) => {
				if (result.value) {
					document.location.href = href;
				}
		});
    });
$("[data-tt=tooltip").tooltip();

</script>
