        <link rel="stylesheet" type="text/css" href="css/stylemodem.css" />
		<script type="text/javascript" src="js/modernizrmodem.custom.79639.js"></script> 

<script type="text/javascript">
$(document).ready(function(){

   	$(".botondesc").click(function(){
   		
   		var boton=$(this).attr("id");
		$("#contenedor_modem").load("inc/modems/"+boton+"/frente.php");
	//	alert("inc/modems/"+boton+"/frente.php");
    });

});


</script>


<div class="row">
	<div class="col-xs-offset-5 col-xs-4">
		<h1 class="nombreApp">Modems</h1>
	</div>
</div>


<div class="row">
	<div class="col-xs-12">
		<ul class="ch-grid">
			<li><a id="tozed" class="botondesc">
				<div class="ch-item ch-img-5">
					<div class="ch-info">
						<h3>TOZED</h3>
					</div>
				</div>
				</a>
			</li>

			<li><a id="arcadyan" class="botondesc">
				<div class="ch-item ch-img-2">
					<div class="ch-info">
						<h3>ARCADYAN</h3>
						<p></p>
					</div>
				</div>
				</a>
			</li>

			<li><a id="LR26" class="botondesc">
				<div class="ch-item ch-img-3">
					<div class="ch-info">
						<h3>LR26</h3>
						<p></p>
					</div>
				</div>
				</a>
			</li>	
		</ul>
	</div>
</div>


<div class="row">
	<div class="col-xs-12">
		<ul class="ch-grid">
			<li><a id="qpcom" class="botondesc">
				<div class="ch-item ch-img-4">
					<div class="ch-info">
						<h3>QPCOM</h3>
						<p></p>
					</div>
				</div>
				</a>
			</li>

			<li><a id="wr740" class="botondesc">
				<div class="ch-item ch-img-1">
					<div class="ch-info">
						<h3>TPLINK</h3>
						<p>TL-WR740N</p>
					</div>
				</div>
				</a>
			</li>
			
			<li><a id="gemtek" class="botondesc">
				<div class="ch-item ch-img-6">
					<div class="ch-info">
						<h3>GEMTEK</h3>
					</div>
				</div>
				</a>
			</li>		
		</ul>
	</div>
</div>
