var carga = document.getElementById('carga');
	function doClick(n){
			switch(n){
				case 0:
					carga.innerHTML = "<h3>LAN</h3><p><p>Cable LAN que va a la POE.</p>";
					break;
				case 1:
					carga.innerHTML = "<h3>SIM CARD</h3><p>Ranura de la SIM CARD.</p>";
					break;
				case 2:
					carga.innerHTML = "<h3>WAN</h3><p>Cable LAN que va a puerta WAN del router.</p>";
					break;
				case 3:
					carga.innerHTML = "<h3>CABLE ENERGIA</h3><p>Cable dirigido a la corriente eléctrica.</p>";
					break;
				case 4:
					carga.innerHTML = "<h3>LAN</h3><p>Cable que viene de la antena Gemtek</p>";
					break;
				default:
				carga.innerHTML = "<p>Presiona el indicador para tener mas información</p>";
			}
	}