ol4.addEventListener("click", procesa);
function procesa(){
  var a = document.getElementById("ol4").childNodes;
  var cont = 0;
  var i = 0;
  for (i = 0; i < a.length; i++) {
    if (a[i].className == "hidden") {
      cont += 1;
      a[i].className = "show";
    }
    else if(a[i].className == "show"){
      a[i].className = "hidden";
    }
  }
}

function doClick(n)
{
  console.log(n);
  var d = document.getElementById('ol'+n);
  console.log(d);
  d.className = "noChildAct";
  
}