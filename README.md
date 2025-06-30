# 📸 Formulário de Cadastro com PHP

Este projeto é um formulário de cadastro simples e responsivo que permite aos utilizadores inserir um nome e fazer o upload de uma foto. A lógica de back-end em **PHP** processa e salva os ficheiros enviados no servidor.

## ✨ Funcionalidades

* **Design Moderno e Responsivo:** Uma interface de utilizador limpa e estilizada com **Tailwind CSS**, que se adapta a diferentes tamanhos de ecrã.

* **Upload de Ficheiros:** Um script PHP robusto que lida com o envio de ficheiros de imagem para um diretório no servidor.

* **Armazenamento Local:** Um script JavaScript que salva o nome do utilizador no `localStorage` do navegador, persistindo os dados mesmo após o fecho da página.

## 🚀 Tecnologias Utilizadas

* **Frontend:** HTML, JavaScript, Tailwind CSS

* **Backend:** PHP

## 📦 Pré-requisitos

Para executar este projeto, você precisará de um **servidor web com PHP instalado** (como Apache, Nginx, XAMPP ou WAMP).

## ⚙️ Como Começar

Siga estes passos para configurar e executar a aplicação:

1. **Salve os ficheiros:** Salve o código HTML como `index.html` e o código PHP como `upload.php`. Certifique-se de que ambos os ficheiros estejam no mesmo diretório.

2. **Configure o servidor web:** Coloque os ficheiros na raiz do seu servidor web (por exemplo, na pasta `htdocs` do XAMPP ou na pasta `www` do WAMP).

3. **Verifique as permissões:** Certifique-se de que o diretório onde você colocou os ficheiros tem permissão de escrita para que o script PHP possa criar a pasta `uploads/` e salvar os ficheiros nela.

4. **Acesse o formulário:**
   Abra seu navegador e navegue até o URL onde o ficheiro `index.html` está hospedado (ex: `http://localhost/seu-projeto/index.html`).
