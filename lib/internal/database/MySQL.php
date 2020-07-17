<?php
/**
* clase de conexion al servidor
* deve comportarse como un singleton
*/
class MySQL
{
  static protected $host='localhost';
  static protected $port='3306';
  static protected $user='dev';
  static protected $password='primermaster';
  static protected $dbname='poyake';
  static $conection=null;
  static $count=0;

  public static function conect()
  {
    if (self::$conection===null) {
      self::$conection = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";port=".self::$port, self::$user, self::$password);
    }
    self::$count++; //contador para validar el singleton
    return self::$conection;
  }
}



?>
