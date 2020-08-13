<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        
     


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


<script>
	$('.remove').on('click', function(e){
		e.preventDefault();
		const href = $(this).attr('href');

		Swal.fire({
				title: 'Apakah Anda Yakin ?',
				text: "Anda akan menghapus Artikel Ini",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#DD6B55',
				confirmButtonText: 'Ya, Hapus!'
				}).then((result) => {
				if (result.value) {
					document.location.href = href;
				}
		});
    });
	function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("foto1").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };

  function previewImage2() {
    document.getElementById("image-preview2").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("foto2").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview2").src = oFREvent.target.result;
    };
  };

  function previewImage3() {
    document.getElementById("image-preview3").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("foto3").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview3").src = oFREvent.target.result;
    };
  };
  
</script>
