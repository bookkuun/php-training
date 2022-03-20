<?php
require_once 'config.php';
echo $_SERVER['REQUEST_URI'];

// Model
require_once SOURCE_BASE . 'models/user.model.php';

// DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';

use db\UserQuery;

$result = UserQuery::fetchById('test');
var_dump($result);

require_once SOURCE_BASE . 'partials/header.php';

$rpath = str_replace(BASE_CONTEXT_PATH, '', $_SERVER['REQUEST_URI']);
$method = strtolower($_SERVER['REQUEST_METHOD']);

route($rpath, $method);

function route($rpath, $method)
{
    if ($rpath === '') {
        $rpath = 'home';
    }

    $targetFile = SOURCE_BASE . "controllers/{$rpath}.php";

    if (!file_exists($targetFile)) {
        require_once SOURCE_BASE . "views/404.php";
        return;
    }

    require_once $targetFile;

    $fn = "\\controller\\{$rpath}\\{$method}";
    $fn();
}

require_once SOURCE_BASE . 'partials/footer.php';
