<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>Lista de compras</title>
</head>
<body>
  <div class="container">

<h1>Lista de compras</h1>
<div>
<form class="" method="post" id="form">
  <label for="">Cantidad:</label>
  <input class="input" type="number" name="quantity" value="1" required>
  <label for="">Descripción:</label>
  <input class="input" type="text" name="description" value="" required>
  <label for="">Precio:</label>
  <input class="input" type="number" name="price" value="1.0" required>
  <input type="submit" value="Agregar" id="submit">
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
</tbody>
<tfoot>
  <tr>
    <th>Artículos: n</th>
    <th></th>
    <th>Total: $0.00</th>
    <th>Adquiridos: n de n</th>
  </tr>
</tfoot>
</table>
</div>
</body>
<link rel="stylesheet" href="/css/app.css">
<script src="/js/app.js" charset="utf-8"></script>
</html>
