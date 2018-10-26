
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
	<meta http-equiv="content-type" content="Mime-Type; charset=iso-8859-1" />  
<?php include 'inc/head_common.php';?> <!-- no lo he ovido -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> <!-- no lo he ovido -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> <!-- no lo he ovido -->
<link rel="stylesheet" href="css/estilo.css">



 <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- no lo he ovido -->
<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- no lo he ovido -->

<!--------------------------- fuentes locales -------------------------- -->

<script src="js/jquery-1.11.3.js"></script> <!-- no lo he ovido -->

<!-- Latest compiled and minified CSS
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
 
<link rel="stylesheet" href="css/bootstrap.css"> <!-- no lo he ovido -->
<link rel="stylesheet" href="css/estilo.css"> <!-- no lo he ovido -->

<!-- fuentes -->

<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>

 <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- no lo he ovido -->
 
<!--<link rel="stylesheet" href="http://localhost/directv/css/font-awesome.min.css">-->

<!-- fuentes -->

<script src="../js/script.js"></script>
    




<title>MI-DTVNET</title>



</head>
<body class="">

	<nav role="navigation" class="navbar navbar-default navbar-fixed-top barra">
		<div class="row">
			
			<div class="col-xs-5">
				<div id="wrapper" class="toggled">
				<!-- Sidebar -->
					<div id="sidebar-wrapper">
						<ul class="sidebar-nav">
							<li class="sidebar-brand">
								<a href="#" class="navbar-brand scroll-top">MI-DTVNET</a>
							</li>				
							<li>
								<a href="#" id="herramientas2" class="scroll-link" data-id="modem">Modem's</a>
							</li>
							<li>
								<a href="#" id="gestiones2" class="scroll-link" data-id="simuladores">Simuladores S.O.</a>
							</li>
							<!-- <li>
								<a href="#" class="scroll-link" data-id="procesos">Procesos</a>
							</li> -->
						</ul>
					</div>
					<a id="nav-toggle" href="#menu-toggle"><span></span></a>
					<div class="logos"></div>
				</div>
			</div>
			<div class="col-xs-4"><h1 class="nombreApp">MI-DTVNET</h1></div>

		</div>
	</nav>



<div class="page-section intro carrusel">
	<div class="row">

	<?php include 'inc/carrusel.php';?>
	</div>
</div>




<div id="modem" class="page-section">
	<div class="container" id="contenedor_modem">
		<?php include 'inc/modems.php';?>
		
	</div>
	<!--/.container-->
</div>
<!--/#africa-->

<div id="simuladores" class="page-section">
	<div class="container" id="contenedor_so">
		<?php include 'inc/simuladoresSO.php';?>

	</div>
	<!--/.container-->
</div>

<!--
<div id="procesos" class="page-section">
	<div class="container">
		<h2>Procesos</h2>
	</div>
	
</div>
/#asia-->


<?php include 'inc/footer_common.php';?>


<script type="text/javascript">
$(document).ready(function() {
	// navigation click actions	
	$('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 750);
	});
	// scroll to top action
	$('.scroll-top').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow'); 		
	});
	// mobile nav toggle
	$('#nav-toggle').on('click', function (event) {
		event.preventDefault();
		$('#main-nav').toggleClass("open");
	});
});
// scroll function
function scrollToID(id, speed){
	var offSet = 50;
	var targetOffset = $(id).offset().top - offSet;
	var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}
</script>

<script src="js/script.js"></script>

<?php include 'inc/footer_common.php';?>
	
	</body>
</html>