<?php

declare(strict_types=1);

namespace MyApplication;

require_once dirname(__FILE__) . '/DatabaseModelFactory.php';


// ブログページを表示するクラス

class BlogController
{
    private $modelFactory;

    public function __construct()
    {
        $this->modelFactory = new DatabaseModelFactory();
    }

    public function show(int $userId, int $blogId): void
    {
        $user = $this->modelFactory->createUserModel()->find($userId);
        $blog = $this->modelFactory->createBlogModel()->find($blogId);
    }
}

$controller = new BlogController();
$controller->show(1001, 2001);
