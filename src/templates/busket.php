<h1>Корзина</h1>
<section>
  <form action="busket.php" method="post">
    <span><p>Товар</p><p>Размер</p><p>Стоимость</p><p class="quantity">Количество</p><p>Итого</p></span>
    <table>     
    <?=include_template('./src/blocks/product_busket.php')?>
    </table>
    <span class="total_span">
        <p>&#x20bd;</p>
        <p class="total_order"></p>
        <p>Итого:</p>
    </span>
    <button type="submit">Оформить заказ</button>
    <a href="home.php">Вернуться к покупкам</a>
  </form>
</section>
