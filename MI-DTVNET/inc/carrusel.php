
	 <!--Latest compiled and minified CSS 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->



		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/mockup2.css" />
		<script src="js/modernizr.custom.js"></script>

	
	<div class="contenedorinicio">
			<!-- Top Navigation -->
			<div id="wrap" class="wrap">
				<div class="mockup">
					<img class="mockup__img" src="img/fondo.jpg" />
					<div class="screen">
						<ul id="slideshow" class="slideshow">
							<li class="slideshow__item"><img src="img/large/3.jpg"/></li>
							<li class="slideshow__item"><img src="img/large/2.jpg"/></li>
							<li class="slideshow__item"><img src="img/large/1.jpg"/></li>
						</ul>
					</div>

				</div>
			</div>

		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
		<script>
			(function() {
				new Slideshow( document.getElementById( 'slideshow' ) );

				/* Mockup responsiveness */
				var body = docElem = window.document.documentElement,
					wrap = document.getElementById( 'wrap' ),
					mockup = wrap.querySelector( '.mockup' ),
					mockupWidth = mockup.offsetWidth;

				scaleMockup();

				function scaleMockup() {
					var wrapWidth = wrap.offsetWidth,
						val = wrapWidth / mockupWidth;

					mockup.style.transform = 'scale3d(' + val + ', ' + val + ', 1)';
				}
				
				window.addEventListener( 'resize', resizeHandler );

				function resizeHandler() {
					function delayed() {
						resize();
						resizeTimeout = null;
					}
					if ( typeof resizeTimeout != 'undefined' ) {
						clearTimeout( resizeTimeout );
					}
					resizeTimeout = setTimeout( delayed, 50 );
				}

				function resize() {
					scaleMockup();
				}
			})();
		</script>

