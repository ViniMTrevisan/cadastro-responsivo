const form = document.getElementById('cadastroForm');
const nomeInput = document.getElementById('nome');

form.addEventListener('submit', (e) => {
  localStorage.setItem('nomeUsuario', nomeInput.value);
});