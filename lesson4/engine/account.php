<?php
function getSessionArr($userId)
{
    $sessionList = getAssocResult("SELECT `session_id` FROM `card` WHERE `user_id` = '{$userId}'");
    $sessionId = [];
    $n = 0;
    foreach ($sessionList  as $key => $session) {
        if ($session['session_id'] != $sessionId[$n - 1]) {
            $sessionId[$n] = $session['session_id'];
            $n++;
        }
    }
    return $sessionId;
}

function getOrderDetails($session)
{
    return getAssocResult("SELECT * FROM `orders` WHERE `session_id` = '{$session}'");
}
