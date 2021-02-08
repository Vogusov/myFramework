<?php

namespace fw1\c;
//
// Конттроллер страницы чтения.
//

//include_once('m/model.php');

//spl_autoload_register(function(){
//  include_once("m/model.php");
//});
//

require_once __DIR__ . '/../vendor/autoload.php';

class C_Page extends C_Base
{
	//
	// нет конструктора в C_BASE, поэтому убрали конструктор из текущего класса
	//
	
	public function action_index(){
		$this->title .= '::Чтение';
		$text = text_get();
		//$today = date();
		$this->content = $this->Template('v/v_index.php', array('text' => $text));	
	}
	
    
	public function action_edit(){
		$this->title .= '::Редактирование';
		
		if($this->isPost())
		{
			text_set($_POST['text']);
			header('location: index.php');
			exit();
		}
		
		$text = text_get();
		$this->content = $this->Template('v/v_edit.php', array('text' => $text));		
	}

	public function action_news(){
    $this->title .= '::НОВОСТИ';
    $text = 'Текст новостей... Еще... Все.';
    $this->content = $this->Template('v/v_news.php', array('text' => $text));
  }
}

