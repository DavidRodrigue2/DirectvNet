var child = document.getElementById('left').childNodes;

function doClick(n)
{
  var cant = (child.length - 1) / 2;
  var ab = document.getElementById('ol'+n).childNodes;  
  var a;
  for (a = 1; a <= cant; a++) {
    if (a == n) {
      change(n);
    }
    else{
      if (ab.length == 1) {
        d = document.getElementById('a'+a).className = "L1";
      }
      else if (ab.length > 1) {
        d = document.getElementById('ol'+a).className = "father";
    
        var cont = 0;
        var i = 0;
        for (i = 0; i < ab.length; i++) {
          if (ab[i].className == "showChild") {
            cont += 1;
            ab[i].className = "child";
          }
        }
      }
    }
  }
}
function change(n){
  var ab = document.getElementById('ol'+n).childNodes;
  if (ab.length == 1) {
    d = document.getElementById('a'+n).className = "L2";
  }
  else if (ab.length > 1) {
    d = document.getElementById('ol'+n).className = "father withChild";

    var cont = 0;
    var i = 0;
    for (i = 0; i < ab.length; i++) {
      if (ab[i].className == "child") {
        cont += 1;
        ab[i].className = "showChild";
      }
    }
  }
}