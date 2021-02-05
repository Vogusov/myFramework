<?php

namespace m;

require_once 'vendor/autoload.php';


class M_User {
  private  $user_name, $user_login, $user_id, $user_password;

  public function hashUserPassword($password) {
    echo password_hash($password, PASSWORD_BCRYPT);
  }

  public function connectingDb() {
    $db = new m\M_Db();
    return $db -> connect();
  }



}