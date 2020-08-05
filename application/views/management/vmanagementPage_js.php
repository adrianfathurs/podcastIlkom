<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('#bph').hide();
        $('#onAir').hide();
        $('#offAir').hide();
        
        $('#btnBph').click(function(){
            $('#btnBph').addClass('active');
            $('#btnOnair').removeClass('active');
            $('#btnOffair').removeClass('active');
            $('#bph').show();
            $("#bph").addClass('animated rubberBand');
            $('#onAir').hide();
            $('#offAir').hide();
        });

        $('#btnOnair').click(function(){
            $('#btnOnair').addClass('active');
            $('#btnBph').removeClass('active');
            $('#btnOffair').removeClass('active');
            $('#bph').hide();
            $('#onAir').show();
            $("#onAir").addClass('animated rubberBand')
            $('#offAir').hide();
        });

        $('#btnOffair').click(function(){
            $('#btnOffair').addClass('active');
            $('#btnOnair').removeClass('active');
            $('#btnBph').removeClass('active');
            $('#bph').hide();
            $('#onAir').hide();
            $('#offAir').show();
            $("#offAir").addClass('animated rubberBand')
        });
    });
</script>