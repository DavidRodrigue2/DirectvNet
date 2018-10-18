        <link rel="stylesheet" type="text/css" href="css/stylemodem.css" />
		<script type="text/javascript" src="js/modernizrmodem.custom.79639.js"></script> 

<script type="text/javascript">
$(document).ready(function(){

   	$(".botondesc").click(function(){
   		
   		var boton=$(this).attr("id");
		$("#contenedor_so").load("inc/simuladoresDispositivos/"+boton+"/index.php");
	//	alert("inc/modems/"+boton+"/frente.php");
    });

});


</script>


<div class="row">
	<div class="col-xs-offset-4 col-xs-4">
		<h1 class="nombreApp">SISTEMAS OPERATIVOS</h1>
	</div>
</div>



<div class="row">
	<div class="col-xs-12">
		<ul class="ch-grid">
			<li><a id="wr740" class="botondesc">
				<div class="ch-item ch-img-10">
					<div class="ch-info">
						<h3>WINDOWS 7</h3>
					</div>
				</div>
				</a>
			</li>

			<li><a id="arcadyan" class="botondesc">
				<div class="ch-item ch-img-11">
					<div class="ch-info">
						<h3>WINDOWS 8</h3>
						<p></p>
					</div>
				</div>
			</li>

			<li>
				<div class="ch-item ch-img-14">
					<div class="ch-info">
						<h3>WINDOWS 10</h3>
						<p></p>
					</div>
				</div>
			</li>	
		</ul>
	</div>
</div>


<div class="row">
	<div class="col-xs-13">
		<ul class="ch-grid">
			<li><a id="iphone" class="botondesc">
				<div class="ch-item ch-img-13">
					<div class="ch-info">
						<h3>MOVIL IPHONE</h3>
						<p></p>
					</div>
				</div>
				</a>
			</li>
			
			<li>
				
			</li>		

			<li><a id="android" class="botondesc">
				<div class="ch-item ch-img-12">
					<div class="ch-info">
						<h3>MOVIL ANDROID</h3>
					</div>
				</div>
				</a>>
			</li>
		</ul>
	</div>
</div>
