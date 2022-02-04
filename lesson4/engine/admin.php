<?php
function getOrdersList()
{
    return getAssocResult("SELECT * FROM `orders` WHERE 1");
}

function getOrderInfo($orderId)
{
    return getDataFromDb("SELECT `session_id`, `status` FROM `orders` WHERE `id` = '{$orderId}'");
}

function changeOrderStatus($orderId, $status)
{
    executeQuery("UPDATE `orders` SET `status`= '{$status}' WHERE `id` = '{$orderId}'");
}
