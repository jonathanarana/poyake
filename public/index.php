<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../lib/internal/database/MySQL.php';
require '../lib/internal/database/Store.php';

MySQL::conect();

Store::save(array('user' => 'demo', 'pass' => 'pass', 'active' => 1 ));

echo "<pre>";
var_dump(Store::get(1));
echo "</pre><br>";

 ?>
