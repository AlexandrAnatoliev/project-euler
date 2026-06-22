<?php

namespace Problem3AlexandrAnatoliev;

class Calc {
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

  public function getMaxPrimeDiv(
    int $num,
    int $startDiv
  ): int {
    $div = $startDiv;
    do {
      $div = $this->getMinPrimeDiv(
        $num, $div);
      $num = $num / $div;
    } while($div != 1);
    return $num;
  }
}
