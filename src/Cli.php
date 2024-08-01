<?php

declare(strict_types=1);

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greet(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
