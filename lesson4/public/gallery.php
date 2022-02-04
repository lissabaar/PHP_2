<?php
require_once "../config/config.php";
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem(TEMPLATES_DIR);

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('gallery.tmpl');

    echo $template->render(array (
        'gallery_images' => getGallery(),
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
?>