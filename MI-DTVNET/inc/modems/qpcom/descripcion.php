    
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
    case "pwr":
        echo "<h3>PWR</h3><p><strong>Encendido <span class='encendido'>(PWR)</span>:</strong> </p><p>El modem esta encendido.</p><p><strong>Apagado:</strong> (PWR)</p><p>El modem esta apagado.</p>";
        break;
    case "sistema":
        echo "<h3>SISTEMA</h3><p><strong>Apagado: (SYS)</strong> </p><p>El modem presenta un error del sistema.</p><p><strong>Encendido: <span class='encendido' aria-hidden='true'>(SYS)</span></strong></p><p>1. El modem esta iniciando</p><p>2. El modem presenta un error</p><strong>Intermitente: <span class='intermitente' aria-hidden='true'>(SYS)</span></strong> </p><p>El modem está funcionando correctamente.</p>";
        break;
    case "wlan":
        echo "<h3>WLAN </h3><p><strong>Apagado: <span >WLAN</span></strong> </p><p>La función inalámbrica está desactivada.</p><strong>Intermitente: <span class='intermitente' aria-hidden='true'>WLAN</span></strong> </p><p>La función inalámbrica está funcionando correctamente.</p>";
        break;

    case "lan1":
        echo "<h3>LAN 1 </h3><p><strong>Apagado: (1)</strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido: <span class='encendido' aria-hidden='true'>(1)</span></strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos .</p><strong>Intermitente: <span class='intermitente' aria-hidden='true'>(1)</span></strong> </p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
        break;
    case "lan2":
        echo "<h3>LAN 2 </h3><p><strong>Apagado: (2)</strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido: <span class='encendido' aria-hidden='true'>(2)</span></strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos .</p><strong>Intermitente: <span class='intermitente' aria-hidden='true'>(2)</span></strong> </p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
        break;
    case "lan3":
        echo "<h3>LAN 3 </h3><p><strong>Apagado: (3)</strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido: <span class='encendido' aria-hidden='true'>(3)</span></strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos .</p><strong>Intermitente: <span class='intermitente' aria-hidden='true'>(3)</span></strong> </p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
        break;
    case "lan4":
        echo "<h3>LAN 4 </h3><p><strong>Apagado: (4)</strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido: <span class='encendido' aria-hidden='true'>(4)</span></strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos .</p><strong>Intermitente: <span class='intermitente' aria-hidden='true'>(4)</span></strong> </p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
        break;
    case "wan":
        echo "<h3>WAN</h3><p><strong>Apagado: <span>(WAN)</span></strong> </p><p>No hay ningún dispositivo conectado al puerto.</p><p><strong>Encendido: <span class='encendido' aria-hidden='true'>(WAN)</span></strong></p><p>Hay un dispositivo conectado pero no hay transmision de datos .</p><strong>Intermitente: <span class='intermitente' aria-hidden='true'>(WAN)</span></strong> </p><p>Hay un dispositivo conectado y se esta transmitiendo datos</p>";
        break;

    case "wps":
        echo "<h3>WPS <span aria-hidden='true'>(WPS)</span></h3><p><strong>Intermitencia lenta: <span class='intermitente' aria-hidden='true'>(WPS)</span></strong> </p><p>Un dispositivo inalámbrico está intentando conectarse a la red a través de WPS. Este proceso puede tardar de 2 a 3 minutos.</p><strong>Encendido: <span class='encendido' aria-hidden='true'>(WPS)</span></strong></p><p>1. Cuando el sistema se está iniciando, se enciende durante un corto tiempo y luego se apaga.</p><p>2. Cuando un dispositivo inalámbrico se ha conectado con éxito a través de WPS, se enciende por unos 5 minutos y luego se apaga </p><p><strong>Intermitencia rapida: <span class='intermitente' aria-hidden='true'>(WPS)</span></strong> </p><p>Un dispositivo inalámbrico no pudo ser agregado a la red</p>";
        break;

    case "enchufe":
        echo "<h3>ENCHUFE</h3><p>El enchufe es donde se conecte el adaptador de corriente. Utilice el adaptador de corriente suministrado</p>";
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
        echo "<h3>WAN</h3>El puerto WAN es donde se conecte el módem, por medio de cable Ethernet, a la gemtek.</p>";
        break;
		
	case "rstwps":
        echo "<h3>RST/WPS</h3>Al presionar el boton por 5 segundos se activa la funcion wps (Wi-Fi Protected Setup), </p>Si se presiona por mas de 10 segundos el router vuelve a la configuracion de fabrica predeterminada";
        break;












    default:
       echo "<p>Presiona el indicador para tener mas información</p>";
}



?>




