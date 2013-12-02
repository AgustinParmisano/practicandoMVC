<?php
$tipo_usuario = array('2'); //aca valido que solo entren los que tienen el rol 2
require_once "validar_acceso.php";
require_once "expediente.php";
try {
  if ((isset($_GET['keyword'])) and (trim($_GET['keyword']))){
    $expedientes_por_keyword = Expediente::obtener_expedientes_keywords($_GET['keyword']);
    foreach ($expedientes_por_keyword as $key => $expediente) {
       $expediente_completo = Expediente::obtener_expediente($expediente['id_expediente']);

       $parametro_template = 'tablasVisitante.laconah';
       $parametro_display = array(
          'datos_extra' => $expediente_completo
       );


      $template = $twig->loadTemplate($parametro_template);
      $template->display($parametro_display);

    }
  }
  else {
    require "error.twig";
  }
  //$expedientes_por_keyword = Expediente::obtener_expedientes_keywords("key3");
  //$display_parameter = array();
  //$template_parameter = "map1.twig";
  //require 'vista.twig.php';

}
catch (Exception $e){
  die ('ERROR: ' . $e->getMessage());
}
?>
