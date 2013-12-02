<?php

require_once "connection.php";

$usuario = array(
  "id_usuario" => "0",
  "username" => "ggoral",
  "password" => "ggoral",
  "rol" => "1",
  );
class Usuario {

public static function login($username, $password){
  $conexion = new Conexion();
  $row = $conexion->consulta_fetch("SELECT * FROM usuario WHERE username=? and password=?",array($username,$password));
  return $row;
  }

public static function obtener_usuarios(){
  $conexion = new Conexion();
  $row = $conexion->consulta("SELECT * FROM usuario");
  return $row;
  }
}

//$user = Usuario::login('ggoral','ggoral');
//var_dump($user);

//$users = Usuario::obtener_usuarios();
//var_dump($users);

?>
