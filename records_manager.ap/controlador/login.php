<?php
session_start();
var_dump("asdasd");
require_once "./modelo/usuario.php";
var_dump("asdasd");

require_once './vista/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('./vista');
$twig = new Twig_Environment($loader,array(
      //'debug'=> TRUE,
      //'cache' => 'compilation_cache',
      'auto_reload' => TRUE
    ));

var_dump("asdasd");
try {
  echo "1";
  if (((isset($_POST['user'])) and (trim($_POST['user']))) and ((isset($_POST['pass']))and(trim($_POST['pass']))))
    {echo "2";
    $usuario = usuario::login($_POST['user'],$_POST['pass']);
    if ($usuario){echo "3";

      $_SESSION['usuario'] = $usuario;
      if ($usuario['rol'] == 1){
        $view = "mesa_form.php";
        }
      elseif ($usuario['rol'] == 2) {
        $view = "visitante_form.php";
        }

      }
    else {
       $view = "login_form.php";
       $errorMsg = "Sin permisos";
      }
    }
  else {
      $view = "login_form.php";

      $errorMsg = "Sin permisos";

      $arrayData = array(
         'error' => $errorMsg
      );

      $template = $twig->loadTemplate("login_form.php");
      $template->display($arrayData);
    }
}
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}

?>
