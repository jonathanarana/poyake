<?php
/**
* clase de conexion al servidor
* deve comportarse como un singleton
*/
class MySQL
{
  private $host=null;
  private $port=null;
  private $user=null;
  private $password=null;
  private $dbname=null;
  private $conection=null;
  private $count=0;

  function __construct($host,$port,$user,$password,$dbname)
  {
    $this->host=$host;
    $this->port=$port;
    $this->user=$user;
    $this->password=$password;
    $this->dbname=$dbname;
  }

  public function conect()
  {
    if ($this->conection===null) {
      $this->conection = new PDO("mysql:host={$this->host};dbname={$this->dbname};port={$this->port}", $this->user, $this->password);
    }
    $this->count++; //contador para validar el singleton
    return $this->conection;
  }

  public function getUser($id)
  {
    $consulta = $this->conection->prepare("SELECT * FROM users WHERE id = :id");
    $consulta->bindParam(":id", $id, PDO::PARAM_INT);
    $consulta->execute();
    return $consulta->fetchAll();
  }
  public function getN()
  {
    return $this->count;
  }
}



?>
