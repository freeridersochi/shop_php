<tr>
    <th>Товар</th>
    <th>Стоимость</th>
    <th>Количество</th>
    <th>Итого</th>
</tr>

<?php for($i=0; $i <= sizeof($_SESSION['orders'])-1; $i++):?>

<?php
    $item = $_SESSION['orders'][$i];
    $name = get_product($item['product']);
?>

<tr class="order_detals">
    <th><?=$name['name']?></th>
    <th><?=$name['price']?></th>
    <th><?=$item['quantity']?></th>
    <th><?=$name['price']*$item['quantity']?></th>
</tr>
<?php endfor; ?>

<tr class="order_calc">
    <th id="th_bold">Итого</th>
    <th id="order_sum"><?=get_total_cost()?></th>
</tr>
