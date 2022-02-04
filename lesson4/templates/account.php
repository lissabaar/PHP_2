<h1>Личный кабинет</h1>
<? if (isAuth()) : ?>
    <h2>Мои заказы</h2>

    <? foreach ($sessionIdList as $key => $session) : $order = getOrderDetails($session)[0]; ?>
        <div class="my-order">
            Заказ № <?= $order['id'] ?><Br>
            Сумма: <?= $order['price_total'] ?><br>
            Статус: <?= $order['status'] ?>
            <br><br>
            <div class="my-order-items">
                <?php foreach (getPurchaseInfo($session) as $key => $orderDetails) : ?>
                    <div class="my-order-items-item"> <img src="<?= $orderDetails['image'] ?>" width="50" alt="img"><Br>
                        <?= $orderDetails['name'] ?><Br>
                        <?= $orderDetails['price'] ?> руб.<Br>
                        Кол-во: <?= $orderDetails['count'] ?><Br></div>
                <? endforeach ?>
            </div>
        </div>
    <? endforeach ?>

<? else : ?>
    Ошибка! Войдите или <a href="/sign">зарегистрируйтесь</a>.
<? endif ?>