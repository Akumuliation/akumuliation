<?php
	//*********************** Главная страница *************************
session_start();
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'];
$link="http://elaslim.official1.in.ua/"; // ссылка на сайт
//*********************** Главная страница *************************
?>

<!--======================= Вставить в href ссылки ====================-->
<?= $link.'?utm_source='.$_GET['utm_source'].'&utm_medium='.$_GET['utm_medium'].'&utm_term='.$_GET['utm_term'].'&utm_content='.$_GET['utm_content'].'&utm_campaign='.$_GET['utm_campaign']; ?>
<!--======================= Вставить в href ссылки ====================-->