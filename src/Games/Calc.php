<?php

declare(strict_types=1);

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\build;

const RULES = 'What is the result of the expression?';
const OPERATIONS = ['+', '-', '*'];

function play(): void
{
    $data = function (): array {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $operation = OPERATIONS[array_rand(OPERATIONS)];
        $correctAnswer = 0;

        $question = "$number1 $operation $number2";

        switch ($operation) {
            case '+':
                $correctAnswer = $number1 + $number2;
                break;
            case '-':
                $correctAnswer = $number1 - $number2;
                break;
            case '*':
                $correctAnswer = $number1 * $number2;
        }

        return [$question, (string)$correctAnswer];
    };

    build(RULES, $data);
}
