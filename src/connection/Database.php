<?php

namespace src\connection;

use PDO;
use PDOException;


class Database
{
  //defining our database variables
  const HOST = '127.0.0.1:3306';
  const DB = 'store';
  const USER = 'admin';
  const PASSWORD = 'admin';
  const table = "products";

  public static $connection;

  public function __construct()
  {
  }

  public function getConnection()
  {
    //creating our connection with pdo 
    try {
      self::$connection = new PDO("mysql:host=" . self::HOST . "; dbname=" . self::DB, self::USER, self::PASSWORD);

      self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return self::$connection;
    } catch (PDOException $e) {
      echo 'Erro ao conectar com o MySQL' . $e->getMessage();
    }
  }
}