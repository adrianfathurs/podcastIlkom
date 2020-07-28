<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		var typeNotif = '<?php echo $this->session->userdata('typeNotif'); ?>';
		switch (typeNotif) {
			case 'gagalUpload1':
				$('#alerttitle').text("Foto 1 Gagal Diupload");
				$('#alerttitle').addClass("tx-danger");
				$('#alerttype').addClass("alert-danger");
				$('#alerticon').addClass("ion-ios-close tx-danger");
				break;
			case 'gagalUpload2':
				$('#alerttitle').text("Foto 2 Gagal Diupload");
				$('#alerttitle').addClass("tx-danger");
				$('#alerttype').addClass("alert-danger");
				$('#alerticon').addClass("ion-ios-close tx-danger");
				break;
			case 'gagalUpload3':
				$('#alerttitle').text("Foto 3 Gagal Diupload");
				$('#alerttitle').addClass("tx-danger");
				$('#alerttype').addClass("alert-danger");
				$('#alerticon').addClass("ion-ios-close tx-danger");
				break;
							
		}
		<?php $this->session->set_userdata('typeNotif', ''); ?>
	});
</script>
