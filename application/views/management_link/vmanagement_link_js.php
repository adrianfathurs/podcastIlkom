
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/datatables.min.js" ></script>
<script src="<?php echo base_url() ?>assets/js/datatable-basic.init.js" ></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){


$(document).on('click', '.open-modal', function () {
			var id			= $(this).data('id');
			var judul		= $(this).data('judul');
			var links	    = $(this).data('link');
			var genre		= $(this).data('genre');
            var artis		= $(this).data('artis');
            var kategori	= $(this).data('kategori');
            var status		= $(this).data('status');
			var link		= '<?php echo base_url('management_link/update/') ?>' + id;
			

			$("#modal-id").val(id);
			$("#modal-judul").val(judul);
			$("#modal-links").val(links);
			$("#modal-genre").val(genre);
            $("#modal-artis").val(artis);
            $("#modal-kategori").val(kategori);
			$("#select-status").val(status);					
			$('#form-modal-edit').attr('action', link);
			$('#modal-name-edit').text(judul);
						
		});
	
	});

</script>
