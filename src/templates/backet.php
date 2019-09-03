
<!--  Основная секция   -->
<h1>Корзина</h1>
<section>
    <span><p>Товар</p><p>Доступность</p><p>Стоимость</p><p class="quanity">Количество</p><p>Итого</p></span>
    <table>
        <?=include_template('src/blocks/product_basket.php')?>
        <?=include_template('src/blocks/product_basket.php')?>
        <?=include_template('src/blocks/product_basket.php')?>
    </table>
    <span class="total_span">
        <p>&#x20bd;</p>
        <p class="total_order"></p>
        <p>Итого:</p>
    </span>
    <button><a href="checkout.php">Оформить заказ</a></button>
    <button class="back_to_items"><a href="home.php">Вернуться к покупкам</a></button>
</section>
<script src="../../js/backet.js"></script>
