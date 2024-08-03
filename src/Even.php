<?php

declare(strict_types=1);

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

const ATTEMPTS_COUNT = 3;

function play(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < ATTEMPTS_COUNT; $i++) {
        $number = rand(1, 100);
        line('Question: %s', $number);
        $answer = prompt('Your answer:');
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';

        if ($answer !== $correctAnswer) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $answer, $correctAnswer);
            line('Let\'s try again, %s!', $name);
            return;
        }

        line('Correct!');
    }

    line('Congratulations, %s!', $name);
}
