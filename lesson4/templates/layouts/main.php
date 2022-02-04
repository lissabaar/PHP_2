<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISSA'S STORE</title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <? if($pageScript): ?>
    <script src="../../js/<?= $pageScript ?>"></script>
    <? endif; ?>
</head>

<body>
    <header class="page-header-logo">
        <div class="container">
            <h1 class="page-header-logo-title">LISSA'S STORE
            </h1>
            <?= $loginForm ?>
        </div>
    </header>
    <div class="page-main-content">
        <?= $menu ?>
        <?= $content ?>
    </div>

    <footer class="page-footer"></footer>
</body>

</html>