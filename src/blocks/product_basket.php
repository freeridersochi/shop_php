<?php for($i=0; $i <= sizeof($_SESSION['order'])-1; $i++):?>
<?php 
    $item = $_SESSION['order'][$i]; 
    $name = get_product($item['product']);
?> 
    <tr>
        <td class="item_foto"><img src="<?=$name['main_photo']?>"></td>
        <td class="item_name"><?=$name['name']?></td>
        <td class="item_status"><?=$item['size']?></td>
        <td class="item_price"><?=$name['price']?></td>
        <td class="item_quanity">
            <div>
                <button class="first_item_decr"> - </button >
                <input class="qanity_count" value="1">
                <button  class="first_item_incr"> + </button >
            </div>
        </td>
        <td class="item_cost"></td>
        <td class="del_item">
            <div><img src="../img/icons/close_icon.png"></div>
        </td>
    </tr>
<?php endfor; ?>