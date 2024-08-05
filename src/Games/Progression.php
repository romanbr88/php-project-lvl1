<?php

declare(strict_types=1);

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\build;

const RULES = 'What number is missing in the progression?';

function play(): void
{
    $data = function (): array {
        $startNumber = rand(1, 100);
        $length = rand(5, 10);
        $step = rand(1, 10);

        $progression[] = $startNumber;

        for ($i = 1; $i <= $length; $i++) {
            $progression[] = $startNumber + ($i * $step);
        }

        $missedKey = array_rand($progression);
        $correctAnswer = (string)$progression[$missedKey];
        $progression[$missedKey] = '..';
        $question = implode(' ', $progression);

        return [$question, $correctAnswer];
    };

    build(RULES, $data);
}
