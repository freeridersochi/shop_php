 <?php for($i=0; $i <= sizeof($_SESSION['orders'])-1; $i++):?>
 
  <?php
      $item = $_SESSION['orders'][$i];
      $name = get_product($item['product']);
      $size = get_size($item['size']);
  ?>
  
  <tr>      
      <td class="item_foto"><img src="<?=$name['main_photo']?>"></td>
      <td class="item_name"><?=$name['name']?><input type="hidden" name="product[]" value="<?=$item['product']?>"></td>
      <td class="item_status"><?=$size['size']?><input type="hidden" name="size[]" value="<?=$item['size']?>"></td>
      <td class="item_price"><?=$name['price']?></td>
      <td class="item_quantity">
          <div>
              <button class="first_item_decr" type="button"> - </button>
                <input class="qanity_count" value="<?=$item['quantity']?>" type="number" name="quantity[]">
              <button  class="first_item_incr" type="button"> + </button>
          </div>
      </td>
      <td class="item_cost"></td>
      <td class="del_item">
          <button type="button" class="del_btn">
              <img src="../img/icons/close_icon.png">
          </button>
      </td>
  </tr>
<?php endfor; ?>
