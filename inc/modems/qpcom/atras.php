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

    $("#frente").click(function(){
    $("#contenedor_modem").load("inc/modems/qpcom/frente.php");
    });

</script>




	<div class="row">
		<div class="col-xs-2"><h3><a id="volver"><span class='fa fa-arrow-left' ></span> Volver</a></h3></div>
		<div class="col-xs-7"><h1>QPCOM QP–WR115N: vista de atras</h1></div>
		<div class="col-xs-3"><h3><a id="frente"><div class="thumbnail thumbnailherramientas"><img src="inc/modems/qpcom/delante.png" alt="frente" title="Vista de frente" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' class="red-tooltip"></div></a></h3></div>
		<div class="col-xs-8 col-xs-offset-4">
			<h4>SIMULADOR GUI: 	<a href="inc/simuladoresModems/simulador_qpcom/login.html" target="_blank">192.168.1.254</a></h4>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-2" id="carga">
		<p>Presiona el indicador para tener mas información</p>
		</div>
		<div class="col-xs-8">
			
			<img src="inc/modems/qpcom/atras.png" alt="QP-WR115N" usemap="#wr740atras" >

			<map name="wr740atras">

						<area shape="rect" coords="137,162,228,231" alt="wan" title="WAN" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="wanatras" class="red-tooltip botondesc">

						<area shape="rect" coords="230,162,314,231" alt="lan1" title="LAN1" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan1atras" class="red-tooltip botondesc">
						<area shape="rect" coords="314,162,395,231" alt="lan2" title="LAN2" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan2atras" class="red-tooltip botondesc">
						<area shape="rect" coords="395,162,478,231" alt="lan3" title="LAN3" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan3atras" class="red-tooltip botondesc">
						<area shape="rect" coords="478,162,563,231" alt="lan4" title="LAN4" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="lan4atras" class="red-tooltip botondesc">


						<area shape="rect" coords="597,193,638,231" alt="wpsreset" title="RST/WPS" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="rstwps" class="red-tooltip botondesc">

						
						<area shape="rect" coords="670,174,719,231" alt="enchufe" title="ENCHUFE" data-toggle="tooltip" data-placement="bottom" viewport: '#viewport' id="enchufe" class="red-tooltip botondesc">
						

			</map>

		</div>
	
		
	</div>
