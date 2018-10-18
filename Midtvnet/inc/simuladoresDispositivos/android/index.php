
<script type="text/javascript">
$(document).ready(function(){

    $(".boton").click(function(){
       var i=$(this).attr("id");
       $(".contenedor_so").empty();
        $(".contenedor_so").prepend('<img src="inc/simuladoresDispositivos/android/'+i+'.png" alt="" alt="android" usemap="#'+i+'" id="iphoneHome">');

    });

$("#obteniendoip").click(function(){
	 setTimeout(function() {
        $(".contenedor_so").empty();
    },1000);
	 setTimeout(function() {
        $(".contenedor_so").prepend("<img src='inc/simuladoresDispositivos/android/conectado.png' alt='' alt='android' usemap='#conectado'>")
    },1000);
});


});


$("#volver").click(function(){
$("#contenedor_so").load("inc/simuladoresSO.php");
    });


</script>

<div class="col-xs-4">		
<h3><a id="volver"><span class='fa fa-arrow-left' ></span> Volver</a></h3>
</div>
<div class="col-xs-4 col-xs-offset-1"><h1 class="nombreApp">Andorid</h1></div>

<div class="col-xs-8 col-xs-offset-4">


<div class="contenedor_so">
	<img src="inc/simuladoresDispositivos/android/androidHome.png" alt="" alt="android" usemap="#androidHome" id="androidHome">
</div>

	<map name="androidHome">
		<area shape="rect" coords="19,59,284,80" alt="app" title="Activar" id="wifioff" class="boton">
		<area shape="rect" coords="237,454,280,506" alt="app" title="Aplicaciones" id="conf" class="boton">
		<area shape="rect" coords="237,454,280,506" alt="app" title="Aplicaciones" id="conf" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
	</map>




	<map name="wifioff">
		<area shape="rect" coords="19,93,68,168" alt="app" title="Activar Wifi" id="wifion"  class="boton">
		<area shape="rect" coords="68,59,284,533" alt="app" title="Activar" id="androidHome" class="boton">
		<area shape="rect" coords="237,454,280,506" alt="app" title="Aplicaciones" id="conf" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
		<area shape="rect" coords="218,544,245,564" alt="home" title="Inicio" id="androidHome" class="boton">
	</map>


	<map name="wifion">
		<area shape="rect" coords="19,93,68,168" alt="app" title="Desactivar Wifi" id="wifioff" class="boton">
		<area shape="rect" coords="68,59,284,533" alt="app" title="Activar" id="androidHome" class="boton">
		<area shape="rect" coords="237,454,280,506" alt="app" title="Aplicaciones" id="conf" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
		<area shape="rect" coords="218,544,245,564" alt="home" title="Inicio" id="androidHome" class="boton">
	</map>
	




	<map name="conf">
		<area shape="rect" coords="152,200,216,255" alt="app" title="Configuración" id="confwifi" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
		<area shape="rect" coords="218,544,245,564" alt="home" title="Atras" id="androidHome"  class="boton">
	</map>

	<map name="confwifi">
		<area shape="rect" coords="34,145,85,217" alt="app" title="Wifi" id="wifilista" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
		<area shape="rect" coords="218,544,245,564" alt="home" title="Atras" id="conf" class="boton">
	</map>

	<map name="wifilista">
		<area shape="rect" coords="212,88,271,113" alt="app" title="Desactivar wifi" id="wifioff2" class="boton">
		<area shape="rect" coords="20,119,283,168" alt="app" title="Seleccionar red" id="wificlave" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
		<area shape="rect" coords="218,544,245,564" alt="home" title="Atras" id="confwifi" class="boton">
	</map>

	<map name="wifioff2">
		<area shape="rect" coords="212,88,271,113" alt="app" title="Activar wifi" id="wifilista" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
		<area shape="rect" coords="218,544,245,564" alt="home" title="Atras" id="confwifi" class="boton">
	</map>

	<map name="wificlave">
		<area shape="rect" coords="49,297,68,315" alt="app" title="Ver clave" id="wificlave2" class="boton">
		<area shape="rect" coords="34,318,150,358" alt="app" title="Cancelar" id="wifilista" class="boton">
		<area shape="rect" coords="151,318,268,358" alt="app" title="Conectar" id="obteniendoip" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
		<area shape="rect" coords="218,544,245,564" alt="home" title="Atras" id="wifilista" class="boton">
	</map>

	<map name="wificlave2">
		<area shape="rect" coords="49,297,68,315" alt="app" title="Ver clave" id="wificlave" class="boton">
		<area shape="rect" coords="34,318,150,358" alt="app" title="Cancelar" id="wifilista" class="boton">
		<area shape="rect" coords="151,318,268,358" alt="app" title="Conectar" id="obteniendoip" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
		<area shape="rect" coords="218,544,245,564" alt="home" title="Atras" id="wifilista" class="boton">
	</map>

	<map name="obteniendoip">
		<area shape="rect" coords="212,88,271,113" alt="app" title="Desactivar wifi" id="wifioff2" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
		<area shape="rect" coords="218,544,245,564" alt="home" title="Atras" id="confwifi" class="boton">
	</map>

	<map name="conectado">
		<area shape="rect" coords="212,88,271,113" alt="app" title="Desactivar wifi" id="wifioff2" class="boton">
		<area shape="rect" coords="118,542,185,564" alt="home" title="Inicio" id="androidHome" class="boton">
		<area shape="rect" coords="218,544,245,564" alt="home" title="Atras" id="confwifi" class="boton">
	</map>

</div>