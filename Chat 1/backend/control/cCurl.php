<?php
/*
Hecho por: Michael Stiven Pulido Reyes
correo: maicol1696@gmail.com
*/

/*
Este es el archivo de control del curl donde se recibe informacion enviada por el otro servidor
donde aqui sera almacenada en la base de datos de este servidor.
*/
require '../model/consultas.php';//Importacion de dicho archivo

//Almacenamiento de datos enviados por el metodo POST
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

$connection = new consultas();//Creacion del objeto de la clase consultas.oho
$conexion = $connection -> insertarMensaje($nombre , $mensaje);//envio de parametros recibidos por el metodo POST
