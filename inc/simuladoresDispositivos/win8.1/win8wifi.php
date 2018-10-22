<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<meta charset="UTF-8">
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
<meta http-equiv="content-type" content="Mime-Type; charset=iso-8859-1" />  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="css/estilo.css">

 fuentes -->

<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>

<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
<link rel="stylesheet" href="../../css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/estilo.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$('#charms').on('click',function(){
    		$('.charms').toggle();
    		$('.charms').empty();
			$(".charms").prepend("<img src='charms.png' alt='' alt='android' usemap='#charms'>")

  	});

	$(".configuracioninicio").click(function(){
			$('.charms').empty();
			$(".charms").prepend("<img src='configuracioninicio.png' alt='' alt='android' usemap='#configuracioninicio'>")
	});

	$(".boton2").click(function(){
       var i=$(this).attr("id");
    //   alert(i);
       $('.charms').empty();
       $(".charms").css("display", "block");
	   $(".charms").prepend("<img src='"+i+".png' alt='' alt='' usemap='#"+i+"'>")

	});

    $(".boton").click(function(){
       	var i=$(this).attr("id");
	    $(".contenedor1").empty();
	    $(".contenedor1").prepend("<img src='"+i+".png' alt='' alt='android' usemap='#"+i+"'>")
	    var j=$(this).attr("id");
	    $(".charms").css("display", "none");
    });

});


</script>


</head>
<body>
<div class="">
	
	<div class="col-xs-9">
			
		<div class="contenedor1">
			<img src="inicio.png" alt="" alt="android" usemap="#inicio" id="inicio">
		</div>

	</div>

	<div class="col-xs-8 col-xs-offset-1 charms">	
			<img src="charms.png" alt="" alt="android" usemap="#charms" id="">
	</div>
	
	
	<div class="col-xs-1 comandos">
		<a href="#" id="escritorio" class="boton"><kbd><span class='fa fa-windows'></span></kbd></a>
		<br><br><br>
		<a href="#"  id="charms" class=""><kbd><span class='fa fa-windows'></span></kbd> + <kbd>C</kbd></a>
		<br><br><br>
		<a href="#"><kbd><span class='fa fa-windows'></span></kbd> + <kbd>R</kbd></a>
	</div>
	
		<!-- CONFIGURACION DESDE INICIO Y ESCRITORIO CON BARRA CHARMS -->
	<map name="inicio">
		<area shape="rect" coords="122,345,259,413" alt="app" title="Escritorio" id="escritorio" href="#" class="boton">
		<area shape="rect" coords="156,378,200,424" alt="app" title="Ajustes" id="ajustes" href="#" class="boton">
		<area shape="circle" coords="150,564,30" alt="home" title="Inicio" id="iphoneHome" href="#" class="boton">
	</map>

	<map name="charms">
		<area shape="rect" coords="753,224,810,277" alt="app" title="Escritorio" id="escritorio" href="#" class="boton">
		<area shape="rect" coords="753,336,810,391" alt="app" title="configuracion" id="configuracioninicio" class="configuracioninicio" href="#" class="">

	</map>

	<map name="configuracioninicio">
		<area shape="rect" coords="645,311,685,352" alt="app" title="REDES DISPONIBLES" id="listainicio" href="#" class="boton2">
		<area shape="rect" coords="618,102,807,128" alt="app" title="PANEL DE CONTROL" id="panel" href="#" class="boton">
	</map>

	<map name="listainicio">
		<area shape="rect" coords="618,219,807,246" alt="app" title="CONECTAR" id="redes" href="#" class="boton2">
	</map>
	
	<map name="redes">
		<area shape="rect" coords="735,289,785,307" alt="app" title="Clave" id="claveinicio" href="#" class="boton2">
	</map>

	<map name="claveinicio">
		<area shape="rect" coords="668,176,721,192" alt="app" title="Siguiente" id="conectadoinicio" href="#" class="boton2">
		<area shape="rect" coords="733,176,786,192" alt="app" title="CANCELAR" id="listainicio" href="#" class="boton2">
	</map>

		<!-- FIN CONFIGURACION DESDE INICIO Y ESCRITORIO CON BARRA CHARMS -->
		<!-- CONFIGURACION DESDE ESCRITORIO  -->

	<map name="escritorio">
		<area shape="rect" coords="712,435,724,456" alt="app" title="WIFI" id="listainicio" href="#" class="boton2">
		<area shape="rect" coords="56,435,83,456" alt="app" title="INICIO" id="inicio" href="#" class="boton">
	</map>


		<!-- FIN CONFIGURACION DESDE ESCRITORIO  -->
	
	
</div>

	
</body>
</html>