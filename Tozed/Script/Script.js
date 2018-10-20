const buttonLogin = document.getElementById('buttonLogin');
const login = document.getElementById('login');
const loginCenter = document.getElementById('loginCenter');
const menu = document.getElementById('menu');

// const link = document.getElementById('a1');

buttonLogin.addEventListener('click', (event)=>{
  login.classList.add('hidden');
  loginCenter.classList.add('hidden');
  menu.classList.remove('hidden');
});

function doClick(n){
  alert('ok'+ n);
  console.log(n);
  
}