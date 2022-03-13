<?php

declare(strict_types=1);

namespace MyApplication\Models;

class BlogCategoryModel
{
    //データベースからブログカテゴリ情報を取得する
    public function find(int $blogCategoryId): void
    {
        echo "ID:{$blogCategoryId}を持つブログカテゴリを取得しました。";
    }
}
