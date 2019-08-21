<?php

$servername = "mysql_db_C9";
$serverport = "3306";
$dbname = "clase9";
$username = "devuser";
$password = "devpass";


// create connection

$conn = new mysqli($servername, $username, $password, $dbname, $serverport);

/*Class DataBase
{

  private $servername;
  private $serverport;
  private $dbname;
  private $username;
  private $password;
  public function connect()
    {
  }
}*/