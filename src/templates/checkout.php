<h1>Оформление &nbsp;заказа</h1>
<!--   Первая форма начало     -->
<section class="first_form">
     <h2 class="active"><b>1.</b>Контактная информация</h2>
     <form>
          <div class="left">
             <h3>Для новых покупателей</h3>
             <p>Контактное лицо (ФИО):</p>
             <input type="text" class="client_name">
             <p>Контактный телефон:</p>
             <input type="text" class="client_phone">
             <p>E-mail:</p>
             <input type="mail" class="client_mail">
             <button class="continue_one"><p>Продолжить</p></button>
         </div>
         <div class="right">
             <h3>Быстрый вход</h3>
             <p>Ваш e-mail:</p>
             <input type="mail">
             <p class="user_password">Пароль:</p>
             <input type="password">
             <button>
                 <p>Войти</p>
             </button>
             <a href="#">Восстановить пароль</a>
         </div>
     </form>
</section>
<!--   Вторая форма начало    -->
<section class="second_form">
     <h2><b>2. </b>Информация о доставке</h2>
     <form>
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
     </form>
<!--   Третья форма начало    -->
</section>
<section class="confim_order">
    <h2><b>3.</b> Подтверждение заказа</h2>
    <div class="form_body">
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
     <h3>Доставка:</h3>
     <div class="delivery_info">
        <div class="person_info left">
             <p>Контактное лицо (ФИО):</p>
             <p class="client_name">lorem Ipsum</p>
             <p>Контактный телефон:</p>
             <p class="client_phone">+9 789 900 89 78</p>
             <p>E-mai:</p>
             <p class="client_mail">lorem@ipsum.com</p>
         </div>
         <div class="person_adress middle">
             <p>Город:</p>
             <p class="client_city">Lorem Ipsum</p>
             <p>Улица:</p>
             <p class="client_street">Lorem Ipsum</p>
             <p class="left">Дом:</p>
             <p class="home_num left">78</p>
             <p class="right">Квартира</p>
             <p class="appartment_num right">150</p>
         </div>
         <div class="delivery_adress right">
             <p>Способ доставки:</p>
             <p class="delivery_choose">Lorem Ipsum</p>
             <p>Комментарии к заказу:</p>
             <p class="delivery_commentss">Lorem Ipsum</p>
         </div>
     </div>
     <button id="final_confirmation"><a href="checkout_final.php">Подтвердить заказ</a></button>
    </div>
</section>
<script src="../../js/checkout.js"></script>