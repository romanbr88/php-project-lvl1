<?php

declare(strict_types=1);

namespace BrainGames\Games\Even;

use function BrainGames\Engine\build;

const RULES = 'Answer "yes" if the number is even, otherwise answer "no".';

function play(): void
{
    $data = function (): array {
        $question = rand(1, 100);
        $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    build(RULES, $data);
}
