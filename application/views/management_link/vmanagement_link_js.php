
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/datatables.min.js" ></script>
<script src="<?php echo base_url() ?>assets/js/datatable-basic.init.js" ></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){


$(document).on('click', '.open-modal', function () {
			var id			= $(this).data('id');
			var id_ytb		= $(this).data('id');

			var id_spt		= $(this).data('id_spt');
			var linkspt		= $(this).data('link_spt');
			var rolespt		= $(this).data('rolespt');

			var judul		= $(this).data('judul');
			var links	    = $(this).data('link');
			var genre		= $(this).data('genre');
            var artis		= $(this).data('artis');
            var kategori	= $(this).data('kategori');
            var status		= $(this).data('status');

			var link		= '<?php echo base_url('management_link/update/') ?>' + id;
			var link_ytb		= '<?php echo base_url('management_link/update_ytb/') ?>' + 1;
			var link_spt		= '<?php echo base_url('management_link/update_spt/') ?>' + id_spt;
			


			$("#modal-id").val(id);
			$("#modal-judul").val(judul);
			$("#modal-links").val(links);
			$("#modal-genre").val(genre);
            $("#modal-artis").val(artis);
            $("#modal-kate").val(kategori);
			$("#select-status").val(status);					
			$('#form-modal-edit').attr('action', link);
			$('#modal-name-edit').text(judul);

			if(kategori == '1'){
			$('#modal-name-edits').text("PlayList Lagu");
			}else{
			$('#modal-name-edits').text("PlayList PodCrast");
			}
			
			$("#modal-linkspt").val(linkspt);
			$("#modal-kategori").val(linkspt);
						
			$('#form-modal-edit-ytb').attr('action', link_ytb);
			$('#form-modal-edit-spt').attr('action', link_spt);
		});
	
	});

</script>

