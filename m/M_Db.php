<?php
namespace m;

class M_Db {

  static function connect() {
    define('DB_DRIVER', 'mysql');
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'fw1');
    define('CHARSET','utf8');

    $dsn = DB_DRIVER . ':host='. DB_SERVER .'dbname=' . DB_NAME .'charset='. CHARSET;
    $opt = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
      $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD, $opt);
    }

    catch (PDOException $e){
      /* так делать не надо */
      die('Connection sucks: ' . $e->getMessage());
    }

    return $pdo;
  }


}

