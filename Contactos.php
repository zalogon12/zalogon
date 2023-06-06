<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
<div class="hoja-contacto"><div id="cont-tit">
    <?php require_once 'views/header.php';?>
    <div id="cont-contacto">
      <p class="sas">Si tienes alguna pregunta o deseas contactarme, por favor completa el siguiente formulario:</p>
  <form>
  <label id="nombre-c"for="name">Nombre:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="message">Mensaje:</label>
  <textarea id="message" name="message" required></textarea>

  <button class="boton">Enviar</button>

</form>
<p class="sas">¡Gracias por tu interés! Te responderé tan pronto como sea posible.
</p>
</div>
</div>
</body>
</html>