const form = document.getElementById('cadastroForm');
const nomeInput = document.getElementById('nome');
const messageArea = document.getElementById('message-area'); 

form.addEventListener('submit', (e) => {
  localStorage.setItem('nomeUsuario', nomeInput.value);

  messageArea.textContent = 'Nome salvo localmente! O formulário foi enviado para o servidor.';
  messageArea.classList.remove('hidden', 'bg-red-100', 'text-red-700');
  messageArea.classList.add('bg-green-100', 'text-green-700');
});

