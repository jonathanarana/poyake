<?php
/**
 *
 */
class Store
{
  //CRUD
  public static function save($arr)
  {
    $consulta = MySQL::$conection->prepare("INSERT INTO users (user, password, active) VALUES (:user, :pass, :active);");
    $consulta->bindParam(":user", $arr['user']);
    $consulta->bindParam(":pass", $arr['pass']);
    $consulta->bindParam(":active", $arr['active'], PDO::PARAM_INT);
    $consulta->execute();
  }
  public static function get($id)
  {
    $consulta = MySQL::$conection->prepare("SELECT * FROM users WHERE id = :id");
    $consulta->bindParam(":id", $id, PDO::PARAM_INT);
    $consulta->execute();
    return $consulta->fetchAll();
  }
}


 ?>
