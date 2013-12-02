<?php
session_start();

require_once './vista/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('./vista');
$twig = new Twig_Environment($loader,array(
      //'debug'=> TRUE,
      //'cache' => 'compilation_cache',
      'auto_reload' => TRUE
    ));


if (array_key_exists('usuario', $_SESSION)) {
  $usuario = $_SESSION['usuario'];
  echo "2";
  if ($usuario['rol'] == 1){
    $view = "mesa_form.php";
  }
  elseif ($usuario['rol'] == 2) {
    $view  = "visitante_form.php";
  }

}else{

  $view = "login_form.php";

  $errorMsg = "vaciooooo";

  $arrayData = array(
    'error' => $errorMsg
    );

  $template = $twig->loadTemplate("login_form.php");
  $template->display($arrayData);
}
