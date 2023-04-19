<? require_once 'src/include/product_functions.php'; 
    $quantity_on_stock = get_size_quantity($orders[$i]['size'])
    $id = $_SESSION['orders'][$i]['product'];
    $name = get_product($id);
    $size_id = $_SESSION['orders'][$i]['size'];
    $size = get_size($size_id);
    $on_stock = $_SESSION['orders'][$i]['on_stock'];
?>
<h1>Корзина</h1>
    
<section>
    <? for ($i=0 ; $i <= sizeof($_SESSION['orders'])-1; $i++):?>

        <h2>К сожалению <?=$name['name']?> размера <?=$size['size']?> в наличии только <?=get_size_quantity($orders[$i]['size'])?> единиц.</h2>
    <? endfor; ?>
    <div>
        <h3>Чтобы  изменить количество, воспользуйся кнопкой "вернуться к покупкам".</h3> 
        <a href="home.php">Вернуться к покупкам</a>
        <a href="busket.php">Заказать меньше</a>
    </div>
</section>