<?php
/*
spl_autoload_register(function($className){
//  echo "try load: $className" . PHP_EOL;
  $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
//  echo "class replaced: $className" . PHP_EOL;
  $path = __DIR__ . "/$className.php";
  if (is_readable($path)) {
//    echo "file was found: $path" . PHP_EOL;
  }
  include_once "$path";
});
*/

/*
spl_autoload_register(function($name){
	$dirs = ["inc","test","test2"];
	$file = $name.".php";
	$check=false;
	foreach(){
	    if(is_file($file)){
            include_once("inc/$name.php");
        }
    }


});
*/


require_once 'vendor/autoload.php';
//site.ru/index.php?act=auth&c=User

$action = 'action_';
$action .=(isset($_GET['act'])) ? $_GET['act'] : 'index';

switch ($_GET['c'])
{
	case 'articles':
		$controller = new c\C_Page();
	case 'User':
		$controller = new c\C_User();
		break;
	default:
		$controller = new c\C_Page();
}

$controller->Request($action);
