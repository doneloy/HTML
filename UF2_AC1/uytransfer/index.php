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
      <form id="form">
        <input type="name" name="nombre" placeholder="Tu nombre"><br>
        <input type="file" name="archivo"><br>
        <input type="checkbox" name="email"><label>Quiero enviar el link de descarga por email</label><br>
        <input type="email" name="email" placeholder="Email del destinatario"><br>
        <label>Mensaje</label><br>
        <input type="text" name="mensaje"><br>
        <input type="submit" value="Subir archivo">
      </form>
    </div>
    
  </body>
</html>