<?php foreach($product as $item):?>
    <h1><?=$item['item_cat']?></h1>
    <a class="back_to_cat1" href="product.php?item_id=<?=$item['item_id']?>">Вернуться в каталог</a>  
<!-- Секция товара начало -->
    <section class="item_in_cat">
        <!--  left_bar  -->
        <div class="left_bar">  
            <!--    Start Foto div    -->
            <div class="cat1_item1_pictures">
                <img src="<?=$item['main_img']?>">
                <img class="zoom" src="../img/icons/zoom_icon.png">
            </div>  <!--    End Foto div    -->
            <div class="item_slider"> <!--   Start slider    -->
                    <a><img src="../img/icons/product_slider_arrow.png" class="move_left"></a>
                        <div class="prewiew_wrap"><img src="<?=$item['item_slider_img']?>" class="preview"></div>
                        <div class="prewiew_wrap"><img src="<?=$item['item_slider_img']?>" class="preview active"></div>
                        <div class="prewiew_wrap"><img src="<?=$item['item_slider_img']?>" class="preview"></div>
                        <div class="prewiew_wrap"><img src="<?=$item['item_slider_img']?>" class="preview"></div>
                    <a><img src="../img/icons/product_slider_arrow.png" class="move_right"></a>
            </div> 
            <!--   End slider    -->
        </div> 
        <!--  middle_bar    -->
        <div class="middle_bar">
                <p class="cat1_item1_name"><?=$item['name']?></p>
                <p class="cat1_item1_about"><?=$item['description']?></p>
                <span>
                    <p>Выберете вариант:</p>
                    <select>
                        <option value="size_38"><?=$item['size']?></option>
                        <option value="size_37"><?=$item['item_second_size']?></option>
                        <option value="size_36" selected><?=$item['item_third_size']?></option>
                    </select>
                </span>    
        </div> 
        <!--  right_bar    -->
        <div class="right_bar">
             <!--      Bay Bar Section start       -->
             <div class="buy_bar">
                 <p class="item1_old_price"><?=$item['price']?></p>
                 <p class="cat1_item1_price"><?=$item['price']?></p>
                 <span>
                     <img class="cat1_item1_status_icon" src="../img/icons/instock_icon.png"> 
                     <p class="cat1_item1_status">есть в наличии</p>
                 </span>
                 <hr class="gray_border">
                 <button class="buy_button">
                     <img src="../img/icons/buy_cart_icon.png">
                     <p>купить</p>
                 </button>
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
</section>
<?php endforeach; ?>  
<!-- Best items in cat section -->
<section class="best_salers">
    <span>
        <p class="best_item_title">Другие товары из категории "<?=$item['category']?>"</p>
        <img class="arrow_right next" src="../img/icons/arrow_right.png" alt="move in right">
        <img class="arrow_left prev" src="../img/icons/arrow_left.png" alt="move in left">
    </span>
    <div class="first_slider">
        <?php foreach($items as $item):?>
        <article class="new_item">
            <a href="product.php?item_id=<?=$item['id']?>&item_cat=<?=$item['item_cat']?>">
                <div class="img_conteiner">
                    <img src="<?=$item['image']?>" alt="Изображение отсутствует">
                </div>
                <p class="item_name"><?=$item['name']?></p>
                <div class="price_conteiner">
                    <p class="item_price"><?=$item['price']?></p>
                </div>
            </a>
        </article>
        <?php endforeach; ?>
    </div>    
</section>
<script src="../../js/slider_control.js"></script> 