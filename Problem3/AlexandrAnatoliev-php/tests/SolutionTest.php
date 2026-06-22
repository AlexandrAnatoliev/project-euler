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
    $this->assertEquals(71,
      $solution->getMinPrimeDiv(600851475143, 2));
    $this->assertEquals(1,
      $solution->getMinPrimeDiv(5, 3));
  }

  public function testGetMaxPrimeDiv(): void
  {
    $solution = new Solution();
    $this->assertEquals(5,
      $solution->getMaxPrimeDiv(15, 2));
    $this->assertEquals(6857,
      $solution->getMaxPrimeDiv(600851475143, 2));
  }
}
