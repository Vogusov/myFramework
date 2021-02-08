<?php

namespace fw1\c;

//include_once('m/M_User.php');


require_once __DIR__ . '/../vendor/autoload.php';

class C_User extends C_Base {

  // Перебрасывает на страницу авторизации
  public function action_login() {
    $this->title .= '::Авторизация';
    $text = 'Введите логин и пароль для входа!';
    $this->content = $this->Template('v/v_login.php', ['text' => $text]);
  }


  // Перебрасывает на страницу регистрации
  public function action_reg() {
    $this->title .= '::Регистрация';
    $text = 'Введите данные для вашей регистрации на сайте!';
    $this->content = $this->Template('v/v_reg.php', ['text' => $text]);

    if ($this->IsPost()) {
      $user = new \fw1\m\M_User();
      $result = $user->registrate($_POST['login'], $_POST['name'], $_POST['password']);
      echo $result;
      if ($result) {
        $this->content = $this->Template('v/v_reg.php', ['text' => $result]);
        echo 'зарегистрировались';
      } else {
        echo 'НЕ ЗАРЕГИСТРИРОВАЛИСЬ';
      }
    }


  }
}