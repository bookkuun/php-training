<?php

namespace controller\register;

function get()
{
    require_once SOURCE_BASE . 'views/register.php';
}

function post()
{
    echo 'post methodを受け取りました。';
}
