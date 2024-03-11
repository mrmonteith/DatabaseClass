<?php

class Database {
  private $host;
  private $dbname;
  private $username;
  private $password;

  public function __construct($host, $dbname, $username, $password) {
    $this->host = $host;
    $this->dbname = $dbname;
    $this->username = $username;
    $this->password = $password;
  }

  public function connect() {
    try {
      $dsn = "mysql:host=$this->host;dbname=$this->dbname";
      $pdo = new PDO($dsn, $this->username, $this->password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
      return false;
    }
  }

  public function query($sql, $params = []) {
    try {
      $pdo = $this->connect();
      $stmt = $pdo->prepare($sql);
      $stmt->execute($params);
      return $stmt;
    } catch (PDOException $e) {
      echo "Error executing query: " . $e->getMessage();
      return false;
    }
  }
}