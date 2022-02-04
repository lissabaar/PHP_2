<div class="login-form">
    Добро пожаловать, <b><?= $username ?></b>!<br>
    <?php if ($allow) : ?>
        <a class="logout-link" href="/logout">Выход</a>
    <?php else : ?>
        <a class="logout-link" href="/sign">Зарегистрируйтесь</a> либо введите логин и пароль.<Br>
        <form action="/login" method="post">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль"><br>
            <input type="checkbox" name="save"> Запомнить меня<br>
            <input type="submit" name="send" value="Войти">
        </form>
    <?php endif ?>
</div>