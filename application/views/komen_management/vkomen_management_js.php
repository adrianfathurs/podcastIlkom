<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" >
    $(document).on("click",'#btnHapus',function(){
            var idKom= $(this).data('id');
            var id=$(this).data('id');
            $(".modal-footer #formHapus #idKomentar").val(idKom);
        });         
    
</script>