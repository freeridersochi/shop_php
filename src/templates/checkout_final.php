<h1>Оформление &nbsp;заказа</h1>
<section class="checkOut_Panel">
    <!-- Заголовок  -->
    <?php if($order_number):?>
    <h2>Заказ №<?=$order_number?><b> успешно оформлен</b></h2>
        <p class="info_p">
            Спасибо за ваш заказ!
            <br>
            <br>
            В ближайшее время с вами свяжется оператор для учточнения времени доставки.
        </p>
     <?php endif; ?>
    <!--    Кнопка    -->
    <button class="enter_button">
            <a href="home.php">Вернуться в магазин</a>
    </button>    
</section>