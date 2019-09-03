    <h1><?=$product['item_cat']?></h1>
    <a class="back_to_cat1" href="home.php">Вернуться в каталог</a>  
<!-- Секция товара начало -->
    <section class="item_in_cat">
        <form action="backet.php" method="post">
        <!--  left_bar  -->
        <div class="left_bar">   
            <div id="slider"> <!--   Start slider    -->
                <ul>
                    <?php foreach(get_photos($product) as $photo):?>
                        <li><img src="<?=$photo?>"></li>
                    <?php endforeach; ?>
                </ul>
            </div> 
        </div> 
        <!--  middle_bar    -->
        <div class="middle_bar">
                <p class="cat1_item1_name"><?=$product['name']?></p>
                <p class="cat1_item1_about"><?=$product['description']?></p>
                <span>
                    <p>Выберете вариант:</p>
                    <select name="size">                      
                        <?php foreach($sizes as $size):?>
                            <option value="<?=$size['size']?>"><?=$size['size']?></option>
                        <?php endforeach; ?>
                    </select>
                </span>    
        </div> 
        <!--  right_bar    -->
       
        <div class="right_bar">
             <!--      Bay Bar Section start       -->
             <div class="buy_bar">
                 <p class="item1_old_price"><?=$product['price']?></p>
                 <p class="cat1_item1_price"><?=$product['price']?></p>
                 <span>
                     <img class="cat1_item1_status_icon" src="../img/icons/instock_icon.png"> 
                     <p class="cat1_item1_status">есть в наличии</p>
                 </span>
                 <hr class="gray_border">
                 <button class="buy_button" type="submit">
                     <img src="../img/icons/buy_cart_icon.png">
                     <p>купить</p>
                 </button>
                 <input type="hidden" value="<?=$product['id']?>" name="product_id">
             </div>
             <!--      Bay Bar Section End      -->
             <div class="icon_section">
                 <div class="icons_bar">
                     <div class="round_wrapper">
                         <img src="../img/icons/delivery_icon.png" class="delivery_icon">
                     </div>
                     <div class="round_wrapper">
                         <img src="../img/icons/hot_line_icon.png" class="hot_line_icon">
                     </div>
                     <div class="round_wrapper">
                         <img src="../img/icons/presents_icon.png" class="presents_icon">
                     </div>
                 </div>
                 <div class="desc_bar">
                     <p class="stupid_disigner_bold">Бесплатная доставка</p>
                     <p class="stupid_disigner_thin">по всей России</p>
                     <p class="stupid_disigner_bold">Горячая линия</p>
                     <p class="stupid_disigner_thin">8 800 000-00-00</p>
                     <p class="stupid_disigner_bold">Подарки</p>
                     <p class="stupid_disigner_thin">каждому покупателю</p>
                 </div>
             </div>   
        </div> <!--    End right_bar    -->
    </form>
</section>
<!-- Best items in cat section -->
<section class="best_salers" id="other_items">    
    <span>
        <p class="best_item_title">Другие товары из категории <?=$product['category']?></p>
        <?php if ($other_page['current']<$other_page['total']): ?>
            <a href="product.php?item_id=<?=$product['id']?>&other_prod_page=<?=$other_page['current']+1?>#other_items">
                <img class="arrow_right next_two" src="../img/icons/arrow_right.png" alt="move in right">
            </a>
        <?php endif ?>
        <?php if ($other_page['current']>1):?>
            <a href="product.php?item_id=<?=$product['id']?>&other_prod_page=<?=$other_page['current']-1?>#other_items">
                <img class="arrow_left prev_two" src="../img/icons/arrow_left.png" alt="move in left">
            </a>
        <?php endif ?> 
    </span>
        <?php foreach($other_page['data'] as $item):?>
        <article class="best_items">
            <a href="product.php?item_id=<?=$item['id']?>&item_cat=<?=$item['item_cat']?>">
                <div class="img_conteiner">
                    <img src="<?=$item['main_photo']?>" alt="Изображение отсутствует">
                </div>
                <!--    обрезаем имя до нужного количества символов    -->
                <p class="item_name"><?=mb_substr($item['name'], 0, 15, 'UTF-8').'...'?></p>
                <div class="price_conteiner">
                    <p class="item_price"><?=$item['price']?></p>
                </div>
            </a>
        </article>
        <?php endforeach; ?>
</section>
<script src="../../js/product_slider.js"></script> 