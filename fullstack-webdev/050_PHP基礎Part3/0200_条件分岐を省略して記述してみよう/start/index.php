<?php

$arry = [
    'key' => 10,
];

// null合体演算子
$arry['key'] = $arry['key'] * 10 ?? 1;
echo $arry['key'];
