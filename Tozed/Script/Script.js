const buttonLogin = document.getElementById('buttonLogin');
const login = document.getElementById('login');
const loginCenter = document.getElementById('loginCenter');
const menu = document.getElementById('menu');

buttonLogin.addEventListener('click', (event)=>{
  login.classList.add('hidden');
  loginCenter.classList.add('hidden');
  menu.classList.remove('hidden');
});
