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
				case 3:
					carga.innerHTML = "<h3>ENCHUFE</h3><p><p>Conector de energía.</p>";
					break;
				case 4:
					carga.innerHTML = "<h3>WPS</h3><p>Al presionar el boton por 5 segundos se activa la funcion wps (Wi-Fi Protected Setup).</p>";
					break;
				case 5:
					carga.innerHTML = "<h3>RESET</h3><p>Se utiliza para realizar un reinicio de fabrica. Con el router encendido, se debe presionar el orificio con un clip (unos 10 segundos) hasta que los led's se vuelvan intermitente.</p>";
					break;
				case 6:
					carga.innerHTML = "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet.</p>";
					break;
				case 7:
					carga.innerHTML = "<h3>SIM CARD</h3><p>Ranura donde se encuentra la SIM CARD.</p>";
					break;
				default:
				carga.innerHTML = "<p>Presiona el indicador para tener mas información</p>";
			}
	}