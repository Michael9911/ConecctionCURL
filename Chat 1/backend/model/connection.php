<?php
/*
Hecho por: Michael Stiven Pulido Reyes
correo: maicol1696@gmail.com
*/

/**
 * Se realizara la conexion a la base de datos, dando como retorno la sentencia de mysqli_connect
 */
class connection
{
  /*
  Se da el usuario autorizado a la base de datos, el host en el que esta almacenado, la contraseña del usuario, y el nombre
  de la base de datos
  */
  private $usuario = "admin";
  private $host = "localhost";
  private $password = "toor";
  private $DB = "mensajeria";
  private $conexion;

  function __construct(){}

  public function conectar()
  {
      $this -> conexion = mysqli_connect($this -> host, $this -> usuario, $this -> password, $this -> DB);
      return $this -> conexion;//retorno de la sentencia para la conexion a la base de datos
  }
}
