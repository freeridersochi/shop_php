<h1>Регистрация</h1>
<section class="regPanel">
    <form action="registration.php" method="post">
        <div class="left_section">
            <div>
                <p>Контактное лицо (ФИО)</p>
                <?php if($errors['name']):?>
                    <p class="error"><?=$errors['name']?></p>
                <? endif ;?>
            </div>
            <input type="text" class="left" name="name" value="<?=$fields['name']?>">
            <div>
                <p class="p_mail">E-mail адрес</p>
                <?php if($errors['email']):?>
                    <p class="error"><?=$errors['email']?></p>
                <? endif ;?>
            </div>
            <input type="email" class="left" name="email" value="<?=$fields['email']?>">
            <button>
                <p>Зарегистрирваться</p>
            </button>
        </div>
        <div class="right_section">
            <div>
                <p>Пароль</p>
                <?php if($errors['password']):?>
                    <p class="error"><?=$errors['password']?></p>
                <? endif ;?>
            </div>            
            <input type="password" class="right main_psw" name="psw" value="<?=$fields['password']?>">           
            <div>
                <p class="p_conf_psw">Повторите пароль</p>
                <?php if($errors['confirm_psw']):?>
                    <p class="error"><?=$errors['confirm_psw']?></p>
                <? endif ;?>
            </div>
            <input type="password" class="right confirm_psw" name="confirm_psw">
        </div>
    </form>
</section>