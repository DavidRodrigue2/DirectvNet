
<script type="text/javascript">
$(document).ready(function(){

    $(".boton").click(function(){
       var i=$(this).attr("id");
       $(".contenedor_so").empty();

       $(".contenedor_so").prepend('<img src="inc/simuladoresDispositivos/iphone/'+i+'.png" alt="" alt="android" usemap="#'+i+'" id="iphoneHome">');
       
    });

});


$("#volver").click(function(){
$("#contenedor_so").load("inc/simuladoresSO.php");
    });

</script>


<div class="col-xs-4">		

<h3><a id="volver"><span class='fa fa-arrow-left' ></span> Volver</a></h3>
</div>
<div class="col-xs-4 col-xs-offset-1"><h1 class="nombreApp">Iphone</h1></div>

<div class="col-xs-8 col-xs-offset-4">

<div class="contenedor_so">

	<img src="inc/simuladoresDispositivos/iphone/iphoneHome.png" alt="" alt="android" usemap="#iphoneHome" id="iphoneHome">
</div>

	<map name="iphoneHome">
		<area shape="rect" coords="28,519,275,534" alt="app" title="menu" id="wifioff2" class="boton">
		<area shape="rect" coords="156,378,200,424" alt="app" title="Ajustes" id="ajustes" class="boton">
		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" class="boton">
	</map>

	<map name="wifioff2">
		<area shape="circle" coords="105,236,18" alt="home" title="Activar wifi" id="wifion" class="boton">
		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" class="boton">
	</map>


	<map name="wifion">
		<area shape="rect" coords="28,197,271,211" alt="app" title="" id="iphoneHome" class="boton">
		<area shape="circle" coords="105,236,18" alt="home" title="Desactivar wifi" id="wifioff2" class="boton">
		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" class="boton">
	</map>
	
	<map name="ajustes">
		<area shape="rect" coords="30,200,273,230" alt="app" title="Wifi" id="confwifi" class="boton">
		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" class="boton">
	</map>

	<map name="confwifi">
		<area shape="rect" coords="34,115,96,131" alt="app" title="Ajustes" id="ajustes" class="boton">
		<area shape="rect" coords="221,171,263,195" alt="home" title="Wifi Off" id="wifioff" class="boton">
		<area shape="rect" coords="30,240,274,271" alt="home" title="Seleccionar red" id="wificlave" class="boton">
		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" class="boton">
	</map>

	<map name="wifioff">
		<area shape="rect" coords="34,115,96,131" alt="app" title="Ajustes" id="ajustes" class="boton">
		<area shape="rect" coords="221,171,263,195" alt="home" title="Wifi On" id="confwifi" class="boton">
		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" class="boton">
	</map>

	<map name="wificlave">
		<area shape="rect" coords="33,138,90,152" alt="app" title="Cancelar" id="confwifi" class="boton">
		<area shape="rect" coords="196,138,268,152" alt="app" title="Conectarse" id="conexion" class="boton">
		<area shape="rect" coords="215,493,271,523" alt="app" title="Conectar" id="conexion" class="boton">
		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" class="boton">
	</map>

	<map name="conexion">
		<area shape="rect" coords="34,115,96,131" alt="app" title="Ajustes" id="ajustes" class="boton">
		<area shape="rect" coords="31,201,270,233" alt="app" title="Opciones de red" id="dhcp" class="boton">
		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" class="boton">
	</map>



	<map name="dhcp">
		<area shape="rect" coords="34,115,80,131" alt="app" title="Wifi" id="conexion" class="boton">
		<area shape="rect" coords="31,168,270,201" alt="app" title="Omitir esta red" id="confwifi" href="#" class="boton">
		<area shape="rect" coords="190,248,270,268" alt="app" title="Estatica" id="estatica" class="boton">
		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" class="boton">
	</map>

	<map name="estatica">
		<area shape="rect" coords="34,115,80,131" alt="app" title="Wifi" id="conexion" class="boton">
		<area shape="rect" coords="214,494,271,524" alt="app" title="Intro" id="conexion" class="boton">

		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" class="boton">
	</map>
	
</div>