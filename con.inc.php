<?php
/**
 * class to connect to database
 */
class database
{
  function __construct()
  {
    $this->host='localhost';
    $this->user='root';
    $this->password='';
    $this->dbname='course';

  }
  public function connect()
  {
    $this->connect_db();
  }
  private function connect_db()
  {
    if(@$this->con=mysqli_connect($this->host,$this->user,$this->password,$this->dbname))
    {
      if(@$this->dbcon=mysqli_select_db($this->con,$this->dbname))
      {
      }else
      {
        die('Databse iss not avalible now, try again later');
      }
    }else
    {
        die('Establishment of connection to databse is not possible now, try again later');
    }
  }
}
?>
