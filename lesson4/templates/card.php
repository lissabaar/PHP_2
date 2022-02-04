<h1>Корзина</h1>
<?php if (isset($purchaseInfo[0])) : ?>
    <?php foreach ($purchaseInfo as $key => $itemDetails) : ?>
        <img src="<?= $itemDetails['image'] ?>" width="50" alt="img"><Br>
        <?= $itemDetails['name'] ?> <a href="/card/deleteItem/?id=<?= $itemDetails['card_id'] ?>">[x]</a><Br>
        <?= $itemDetails['price'] ?> руб.<Br>
        Кол-во: <?= $itemDetails['count'] ?> <a href="/card/countUp/?id=<?= $itemDetails['card_id'] ?>">[+]</a> <a href="/card/countDown/?id=<?= $itemDetails['card_id'] ?>">[-]</a><Br><br><br>
    <?php endforeach ?>
    <b>Итого к оплате:</b> <?= $sumPrice ?> руб.<br>
    <br>
    <form method="post" action="/placeorder">
        Имя <input name="name" type="text"><br><br>
        Телефон <input name="phone" type="text"><br>
        <input class="place-order-button" type="submit" name="" value="Оформить заказ">
    </form>
<?php else : ?>
    <?= $message ?><Br>
    Корзина пуста.
<?php endif ?>