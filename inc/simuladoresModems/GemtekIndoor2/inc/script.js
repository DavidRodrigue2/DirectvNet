function doClick(n){
  if(n >= 1 && n <= 8){
    const ol = document.getElementById('ol'+n);
    var level1 = ol.childElementCount - 1;
    for(var i = 1; i<= level1; i++){
      var x = (n * 10) + i;
      const nivel2 = document.getElementById('nivel2_'+x);
      nivel2.classList.toggle('hidden');
    }
  }
  if(n >= 11 && n <= 73){
    const nivel2 = document.getElementById('nivel2_'+n);
    var level2 = nivel2.childElementCount - 1;
    if(level2 >= 1){
      var z = n;
      for(var a = 1; a <= level2; a++){
        const nivel3 = document.getElementById('nivel3_'+z);
        nivel3.classList.remove('hidden');
        z +=1;
      }
    }
  }
}