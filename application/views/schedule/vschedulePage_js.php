<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script >
    $(document).ready(function(){
            $('.tableSenin').hide();  
            $('.tableSelasa').hide();  
            $('.tableRabu').hide();  
            $('.tableKamis').hide();  
            $('.tableJumat').hide();  
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();  
        $("#btnSenin").click(function() {
            $(".tableSenin").addClass('animated rubberBand');
            $(".tableSenin").show();
            $(".tableSelasa").hide();
            $('.tableRabu').hide();  
            $('.tableKamis').hide();  
            $('.tableJumat').hide();  
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();
            $('#btnSenin').addClass('active');
            $('#btnMinggu').removeClass('active');
            $('#btnSelasa').removeClass('active');
            $('#btnRabu').removeClass('active');
            $('#btnKamis').removeClass('active');
            $('#btnJumat').removeClass('active');
            $('#btnSabtu').removeClass('active');
            console.log("btnSenin");
        });
        $("#btnSelasa").click(function() {
            $(".tableSelasa").addClass('animated rubberBand');
            $(".tableSelasa").show();
            $(".tableSenin").hide();
            $('.tableRabu').hide();  
            $('.tableKamis').hide();  
            $('.tableJumat').hide();  
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();
            $('#btnSelasa').addClass('active');
            $('#btnSenin').removeClass('active');
            $('#btnMinggu').removeClass('active');
            $('#btnRabu').removeClass('active');
            $('#btnKamis').removeClass('active');
            $('#btnJumat').removeClass('active');
            $('#btnSabtu').removeClass('active');
            console.log("btnSelasa");
        });
        $("#btnRabu").click(function() {
            $('.tableRabu').addClass('animated rubberBand');
            $('.tableRabu').show();  
            $(".tableSenin").hide();
            $(".tableSelasa").hide();
            $('.tableKamis').hide();  
            $('.tableJumat').hide();  
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();
            $('#btnRabu').addClass('active');
            $('#btnSenin').removeClass('active');
            $('#btnSelasa').removeClass('active');
            $('#btnMinggu').removeClass('active');
            $('#btnKamis').removeClass('active');
            $('#btnJumat').removeClass('active');
            $('#btnSabtu').removeClass('active');
            console.log("btnRabu");
        });
        $("#btnKamis").click(function() {
            $('.tableKamis').addClass('animated rubberBand');  
            $('.tableKamis').show();  
            $('.tableRabu').hide();  
            $(".tableSenin").hide();
            $(".tableSelasa").hide();
            $('.tableJumat').hide();  
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();
            $('#btnKamis').addClass('active');
            $('#btnSenin').removeClass('active');
            $('#btnSelasa').removeClass('active');
            $('#btnRabu').removeClass('active');
            $('#btnMinggu').removeClass('active');
            $('#btnJumat').removeClass('active');
            $('#btnSabtu').removeClass('active');
            console.log("btnKamis");
        });
        $("#btnJumat").click(function() {
            $('.tableJumat').addClass('animated rubberBand');  
            $('.tableJumat').show();  
            $('.tableKamis').hide();  
            $('.tableRabu').hide();  
            $(".tableSenin").hide();
            $(".tableSelasa").hide();
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();
            $('#btnJumat').addClass('active');
            $('#btnSenin').removeClass('active');
            $('#btnSelasa').removeClass('active');
            $('#btnRabu').removeClass('active');
            $('#btnKamis').removeClass('active');
            $('#btnSabtu').removeClass('active');
            $('#btnMinggu').removeClass('active');
            console.log("btnJumat");
        });
        $("#btnSabtu").click(function() {
            $('.tableSabtu').addClass('animated rubberBand');  
            $('.tableSabtu').show();  
            $('.tableJumat').hide();  
            $('.tableKamis').hide();  
            $('.tableRabu').hide();  
            $(".tableSenin").hide();
            $(".tableSelasa").hide();
            $('.tableMinggu').hide();
            $('#btnSabtu').addClass('active');
            $('#btnSenin').removeClass('active');
            $('#btnSelasa').removeClass('active');
            $('#btnRabu').removeClass('active');
            $('#btnKamis').removeClass('active');
            $('#btnJumat').removeClass('active');
            $('#btnMinggu').removeClass('active');
            console.log("btnSabtu");
        });
        $("#btnMinggu").click(function() {
            $('.tableMinggu').addClass('animated rubberBand');
            $('.tableMinggu').show();
            $('.tableSabtu').hide();  
            $('.tableJumat').hide();  
            $('.tableKamis').hide();  
            $('.tableRabu').hide();  
            $(".tableSenin").hide();
            $(".tableSelasa").hide();
            $('#btnMinggu').addClass('active');
            $('#btnSenin').removeClass('active');
            $('#btnSelasa').removeClass('active');
            $('#btnRabu').removeClass('active');
            $('#btnKamis').removeClass('active');
            $('#btnJumat').removeClass('active');
            $('#btnSabtu').removeClass('active');
            console.log("btnSabtu");
        });

    })
</script>