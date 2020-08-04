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
            $(".tableSenin").show();
            $(".tableSelasa").hide();
            $('.tableRabu').hide();  
            $('.tableKamis').hide();  
            $('.tableJumat').hide();  
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();
            console.log("btnSenin");
        });
        $("#btnSelasa").click(function() {
            $(".tableSelasa").show();
            $(".tableSenin").hide();
            $('.tableRabu').hide();  
            $('.tableKamis').hide();  
            $('.tableJumat').hide();  
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();
            console.log("btnSelasa");
        });
        $("#btnRabu").click(function() {
            $('.tableRabu').show();  
            $(".tableSenin").hide();
            $(".tableSelasa").hide();
            $('.tableKamis').hide();  
            $('.tableJumat').hide();  
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();
            console.log("btnRabu");
        });
        $("#btnKamis").click(function() {
            $('.tableKamis').show();  
            $('.tableRabu').hide();  
            $(".tableSenin").hide();
            $(".tableSelasa").hide();
            $('.tableJumat').hide();  
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();
            console.log("btnKamis");
        });
        $("#btnJumat").click(function() {
            $('.tableJumat').show();  
            $('.tableKamis').hide();  
            $('.tableRabu').hide();  
            $(".tableSenin").hide();
            $(".tableSelasa").hide();
            $('.tableSabtu').hide();  
            $('.tableMinggu').hide();
            console.log("btnJumat");
        });
        $("#btnSabtu").click(function() {
            $('.tableSabtu').show();  
            $('.tableJumat').hide();  
            $('.tableKamis').hide();  
            $('.tableRabu').hide();  
            $(".tableSenin").hide();
            $(".tableSelasa").hide();
            $('.tableMinggu').hide();
            console.log("btnSabtu");
        });
        $("#btnMinggu").click(function() {
            $('.tableMinggu').show();
            $('.tableSabtu').hide();  
            $('.tableJumat').hide();  
            $('.tableKamis').hide();  
            $('.tableRabu').hide();  
            $(".tableSenin").hide();
            $(".tableSelasa").hide();
            console.log("btnSabtu");
        });

    })
</script>