<?php
function getItemInfo($itemId)
{
    $sql = "SELECT * FROM `items` WHERE `id` = '{$itemId}'";
    return getDataFromDb($sql);
}

function getItemFeedback($itemId)
{
    $sql = "SELECT `id`, `username`, `feedback` FROM `feedback` WHERE `id_item` = {$itemId}";
    return getAssocResult($sql);
}
