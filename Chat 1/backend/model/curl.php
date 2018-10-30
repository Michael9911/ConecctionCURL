<?php
/*
Hecho por: Michael Stiven Pulido Reyes
correo: maicol1696@gmail.com
*/

/*
/*Este archivo permite enviar por cURL un mensaje al otro servidor.
*/
class curl
{
  function __construct(){}

  public function envioCurlMensaje($mensaje)//parametro de mensaje a enviar
  {
    $url = "localhost/Chat2/backend/control/cCurl.php";//URL del otro servidor
    $postData = array("nombre" => "chat 1", "mensaje" => $mensaje);//informacion a enviar hacia el otro servidor

    $handler = curl_init();//Iniciacion de CURL
    curl_setopt($handler, CURLOPT_URL, $url);//Especificacion de la ejecucion, junto con la URL
    curl_setopt($handler, CURLOPT_POST,true);//Metodo POST establecido para el envio de la informacion
    //curl_setopt($handler, CURLOPT_POSTFIELDS, $elements);
    curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);//Concatenacion de las variables jutno a su contenido
    $response = curl_exec ($handler);//Ejecucion de CURL
    curl_close($handler);//Cierre o finalizacion de CURL
  }

}
