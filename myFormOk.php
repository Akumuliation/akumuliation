<!--======================= Главная страница ====================-->
<script>
var product = {
    priceNew: '397',
    productId: '724',
    productName: '',
    currency: 'грн',
    sale: 50,
    priceOld: function () {
        return Math.floor((this.priceNew/(100-this.sale))*100);
    }
};
</script>
<script  src="http://officiall.biz.ua/jquery.min.js"></script>
<!--======================= Главная страница ====================-->
<script type="text/javascript">
    $(document).ready(function () {
        $('.new-price').text(product.priceNew+' '+product.currency);
        $('.old-price').text(product.priceOld()+' '+product.currency);
    })  
</script>


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
