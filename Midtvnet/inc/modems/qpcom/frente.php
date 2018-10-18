<link href="inc/modems/qpcom/estilo.css" rel="stylesheet">




<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();


   	$(".botondesc").click(function(){
   		var boton=$(this).attr("id");
   		
		$("#carga").load("inc/modems/qpcom/descripcion.php?boton="+boton);
    });

});

    
    $("#volver").click(function(){
    $("#contenedor_modem").load("inc/modems.php");
    });



    $("#atras").click(function(){
    $("#contenedor_modem").load("inc/modems/qpcom/atras.php");
    });

</script>



	<div class="row">
		<div class="col-xs-2"><h3><a id="volver"><span class='fa fa-arrow-left' ></span> Volver</a></h3></div>
		<div class="col-xs-7"><h1>QPCOM QP–WR115N: vista de frente</h1></div>
		<div class="col-xs-3"><h3><a id="atras"><div class="thumbnail thumbnailherramientas"><img src="inc/modems/qpcom/qpcomatras.png" alt="atras" title="Vista de atras" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' class="red-tooltip"></div></a></h3></div>
		
		<div class="col-xs-8 col-xs-offset-4">
			<h3>SIMULADOR GUI: 	<a href="inc/simuladoresModems/simulador_qpcom/login.html" target="_blank">192.168.1.254</a></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-2" id="carga">
		<p>Presiona el indicador para tener mas información</p>
		</div>
		<div class="col-xs-8">
			<!--<img src="TL-WR740N-01c.png" alt="TL-WR740N-01" usemap="#wr740" >  red-tooltip-->
			<img src="inc/modems/qpcom/delante.png" alt="QPCOM" usemap="#wr740" >

			<map name="wr740">
						<area shape="rect" coords="274,345,306,392" alt="power" title="POWER" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="pwr" class=" botondesc">

						<area shape="rect" coords="309,345,336,392" alt="system" title="SISTEMA" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="sistema" class=" botondesc">
						
						<area shape="rect" coords="336,345,358,392" alt="wps" title="WPS" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="wps" class="botondesc">

						<area shape="rect" coords="365,345,404,392" alt="wlan" title="WLAN" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="wlan" class=" botondesc">
						
						<area shape="rect" coords="403,345,423,392" alt="lan4" title="LAN4" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan4" class="botondesc">
						<area shape="rect" coords="428,345,453,392" alt="lan3" title="LAN3" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan3" class="botondesc">
						<area shape="rect" coords="456,345,483,392" alt="lan2" title="LAN2" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan2" class="botondesc">
						<area shape="rect" coords="486,345,510,392" alt="lan1" title="LAN1" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan1" class="botondesc">
						
						<area shape="rect" coords="512,345,549,392" alt="wan" title="WAN" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="wan" class="botondesc">
			</map>

		</div>
	
		
	</div>
