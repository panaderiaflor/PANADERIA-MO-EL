<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <title>Registros</title>
</head>
<body>
  <form method="post">
  <section class="form-register">
    <h4>Registros</h4>
    <input class="controls" type="text" name="cantidad" id="cantidad" placeholder="Cantidad de panes vendidos">
    <input class="controls" type="text" name="tipos" id="tipos" placeholder="Tipos de panes vendidos">
    <input class="controls" type="text" name="precio" id="precio" placeholder="Precio final">
    <a href=""><input class="botons" type="submit" value="Registrar" name="registrar"></a>
  </section>
  </form>
  <?php
  include("reg.php");
  ?>
</body>
</html>
