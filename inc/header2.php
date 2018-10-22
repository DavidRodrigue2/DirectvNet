<?php/*
@session_start();
$nombreusuario=$_SESSION['nombre'];
$apellidousuario=$_SESSION['apellido'];
*/
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
	<meta http-equiv="content-type" content="Mime-Type; charset=iso-8859-1" />  


	<?php include 'head_common.php';?>
	<title>AYUDA</title>



</head>
<body class="contenedorinicio">



	<nav role="navigation" class="navbar navbar-default navbar-fixed-top barra">
		<div class="row">
			
				<div class="col-xs-5">
				<div id="wrapper" class="toggled">
					<!-- Sidebar -->
					<div id="sidebar-wrapper">
						<ul class="sidebar-nav">
							<li class="sidebar-brand">
								<a href="#" class="navbar-brand scroll-top">AYUDA</a>
							</li>
							<li>
								<a href="#" id="herramientas2" class="scroll-link" data-id="africa">Modem's</a>
							</li>
							<li>
								<a href="#" id="gestiones2" class="scroll-link" data-id="antarctica">Gestiones</a>
							</li>
							<li>
								<a href="#" class="scroll-link" data-id="asia">Procesos</a>
							</li>



<!-- 							<li class="sidebar-brand">
								<a href="#" class="navbar-brand scroll-top">AYUDA</a>
							</li>
							<li>
								<a href="#" id="herramientas" class="scroll-link" data-id="africa">Modem's</a>
							</li>
							<li>
								<a href="#" id="gestiones" class="scroll-link" data-id="antarctica">Gestiones</a>
							</li>
							<li>
								<a href="#" class="scroll-link" data-id="asia">Contacto</a>
							</li> -->

					

						</ul>
					</div>
					<a id="nav-toggle" href="#menu-toggle"><span></span></a>
				<div class="logos">
					<!-- <img src="../../img/logo-avanza.png" alt="" width="35px" class="logo">
					<img src="../../img/logo-emcali.png" alt="" width="50px" class="logo"> -->
				</div>

				</div>
				</div>
			<div class="col-xs-4"><h1 class="nombreApp">AYUDA</h1></div>


			<div class="col-xs-3">
				<div class="bienvenido">
					<?php	//echo 'Bienvenido: '.$nombreusuario.' '.$apellidousuario.''	?> 
					<a href="../unlog.php" title="Cerrar sesión"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
				</div>
					
			</div> 
		</div>
		
		
	</nav>







