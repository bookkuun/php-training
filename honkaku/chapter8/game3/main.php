<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__File__) . '/MemoryGame.php';
    require_once dirname(__File__) . '/PlayingCards.php';
    require_once dirname(__File__) . '/AnimalCards.php';

    $cardType = 'animalCards';

    if ($cardType === 'playingCards') {
        $playingCards = new PlayingCards();
    } elseif ($cardType === 'animalCards') {
        $playingCards = new AnimalCards();
    }

    $memoryGame = new MemoryGame($playingCards);

    if ($memoryGame->isHit(2, 6) === true) {
        echo 'HIT !' . PHP_EOL;
    } else {
        echo 'NOT HIT !' . PHP_EOL;
    }
    ?>
</body>
