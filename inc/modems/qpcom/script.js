var carga = document.getElementById('carga');
	function doClick(n){
			switch(n){
				case 0:
					carga.innerHTML = "<h3>POWER</h3><p><strong>Encendido (PWR):</strong> </p><p>El modem esta encendido.</p><p><strong>Apagado (PWR):</strong></p><p>El modem esta apagado.</p>";
					break;
				case 1:
					carga.innerHTML = "<h3>SISTEMA</h3><p><strong>Apagado: (SYS)</strong> </p><p>El modem presenta un error del sistema.</p><p><strong>Encendido: (SYS)</strong></p><p>1. El modem esta iniciando</p><P>2. El modem presenta un error</P><p><strong>Intermitente: (SYS)</strong></p><p>El modem está funcionando correctamente.</p>";
					break;
				case 2:
					carga.innerHTML = "<h3>WPS</h3><p><strong>Intermitencia lenta:</strong></p><p>Un dispositivo inalámbrico está intentando conectarse a la red a través de WPS. Este proceso puede tardar de 2 a 3 minutos.</p><strong>Encendido:</strong></p><p>1. Cuando el sistema se está iniciando, se enciende durante un corto tiempo y luego se apaga.</p><p>2. Cuando un dispositivo inalámbrico se ha conectado con éxito a través de WPS, se enciende por unos 5 minutos y luego se apaga </p><p><strong>Intermitencia rapida:</strong></p><p>Un dispositivo inalámbrico no pudo ser agregado a la red</p>";
					break;
				case 3:
					carga.innerHTML = "<h3>WLAN </h3><p><strong>Apagado: </strong> </p><p>La función inalámbrica está desactivada.</p><p><strong>Intermitente:</strong></p><p>La función inalámbrica está funcionando correctamente.</p>";
					break;
				case 4:
					carga.innerHTML = "<h3>LAN 4 </h3><p><strong>Apagado: </strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido:</strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos.</p><strong>Intermitente:</strong></p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
					break;
				case 5:
					carga.innerHTML = "<h3>LAN 3 </h3><p><strong>Apagado: </strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido:</strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos.</p><strong>Intermitente:</strong></p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
					break;
				case 6:
					carga.innerHTML = "<h3>LAN 2 </h3><p><strong>Apagado: </strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido:</strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos.</p><strong>Intermitente:</strong></p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
					break;
				case 7:
					carga.innerHTML = "<h3>LAN 1 </h3><p><strong>Apagado: </strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido:</strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos.</p><strong>Intermitente:</strong></p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
					break;
				case 8:
					carga.innerHTML = "<h3>WAN</h3><p><strong>Apagado:</strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido:</strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos.</p><strong>Intermitente:</strong></p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
          break;
        case 9:
					carga.innerHTML = "<h3>WAN</h3><p>El puerto WAN es donde se conecte el módem, por medio de cable Ethernet, a la gemtek.</p>";
          break;
        case 10:
					carga.innerHTML = "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet.</p>";
          break;
        case 11:
					carga.innerHTML = "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet.</p>";
          break;
        case 12:
					carga.innerHTML = "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet.</p>";
          break;
        case 13:
					carga.innerHTML = "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet.</p>";
          break;
        case 14:
					carga.innerHTML = "<h3>RST/WPS</h3><p>Al presionar el boton por 5 segundos se activa la funcion wps (Wi-Fi Protected Setup),</p><p>Si se presiona por mas de 10 segundos el router vuelve a la configuracion de fabrica predeterminada.</p>";
          break;
        case 15:
					carga.innerHTML = "<h3>ENCHUFE</h3><p>El enchufe es donde se conecte el adaptador de corriente. Utilice el adaptador de corriente suministrado.</p>";
					break;
				default:
				carga.innerHTML = "<p>Presiona el indicador para tener mas información</p>";
			}
	}