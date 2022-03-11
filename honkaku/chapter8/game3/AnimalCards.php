<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Cards.php';

class AnimalCards implements Cards
{
    private $cards;

    public function __construct()
    {
    }

    public function shuffle(): void
    {
        echo 'シャッフルします...' . PHP_EOL;
    }

    public function getValue(int $position): string
    {
        return 'Penguin';
    }
}
