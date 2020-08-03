<?php
// activamos el reporte de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// cargamos el parametro de la url
$route=isset($_GET['route'])?$_GET['route']:'index';
// conectamos a la base de datos
require '../lib/internal/database/MySQL.php';
require '../lib/internal/database/Store.php';
MySQL::conect();
require '../app/loader.php';
// cargamos todas la rutas


 ?>
