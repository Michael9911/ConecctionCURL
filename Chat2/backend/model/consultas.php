<?php
/*
Hecho por: Michael Stiven Pulido Reyes
correo: maicol1696@gmail.com
*/
/**
 * se realizan metodos para almacenar y listar la base de datos
 */
require 'connection.php';//Se encuentra la conexion a la base de datos
require 'curl.php';//Se encuentra el CURL que permite enviar informacion hacia otro servidor
class consultas
{
  function __construct(){}

  public function insertarMensaje($nombre,$mensaje)
  {
    $connection = new connection(); //estable el objeto conexion
    $conexion = $connection -> conectar(); //guarda la conexion para realizar las consultas
    $insertar = "INSERT INTO mensajes(nombre, mensaje) VALUES('$nombre ','$mensaje')";//Creacion de la sentencia SQL para guardar el mensaje
    $resultado = mysqli_query($conexion, $insertar);//Ejecucion de la sentencia, que toma como parametro la conexion a la base de datos y la sentencia SQL a ejecutar en ella
    mysqli_close($conexion);//Cierre de la consulta
    $consulta = new consultas();
    $texto = $consulta -> listarMensajes();//Listar mensajes de la base de datos
    if ($nombre === "chat 2")//Verifiacion de quien envio el mensaje, si el mensaje proviene de esta maquina, se enviara al otro servidor, de lo contrario, no se ejecutara otra accion
    {
      $curl = new curl();
      $curl -> envioCurlMensaje($mensaje);//Envio del mensaje hacia otro servidor
    }
    return $texto;//retorno del listado de la base de datos
  }

  public function listarMensajes()
  {
    $connection = new connection(); //estable el objeto conexion
    $conexion = $connection -> conectar(); //guarda la conexion para realizar las consultas
    $sql = 'SELECT nombre, mensaje FROM mensajes';//sentecia SQL para traer los mensaje almacenado en la base de datos
    $resultado = mysqli_query($conexion,$sql);//Ejecucion de la sentencia, que toma como parametro la conexion a la base de datos y la sentencia SQL a ejecutar en ella
    $texto = "";//Creacion de una variable para almacenar los mensajes
    while($row = mysqli_fetch_row($resultado))//almacenamiento en un array de los datos arrojados de la consulta SQL en la base de datos
    {
      $texto = $texto.$row[0].$row[1]."<br>";//Concatenacion de los mensajes listados organizados en un array
    }
    mysqli_close($conexion);//Cierrre de la peticion
    return $texto;//Retorno de los mensajes de la base de datos
  }
}
