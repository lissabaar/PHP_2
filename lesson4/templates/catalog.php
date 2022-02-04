<h1>Каталог</h1>
<div class="catalog">
    <div id="catalogItems">
    <? foreach($catalogArr as $key => $item_info) :?>
    <div class="catalog-item">
        <a href="item/?id=<?= $item_info['id'] ?>">
            <h2><?= $item_info['name'] ?></h2>
        </a>
        <img src=<?= $item_info['image'] ?> width="250" class="catalog-img">
        <span class="catalog-item-price">Цена: <?= $item_info['price'] ?> руб.</span>
        <p class="catalog-item-description"><?= $item_info['description'] ?></p>
        <a class="catalog-buy-button" href="/buy/?id=<?= $item_info['id'] ?>">Добавить в корзину</a>
    </div>
    <? endforeach; ?>
</div>
    <button id="loadMoreBtn">Загрузить еще</button>
</div>