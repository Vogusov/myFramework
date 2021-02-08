<?php

namespace fw1\m;

require_once __DIR__ . '/../vendor/autoload.php';


class M_User {
  private $user_login, $user_name, $user_id, $user_password;
  private $connect;

  public function __construct() {
    $this->connect = $this->connectingDb();
    echo "user created! ";
  }

  public function hashUserPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
  }

  private function connectingDb() {
    $db = new M_Db();
    return $db->connect();
  }

  public function getInfo($id) {
    $sth = $this->connect->prepare('select * from `users` where `id` = :id');
    $sth->bindValue(':id', $id, \PDO::PARAM_INT);
    $sth->execute();
    $user = $sth->fetchAll();

    return $user;
  }

  public function registrate($login, $name, $password) {
    $sth = $this->connect->prepare('select * from `users` where `login` = :login');
    $sth->bindValue(':login', $login, \PDO::PARAM_STR);
    $sth->execute();
    $user = $sth->fetchAll();

    if (!$user) {
      $sth = $this->connect->prepare('insert into `users` values (null, :login, :name1, :password, null, null)');
      $sth->bindValue(':login', $login, \PDO::PARAM_STR);
      $sth->bindValue(':name1', $name, \PDO::PARAM_STR);
      $sth->bindValue(':password', $this->hashUserPassword($password), \PDO::PARAM_STR);
      $sth->execute();

    }

  }


}