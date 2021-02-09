<?php

namespace fw1\c;

//include_once('m/M_User.php');


require_once __DIR__ . '/../vendor/autoload.php';

class C_User extends C_Base {

  // страница авторизации
  public function action_login() {

    if ($this->IsPost()) {
      $user = new \fw1\m\M_User();
      $result = $user->login($_POST['login'], $_POST['password']);
      if ($result) {
        $this->content = $this->Template('v/v_login.php', ['text' => $result]);
      }
    } else {
      $this->title .= '::Авторизация';
      $text = 'Введите логин и пароль для входа!';
      $this->content = $this->Template('v/v_login.php', ['text' => $text]);
    }
  }


  // страница регистрации
  public function action_reg() {

    if ($this->IsPost()) {
      $user = new \fw1\m\M_User();
      $result = $user->registrate($_POST['login'], $_POST['name'], $_POST['password'], $_POST['email'], $_POST['phone']);
      var_dump($result);
      if ($result) {
        $this->content = $this->Template('v/v_reg.php', ['text' => $result]);
        echo 'зарегистрировались';
      } else {
        echo 'НЕ ЗАРЕГИСТРИРОВАЛИСЬ';
      }
    } else {
      $this->title .= '::Регистрация';
      $text = 'Введите данные для вашей регистрации на сайте!';
      $this->content = $this->Template('v/v_reg.php', ['text' => $text]);
    }
  }


  // личный кабинет
  public function action_account() {
    $user = new \fw1\m\M_User();
    $userInfo = $user->getUserInfo($_SESSION['user_id']);
    $this->content = $this->Template('v/v_account.php',
      [
        'userName' => $userInfo['name'],
        'userEmail' => $userInfo['email']
      ]);
  }

  // выход из акаунта
  public function action_logout() {
    $user = new \fw1\m\M_User();
    $result = $user->logout();
  }

}