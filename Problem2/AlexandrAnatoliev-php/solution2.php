<?php
/*
 * Вторая задача проекта Эйлер
 * @author AlexandrAnatoliev
 * @version 0.2.2 2026-04-03
 */

$first_fib  = 1;
$second_fib = 2;
$next_fib   = $first_fib + $second_fib;
$answer     = 0;
$max_fib    = 4000000;

while ($next_fib < $max_fib) {
    if ($second_fib % 2 == 0) {
        $answer += $second_fib;
    }
    $next_fib   = $first_fib + $second_fib;
    $first_fib  = $second_fib;
    $second_fib = $next_fib;
}

echo 'Answer = ' . $answer;
