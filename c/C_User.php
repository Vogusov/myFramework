<?php

namespace fw1\c;

//include_once('m/M_User.php');


require_once __DIR__ . '/../vendor/autoload.php';

class C_User extends C_Base {

  // страница регистрации
  public function action_reg() {

    if ($this->IsPost()) {

      // обработка формы регистрации
      $user = new \fw1\m\M_User();
      $login = strip_tags($_POST['login']);
      $result = $user->registrate($login, $_POST['name'], $_POST['password'], $_POST['email'], $_POST['phone']);
//      var_dump($result);
      if ($result) {
        $this->title .= '::Регистрация';
        $text = $result;
        $this->content = $this->Template('v/v_reg.php', ['successRegText' => $result, 'text' => $text]);
      } else {

        $this->title .= '::Регистрация';
        $text = 'Введите данные для вашей регистрации на сайте!';
        $errText = "Пользователь с таким логином $login уже существует <br>";
        $this->content = $this->Template('v/v_reg.php', ['text' => $text, 'errText' => $errText]);
      }
    } else {

      // контент для страницы регистрации
      $this->title .= '::Регистрация';
      $text = 'Введите данные для вашей регистрации на сайте !';
      $this->content = $this->Template('v/v_reg.php', ['text' => $text]);
    }
  }



  // страница авторизации
  public function action_login() {

    if ($this->IsPost()) {
      $user = new \fw1\m\M_User();
      $result = $user->login($_POST['login'], $_POST['password']);
      if ($result) {
        $this->title .= '::Авторизация';
        $text = 'Введите логин и пароль для входа!';
        $this->content = $this->Template('v/v_login.php', ['text' => $result]);
      }
    } else {
      $this->title .= '::Авторизация';
      $text = 'Введите логин и пароль для входа!';
      $this->content = $this->Template('v/v_login.php', ['text' => $text]);
    }
  }




  // личный кабинет
  public function action_account() {
    $user = new \fw1\m\M_User();
    $this->title .= '::Личный кабинет';
    $userInfo = $user->getUserInfo($_SESSION['user_id']);
    $text = "Добро пожаловать {$userInfo['name']}!";
    $this->content = $this->Template('v/v_account.php',
      [
        'name' => $userInfo['name'],
        'email' => $userInfo['email'],
        'text' => $text
      ]);
  }

  // выход из акаунта
  public function action_logout() {
    $user = new \fw1\m\M_User();
    $result = $user->logout();
  }

}