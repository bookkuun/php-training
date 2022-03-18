<?php
require_once 'config.php';
echo $_SERVER['REQUEST_URI'];


require_once SOURCE_BASE . 'partials/header.php';

if ($_SERVER['REQUEST_URI'] === '/poll/login') {
    require_once SOURCE_BASE . 'controllers/login.php';
} elseif ($_SERVER['REQUEST_URI'] === '/poll/register') {
    require_once SOURCE_BASE . 'controllers/register.php';
} elseif ($_SERVER['REQUEST_URI'] === '/poll/home') {
    require_once SOURCE_BASE . 'controllers/home.php';
}

require_once SOURCE_BASE . 'partials/footer.php';
