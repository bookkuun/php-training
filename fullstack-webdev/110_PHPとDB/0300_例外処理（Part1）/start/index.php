<?php

/**
 * 例外処理とは
 */

try {
    $bool = false;
    // $bool->method();
    echo '通常処理が実行されました。<br>';
} catch (Error $e) {
    echo '例外処理が実行されました。<br>';
    echo $e->getMessage() . '<br>';
} finally {
    echo '終了処理が実行されました。<br>';
}
