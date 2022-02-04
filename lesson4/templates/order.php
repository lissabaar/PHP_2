<? if (isAdmin()) : ?>
    <h1>Админка: заказ № <?= $orderId ?></h1>

    <?php foreach ($orderInfo as $key => $orderDetails) : ?>
        <img src="<?= $orderDetails['image'] ?>" width="50" alt="img"><Br>
        <?= $orderDetails['name'] ?><Br>
        <?= $orderDetails['price'] ?> руб.<Br>
        Кол-во: <?= $orderDetails['count'] ?><Br><br><br>
    <? endforeach ?>
    Статус заказа:
    <form action="/order/?id=<?= $orderId ?>" method="post">
        <select name="status">
            <option <? if ($status == 'Принят') echo 'selected' ?>>Принят</option>
            <option <? if ($status == 'Собран') echo 'selected' ?>>Собран</option>
            <option <? if ($status == 'Отправлен') echo 'selected' ?>>Отправлен</option>
            <option <? if ($status == 'Получен') echo 'selected' ?>>Получен</option>
        </select>
        <input type="submit" value="Изменить">
    </form>
<? else : ?>
    Ошибка! Вы не имеете прав доступа!
<? endif ?>