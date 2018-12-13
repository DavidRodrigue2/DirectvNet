var carga = document.getElementById('carga');
	function doClick(n){
			switch(n){
				case 0:
					carga.innerHTML = "<h3>POWER</h3><p><strong>Azul:</strong> </p><p>Modem esta encendido.</p><p><strong>Apagado:</strong></p><p>Modem apagado, o sin energía.</p>";
					break;
				case 1:
					carga.innerHTML = "<h3>2.4G WiFi</h3><p><strong>Azul:</strong></p><p>WiFi 2.4GHz activo.</p><p><strong>Intermitente:</strong></p><p>WiFi 2.4GHz transmitiendo datos.</p><p><strong>Apagado:</strong></p><p>WiFi 2.4GHz apagado.</p>";
					break;
				case 2:
					carga.innerHTML = "<h3>5G WiFi</h3><p><strong>Azul:</strong></p><p>WiFi 5GHz activo.</p><p><strong>Intermitente:</strong></p><p>WiFi 5GHz transmitiendo datos.</p><p><strong>Apagado:</strong></p><p>WiFi 5GHz apagado.</p>";
					break;
				case 3:
					carga.innerHTML = "<h3>LAN</h3><p><strong>Azul:</strong></p><p>Puerto Ethernet conectado al PC.</p><p><strong>Intermitente:</strong></p><p>Transmitiendo datos por el puerto Ethernet.</p><p><strong>Apagado:</strong></p><p>Puerto Ethernet sin conexión al PC.</p>";
					break;
				case 4:
					carga.innerHTML = "<h3>INTERNET</h3><p><strong>Azul:</strong></p><p>Conexión a internet habilitada.</p><p><strong>Apagado:</strong></p><p>Sin conexión a internet.</p><p><strong>Rojo:</strong></p><p>SIM CARD no detectada.</p>";
					break;
				case 5:
					carga.innerHTML = "<h3>INDICADOR DE SEÑAL</h3><strong>Azul:</strong></p><p>Conectado.</p><strong>Apagado:</strong></p><p>Sin señal.</p>";
					break;
				case 6:
					carga.innerHTML = "<h3>INDICADOR DE SEÑAL</h3><strong>Azul:</strong></p><p>SINR < 3 Bd o RSRP < -105 dBm</p>";
					break;
				case 7:
					carga.innerHTML = "<h3>INDICADOR DE SEÑAL</h3><strong>Azul:</strong></p><p>3 Bd SINR < 6 dB</p>";
					break;
				case 8:
					carga.innerHTML = "<h3>INDICADOR DE SEÑAL</h3><strong>Azul:</strong></p><p>6 Bd SINR < 9 dB</p>";
          break;
        case 9:
					carga.innerHTML = "<h3>INDICADOR DE SEÑAL</h3><strong>Azul:</strong></p><p>SINR > 9 dB</p>";
          break;
        case 10:
					carga.innerHTML = "<h3>ENCHUFE</h3><p><p>Conector de energía.</p>";
          break;
        case 11:
					carga.innerHTML = "<h3>WPS</h3><p>Al presionar el boton por 5 segundos se activa la funcion wps (Wi-Fi Protected Setup).</p>";
          break;
        case 12:
					carga.innerHTML = "<h3>RESET</h3><p>Se utiliza para realizar un reinicio de fabrica. Con el router encendido, se debe presionar el orificio con un clip (unos 10 segundos) hasta que los led's se vuelvan intermitente.</p>";
          break;
        case 13:
					carga.innerHTML = "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet.</p>";
          break;
        case 14:
					carga.innerHTML = "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet.</p>";
					break;
				case 15:
					carga.innerHTML = "<h3>RANURA DE SIM CARD</h3>";
          break;
				default:
				carga.innerHTML = "<p>Presiona el indicador para tener mas información</p>";
			}
	}