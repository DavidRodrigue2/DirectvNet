function doClick(n){
  const nivel1 = document.getElementById('nivel1_'+n);
  
  var x = (n * 10) + 1;
  var z = x + 1;
  const nivel2 = document.getElementById('nivel2_'+x);
  const level2 = document.getElementById('level2_'+x);
  const nivel3 = document.getElementById('nivel3_'+z);

  nivel2.classList.remove('hidden');
  nivel2.classList.add('select');
  level2.classList.remove('hidden');
  level2.classList.add('select');
  nivel3.classList.remove('hidden');
  nivel3.classList.add('select');
}