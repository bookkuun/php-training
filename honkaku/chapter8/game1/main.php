<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__File__) . '/MemoryGame.php';
    $memoryGame = new MemoryGame();

    if ($memoryGame->isHit(10, 25) === true) {
        echo 'HIT !' . PHP_EOL;
    } else {
        echo 'NOT HIT !' . PHP_EOL;
    }
    ?>
</body>
