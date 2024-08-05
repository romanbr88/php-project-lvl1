<?php

declare(strict_types=1);

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ATTEMPTS_COUNT = 3;

function build(string $rules, callable $data): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line($rules);

    for ($i = 0; $i < ATTEMPTS_COUNT; $i++) {
        [$question, $correctAnswer] = $data();
        line('Question: %s', $question);
        $answer = prompt('Your answer:');

        if ($answer !== $correctAnswer) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $answer, $correctAnswer);
            line('Let\'s try again, %s!', $name);
            return;
        }

        line('Correct!');
    }

    line('Congratulations, %s!', $name);
}
