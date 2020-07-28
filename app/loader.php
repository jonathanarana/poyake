<?php
// carga todas las rutas y controladores de cada entidad
$d=array_diff(scandir('../app'), array('..', '.'));
foreach ($d as $key) {
  if (is_dir('../app/'.$key)) {
    require '../app/'.$key.'/controller.php';
    require '../app/'.$key.'/route.php';
  }
}
?>
