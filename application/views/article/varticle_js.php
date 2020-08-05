<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
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
<script>
		$(document).ready(function(){
			//Mengirimkan Token Keamanan

      $("#submit").click(function(){
        console.log("dkfldsh");
      });
      
	
        
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				var form_data = ;
        console.log(form_data);
				$.ajax({
					url:"http://localhost/podcastilkom/Article/#",
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