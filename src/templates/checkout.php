<h1>Оформление &nbsp;заказа</h1>
<!--   Первая форма     -->
<h2 class="active first_title"><b>1.</b>Контактная информация</h2>
<?php if ( $step === 0 ):?>
<section class="first_form">
    <div class="left">
        <form action="checkout.php" method="post">
            <h3>Для новых покупателей</h3>
            <div>
                <p>Контактное лицо (ФИО):<span class="error" id="name_err"></span></p>
                <?php if($errors['name']): ?>
                <p class="error"><?=$errors['name']?></p>
                <? endif; ?>
            </div>
            <input type="text" class="client_name" id="name" name="name" value="<?=$fields['name']?>">
            <div>
                <p>Контактный телефон:<span class="error" id="phone_err"></span></p>
                <?php if($errors['phone']): ?>
                <p class="error"><?=$errors['phone']?></p>
                <? endif; ?>
            </div>
            <input type="text" class="client_phone" name="phone" id="phone" value="<?=$fields['phone']?>">
            <div>
                <p>E-mail:<span class="error" id="email_err"></span></p>
                <?php if($errors['email']): ?>
                <p class="error"><?=$errors['email']?></p>
                <? endif; ?>
            </div>
            <input type="email" class="client_email" id="email" name="email" value="<?=$fields['email']?>">
            <button class="continue_one" name="get_contacts" value="true" type="submit">
                <p>Продолжить</p>
            </button>
        </form>
    </div><!-- End left -->
    <div class="right">
        <form action="login.php" method="post">
            <h3>Быстрый вход</h3>
            <div>
                <p>Ваш e-mail:<span class="error"></span></p>
                <?php if($user_errors['user_email']): ?>
                <p class="error"><?=$user_errors['user_email']?></p>
                <? endif; ?>
            </div>
            <input type="email" name="user_email" value="<?=$fields['user_email']?>">
            <div>
                <p class="user_password">Пароль:<span class="error"></span></p>
                <?php if($user_errors['user_password']): ?>
                <p class="error user_psw"><?=$user_errors['user_password']?></p>
                <? endif; ?>
            </div>
            <input type="password" name="user_password">
            <input type="hidden" name="returnto" value="checkout.php">
            <button class="continue_one" type="submit">
                <p>Войти</p>
            </button>
            <a href="#" class="right">Восстановить пароль</a>
        </form>
    </div>
</section>
<?php endif; ?>
<!--   Вторая форма   -->
<h2 class="second_title"><b>2. </b>Информация о доставке</h2>
<?php if ( $step == 1 ):?>
<section class="second_form">
    <form action="checkout.php" method="post">
        <!-- Левая часть начало   -->
        <div class="left_bar">
            <div class="client_adres">
                <!-- Заголовок  -->
                <h3>Адрес доставки</h3>
                <!-- Содержание -->
                <p>Город:<span class="error" id="city_err"></span></p>
                <input class="city" name="city" id="city" type="text">
                <p>Улица:<span class="error" id="street_err"></span></p>
                <input class="street" id="street" name="srteet" type="text">
                <div class="home_appartments">
                    <div class="left">
                        <p>Дом:<span class="error" id="home_err"></span></p>
                        <input class="small_input home" id="home_num" name="home">
                    </div>
                    <div class="right">
                        <p>Квартира:<span class="error" id="appartment_err"></span></p>
                        <input class="small_input appartment" id="appartment_num" name="appartment">
                    </div>
                </div>
                <!-- Кнопка -->
                <button class="continue_two" type="submit" name="user_address" value="true">
                    <p>Продолжить</p>
                </button>
            </div>
        </div>
        <!-- Средняя часть начало   -->
        <div class="midle_bar">
            <h3>Способ доставки</h3>
            <label class="container">Курьерская доставка <br>с оплатой при получении
                <input type="radio" checked="checked" name="radio" value="Курьером(оплата при получении)">
                <span class="checkmark"></span>
            </label>
            <label class="container">Почта России <br>с наложенным платежом
                <input type="radio" name="radio" value="Почтой России">
                <span class="checkmark"></span>
            </label>
            <label class="container">Доставка через терминалы QIWI Post
                <input type="radio" name="radio" value="Терминалы QIWI">
                <span class="checkmark"></span>
            </label>
        </div>
        <!-- Правая часть начало   -->
        <div class="right_bar">
            <h3>Комментарий к заказу</h3>
            <p>Введите ваш комментарий:</p>
            <textarea rows="10" cols="40" name="order_comment">Текст комментария</textarea>
        </div>
    </form>
</section>
<?php endif; ?>
<!--   Третья форма   -->
<h2 class="third_title"><b>3.</b> Подтверждение заказа</h2>
<?php if ( $step === 2 ):?>
<section class="confirm_order">
    <form action="checkout.php" method="post">
        <!--   Таблица заказа   -->
        <h3>Состав заказа:</h3>
        <div class="order_info">
            <table>
                <?=include_template('./src/blocks/checkout_order.php')?>
            </table>
        </div>
        <!--   Информация о заказе   -->
        <h3>Доставка:</h3>
        <div class="delivery_info">
            <div class="person_info left">
                <p>Контактное лицо (ФИО):</p>
                <input value="<?=$_SESSION['new_customer']['name']?>">
                <p>Контактный телефон:</p>
                <input value="<?=$_SESSION['new_customer']['phone']?>">
                <p>E-mai:</p>
                <input class="client_mail" value="<?=$_SESSION['new_customer']['email']?>">
            </div>
            <div class="person_adress left">
                <p>Город:</p>
                <input class="city" value="<?=$_POST['city']?>">
                <p>Улица:</p>
                <input class="street" value="<?=$_POST['street']?>">
                <div>
                    <div class="left small_size">
                        <p>Дом:</p>
                        <input class="home_num" value="<?=$_POST['home']?>">
                    </div>
                    <div class="right small_size">
                        <p>Квартира</p>
                        <input class="appartment_num" value="<?=$_POST['appartment']?>">
                    </div>
                </div>
            </div>
            <div class="delivery_adress right">
                <p>Способ доставки:</p>
                <input class="delivery_choose" value="<?=$_POST['radio']?>">
                <p>Комментарии к заказу:</p>
                <input class="delivery_commentss" value="<?=$_POST['order_comment']?>">
            </div>
        </div>
        <button name="finish" value="true" id="final_confirmation" type="submit">Подтвердить заказ</button>
    </form>
</section>
<?php endif; ?>