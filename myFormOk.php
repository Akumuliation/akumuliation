<!--======================= Главная страница ====================-->
<?php
include '/home/ukrkre00/official1.in.ua/www/tool/head.php';
$sale = 50;
$product_id = 722;
$product_name = '';
$currency = 'грн';

$price_new = 349;
$price_old = floor(($price_new / (100 - $sale)) * 100);
echo '<script>var price_new = \''.$price_new.'\',
product_id = \''.$product_id.'\',
product_name = \''.$product_name.'\';</script>';
?>
<!--======================= Главная страница ====================-->

<?= $sale ?>
<?= $price_old ?>
<?= $price_new ?>
<?= $currency ?>
<?= $product_name ?>
<?= $product_id ?>

<!--======================= Подключение maskedinput перед тегом </body> ====================-->
<script type="text/javascript">
   $(document).ready(function() {
    $("form").submit(function() {
      yaCounterXXXXXX.reachGoal('ORDER'); 
      return true;
    });
    $(window).scroll( function() {
      yaCounterXXXXXX.reachGoal('SCROLL'); 
      $(window).off("scroll");
      return true;
    });
  });
</script>
<!--======================= Подключение maskedinput перед тегом </body> ====================-->

<!--======================= Контакты фирмы ====================-->
ООО "Логос" г.Кривой Рог, ул. Владимира Великого 5, офис 9
<!--======================= Контакты фирмы ====================-->
