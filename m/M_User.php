<?php

namespace fw1\m;

require_once __DIR__ . '/../vendor/autoload.php';


class M_User {
  private $user_login, $user_name, $user_id, $user_password;
  private $connect;

  public function __construct() {
    $this->connect = $this->connectingDb();
  }

  // хэширование пароля
  protected function hashUserPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
  }


  // создание подключения к БД
  protected function connectingDb() {
    $db = new M_Db();
    return $db->connect();
  }

  // проверка наличия пользователя в БД по логину
  protected function userExists($login) {
    $sth = $this->connect->prepare('select * from `users` where `login` = :login');
    $sth->bindValue(':login', $login, \PDO::PARAM_STR);
    $sth->execute();
    $user = $sth->fetch();
    return $user;
  }



  // получение данных пользователя из БД
  public function getUserInfo($id) {
    $sth = $this->connect->prepare('select * from `users` where `id` = :id');
    $sth->bindValue(':id', $id, \PDO::PARAM_INT);
    $sth->execute();
    $user = $sth->fetch();

    return $user;
  }


  // функция регистрации нового пользователя
  public function registrate($login, $name, $password, $email, $phone) {

    if (!$this->userExists($login)) {
      $sth = $this->connect->prepare('insert into `users` values (null, :login, :user_name, :password, :email, :phone, null)');
      $sth->bindValue(':login', $login, \PDO::PARAM_STR);
      $sth->bindValue(':user_name', $name, \PDO::PARAM_STR);
      $sth->bindValue(':password', $this->hashUserPassword($password), \PDO::PARAM_STR);
      $sth->bindValue(':email', $email, \PDO::PARAM_STR);
      $sth->bindValue(':phone', $phone, \PDO::PARAM_STR);
      $sth->execute();
      return "Зарегались норм <br>";
//      return true;
    } else {
      return "Пользователь с таким логином $login уже существует <br>";
//      return false;
    }
  }

  // функция авторизации
  public function login($login, $password) {

    $user = $this->userExists($login);
    var_dump($user);
    echo '<br>';
    var_dump($user['password']);
    echo '<br>';
    var_dump($password);

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['$id'];
        echo 'Пароль верен <br> ' . session_id();
      } else {
        echo 'пароль неверен <br>';
      }
    } else {
      echo 'Пользователя с таким логином нет <br>';
    }
  }


  // функция выхода из акаунта
  public function logout() {
    if (isset($_SESSION['user_id'])) {
      $_SESSION['user_id'] = null;
      echo 'Вышли из аккаунта <br>';
      return true;
    }
    return false;
  }
}