<link href="inc/modems/tozed/estilo.css" rel="stylesheet">



<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();


   	$(".botondesc").click(function(){
   		var boton=$(this).attr("id");
		$("#carga").load("inc/modems/tozed/descripcion.php?boton="+boton);
    });

});


    $("#volver").click(function(){
    $("#contenedor_modem").load("inc/modems.php");
    });

    $("#atras").click(function(){
    $("#contenedor_modem").load("inc/modems/tozed/atras.php");
    });

</script>



	<div class="row">
		<div class="col-xs-2"><h3><a id="volver"><span class='fa fa-arrow-left' ></span> Volver</a></h3></div>
		<div class="col-xs-5 col-xs-offset-2"><h1>Tozed: vista de frente</h1></div>
		<div class="col-xs-3"><h3><a id="atras"><div class="thumbnail thumbnailherramientas"><img src="img/tozed/miniatras.png" alt="atras" title="Vista de atras" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' class="red-tooltip"></div></a></h3></div>
		
		<div class="col-xs-8 col-xs-offset-4">
			<h4>SIMULADOR GUI: 	<a href="inc/simuladoresModems/Tozed/index.html" target="_blank">192.168.100.1</a></h4>
		</div>
	
	</div>
	<div class="row">
		<div class="col-xs-2" id="carga">
		<p>Presiona el indicador para tener mas información</p>
		</div>
		<div class="col-xs-6 col-xs-offset-2">
			
			<img src="img/tozed/frente.png" alt="Tozed" usemap="#tozed" >

			<map name="tozed">
						<area shape="rect" coords="364,251,388,269" alt="power" title="POWER" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="power" class="red-tooltip botondesc">

						<area shape="rect" coords="394,251,421,269" alt="wifi" title="WiFi" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="wifi" class="red-tooltip botondesc">
						
						<area shape="rect" coords="424,251,454,269" alt="senal" title="Señal" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="senal" class="red-tooltip botondesc">
			</map>

		</div>
	
		
	</div>


<?php //include '../../footer_common.php';?>
