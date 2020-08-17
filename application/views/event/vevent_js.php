<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        
<script>
    $(document).on("click",'#btnHapus',function(){
        var idEvent=$(this).data('id');
         $(".modal-footer #formHapus #idEvent").val(idEvent);
    })
    
  };


</script>
    <script>
      $(document).ready(function(){
        const fotoEvent=document.getElementById("foto1");
        console.log(fotoEvent);
        const previewContainer=document.getElementById("imagePreview");
        const previewImage=previewContainer.querySelector(".image-preview__image");
        const previewDefaultText=previewContainer.querySelector(".image-preview_default-text");
        fotoEvent.addEventListener("change",function(){
          const file=this.files[0];
          if(file){
            const reader = new FileReader();
            previewDefaultText.style.display="none";
            previewImage.style.display="block";
            reader.addEventListener("load",function(){
              console.log(this);
              previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
          }
        });
      });
    </script>