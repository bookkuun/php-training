<?php

declare(strict_types=1);

namespace MyApplication\Models;

class FriendModel
{
    //データベースから友達情報を取得する
    public function find(int $friendId): void
    {
        echo "ID:{$friendId}を持つ友達を取得しました。";
    }
}
