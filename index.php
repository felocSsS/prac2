<!DOCTYPE html>
<html lang="ru">

<?php
	$head = "<meta charset=\"utf-8\">
	<title>Изучаем PHP</title>
	<link rel=\"stylesheet\" href=\"assets/css/style.css\">";

	$header = "<div class=\"content\">
	<div class=\"logo\">
		<img src=\"assets/logo.png\" alt=\"logo\">
		<a href=\"/\">
			<h3>Музыкальный сервис</h3>
		</a>
	</div>
	<nav>
		<a href=\"/teams\">Группы</a> |
		<a href=\"/albums\">Альбомы</a> |
		<a href=\"/tracks\">Треки</a> |
		<a href=\"/admin\">Консоль</a>
	</nav>
</div>";

	$main = "<div class=\"content\">
	<h1>ALLERGII.NET</h1>
	<h3>Музыка – это тишина, которая живёт между звуками</h3>
	<h4>(В.А. Моцарт)</h4>
	<h3>Найди свою тишину</h3>
	<input type=\"button\" value=\"Поиск в базе\">
</div>";

$footer = "<div class=\"content\">
<div class=\"block\">
	<div class=\"logo\">
		<img src=\"assets/logo.png\" alt=\"logo\">
		<h2>Музыкальный сервис</h2>
	</div>
</div>

<div class=\"block\">
	<div class=\"head\">КОМПАНИЯ</div>
	<div class=\"links\">
		<p><a href=\"/about\">О нас</a></p>
		<p><a href=\"/contacts\">Контакты</a></p>
	</div>
</div>
<div class=\"block\">
	<div class=\"head\">ПОЛЕЗНЫЕ ССЫЛКИ</div>
	<div class=\"links\">
		<p><a href=\"https://www.spotify.com/ru-ru/\" target=\"_blank\">Spotify</a></p>
		<p><a href=\"https://support.spotify.com/ru-ru/\" target=\"_blank\">Справка</a></p>
	</div>
</div>
</div>";
?>

<head>
	<?php echo $head; ?>
</head>

<body>
	<header>
	<?php echo $header; ?>
	</header>

	<div class="main">
	<?php echo $main; ?>	
	</div>

	<footer>
	<?php echo $footer; ?>	
	</footer>
</body>

</html>