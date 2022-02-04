<h1>Товар: <?= $itemInfo['name'] ?></h1>
<img src="<?= $itemInfo['image'] ?>" alt="img" width="200"><br>
Цена: <?= $itemInfo['price'] ?><br>
<?= $itemInfo['description'] ?><br><br>

<h2>Отзывы покупателей</h2>
<? foreach($itemFeedback  as $key => $fb_info): ?>
<b><?= $fb_info['username'] ?></b> <a href="/item/delete/?id=<?= $itemInfo['id'] ?>&feedbackId=<?= $fb_info['id'] ?>">[x]</a>
<a href="/item/edit/?id=<?= $itemInfo['id'] ?>&feedbackId=<?= $fb_info['id'] ?>">[edit]</a><br>
<?= $fb_info['feedback'] ?><br><br>
<? endforeach; ?>


<h2>Оставить отзыв</h2>
<?= $message ?><br>
<?php if ($action == 'edit') : ?>
    <form action="/item/save/?id=<?= $itemInfo['id'] ?>&feedbackId=<?= $fb_info['id'] ?>" method="post">
    <?php else : ?>
        <form action="/item/add/?id=<?= $itemInfo['id'] ?>" method="post">
        <?php endif; ?>
        <input hidden type="text" name="id" value="<?= $editArray['id'] ?>"><br>
        <input type="text" name="username" value="<?= $editArray['username'] ?>"><br>
        <textarea name="feedback" cols="30" rows="10"><?= $editArray['feedback'] ?></textarea><br>
        <?php if ($action == 'edit') : ?>
            <input type="submit" value="Править">
        <?php else : ?>
            <input type="submit" value="Добавить">
        <?php endif; ?>
        </form>