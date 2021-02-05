<?php

namespace c;

//include_once('m/M_User.php');


require_once 'vendor/autoload.php';

class C_User extends C_Base
{
	//
	// Конструктор.
	//
	
	public function action_login(){
    $this->title .= '::Авторизация';
    $text = 'Введите логин и пароль!';
    $this->content = $this->Template('v/v_login.php', ['text' => $text]);



//
//		$this->title .= '::Авторизация';
//        $user = new M_User();
//		$info = "Пользователь не авторизован";
//        if($_POST){
//            $login = $_POST['login'];
//            $info = $user->auth("log","past"));
//		    $this->content = $this->Template('v_login.php', array('text' => $info));
//		}
//		else{
//		   $this->content = $this->Template('v/v_login.php');
//		}



	}
	

}
