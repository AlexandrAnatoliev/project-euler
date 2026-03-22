<?php
/* 
 * Первая задача проекта Эйлер
 * @author AlexandrAnatoliev
 * @version 0.1.4 2026-03-19
 */

$answer = 0;
for ($num = 1; $num < 1000; $num++) {   
    if ($num % 3 == 0 || $num % 5 == 0) {
        $answer += $num;
    } 
}
echo 'Answer = ' . $answer;
?>
