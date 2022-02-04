<?php

function getItemsCount($session)
{
    $res = getDataFromDb("SELECT SUM(count) AS count FROM `card` WHERE `session_id` = '{$session}'");
    return $res['count'];
}

function getUserId()
{
    if (isAuth()) {
        $login = $_SESSION['login'];
        return getDataFromDb("SELECT `id` FROM `users` WHERE `login` = '{$login}'")['id'];
    }
    return 0;
}

function deleteItem($cardId)
{
    $session = session_id();
    executeQuery("DELETE FROM `card` WHERE `id` = {$cardId} AND `session_id` = '{$session}'");
}

function countDown($cardId)
{
    $session = session_id();
    $userID = getUserId();
    $countCheck = getDataFromDb("SELECT `count` FROM `card` WHERE `id` = '{$cardId}'")['count'];
    if ($countCheck == 1) {
        deleteItem($cardId);
    }
    executeQuery("UPDATE `card` SET `count` = `count` - 1, `user_id` = '{$userID}' WHERE `id` = '{$cardId}' AND `session_id` = '{$session}'");
}

function countUp($cardId)
{
    $session = session_id();
    $userID = getUserId();
    executeQuery("UPDATE `card` SET `count` = `count` + 1, `user_id` = '{$userID}' WHERE `id` = '{$cardId}' AND `session_id` = '{$session}'");
}

function doCardAction($action, $cardId)
{
    if ($action == 'deleteItem') {
        deleteItem($cardId);
        return true;
    }
    if ($action == 'countDown') {
        countDown($cardId);
        return true;
    }
    if ($action == 'countUp') {
        countUp($cardId);
        return true;
    }
    return false;
}


function getCardSum($session)
{
    $res = getDataFromDb("SELECT SUM(price*count) AS sum_price FROM `card` WHERE `session_id` = '{$session}'");
    return $res['sum_price'];
}

function getPurchaseInfo($session)
{
    return getAssocResult("SELECT card.id as card_id, items.id as item_id, items.price, items.name, items.image, card.count FROM `card`, `items` WHERE card.items_id = items.id AND `session_id` = '{$session}'");
}

function getCardId($session, $itemId)
{
    return getDataFromDb("SELECT id FROM `card` WHERE items_id = '{$itemId}' AND `session_id` = '{$session}'");
}

function addToCard($session, $cardId, $itemId, $userId)
{
    if (getDataFromDb("SELECT * FROM `card` WHERE `items_id` = '{$itemId}' AND `session_id` = '{$session}'")) {
        countUp($cardId);
    } else {
        $itemPrice = getDataFromDb("SELECT `price` FROM `items` WHERE `id` = {$itemId}")['price'];
        executeQuery("INSERT INTO `card`(`session_id`, `items_id`, `price`, `user_id`) VALUES ('{$session}','{$itemId}', '$itemPrice', '{$userId}')");
    }
}

function placeOrder($session, $name, $phone, $price)
{
    executeQuery("INSERT INTO `orders`(`name`, `phone`, `price_total`, `session_id`) VALUES ('{$name}','{$phone}','{$price}','{$session}')");
}
