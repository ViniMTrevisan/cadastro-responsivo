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
    echo "Cadastro salvo com sucesso!";
  } else {
    echo "Erro ao enviar o arquivo.";
  }
} else {
  echo "Método inválido.";
}
?>