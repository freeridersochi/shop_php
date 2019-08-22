
<h1>Вход</h1>
<section class="loginPanel">
    <form action="login.php" method="post">
        <div class="left_section">
            <h2>Зарегистрированный пользователь</h2>
            <div>
                <p class="p_mail">E-mail адрес</p>
                <?php if($errors['email']):?>
                    <p class="error"><?=$errors['email']?></p>
                <? endif ;?>
            </div>
            <input type="email" class="left" name="email" value="<?=$_POST['email']?>">
            <div>
                <p>Пароль</p>
                <?php if($errors['password']):?>
                    <p class="error"><?=$errors['password']?></p>
                <? endif ;?>
            </div> 
            <input type="password" class="right main_psw" name="psw">
            <a href="registration.php">
                <button class="enter_button">
                    <p>Войти</p>
                </button>
            </a>
            <a href="registration.php" class="recovery_link">Забыли пароль?</a>
        </div>
        <div class="right_section">
            <h2>Новый пользователь</h2>
            <a class="reg_link" href="registration.php">Зарегистрироваться</a>
        </div>
    </form>
</section>