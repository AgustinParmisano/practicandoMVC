<?php
session_start();

if ((array_key_exists('usuario', $_SESSION)) && (in_array($_SESSION['usuario']['rol'], $tipo_usuario))) {
  $usuario = $_SESSION['usuario'];
  }
else {
  header("location: index.php");
  }
?>