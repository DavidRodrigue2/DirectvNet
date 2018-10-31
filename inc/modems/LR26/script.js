var carga = document.getElementById('carga');
	function doClick(n){
			switch(n){
				case 0:
					carga.innerHTML = "<h3>POWER</h3><p><strong>Encendido (PWR):</strong> </p><p>El modem esta encendido.</p><p><strong>Apagado (PWR):</strong></p><p>El modem esta apagado.</p>";
					break;
				case 1:
					carga.innerHTML = "<h3>WIFI</h3><p><strong>Encendido:</strong> </p><p>La función inalámbrica está funcionando correctamente.</p><p><strong>Apagado:</strong></p><p>La función inalámbrica está desactivada.</p>";
					break;
				case 2:
					carga.innerHTML = "<h3>LAN</h3><p><strong>Encendido:</strong> </p><p>Hay dispositivos conectado por cable de red.</p><p><strong>Apagado:</strong></p><p>No hay dispositivos conectado por cable de red.</p>";
					break;
				case 3:
					carga.innerHTML = "<h3>SEÑAL</h3><p>Determina el nivel de señal.</p>";
					break;
				case 4:
					carga.innerHTML = "<h3>ENCHUFE</h3><p>El enchufe de corriente es donde se conecte el adaptador de corriente. Utilice el adaptador de corriente suministrado</p>";
					break;
				case 5:
					carga.innerHTML = "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet.</p>";
					break;
				case 6:
					carga.innerHTML = "<h3>RESET</h3><p><p>Se utiliza para realizar un reinicio de fabrica. Con el modem encendido, se debe presionar el orificio con un clip (unos 15 segundos) hasta que los led's se vuelvan intermitente</p></p>";
					break;
				case 7:
					carga.innerHTML = "<h3>SIM CARD</h3><p>Ranura donde se encuentra la SIM CARD.</p>";
					break;
				default:
				carga.innerHTML = "<p>Presiona el indicador para tener mas información</p>";
			}
	}