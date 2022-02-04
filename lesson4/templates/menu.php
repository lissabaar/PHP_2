<ul class="site-menu">
    <? foreach ($menu_list as $link_name => $link) : ?>
    <li class="menu-link"><a href="<?= $link ?>"><?= $link_name ?></a></li>
    <? endforeach; ?>
</ul>