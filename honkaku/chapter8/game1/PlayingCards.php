<?php

declare(strict_types=1);

class PlayingCards
{
    private $cards;

    public function __construct()
    {
    }

    public function shuffle()
    {
        echo 'シャッフルします...' . PHP_EOL;
    }

    public function getValue(int $position): string
    {
        return '5';
    }
}
