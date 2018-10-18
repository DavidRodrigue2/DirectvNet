const buttonLogin = document.getElementById('buttonLogin');
const login = document.getElementById('login');
const loginCenter = document.getElementById('loginCenter');

buttonLogin.addEventListener('click', (event)=>{
  login.classList.add('hidden');
  loginCenter.classList.add('hidden');
});