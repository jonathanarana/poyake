<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../lib/internal/database/MySQL.php';
require '../lib/internal/database/Store.php';

MySQL::conect();

$lista=Store::get_all();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de compras</title>
  </head>
  <body>
    <h1>Lista de compras</h1>
    <div>
      <form class="" method="post" id="form">
        <label for="">Cantidad:</label>
        <input type="number" name="quantity" value="1" required>
        <label for="">Descripción:</label>
        <input type="text" name="description" value="" required>
        <label for="">Precio:</label>
        <input type="number" name="price" value="1.0" required>
        <input type="submit" value="Agregar">
      </form>
    </div>
    <table>
      <thead>
        <tr>
          <th>Cantidad</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>¿Adquirido?</th>
        </tr>
      </thead>
      <tbody id="lista">
        <?php foreach ($lista as $item): ?>
        <tr>
          <td><?php echo $item['quantity'] ?></td>
          <td><?php echo $item['description'] ?></td>
          <td><?php echo $item['price'] ?></td>
          <td><?php echo $item['active'] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <script src="/js/app.js" charset="utf-8"></script>
  </body>
</html>
