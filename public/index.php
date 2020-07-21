<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../lib/internal/database/MySQL.php';
require '../lib/internal/database/Store.php';

MySQL::conect();
echo "<pre>";
//var_dump(Store::get(1));
print_r(Store::save(array('user' => 'demo', 'pass' => 'pass', 'active' => 1 )));
echo "</pre><br>";


echo "<pre>";
//var_dump(Store::get(1));
print_r(Store::find(array('user' => 'demo' )));
echo "</pre><br>";

 ?>
