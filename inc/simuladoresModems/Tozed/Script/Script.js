const buttonLogin = document.getElementById('buttonLogin');
const login = document.getElementById('login');
const bloque1 = document.getElementById('bloque1');
const img = document.getElementById('img');
const menu = document.getElementById('menu');

buttonLogin.addEventListener('click', (event)=>{
  login.classList.add('hidden');
  // img.src = "Images/Info_general.png";
  menu.classList.remove('hidden');
  bloque1.classList.remove('hidden');
});

function doClick(n){
  if (n < 10) {
    const ol = document.getElementById('ol'+n);
    const h = document.getElementById('h'+n);
    d = menu.childElementCount;
    for (var i = 1; i <= d; i++){
      const ol2 = document.getElementById('ol'+i);
      const h2 = document.getElementById('h'+i);
      ol2.classList.remove('activOl');
      h2.classList.remove('activH');
  
      z = ol2.childElementCount - 1;
      for(var b = 1; b <= z; b++){
        var c = (i * 10) + b;
        const li = document.getElementById('li'+c);
        li.classList.remove('activLi');
      }
    }
    
    x = ol.childElementCount - 1;
    for(var b = 1; b <= x; b++){
      var a = (n * 10) + b;
      const li = document.getElementById('li'+a);
      li.classList.add('activLi');
    }
    var r = (n * 10) + 1;
    // center(r);
    ol.classList.add('activOl');
    h.classList.add('activH');
  }
  else{
    // center(n);
  }
}

const close = document.getElementById('close');
const save = document.getElementById('save');
const ChangePass = document.getElementById('ChangePass');
const modalReinicio = document.getElementById('modalReinicio');

ChangePass.addEventListener('click', (event)=>{
  modalReinicio.classList.remove('hidden')
})
close.addEventListener('click', (event)=>{
  modalReinicio.classList.add('hidden')
})
save.addEventListener('click', (event)=>{
  alert('Los datos se han guardado correctamente...')
  modalReinicio.classList.add('hidden')
})

const closeMAC = document.getElementById('closeMAC');
const saveMAC = document.getElementById('saveMAC');
const btnAdd = document.getElementById('btnAdd');
const modalMAC = document.getElementById('modalMAC');

btnAdd.addEventListener('click', (event)=>{
  modalMAC.classList.remove('hidden')
})
closeMAC.addEventListener('click', (event)=>{
  modalMAC.classList.add('hidden')
})
saveMAC.addEventListener('click', (event)=>{
  alert('Los datos se han guardado correctamente...')
  modalMAC.classList.add('hidden')
})


const closeRutas = document.getElementById('closeRutas');
const saveRutas = document.getElementById('saveRutas');
const btnRutas = document.getElementById('btnRutas');
const modalRutas = document.getElementById('modalRutas');

btnRutas.addEventListener('click', (event)=>{
  modalRutas.classList.remove('hidden')
})
closeRutas.addEventListener('click', (event)=>{
  modalRutas.classList.add('hidden')
})
saveRutas.addEventListener('click', (event)=>{
  alert('Los datos se han guardado correctamente...')
  modalRutas.classList.add('hidden')
})


const closeFiltroPuertos = document.getElementById('closeFiltroPuertos');
const saveFiltroPuertos = document.getElementById('saveFiltroPuertos');
const btnFiltroPuertos = document.getElementById('btnFiltroPuertos');
const modalFiltroPuertos = document.getElementById('modalFiltroPuertos');

btnFiltroPuertos.addEventListener('click', (event)=>{
  modalFiltroPuertos.classList.remove('hidden')
})
closeFiltroPuertos.addEventListener('click', (event)=>{
  modalFiltroPuertos.classList.add('hidden')
})
saveFiltroPuertos.addEventListener('click', (event)=>{
  alert('Los datos se han guardado correctamente...')
  modalFiltroPuertos.classList.add('hidden')
})

const btnAplicarReglas = document.getElementById('btnAplicarReglas');
btnAplicarReglas.addEventListener('click', (event)=>{
  alert('Normas ya vigentes!')
})

const closeFiltroIP = document.getElementById('closeFiltroIP');
const saveFiltroIP = document.getElementById('saveFiltroIP');
const btnFiltroIP = document.getElementById('btnFiltroIP');
const modalFiltroIP = document.getElementById('modalFiltroIP');

btnFiltroIP.addEventListener('click', (event)=>{
  modalFiltroIP.classList.remove('hidden')
})
closeFiltroIP.addEventListener('click', (event)=>{
  modalFiltroIP.classList.add('hidden')
})
saveFiltroIP.addEventListener('click', (event)=>{
  alert('Los datos se han guardado correctamente...')
  modalFiltroIP.classList.add('hidden')
})

const closeFiltroMAC = document.getElementById('closeFiltroMAC');
const saveFiltroMAC = document.getElementById('saveFiltroMAC');
const btnFiltroMAC = document.getElementById('btnFiltroMAC');
const modalFiltroMAC = document.getElementById('modalFiltroMAC');

btnFiltroMAC.addEventListener('click', (event)=>{
  modalFiltroMAC.classList.remove('hidden')
})
closeFiltroMAC.addEventListener('click', (event)=>{
  modalFiltroMAC.classList.add('hidden')
})
saveFiltroMAC.addEventListener('click', (event)=>{
  alert('Los datos se han guardado correctamente...')
  modalFiltroMAC.classList.add('hidden')
})

const btnAplicarReglasMAC = document.getElementById('btnAplicarReglasMAC');
btnAplicarReglasMAC.addEventListener('click', (event)=>{
  alert('Normas ya vigentes!')
})


const closeFiltroURL = document.getElementById('closeFiltroURL');
const saveFiltroURL = document.getElementById('saveFiltroURL');
const btnFiltroURL = document.getElementById('btnFiltroURL');
const modalFiltroURL = document.getElementById('modalFiltroURL');

btnFiltroURL.addEventListener('click', (event)=>{
  modalFiltroURL.classList.remove('hidden')
})
closeFiltroURL.addEventListener('click', (event)=>{
  modalFiltroURL.classList.add('hidden')
})
saveFiltroURL.addEventListener('click', (event)=>{
  alert('Los datos se han guardado correctamente...')
  modalFiltroURL.classList.add('hidden')
})

const btnAplicarReglasURL = document.getElementById('btnAplicarReglasURL');
btnAplicarReglasURL.addEventListener('click', (event)=>{
  alert('Normas ya vigentes!')
})


const closeIPMAC = document.getElementById('closeIPMAC');
const saveIPMAC = document.getElementById('saveIPMAC');
const btnIPMAC = document.getElementById('btnIPMAC');
const modalIPMAC = document.getElementById('modalIPMAC');

btnIPMAC.addEventListener('click', (event)=>{
  modalIPMAC.classList.remove('hidden')
})
closeIPMAC.addEventListener('click', (event)=>{
  modalIPMAC.classList.add('hidden')
})
saveIPMAC.addEventListener('click', (event)=>{
  alert('Los datos se han guardado correctamente...')
  modalIPMAC.classList.add('hidden')
})


const closeMapeoPuertos = document.getElementById('closeMapeoPuertos');
const saveMapeoPuertos = document.getElementById('saveMapeoPuertos');
const btnMapeoPuertos = document.getElementById('btnMapeoPuertos');
const modalMapeoPuertos = document.getElementById('modalMapeoPuertos');

btnMapeoPuertos.addEventListener('click', (event)=>{
  modalMapeoPuertos.classList.remove('hidden')
})
closeMapeoPuertos.addEventListener('click', (event)=>{
  modalMapeoPuertos.classList.add('hidden')
})
saveMapeoPuertos.addEventListener('click', (event)=>{
  alert('Los datos se han guardado correctamente...')
  modalMapeoPuertos.classList.add('hidden')
})


const dns1 = document.getElementById('dns1');
const dns2 = document.getElementById('dns2');
const auto = document.getElementById('auto');
const manual = document.getElementById('manual');

auto.addEventListener('click', (event)=>{
  dns1.classList.add('hidden')
  dns2.classList.add('hidden')
})
manual.addEventListener('click', (event)=>{
  dns1.classList.remove('hidden')
  dns2.classList.remove('hidden')
})


const restaurar = document.getElementById('restaurar');
restaurar.addEventListener('click', (event)=>{
  alert('¿Está seguro de que desea restaurar la configuración de fábrica?')
})

const reiniciar = document.getElementById('li56');
reiniciar.addEventListener('click', (event)=>{
  alert('¿Está seguro de que desea reiniciar?')
})











//Para darle fonto intercalado a filas
const table = document.getElementsByTagName('table')
var tableLength = table.length;
for(var i = 0; i<tableLength; i++){
  for(var j = 0; j<table[i].rows.length; j++){
    if(j % 2){
      // table[i].rows[j].bgColor= '#99b7dc'
      table[i].rows[j].classList.add('color')
    }
  }
}

const dmz = document.getElementById('dmz')
const host = document.getElementById('host')

dmz.addEventListener('click', (event=>{
  host.classList.toggle('hidden')
}))