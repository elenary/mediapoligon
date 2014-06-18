<div class="b-auth">
    <?php if (isset($errors) || isset($login_errors)): ?>
        <div data-alert class="alert-box alert" style="font-size:10px;">
            <ul class="errors">
                <?php if (isset($errors)):?>
                    <?php foreach ($errors as $message): ?>
                        <li><?php echo $message ?></li>
                    <?php endforeach ?>
                <?php endif; ?>
                <?php if (isset($login_errors) && empty($errors)): ?>
                    <?= $login_errors; ?>
                <?php endif; ?>
            </ul>
            <a href="#" class="close">&times;</a>
        </div>
    <?php endif;?>
    <form method="POST">
        <div><label for="login">Логин</label></div>
        <div><input type="text" name="login" class="b-auth__field" id="login" placeholder="Имя пользователя"></div>
        <div><label for="password">Пароль</label> </div>
        <div><input type="password" name="password" class="b-auth__field" id="password" placeholder="Только латинские и цифры"></div>
        <div><input type="submit" value="Войти" class="b-auth__button" name="submit"/> <a href="/registration">Регистрация</a> </div>
    </form>

</div>