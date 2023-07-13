<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<script src="js/nombre-archivo.js"></script>
<body>
<div class="hoja-contacto"><div id="cont-tit">
    <?php require_once 'views/header.php';?>
    <div class="cont-contacto">
    <h2>Enviar correo electrónico</h2>
    <form class="formulario" id="formularioCorreo">
        <div class="campo">
            <label for="destinatario">Para:</label>
            <input type="email" id="destinatario" required>
        </div>

        <div class="campo">
            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" required>
        </div>

        <div class="campo">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" required></textarea>
        </div>

        <button type="submit" class="btn-enviar">Enviar</button>
    </form>
</div>
</div>
</div>
</body>
</html>