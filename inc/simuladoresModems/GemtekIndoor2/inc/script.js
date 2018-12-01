function doClick(n){
  // const left = document.getElementById('left');
  // if(n >= 1 && n <= 8){
  //   const ol = document.getElementById('ol'+n);
  //   var level1 = ol.childElementCount - 1;
  //   for(var i = 1; i<= level1; i++){
  //     var x = (n * 10) + i;
  //     const nivel2 = document.getElementById('nivel2_'+x);
  //     nivel2.classList.toggle('hidden');
  //   }
  // }
  // if(n >= 11 && n <= 73){
  //   const nivel2 = document.getElementById('nivel2_'+n);
  //   var level2 = nivel2.childElementCount - 1;
  //   if(level2 >= 1){
  //     var z = n;
  //     for(var a = 1; a <= level2; a++){
  //       const nivel3 = document.getElementById('nivel3_'+z);
  //       nivel3.classList.remove('hidden');
  //       z +=1;
  //     }
  //   }
  // }
  // const ol = document.getElementById('ol'+n);
  // console.log(ol.childElementCount);  
  const left_n = document.getElementById('left_'+n);
  left_n.classList.remove('hidden');
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