const buttonLogin = document.getElementById('buttonLogin');
const login = document.getElementById('login');
const bloque1 = document.getElementById('bloque1');
const img = document.getElementById('img');
const menu = document.getElementById('menu');

buttonLogin.addEventListener('click', (event)=>{
  login.classList.add('hidden');
  img.src = "Images/InfoGeneral.png";
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

// function center(n){
//   if (n == 11){
//     img.src = "Images/center.png";
//   }
//   if (n == 12){
//     img.src = "Images/Version.png";
//   }
//   if (n == 13){
//     img.src = "Images/Dispositivos.png";
//   }
//   if (n == 14){
//     img.src = "Images/Estadisticas.png";
//   }
//   if (n == 15){
//     img.src = "Images/EstadoLTE.png";
//   }  
//   if (n == 21){
//     img.src = "Images/ConfigWiFi.png";
//   }  
// }