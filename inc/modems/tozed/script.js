var carga = document.getElementById('carga');
	function doClick(n){
			switch(n){
				case 0:
					carga.innerHTML = "<h3>POWER</h3><p><strong>Encendido (PWR):</strong> </p><p>El modem esta encendido.</p><p><strong>Apagado (PWR):</strong></p><p>El modem esta apagado.</p>";
					break;
				case 1:
					carga.innerHTML = "<h3>WIFI</h3><p><strong>Encendido:</strong></p><p>Modem emite señal Wifi.</p><p><strong>Apagado:</strong></p><p>Modem no emite señal Wifi.</p>";
					break;
				case 2:
					carga.innerHTML = "<h3>4G LTE</h3><p><strong>Encendido:</strong></p><p>Conexión establecida, colores: Azul, Amarillo, Verde.</p><p><strong>Apagado:</strong></p><p>No hay señal establecida.</p>";
					break;
				default:
				carga.innerHTML = "<p>Presiona el indicador para tener mas información</p>";
			}
	}