<?php

declare(strict_types=1);

namespace MyApplication\Models;

class UserModel
{
    //データベースからユーザ情報を取得する
    public function find(int $userId): void
    {
        echo "ID:{$userId}を持つユーザーを取得しました。";
    }
}
