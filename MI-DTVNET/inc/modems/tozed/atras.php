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

    $("#frente").click(function(){
    $("#contenedor_modem").load("inc/modems/LR26/frente.php");
    });

</script>




	<div class="row">
		<div class="col-xs-2"><h3><a id="volver"><span class='fa fa-arrow-left' ></span> Volver</a></h3></div>
		<div class="col-xs-5 col-xs-offset-2"><h1>LR 26: vista de atras</h1></div>
		<div class="col-xs-3"><h3><a id="frente"><div class="thumbnail thumbnailherramientas"><img src="img/LR26/minifrente.png" alt="frente" title="Vista de frente" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' class="red-tooltip"></div></a></h3></div>

		<div class="col-xs-8 col-xs-offset-4">
			<h4>SIMULADOR GUI: 	<a href="inc/simuladoresModems/simulador_LR26/index.html" target="_blank">192.168.100.1</a></h4>
		</div>
	</div>



	<div class="row">
		<div class="col-xs-2" id="carga">
		<p>Presiona el indicador para tener mas información</p>
		</div>
		<div class="col-xs-8">
			<!--<img src="TL-WR740N-01c.png" alt="TL-WR740N-01" usemap="#wr740" > -->
			<img src="img/LR26/atras.png" alt="TL-WR740N-01" usemap="#wr740atras" >

			<map name="wr740atras">
						<area shape="rect" coords="70,151,79,161" alt="reset" title="RESET" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="reset" class="red-tooltip botondesc">
						
						<area shape="rect" coords="93,130,125,169" alt="enchufe" title="ENCHUFE" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="enchufe" class="red-tooltip botondesc">
						
						<area shape="rect" coords="132,135,162,166" alt="onoff" title="ON/OFF" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="onoff" class="red-tooltip botondesc">

						<area shape="rect" coords="157,124,211,169" alt="lan1" title="LAN1" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan1atras" class="red-tooltip botondesc">
						<area shape="rect" coords="209,124,261,169" alt="lan2" title="LAN2" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan2atras" class="red-tooltip botondesc">
						<area shape="rect" coords="263,124,307,169" alt="lan3" title="LAN3" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan3atras" class="red-tooltip botondesc">
						<area shape="rect" coords="310,124,364,169" alt="lan4" title="LAN4" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan4atras" class="red-tooltip botondesc">

						<area shape="rect" coords="366,124,417,169" alt="wan" title="WAN" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="wanatras" class="red-tooltip botondesc">

						<area shape="rect" coords="444,150,460,163" alt="wpsreset" title="WPS" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="wps2" class="red-tooltip botondesc">

						
			</map>

		</div>
	
		
	</div>
