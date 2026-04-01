<?php
/*
 * Первая задача проекта Эйлер
 * @author AlexandrAnatoliev
 * @version 0.1.9 2026-04-01
 */

$answer = 0;
for ($num = 1; $num < 1000; $num++) {
    if ($num % 3 == 0 || $num % 5 == 0) {
        $answer += $num;
    }
}
echo 'Answer = ' . $answer;
