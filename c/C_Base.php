<?php

namespace fw1\c;

//use \fw1\m\M_User as M_User;

require_once __DIR__ . '/../vendor/autoload.php';
abstract class C_Base extends C_Controller {
  protected $title;    // ��������� ��������
  protected $content;    // ���������� ��������
  protected $keyWords;


  protected function before() {

    $this->title = 'myFramework';
    $this->content = '';
    $this->keyWords = "...";


  }

  //
  // ��������� �������� ��������
  //
  public function render() {
    $user = new \fw1\m\M_User();
    if (isset($_SESSION['user_id'])) {
      $user_info = $user->getUserInfo($_SESSION['user_id']);
    } else {
      $user_info['name'] = false;
    }
    $vars = ['title' => $this->title, 'content' => $this->content, 'kw' => $this->keyWords, 'user' => $user_info['name']];
    $page = $this->Template('v/v_main.php', $vars);
    echo $page;
  }

}
