<?php
/**
 *
 */
class Store
{
  //CRUD
  public static function save($table,$arr)
  {
    $res['id']=Store::find($table,$arr);
    $res['status']='encontrado';
    if ($res['id'] === 0) {
      $consulta = MySQL::$conection->prepare("INSERT INTO ".$table." (quantity, description, price, active) VALUES (:quantity, :description, :price, :active);");
      $consulta->bindParam(":quantity", $arr['quantity']);
      $consulta->bindParam(":description", $arr['description']);
      $consulta->bindParam(":price", $arr['price']);
      $consulta->bindParam(":active", $arr['active'], PDO::PARAM_INT);
      $consulta->execute();
      $res['status']='creado';
      $res['id']=MySQL::$conection->lastInsertId();
    }
    return $res;
  }
  public static function get($id)
  {
    $consulta = MySQL::$conection->prepare("SELECT * FROM users WHERE id = :id");
    $consulta->bindParam(":id", $id, PDO::PARAM_INT);
    $consulta->execute();
    return $consulta->fetchAll();
  }
  public static function get_all($table)
  {
    $consulta = MySQL::$conection->prepare("SELECT * FROM ".$table);
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
  public static function find($table, $arr)
  {
    $consulta = MySQL::$conection->prepare("SELECT id FROM ".$table." WHERE description=:description limit 1;");
    $consulta->bindParam(':description', $arr['description']);
    $consulta->execute();

    $res = $consulta->fetch();
    return isset($res['id'])?$res['id']:0;
  }
}


 ?>
