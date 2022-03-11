<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__File__) . '/MemoryGame.php';
    $memoryGame = new MemoryGame('animalCards');

    if ($memoryGame->isHit(2, 6) === true) {
        echo 'HIT !' . PHP_EOL;
    } else {
        echo 'NOT HIT !' . PHP_EOL;
    }
    ?>
</body>
