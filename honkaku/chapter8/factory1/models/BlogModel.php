<?php

declare(strict_types=1);

namespace MyApplication\Models;

class BlogModel
{
    //データベースからblog情報を取得する
    public function find(int $blogId): void
    {
        echo "ID:{$blogId}を持つblogを取得しました。";
    }
}
