<?php

require_once "connection.php";

$expediente = array(
  "id_expediente" => "",
  "causante" => "",
  "extracto" => "",
  "personas" => array("Gonzalo", "Jonatan", "Agustin"), //Esta relacion es 1 a N
  "keywords" => array("foo", "bar", "hallo", "world"), //Esta relacion es N a N
   ); 

// $expediente["id_usuario"] = seter
// $expediente["id_usuario"]
// array_search("keyword",$expediente["keywords"]);
// echo array_search("foo",$expediente["keywords"]);
// echo in_array("fo",$expediente["keywords"]);


class Expediente {

public static function obtener_expediente($id_expediente){
  $conexion = new Conexion();
  $row = $conexion->consulta_fetch("SELECT * FROM expediente WHERE id_expediente=?",array($id_expediente));
  return $row;
  } 

public static function obtener_expedientes(){
  $conexion = new Conexion();
  $row = $conexion->consulta("SELECT * FROM expediente");
  return $row;
  } 

public static function obtener_keywords($id_expediente){
  $conexion = new Conexion();
  $row = $conexion->consulta("SELECT k.keyword 
                              FROM keyword AS k 
                              INNER JOIN expediente_keyword AS ek on  ek.id_keyword = k.id_keyword
                              WHERE ek.id_expediente = ?",array($id_expediente));
  return $row;
  }

public static function obtener_expedientes_keywords($keyword){
  $conexion = new Conexion();
  $row = $conexion->consulta("SELECT e.id_expediente 
                              FROM expediente AS e 
                              INNER JOIN expediente_keyword AS ek on  ek.id_expediente = e.id_expediente
                              INNER JOIN keyword AS k on  ek.id_keyword = k.id_keyword
                              WHERE k.keyword = ?",array($keyword));
  return $row;
  }

public static function obtener_personas($id_expediente){
  $conexion = new Conexion();
  $row = $conexion->consulta("SELECT persona 
                              FROM persona 
                              WHERE id_expediente = ?",array($id_expediente));
  return $row;
  } 

}

//$expediente = Expediente::obtener_expediente("1");
//var_dump($expediente);

//$expedientes = Expediente::obtener_expedientes();
//var_dump($expedientes);

//$keywords = Expediente::obtener_keywords("2");
//var_dump($keywords);

//$expedientes_por_keyword = Expediente::obtener_expedientes_keywords("key3");
//var_dump($expedientes_por_keyword);

?>
