<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>Uy!Transfer</title>
  </head>
  <body>

    <?php

      include "librerias/header.php";

    ?>

    <div id="formulario">
      <form name="subir" id="form" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="name" name="nombre" placeholder="Tu nombre" style="width: 40%;"><br><br>
        <input type="file" name="archivo"><br><br>
        <input type="checkbox" name="email"><label>Quiero enviar el link de descarga por email</label><br><br>
        <input type="mail" name="email" placeholder="Email del destinatario" style="width: 40%;"><br><br>
        <label>Mensaje</label><br><br>
        <textarea name="mensaje" style="width: 40%; height: 100px;"></textarea><br><br>
        <button type="submit">Subir archivo</button>
      </form>
    </div>
    
  </body>
</html>