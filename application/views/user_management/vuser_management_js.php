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

$("[data-tt=tooltip").tooltip();

</script>
