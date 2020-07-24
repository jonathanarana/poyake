<?php
/**
 *
 */
class Store
{
  //CRUD
  public static function save($arr)
  {
    $res['id']=Store::find($arr);
    $res['status']='encontrado';
    if ($res['id'] === 0) {
      $consulta = MySQL::$conection->prepare("INSERT INTO shopping (quantity, description, price, active) VALUES (:quantity, :description, :price, :active);");
      $consulta->bindParam(":quantity", $arr['quantity']);
      $consulta->bindParam(":description", $arr['description']);
      $consulta->bindParam(":price", $arr['price']);
      $consulta->bindParam(":active", $arr['active'], PDO::PARAM_INT);
      $consulta->execute();
      $res['status']='creado';
      $res['id']=$consulta->lastInsertId();
    }
    return json_encode($res);
  }
  public static function get($id)
  {
    $consulta = MySQL::$conection->prepare("SELECT * FROM users WHERE id = :id");
    $consulta->bindParam(":id", $id, PDO::PARAM_INT);
    $consulta->execute();
    return $consulta->fetchAll();
  }
  public static function get_all()
  {
    $consulta = MySQL::$conection->prepare("SELECT * FROM shopping");
    $consulta->execute();
    return $consulta->fetchAll();
  }
  public static function find($arr)
  {
    $consulta = MySQL::$conection->prepare("SELECT id FROM shopping WHERE description=:description limit 1;");
    $consulta->bindParam(':description', $arr['description']);
    $consulta->execute();

    $res = $consulta->fetch();
    return isset($res['id'])?$res['id']:0;
  }
}


 ?>
