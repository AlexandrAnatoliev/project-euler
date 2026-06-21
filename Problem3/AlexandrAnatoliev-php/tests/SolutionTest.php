<?php

use PHPUnit\Framework\TestCase;
use Problem3AlexandrAnatoliev\Solution;

class SolutionTest extends TestCase
{
  public function testGetMinPrimeDiv(): void
  {
    $solution = new Solution();
    $this->assertEquals(3,
      $solution->getMinPrimeDiv(15, 2));
  }
}
