<?php
function getImgInfo(int $imgid)
{
    return getDataFromDb("SELECT * FROM `gallery` WHERE `id` = '{$imgid}'");
}

function updateViews($sql)
{
    executeQuery($sql);
}

function addViews(int $imgid)
{
    updateViews("UPDATE `gallery` SET `views`= views + 1  WHERE `id` = '{$imgid}'");
}
