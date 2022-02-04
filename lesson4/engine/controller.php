<?php
function prepareVariables($page, $messages, $action)
{
    $params = [
        'count' => getItemsCount(session_id()),
        'menu_list' => [
            'Главная' => '/',
            'Каталог' => '/catalog',
            'Галерея' => '/gallery',
            'Личный кабинет' => '/account',
            'Корзина (' . getItemsCount(session_id()) . ')' => '/card'
        ],
        'username' => getUsername(),
        'allow' => isAuth()
    ];

    if (isAdmin()) {
        $params['menu_list']['Админка'] = '/admin';
    }

    switch ($page) {

        case 'login':
            $login = $_POST['login'];
            $password = $_POST['password'];
            if (auth($login, $password)) {
                if (isset($_POST['save'])) {
                    $hash = uniqid(rand(), true);
                    setcookie('hash', $hash, time() + 3600);
                    $id = $_SESSION['id'];
                    $sql = "UPDATE `users` SET `hash` = '{$hash}' WHERE `id` = '{$id}'";
                    executeQuery($sql);
                }
                header("Location: " . $_SERVER['HTTP_REFERER']);
                die();
            } else {
                die('Неверный логин или пароль!');
            }

        case 'logout':
            setcookie('hash', '', time() - 3600, '/');
            session_destroy();
            header("Location: " . $_SERVER['HTTP_REFERER']);
            break;

        case 'gallery':
            if (!empty($_FILES)) {
                $status = upload();
                if ($status  == '1') {
                    header("Location: /gallery/?message=1");
                    die();
                }
                header("Location: /gallery/?message=error" . $status);
                die();
            }
            $params['message'] = $messages[strip_tags($_GET['message'])];
            $params['gallery_images'] = getGallery();
            break;

        case 'viewimg':
            $imgid = (int)$_GET['id'];
            addViews($imgid);
            $params['img_views'] = getImgInfo($imgid)['views'];
            $params['img_name'] = getImgInfo($imgid)['name'];
            $params['imgInfo'] = getImgInfo($imgid);
            if ($params['imgInfo'] == NULL) {
                header("Location: /error");
                die();
            }
            break;

        case 'catalog':
            $params['catalogArr'] = getCatalog();
            $params['pageScript'] = 'catalogLoader';
            break;

        case 'buy':
            $itemId = (int)$_GET['id'];
            $session = session_id();
            $userId = getUserId();
            $cardId = getCardId($session, $itemId)['id'];
            addToCard($session, $cardId, $itemId, $userId);
            header("Location: /catalog");
            die();

        case 'item':
            $params['itemInfo'] = getItemInfo((int)$_GET['id']);
            if ($params['itemInfo'] == NULL) {
                header("Location: /error");
                die();
            }
            $params['itemFeedback'] = getItemFeedback((int)$_GET['id']);
            $params['message'] = $messages[strip_tags($_GET['message'])];
            $params['feedbackArr'] = getFeedback();
            if ($action == 'edit') {
                $params['editArray'] = editFeedback();
                $params['action'] = $action;
            }
            $status = doFeedbackAction($action);
            if ($status) {
                header("Location: /item/?id=" . (int)$_GET['id'] . "&message=" . $status);
                die();
            }
            break;

        case 'card':
            $session = session_id();
            $params['sumPrice'] = getCardSum($session);
            $params['purchaseInfo'] = getPurchaseInfo($session);
            $params['message'] = $messages[strip_tags($_GET['message'])];
            $params['action'] = $action;
            $status = doCardAction($action, (int)$_GET['id']);
            if ($status) {
                header("Location: /card");
                die();
            }
            break;

        case 'placeorder':
            $session = session_id();
            $name = htmlspecialchars(strip_tags(mysqli_real_escape_string(getDb(), $_POST['name'])));
            $phone = htmlspecialchars(strip_tags(mysqli_real_escape_string(getDb(), $_POST['phone'])));
            $price = getCardSum($session);
            placeOrder($session, $name, $phone, $price);
            session_regenerate_id();
            header("Location: /card/?message=purchased");
            die();

        case 'admin':
            $params['ordersList'] = getOrdersList();
            $sessionId = getOrdersList()[1]['session_id'];
            break;

        case 'order':
            if (isAdmin()) {
                $orderId = (int)$_GET['id'];
                $params['orderId'] = $orderId;
                $sessionId =  getOrderInfo($orderId)['session_id'];
                $params['orderInfo'] = getPurchaseInfo($sessionId);
                $status = $_POST['status'];
                $params['status'] = getOrderInfo($orderId)['status'];
                if ($status) {
                    changeOrderStatus($orderId, $status);
                    $params['status'] = $_POST['status'];
                }
            }
            break;

        case 'account':
            $userId = getUserId();
            $params['sessionIdList'] = getSessionArr($userId);
            // die();
            break;

        case 'sign':
            $params['message'] = $messages[$_GET['message']];
            if ($_POST) {
                $login = $_POST['login'];
                if (checkLogin($login)) {
                    if ($_POST['password'] == $_POST['passwordCheck']) {
                        addUser($_POST);
                        header("Location: /sign/?message=signed");
                        die();
                    }
                    header("Location: /sign/?message=passNotMatch");
                    die();
                }
                header("Location: /sign/?message=userExists");
                die();
            }
            break;
    }
    return $params;
}
