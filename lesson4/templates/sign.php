<? if (isAuth()) : ?>
    Вы уже зарегистрированы.
<? else : ?>
    <h1>Регистрация</h1>
    <form method="post" action="/sign">

        Введите логин: *<br>
        <input type="text" name="login" required>
        <br>Введите пароль: *<br>
        <input type="password" name="password" required>
        <br>Введите пароль еще раз: *<br>
        <input type="password" name="passwordCheck" required>
        <br>Введите почту: <br>
        <input type="text" name="email">
        <br>Введите ваше имя:<br>
        <input type="text" name="name">
        <br>Введите ваш телефон:<br>
        <input type="text" name="phone"><br><br>
        <input type="submit">

    </form><br>
    <?= $message ?>
<? endif ?>