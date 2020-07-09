<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../lib/internal/database/MySQL.php';

$mysql=new MySQL('localhost','3386','dev','primermaster','primermaster');
$mysql->conect();
$mysql->conect(); // para comprobar que se trate
$mysql->conect(); // de una misma instancia
$mysql->conect(); // ejecutamos varias veces la conexion
$mysql->conect(); // el contador deberia de aumentar
$mysql->conect(); // si es igual a uno, significa que creo multiples
$mysql->conect(); // instancias y el singleton no funciona

$users=$mysql->getUser(1);
echo "<pre>";
var_dump($users);
echo "</pre><br>";

if ($mysql->getN()>1) {
  echo "Exito, el Singleton Funciona";
}
 ?>
