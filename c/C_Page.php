<?php

namespace fw1\c;

require_once __DIR__ . '/../vendor/autoload.php';

class C_Page extends C_Base
{
	//
	// нет конструктора в C_BASE, поэтому убрали конструктор из текущего класса
	//


  // показ начальной страницы
	public function action_index(){
		$this->title .= '::Чтение';
		$text = text_get();
		//$today = date();
		$this->content = $this->Template('v/v_index.php', ['text' => $text]);
	}
	
	// показ страницы редактирования текста
	public function action_edit(){
		$this->title .= '::Редактирование';
		
		if($this->isPost())
		{
			text_set($_POST['text']);
			header('location: index.php');
			exit();
		}
		
		$text = text_get();
		$this->content = $this->Template('v/v_edit.php', ['text' => $text]);
	}


	// показ страницы с новостями
	public function action_news(){
    $this->title .= '::НОВОСТИ';
    $text = 'Текст новостей... Еще... Все.';
    $this->content = $this->Template('v/v_news.php', ['text' => $text]);
  }


  // показ страницы регистрации
//  public function action_reg(){
//    $this->title .= '::Регистрация';
//    $text = 'Введите данные для вашей регистрации на сайте!';
//    $this->content = $this->Template('v/v_reg.php', ['text' => $text]);
//  }


}

