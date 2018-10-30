/*
Hecho por: Michael Stiven Pulido Reyes
correo: maicol1696@gmail.com
*/

//Esta funcion enviar al servidor mediante GET la informacion encapsulada
function Enviar() {
  var xhttp = new XMLHttpRequest();//Inicio de una nueva peticion o instancia de dicho objeto
  var mensaje = document.getElementById('mensaje').value;//captura de la informacion almacenada en HTML con id="mensaje"
  xhttp.onreadystatechange = function() {//nueva funcion para ejecutar la peticion xhttp
    if (this.readyState == 4 && this.status == 200) {//Respuesta del servidor si ambos valores son corectos, es decir que hay comunicacion hacia el servidor
      document.getElementById("recibirMensajes").innerHTML = this.responseText;//la informacion almacenada en el div de HTML con id="recibirMensajes" sera sobreescrita por el servidor
    }
  };
  xhttp.open("GET", "../../backend/control/cchat.php?mensaje="+mensaje, true);//Preparacion de la peticion a la carpeta de control, tambien se le envia la variable mensaje, previamente almacenada
  xhttp.send();//Envio de la peticion
}
