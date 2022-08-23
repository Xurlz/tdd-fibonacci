<?php

class Fibonacci {
  function run(int $n) : int
  {
    if ($n === 0) return 0;
    if ($n <= 2) return 1;
    return $this->run($n - 1) + $this->run($n - 2);
  }
}

class Test {
  function run()
  {
    $cases = [
      [0,0],
      [1,1],
      [2,1],
      [3,2],
      [4,3],
      [5,5],
      [6,8],
      [7,13],
      [8,21],
      [9,34]
    ];
    foreach($cases as $case) {
      assert((new Fibonacci)->run($case[0]) === $case[1]);
      echo '.'.PHP_EOL;
    }
  }
}

try {
  (new Test)->run();
} catch (AssertionError $e) {
  echo 'FAIL'.PHP_EOL;
}

