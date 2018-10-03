var child = document.getElementById('left').childNodes;
var cant = (child.length - 1) / 2;  
function doClick(n)
{  
  var ab = document.getElementById('ol'+n).childNodes;
  for (var a = 1; a <= cant; a++) {
    if (a == n) {
      marcar(n, ab);
    }
    else if (a != n){
      ocultar(a);
    }
  }
}

function marcar(n, ab){
  if (ab.length <= 1) {
    d = document.getElementById('a'+n).className = "L2";
  }
  else if (ab.length > 1) {
    c = document.getElementById('ol'+n).className = "father withChild";
    for (var i = 0; i < ab.length; i++) {
      if (ab[i].className == "child") {
        ab[i].className = "showChild";
      }
    }
  }
}

function ocultar(a){
    var ac = document.getElementById('ol'+a).childNodes;
    d = document.getElementById('a'+a).className = "L1";
    d = document.getElementById('ol'+a).className = "father";
  if (ac.length > 1) {
    var i = 0;
    for (i = 0; i < ac.length; i++) {
      if (ac[i].className == "showChild") {
        ac[i].className = "child";
      }
    }
  }
}