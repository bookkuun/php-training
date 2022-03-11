<?php

declare(strict_types=1);

interface Cards
{
    public function shuffle(): void;

    public function getValue(int $position): string;
}
