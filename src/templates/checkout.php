<h1>Оформление &nbsp;заказа</h1>
<form action="checkout.php" method="post">
    <!--   Первая форма     -->
    <h2 class="active first_title"><b>1.</b>Контактная информация</h2> 
        <section class="first_form">           
             <form>
                 <div class="left">
                 <h3>Для новых покупателей</h3>
                 <div>
                     <p>Контактное лицо (ФИО):<span class="error" id="client_name_err"></span></p>
                     <?php if($errors['name']): ?>
                          <p class="error"><?=$errors['name']?></p>
                     <? endif; ?>
                 </div>
                 <input type="text" class="client_name" pattern="[a-zA-Z\u0400-\u04ff]{3,30}" id="client_name" name="name" value="<?=$fields['name']?>" required>
                 <div>
                     <p>Контактный телефон:<span class="error"></span></p>
                     <?php if($errors['phone']): ?>
                         <p class="error"><?=$errors['phone']?></p>
                     <? endif; ?>               
                 </div>
                 <input type="text" class="client_phone" name="phone" value="<?=$fields['phone']?>">
                 <div>
                     <p>E-mail:<span class="error"></span></p>
                     <?php if($errors['email']): ?>
                         <p class="error"><?=$errors['email']?></p>
                     <? endif; ?>
                 </div>
                 <input type="mail" class="client_mail" name="email" value="<?=$fields['email']?>">
                 <button class="continue_first"><p>Продолжить</p></button>
                 </div>
              </form>
              <form>
                 <div class="right">
                 <h3>Быстрый вход</h3>
                 <div>
                     <p>Ваш e-mail:<span class="error"></span></p>
                     <?php if($user_errors['user_email']): ?>
                         <p class="error"><?=$user_errors['user_email']?></p>
                     <? endif; ?>
                 </div>
                 <input type="mail" name="user_email" value="<?=$fields['user_email']?>">
                 <div>
                     <p class="user_password">Пароль:<span class="error"></span></p>
                     <?php if($user_errors['user_password']): ?>
                         <p class="error user_psw"><?=$user_errors['user_password']?></p>
                     <? endif; ?>
                 </div>  
                 <input type="password" name="user_password">
                 <button class="continue_first">
                     <p>Войти</p>
                 </button>
                 <a href="#">Восстановить пароль</a>
                 </div>
              </form>
    </section>
    <!--   Вторая форма   -->
    <h2 class="second_title"><b>2. </b>Информация о доставке</h2>
    <section class="second_form">       
        <!-- Левая часть начало   -->
        <div class="left_bar">
            <div class="client_adres">
                <!-- Заголовок  -->
                <h3>Адрес доставки</h3>
                <!-- Содержание -->
                <p class="city">Город:</p>
                <input class="client_city" type="text">
                <p class="street">Улица:</p>
                <input class ="client_street" type="text">
                <div class="home_appartments">
                    <div class="home_input">
                        <p class="home_num">Дом:</p>
                        <input class="small_input">
                    </div>
                    <div class="appartment_input">
                        <p class="appartment_num">Квартира:</p>
                        <input class="small_input">
                    </div>
                </div>
                <!-- Кнопка -->
                <button class="continue_two">
                     <p>Продолжить</p>
                </button>
            </div>
        </div>
        <!-- Средняя часть начало   -->
        <div class="midle_bar">
           <h3>Способ доставки</h3>
           <label class="container">Курьерская доставка <br>с оплатой при получении
               <input type="radio" checked="checked" name="radio">
               <span class="checkmark"></span>
           </label>
               <label class="container">Почта России <br>с наложенным платежом
               <input type="radio" name="radio">
               <span class="checkmark"></span>
           </label>
           <label class="container">Доставка через терминалы QIWI Post
               <input type="radio" name="radio">
               <span class="checkmark"></span>
           </label>
        </div>
        <!-- Правая часть начало   -->
        <div class="right_bar">
           <h3>Комментарий к заказу</h3>
           <p>Введите ваш комментарий:</p>
           <textarea rows="10" cols="40" name="order_comment">Текст комментария</textarea>
        </div>
    </section>
    <!--   Третья форма   -->
    <h2 class="third_title"><b>3.</b> Подтверждение заказа</h2>
    <section class="confim_order">
        <!--   Таблица заказа   -->           
        <h3>Состав заказа:</h3>
        <div class="order_info">
            <table>
                <tr>
                    <th>Товар</th>
                    <th>Стоимость</th>
                    <th>Количество</th>
                    <th>Итого</th>
                </tr>
                <tr class="order_detals">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr class="order_calc">
                    <th id="th_bold">Итого</th>
                    <th id="order_sum">3 100 руб.</th>
                </tr>
            </table>
        </div>
        <!--   Информация о заказе   -->
        <h3>Доставка:</h3>
        <div class="delivery_info">
            <div class="person_info left">
                 <p>Контактное лицо (ФИО):</p>
                 <input value="lorem Ipsum">
                 <p>Контактный телефон:</p>
                 <input value="+9 789 900 89 78">
                 <p>E-mai:</p>
                 <input class="client_mail" value="lorem@ipsum.com">
            </div>
            <div class="person_adress middle">
                 <p>Город:</p>
                 <input class="client_city" value="Lorem Ipsum">
                 <p>Улица:</p>
                 <input class="client_street" value="Lorem Ipsum">
                 <div class="small_size">
                     <div class="left">
                         <p>Дом:</p>
                         <input class="home_num" value="78">
                     </div>
                     <div class="right">
                         <p>Квартира</p>
                         <input class="appartment_num" value="150"> 
                     </div>
                 </div>
             </div>
             <div class="delivery_adress right">
                 <p>Способ доставки:</p>
                 <input class="delivery_choose" value="Lorem Ipsum">
                 <p>Комментарии к заказу:</p>
                 <input class="delivery_commentss" value="Lorem Ipsum">
             </div>
        </div>         
    </section>
    <button id="final_confirmation"><a href="checkout_final.php">Подтвердить заказ</a></button>
</form>
<script src="../../js/checkout.js"></script>