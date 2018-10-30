<?php
/*
Hecho por: Michael Stiven Pulido Reyes
correo: maicol1696@gmail.com
*/

/*
Este archivo permite almacenar en la base de datos de este servidor, el mensaje enviado por
el usuario de este servidor.
*/
require '../model/consultas.php'; //Importacion de dicho archivo

$connection = new consultas();//Creacion de un objeto, de la clase php en require
$mensaje = $_GET["mensaje"];//Encapsulamientos de la variable enviada con nombre "mensaje" por el metodo GET
$conexion = $connection -> insertarMensaje("chat 2" , $mensaje);//Ejecucion del metodo insertarMensaje tomando como parametros, "chat 2"(esta maquina) y $mensaje que es la variable enviada por el usuario
echo $conexion;//retorno del metodo insertarMensaje
