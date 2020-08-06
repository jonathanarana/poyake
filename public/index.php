<?php
// activamos el reporte de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// cargamos el parametro de la url
$entidad=isset($_GET['entidad'])?$_GET['entidad']:'Lista';
$funcion=isset($_GET['funcion'])?$_GET['funcion']:'Index';
// conectamos a la base de datos
require '../lib/internal/database/MySQL.php';
require '../lib/internal/database/Store.php';
MySQL::conect();

// cargamos todas la rutas
require '../core/loader.php';

 ?>
