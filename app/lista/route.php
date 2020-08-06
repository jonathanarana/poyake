<?php
if ($entidad=='Lista') {
  switch ($funcion) {
    case 'Index':
      include '../app/lista/view/index.php';
      break;

    case 'getAll':
      echo json_encode(Store::get_all('list'));
      break;

    case 'create':
      echo json_encode(Store::save('list', $_POST)) ;
      break;

    default:
      // code...
      break;
  }
}

?>
