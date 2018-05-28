<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/estilo.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="cadastro_usuario" action="dados.php" method="post">
      <p>Cadastre-se!</p>
      <input type="text" name="inputNome" required placeholder="Nome">
      <br>
      <input type="email" name="inputEmail" required placeholder="E-mail">
      <br>
      <input type="password" name="inputSenha" required placeholder="Senha">
      <br>
      <button type="submit" name="button">cadastrar</button>
    </form>
  </body>
</html>
