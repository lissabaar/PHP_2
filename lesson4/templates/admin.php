<? if (isAdmin()) : ?>
    <h1>Админка</h1>
    <div class="orders-container">

        <?php foreach ($ordersList as $key => $ordersList) : ?>
            <div class="order">
                <h3>Заказ № <?= $ordersList['id'] ?></h3>
                Покупатель: <?= $ordersList['name'] ?><br>
                Телефон: <?= $ordersList['phone'] ?><br>
                Сумма: <?= $ordersList['price_total'] ?><br>
                Статус: <?= $ordersList['status'] ?><br>
                <a href="/order/?id=<?= $ordersList['id'] ?>">Детали заказа</a><Br><Br>
            </div>


        <? endforeach ?>
    </div>
<? else : ?>
    Ошибка! Вы не имеете прав доступа!
<? endif ?>