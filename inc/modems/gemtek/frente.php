
<link href="inc/modems/gemtek/estilo.css" rel="stylesheet">



<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();


   	$(".botondesc").click(function(){
   		var boton=$(this).attr("id");
		$("#carga").load("inc/modems/gemtek/descripcion.php?boton="+boton);
    });

});


    $("#volver").click(function(){
    $("#contenedor_modem").load("inc/modems.php");
    });

    $("#atras").click(function(){
    $("#contenedor_modem").load("inc/modems/gemtek/atras.php");
    });

</script>



	<div class="row">
		<div class="col-xs-2"><h3><a id="volver"><span class='fa fa-arrow-left' ></span> Volver</a></h3></div>
		<div class="col-xs-7"><h1>GEMTEK</h1></div>
		<div class="col-xs-3"><h3><a id="atras"><div class="thumbnail thumbnailherramientas"><img src="img/gemtek/poe150x150.jpg" alt="atras" title="POE" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' class="red-tooltip"></div></a></h3></div>
		
		<!-- <div class="col-xs-8 col-xs-offset-4">
			<h4>SIMULADOR GUI: 	<a href="
http://www.tp-link.com/resources/simulator/TL-WR740N_v1&v2/index.htm" target="_blank">192.168.0.1</a></h4>
		</div> -->
	
	</div>
	<div class="row">
		<div class="col-xs-2" id="carga">
		<p>Presiona el indicador para tener mas información</p>
		</div>
		<div class="col-xs-8">
			<!--<img src="TL-WR740N-01c.png" alt="TL-WR740N-01" usemap="#wr740" > -->
			<img src="img/gemtek/gemtekfrente800x400.jpg" alt="TL-WR740N-01" usemap="#wr740" >

			<map name="wr740">
						<area shape="rect" coords="364,251,388,269" alt="power" title="POWER" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="power" class="red-tooltip botondesc">

						<area shape="rect" coords="394,251,421,269" alt="system" title="SISTEMA" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="sistema" class="red-tooltip botondesc">
						
						<area shape="rect" coords="424,251,454,269" alt="wlan" title="WLAN" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="wlan" class="red-tooltip botondesc">
						
						<area shape="rect" coords="454,251,484,269" alt="lan1" title="LAN1" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan1" class="red-tooltip botondesc">
						<area shape="rect" coords="487,251,517,269" alt="lan2" title="LAN2" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan2" class="red-tooltip botondesc">
						<area shape="rect" coords="518,251,548,269" alt="lan3" title="LAN3" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan3" class="red-tooltip botondesc">
						<area shape="rect" coords="550,251,580,269" alt="lan4" title="LAN4" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan4" class="red-tooltip botondesc">
						
						<area shape="rect" coords="584,251,610,269" alt="wan" title="WAN" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="wan" class="red-tooltip botondesc">
						<area shape="rect" coords="614,251,644,269" alt="wps" title="WPS" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="wps" class="red-tooltip botondesc">
			</map>

		</div>
	
		
	</div>


<?php //include '../../footer_common.php';?>
