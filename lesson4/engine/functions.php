<?php
function render($page, $params)
{
    return renderTemplate(
        LAYOUTS_DIR . 'main',
        [
            'pageScript' => $params['pageScript'] . '.js',
            'menu' => renderTemplate('menu', $params),
            'loginForm' => renderTemplate('loginForm', $params),
            'content' => renderTemplate($page, $params)
        ]
    );
}

function renderTemplate($page, $params)
{
    ob_start();
    foreach ($params as $key => $value) {
        $$key = $value;
    }
    $fileName = TEMPLATES_DIR . $page . '.php';
    if (file_exists($fileName)) {
        include $fileName;
    }
    return ob_get_clean();
}
