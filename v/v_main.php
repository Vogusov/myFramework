<?php
/**
 * Основной шаблон
 * ===============
 * $title - заголовок
 * $content - HTML страницы
 */
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title;?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="v/style.css" />
</head>
<body>
	<div id="header">
		<h1><?=$title;?></h1>
	</div>
	
	<div id="menu">
		<a href="index.php">Читать текст</a> |
		<a href="index.php?c=page&act=edit">Редактировать текст</a> |
		<a href="index.php?c=page&act=news">News</a> |
    <?php if ($user) : ?>
      <a href="index.php?c=User&act=account">Личный кабинет</a> |
      <a href="index.php?c=User&act=logout">Выйти</a>
    <?php else : ?>
		<a href="index.php?c=User&act=login">Войти</a> |
		<a href="index.php?c=User&act=reg">Регистрация</a>
    <?php endif; ?>
	</div>
	
	<div id="content">
		<?=$content;?>
	</div>
	
	<div id="footer">
		Все права защищены. Адрес. Телефон.
	</div>
</body>
</html>
