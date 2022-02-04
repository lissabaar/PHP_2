<?php

//function getCatalog()
//{
//    return getAssocResult("SELECT * FROM `items`");
//}

function getCatalog()
{
    return getAssocResult_PG("SELECT * FROM items LIMIT " . CATALOG_MIN_ITEMS);
}