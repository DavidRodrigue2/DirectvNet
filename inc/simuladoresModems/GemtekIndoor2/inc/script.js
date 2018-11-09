function doClick(n){
  const nivel1 = document.getElementById('nivel1_'+n);
  const level2 = document.getElementById('level2_'+n);
  const icon1 = document.getElementById('icon-left'+n);
  var x = (n * 10) + 1;
  const icon2 = document.getElementById('icon-left'+x);
  const nivel2 = document.getElementById('nivel2_'+x);  
  const nivel3 = document.getElementById('nivel3_'+x);
  switch(n){
    case 1:
      level2.classList.toggle('hidden');
      nivel2.classList.toggle('hidden');
      nivel3.classList.toggle('hidden');
      level2.classList.toggle('select');
      nivel2.classList.toggle('select');
      nivel3.classList.toggle('select');
      icon1.classList.toggle('icon-ctrl-down');
      icon2.classList.toggle('icon-ctrl-down');
      break;
    case 2:
      nivel2.classList.toggle('hidden');
  }
}