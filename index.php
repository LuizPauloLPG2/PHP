<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $banco = "cadastrar";

  try {
    $conn = new PDO("mysql:host=$host;dbname=$banco", $user, $pass);
  } catch (\Exception $e) {
    echo "ERRO: " . $e->getMessage();
  }

  // if (!$conn) {
  //   echo "ERRO ao se conectar com Banco!";
  // }else{
  //   echo "Conectado com Sucesso!";
  // }

?>
