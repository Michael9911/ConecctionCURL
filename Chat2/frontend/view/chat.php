<!--
Hecho por: Michael Stiven Pulido Reyes
correo: maicol1696@gmail.com
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat con Block Chain</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
<!--
En esta clase se generar el contenido del chat, que es donde el usuario coloca
los mensajes a enviar, que sera almacenados en la base de datos y posteriormente
enviados a otro servidor.
 -->
    <div class="" id="container">
      <header> <!--Se enfatisa el uso del div, para tener un mejor control de la vista al usuario en distintos tipos de vistas -->
        <h1 class="text-center">Chat con dos web hosting</h1>
      </header>
        <hr>

      <section class="text-center">
        <p>Bienvenido</p>
        <p id="nombreUsuario" ></p>
      <div class="" id="chat">
        <div class="" id="enviarMensaje">
          <input type="text" name="mensaje" id="mensaje" ><!--El usuario ingresa el mensaje a enviar -->
          <input type="button" name="enviar"  id="enviar" value="Enviar" onclick="Enviar()"><!-- Ejecuta el envio del mensaje -->
        </div>
        <div id="recibirMensajes" class="text-center">
        </div>
      </div>
      </section>
      <footer class="text-center">
        <p>Hecho por <cite>Michael Pulido</cite></p>
        <cite>Copyright (c) 2018 Copyright Holder All Rights Reserved.</cite>
      </footer>
    </div>

    <script src="../control/Enviar.js" ></script> <!-- Este es el script de control de este archivo -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </body>
</html>
