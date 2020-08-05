<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script>
$(document).ready(function(){
			//Mengirimkan Token Keamanan			
        
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				var form_data = $(this).serialize();
				$.ajax({
					url:'<?php echo base_url('Article/addComment/') ?>',
					method:"POST",
					data:form_data,
					success:function(data){
						$('#form_komen')[0].reset();
						$('#komentar_id').val('0');
						load_comment();
					}, error: function(data) {
		            	console.log(data.responseText)
		            }
				})
			});

			load_comment();

			function load_comment(){
				$.ajax({
					url:"ambil_komentar.php",
					method:"POST",
					success:function(data){
						$('#display_comment').html(data);
					}, error: function(data) {
		            	console.log(data.responseText)
		            }
				})
			}

			$(document).on('click', '.reply', function(){
				var komentar_id = $(this).attr("id");
				$('#komentar_id').val(komentar_id);
				$('#nama_pengirim').focus();
			});
		});
</script>