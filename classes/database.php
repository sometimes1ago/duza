<?php

/**
 * Singleton class
 *
 */
final class Database
{
  private static $instance = null;
  private \PDO $pdo;
  // Prevent cloning and de-serializing
  public function __clone()
  {
  }
  public function __wakeup()
  {
  }

  /**
   * Call this method to get singleton
   *
   * @return Database
   */
  public static function getInstance()
  {
    if (self::$instance === null) {
      $instance = new self();
    }

    return $instance;
  }

  /**
   * Fetching all rows in query execution result
   * @param string $sql Query statement string
   * @param array $params Params for query statement
   * @return array Associative array as result of query execution
   */
  public final function fetchAll(string $sql, array $params = [])
  {
    $result = $this->pdo->prepare($sql);
    $result->execute($params);
    $result = $result->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }

  /**
   * Fetching all rows in query execution result
   * @param string $sql Query statement string
   * @param array $params Params for query statement
   * @return array One item as associative array of an query execution result
   */
  public final function fetch(string $sql, array $params = [])
  {
    $result = $this->pdo->prepare($sql);
    $result->execute($params);
    $result = $result->fetch(\PDO::FETCH_ASSOC);

    return $result;
  }

  public final function query(string $sql, array $params = [])
  {
    $this->pdo->prepare($sql)->execute($params);
  }

  /**
   * Private constructor so nobody else can instantiate it
   *
   */
  private function __construct()
  {
    $this->pdo = new \PDO('mysql:charset=utf8; port=3306; host=localhost; dbname=u1318127_yasha_int', 'u1318127_default', 'XE8cO!1F');
    $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
  }
}
