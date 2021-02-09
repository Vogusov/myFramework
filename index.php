<?php

namespace fw1;

require_once __DIR__ . '/vendor/autoload.php';
//site.ru/index.php?act=auth&c=User

$action = 'action_';
$action .=(isset($_GET['act'])) ? $_GET['act'] : 'index';

switch ($_GET['c'])
{
	case 'articles':
		$controller = new \fw1\c\C_Page();
	case 'User':
		$controller = new \fw1\c\C_User();
		break;
	default:
		$controller = new \fw1\c\C_Page();
}

$controller->Request($action);
