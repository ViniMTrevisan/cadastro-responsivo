<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = htmlspecialchars($_POST['nome']);
  $foto = $_FILES['foto'];

  $diretorio = 'uploads/';

  if (!is_dir($diretorio)) {
    mkdir($diretorio, 0777, true);
  }

  $caminho = $diretorio . basename($foto['name']);

  if (move_uploaded_file($foto['tmp_name'], $caminho)) {
    echo "Cadastro salvo com sucesso! Nome: " . $nome . ", Foto salva em: " . $caminho;
  } else {
    echo "Erro ao enviar o arquivo. Código de erro: " . $foto['error'];
  }
} else {
  echo "Método inválido. Este script deve ser acessado via POST de um formulário.";
}
?>