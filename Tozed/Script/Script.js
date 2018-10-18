const buttonLogin = document.getElementById('buttonLogin');
const login = document.getElementById('login');

buttonLogin.addEventListener('click', (event)=>{
  login.classList.add('hidden');
});