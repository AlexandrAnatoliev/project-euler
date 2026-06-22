<?php

namespace Problem3AlexandrAnatoliev;

class Solution {
  public function getMinPrimeDiv(
    int $num, 
    int $startDiv
  ): int {
    if(($num % $startDiv == 0) 
      && ($startDiv * $startDiv <= $num)) {
      return $startDiv;
    }

    $div = $startDiv % 2 == 0
      ? $startDiv + 1
      : $startDiv;

    for($div; $div * $div <= $num + 1; $div += 2) {
      if($num % $div == 0) {
        return $div;
      }
    }

    return 1;
  }
}
