function doClick(n){
  //Mostrar contenido del centro
  const left_n = document.getElementById('left_'+n);
  // left_n.classList.remove('hidden');
  // fin de mostrar contenido del centro

  if(n < 9){
    ocultar();
    const nivel1 = document.getElementById('op'+n);
    var cant = nivel1.childElementCount -1;
    var x = (n * 10) + 1;
    for(var i = 0; i< cant; i++){
      const nivel2 = document.getElementById('op'+x);
      nivel2.classList.toggle('hidden');
      x+=1;
    }
  }
  else if(n > 10 && n < 74){
    const level2 = document.getElementById('op'+n);
    var cant2 = level2.childElementCount -1;
    if(cant2 != 0){
      var z = n + 100;
      for(var c = 0; c< cant2; c++){
        const nivel3 = document.getElementById('op'+z);
        nivel3.classList.toggle('hidden');
        z+=1;
      }
    }
  }
}

function ocultar(){
  for(var m= 1; m< 9; m++){
    const lv1  = document.getElementById('op'+m);
    var w = lv1.childElementCount -1;
    var f = (m*10) + 1;
    for(var l = 0; l < w; l++){
      const lv2  = document.getElementById('op'+f);
      lv2.classList.add('hidden');
      f+=1;
    }
  }
}

const newRegla = document.getElementById('newRegla');
const agregar = document.getElementById('agregar');
const eliminar = document.getElementById('eliminar');
const newRegla2 = document.getElementById('newRegla2');
const agregar2 = document.getElementById('agregar2');
const eliminar2 = document.getElementById('eliminar2');
const newRegla3 = document.getElementById('newRegla3');
const agregar3 = document.getElementById('agregar3');
const eliminar3 = document.getElementById('eliminar3');

const ddns = document.getElementById('ddns');
const nameDDNS = document.getElementById('nameDDNS');
const passDDNS = document.getElementById('passDDNS');
const hostDDNS = document.getElementById('hostDDNS');
ddns.addEventListener('click', (event)=>{
  nameDDNS.classList.toggle('hidden');
  passDDNS.classList.toggle('hidden');
  hostDDNS.classList.toggle('hidden');
});


agregar.addEventListener('click', (event)=>{
  newRegla.classList.remove('hidden');
});
eliminar.addEventListener('click', (event)=>{
  newRegla.classList.add('hidden');
});
agregar2.addEventListener('click', (event)=>{
  newRegla2.classList.remove('hidden');
});
eliminar2.addEventListener('click', (event)=>{
  newRegla2.classList.add('hidden');
});
agregar3.addEventListener('click', (event)=>{
  newRegla3.classList.remove('hidden');
});
eliminar3.addEventListener('click', (event)=>{
  newRegla3.classList.add('hidden');
});

const ip = document.getElementById('ip');
const dmz = document.getElementById('dmz');
ip.addEventListener('click', (evet)=>{
  if(dmz.disabled == false){
    dmz.disabled = true;
  }
  else{
    dmz.disabled = false;
  }
});