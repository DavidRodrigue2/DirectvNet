function doClick(n)
{
  var ab = document.getElementById('ol'+n).childNodes;

  if (ab.length == 1) {
    d = document.getElementById('a'+n).className = "L2";
  }
  else if (ab.length > 1) {
    d = document.getElementById('ol'+n).className = "withChild";

    var cont = 0;
    var i = 0;
    for (i = 0; i < ab.length; i++) {
      if (ab[i].className == "hidden") {
        cont += 1;
        ab[i].className = "show";
      }
      else if(ab[i].className == "show"){
        ab[i].className = "hidden";
      }
    }
  }
}