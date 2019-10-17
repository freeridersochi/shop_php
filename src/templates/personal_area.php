<?php $email = 'example@mail.com'; ?>
<h1>Личный &nbsp;Кабинет</h1>
<section class="personal_area_panel">
    <form action="personal_area.php" method="post">
        <!-- Client Data Section start -->
        <div class="name_phone">
            <h2>Ваши данные</h2>
                <div>
                    <p class="name" >Контактное лицо(ФИО):</p>
                    <?php if($errors['name']):?>                 
                        <p class="error"><?=$errors['name']?></p>
                    <? endif ;?>
                </div>
                <input type="text" name="name">
                <div>
                    <p class="phone">Контактный телефон:</p>
                    <?php if($errors['phone']):?>                 
                        <p class="error"><?=$errors['phone']?></p>
                    <? endif ;?> 
                </div>
                <input type="phone" name="phone">
                <div>
                    <p class="mail">Email адрес:</p>
                    <?php if($errors['email']):?>                 
                        <p class="error"><?=$errors['email']?></p>
                    <? endif ;?>
                </div>
                <input type="email" name="email" value="<?=$email?>">
        </div>
        <!-- Location Section -->
        <div class="client_adres">
            <h2>Адрес доставки</h2>
                <div>
                    <p class="city">Город:</p>
                    <?php if($errors['city']):?>                 
                        <p class="error"><?=$errors['city']?></p>
                    <? endif ;?>
                </div>
                <input class="city_input" type="text" name="city">
                <div>
                    <p class="street">Улица:</p>
                    <?php if($errors['street']):?>                 
                        <p class="error"><?=$errors['street']?></p>
                    <? endif ;?>
                </div>
                <input class ="street_input" type="text" name="street">
                <div class="home_appartments">
                    <div class="left">
                        <div>
                            <p>Дом:</p>
                            <?php if($errors['home']):?>                 
                                <p class="error"><?=$errors['home']?></p>
                            <? endif ;?>
                        </div>
                        <input class="small_input" name="home">
                    </div>
                    <div class="right">
                        <div>
                            <p>Квартира:</p>
                            <?php if($errors['appartment']):?>                 
                                <p class="error"><?=$errors['appartment']?></p>
                            <? endif ;?>
                        </div>
                        <input class="small_input" name="appartment">
                    </div>
                </div>
        </div>
        <!-- Location Section End -->
        <!-- Change Password Section Start -->
        <div class="client_mail">
            <h2>Изменение пароля</h2>
                <p class="main_p">Введите новый пароль:</p>
                <input class="main_psw" type="password" name="password">
                <p class="confim_p">Подтвердите новый пароль:</p>
                <input  class="confim_psw" type="password" name="confirm_password">
                <button class="enter_button">
                    <p>Сохранить</p>
                </button>
        </div>
        <!-- Change Password Section End -->
    </form>
    <!-- Orders Section start -->
        <div class="user_orders">
            <h2>Ваши заказы</h2>
            <!--   Actual orders start    -->
           <?php foreach($orders as $order): ?>
            <div class="actual_order">
                <div class="order_info">                   
                    <p class="order_num"><?=$order['id']?></p>
                    <p class="order_sum"></p>
                    <p class="order_time"><?=$order['created_at']?></p>                   
                </div>                
                <div class="order_status">
                    <p><?=get_status($order['status'])?></p>
                </div>
            </div>
            <?php endforeach ;?>
            <!--   Done orders end    -->
        </div>
        <!-- Orders Section end -->
</section>