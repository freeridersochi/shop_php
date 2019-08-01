
<h1>Личный &nbsp;Кабинет</h1>
<section class="personal_area_panel">
    <form>
        <!-- Client Data Section start -->
        <div class="name_phone">
            <h2>Ваши данные</h2>
                <p class="name">Контактное лицо(ФИО):</p>
                <input type="text">
                <p class="phone">Контактный телефон:</p> 
                <input type="phone">
                <p class="mail">Email адрес:</p> 
                <input type="email">
        </div>
        <!-- Client Data Section End -->
        <!-- Location Section Start -->
        <div class="client_adres">
            <h2>Адрес доставки</h2>
                <p class="city">Город:</p>
                <input class="city_input" type="text">
                <p class="street">Улица:</p>
                <input class ="street_input" type="text">
                <div class="home_appartments">
                    <div class="left">
                        <p>Дом:</p>
                        <input class="small_input">
                    </div>
                    <div class="right">
                        <p>Квартира:</p>
                        <input class="small_input">
                    </div>
                </div>
        </div>
        <!-- Location Section End -->
        <!-- Change Password Section Start -->
        <div class="client_mail">
            <h2>Изменение пароля</h2>
                <p class="main_p">Введите новый пароль:</p>
                <input class="main_psw" type="password">
                <p class="confim_p">Подтвердите новый пароль:</p>
                <input  class="confim_psw" type="password">
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
            <div class="actual_order">
                <div class="order_info">
                    <p class="order_num">№4653</p>
                    <p class="order_sum">(45 458 руб.)</p>
                    <p class="order_time">01.01.2019 в 15:45</p>
                </div>
                <div class="order_status">
                    <p>Ожидает доставки</p>
                </div>
            </div>
            <!--   Actual orders end    -->
            <!--   Done orders start    -->
            <div class="done_order">
                <div class="order_info">
                    <p class="order_num">№4653</p>
                    <p class="order_sum">(45458 руб.)</p>
                    <p class="order_time">01.01.2019 в 15:45</p>
                </div>
                <div class="order_status">
                    <p>Доставлено</p>
                </div>
            </div>
            <!--   Done orders end    -->
        </div>
        <!-- Orders Section end -->
</section>