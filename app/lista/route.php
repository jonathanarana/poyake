<?php
switch ($route) {
  case 'index':
    include '../app/lista/view/index.php';
    break;

  case 'get-all-lista':
    echo json_encode(Store::get_all('list'));
    break;

  case 'add-to-list':
    echo json_encode(Store::save('list', $_POST)) ;
    break;

  default:
    // code...
    break;
}
?>
