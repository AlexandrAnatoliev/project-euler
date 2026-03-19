<?php
  $answer = 0;
  for ($num = 1; $num < 1000; $num++) {
    if ($num % 3 == 0 || $num % 5 == 0) {
      $answer += $num;
    } 
  }
  echo "Answer = " . $answer;
?>
