var d = document.getElementById('button');
const iframe = document.getElementById('iframeCenter');
d.addEventListener('click', procesa);
function procesa(){
  if(d.value == ">> Página de Inicio"){
    d.value= ">> Página de Estatus";
    a = iframe.src = "Pages/Login.html";
  }
  else if(d.value == ">> Página de Estatus"){
    d.value= ">> Página de Inicio";
    a = iframe.src = "Pages/Inicio.html";
  }
}