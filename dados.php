<?php

  require("index.php");

  $nome = $_POST['inputNome'];
  $email = $_POST['inputEmail'];
  $senha = md5($_POST['inputSenha']);

  $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  if ($conn->query($sql)==TRUE) {
    echo "CADASTRADO!";
  }else{
    echo "ERRO!";
  }

?>
