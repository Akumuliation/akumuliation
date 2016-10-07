//============ Подключать в начале сайта подложки ============//
<?php
	$link = "http://miracle-glow.official1.in.ua";  //===== Указать адресс лендинга на который будет переправляться пользователь =====//
?>

//============ Подключать в направление ссылок на сайте подложки ============//
<?= $link.'?utm_source='.$_GET['utm_source'].'&utm_medium='.$_GET['utm_medium'].'&utm_term='.$_GET['utm_term'].'&utm_content='.$_GET['utm_content'].'&utm_campaign='.$_GET['utm_campaign']; ?>
