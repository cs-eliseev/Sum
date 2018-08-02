<?php

namespace Alexey;

class Sum
{
    public function sum(int $a, int $b): string
    {
        return "Alexey says, that {$a} + {$b} = " . ($a + $b) . PHP_EOL;
    }
}