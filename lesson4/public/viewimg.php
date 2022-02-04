<?php
include "../config/config.php";
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem(TEMPLATES_DIR);

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('viewimg.tmpl');

    $imgid = (int)$_GET['id'];
    addViews($imgid);
    $imgViews = getImgInfo($imgid)['views'];
    $imgName = getImgInfo($imgid)['name'];

    echo $template->render(array (
        'imgViews' => $imgViews,
        'imgName' => $imgName,
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
?>