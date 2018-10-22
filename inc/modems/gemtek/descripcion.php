    
<script type="text/javascript">


$(document).ready(function(){
    var el = $('.intermitente');
	setInterval(function() {
   	el.toggleClass('encendido');
	}, 1000);
});
</script>
<?php
$boton = $_GET['boton'];




switch ($boton) {
    case "power":
        echo "<h3>POWER <span class='glyphicon glyphicon-off' aria-hidden='true'></span></h3><p><strong>Encendido: <span class='glyphicon glyphicon-off encendido' aria-hidden='true'></span></strong> </p><p>El modem esta encendido.</p><p><strong>Apagado: <span class='glyphicon glyphicon-off' aria-hidden='true'></span></strong> </p><p>El modem esta apagado.</p>";
        break;
    case "sistema":
        echo "<h3>SISTEMA <span class='glyphicon glyphicon-cog' aria-hidden='true'></span></h3><p><strong>Apagado: <span class='glyphicon glyphicon-cog' aria-hidden='true'></span></strong> </p><p>El modem presenta un error del sistema.</p><p><strong>Encendido: <span class='glyphicon glyphicon-cog encendido' aria-hidden='true'></span></strong></p><p>1. El modem esta iniciando</p><p>2. El modem presenta un error</p><strong>Intermitente: <span class='glyphicon glyphicon-cog intermitente' aria-hidden='true'></span></strong> </p><p>El modem está funcionando correctamente.</p>";
        break;
    case "wlan":
        echo "<h3>WIFI <span class='fa fa-wifi' aria-hidden='true'></span></h3><p><strong>Apagado: <span class='fa fa-wifi' aria-hidden='true'></span></strong> </p><p>La función inalámbrica está desactivada.</p><strong>Intermitente: <span class='fa fa-wifi intermitente' aria-hidden='true'></span></strong> </p><p>La función inalámbrica está funcionando correctamente.</p>";
        break;

    case "lan1":
        echo "<h3>LAN 1 <span class='fa fa-desktop' aria-hidden='true'></span></h3><p><strong>Apagado: <span class='fa fa-desktop' aria-hidden='true'></span></strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido: <span class='fa fa-desktop encendido' aria-hidden='true'></span></strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos .</p><strong>Intermitente: <span class='fa fa-desktop intermitente' aria-hidden='true'></span></strong> </p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
        break;
    case "lan2":
        echo "<h3>LAN 2 <span class='fa fa-desktop' aria-hidden='true'></span></h3><p><strong>Apagado: <span class='fa fa-desktop' aria-hidden='true'></span></strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido: <span class='fa fa-desktop encendido' aria-hidden='true'></span></strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos .</p><strong>Intermitente: <span class='fa fa-desktop intermitente' aria-hidden='true'></span></strong> </p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
        break;
    case "lan3":
        echo "<h3>LAN 3 <span class='fa fa-desktop' aria-hidden='true'></span></h3><p><strong>Apagado: <span class='fa fa-desktop' aria-hidden='true'></span></strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido: <span class='fa fa-desktop encendido' aria-hidden='true'></span></strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos .</p><strong>Intermitente: <span class='fa fa-desktop intermitente' aria-hidden='true'></span></strong> </p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
        break;
    case "lan4":
        echo "<h3>LAN 4 <span class='fa fa-desktop' aria-hidden='true'></span></h3><p><strong>Apagado: <span class='fa fa-desktop' aria-hidden='true'></span></strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido: <span class='fa fa-desktop encendido' aria-hidden='true'></span></strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos .</p><strong>Intermitente: <span class='fa fa-desktop intermitente' aria-hidden='true'></span></strong> </p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
        break;
    case "wan":
        echo "<h3>WAN <span class='fa fa-toggle-off' aria-hidden='true'></span></h3><p><strong>Apagado: <span class='fa fa-toggle-off' aria-hidden='true'></span></strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido: <span class='fa fa-toggle-off encendido' aria-hidden='true'></span></strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos .</p><strong>Intermitente: <span class='fa fa-toggle-off intermitente' aria-hidden='true'></span></strong> </p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
        break;

    case "wps":
        echo "<h3>WPS <span class='fa fa-lock' aria-hidden='true'></span></h3><p><strong>Intermitencia lenta: <span class='fa fa-lock intermitente' aria-hidden='true'></span></strong> </p><p>Un dispositivo inalámbrico está intentando conectarse a la red a través de WPS. Este proceso puede tardar de 2 a 3 minutos.</p><strong>Encendido: <span class='fa fa-lock encendido' aria-hidden='true'></span></strong></p><p>1. Cuando el sistema se está iniciando, se enciende durante un corto tiempo y luego se apaga.</p><p>2. Cuando un dispositivo inalámbrico se ha conectado con éxito a través de WPS, se enciende por unos 5 minutos y luego se apaga </p><p><strong>Intermitencia rapida: <span class='fa fa-lock intermitente' aria-hidden='true'></span></strong> </p><p>Un dispositivo inalámbrico no pudo ser agregado a la red</p>";
        break;

    case "enchufe":
        echo "<h3>ENCHUFE</h3><p>El enchufe de corriente es donde se conecte el adaptador de corriente. Utilice el adaptador de corriente suministrado</p>";
        break;
		
	case "onoff":
        echo "<h3>ON/OFF</h3><p>Boton de encendido y apagado del modem</p>";
        break;

    case "lan1atras":
        echo "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet</p>";
        break;

    case "lan2atras":
        echo "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet</p>";
        break;

    case "lan3atras":
        echo "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet</p>";
        break;

    case "lan4atras":
        echo "<h3>PUERTO ETHERNET</h3><p>Permite a un dispositivo conectarse a la red mediante el cable ethernet</p>";
        break;

    case "wanatras":
        echo "<h3>WAN</h3>El puerto WAN es donde se conecte el módem DSL por cable Ethernet.</p>";
        break;
		
	case "wps2":
        echo "<h3>WPS</h3>Si tiene dispositivos con tecnologia WPS (Wi-Fi Protected Setup), puede presionar este botón para establecer una conexión entre el router y el dispositivos, automáticamente configura la red inalámbrica.</p>";
        break;

    case "reset":
        echo "<h3>RESET</h3><p>Se utiliza para realizar un reinicio de fabrica. Con el router encendido, se debe presionar el orificio con un clip (unos 5 segundos) hasta que los led's se vuelvan intermitente</p>";
        break;











    default:
       echo "<p>Presiona el indicador para tener mas información</p>";
}



?>




