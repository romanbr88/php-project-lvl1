<?php

declare(strict_types=1);

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\build;

const RULES = 'Find the greatest common divisor of given numbers.';

function play(): void
{
    $data = function (): array {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $question = "$number1 $number2";
        $correctAnswer = (string)gcd($number1, $number2);

        return [$question, $correctAnswer];
    };

    build(RULES, $data);
}

function gcd(int $num1, int $num2): int
{
    while ($num2 !== 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
    }

    return abs($num1);
}
