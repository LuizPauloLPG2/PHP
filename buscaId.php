<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require("index.php"); ?>
    <div class="">

    <table border="1" align="center">
      <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>E-mail</td>
      </tr>
    <?php
      $id = $_GET['id'];
      $sql = "SELECT id, nome, email FROM usuarios WHERE id = '$id'";
      $resultado =  $conn->query($sql);
        while ($linha = $resultado->fetch()) { ?>
      <tr>
        <td><?php echo $linha["id"]; ?></td>
        <td><?php echo $linha["nome"]; ?></td>
        <td><?php echo $linha["email"]; ?></td>
      </tr>
    <?php   }    ?>
    </table>
  </div>

  </body>
</html>
