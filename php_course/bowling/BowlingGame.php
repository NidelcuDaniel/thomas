<?php

class BowlingGame {
  private $rolls = [];
  private $roll = 0;

  public function __construct() {
    $this->rolls = array_fill(0, 23, 0);
  }

  public function score() {
    $score = 0;
    $i = 0;
    $rolls = $this->rolls;

    while($i <= 21) {
      if($this->isSpare($i)) {
        $score += 10 + $rolls[$i + 2];
        $i += 2;
      } else if($this->isStrike($i)) {
        $score += 10 + $rolls[$i + 1] + $rolls[$i + 2];
        $i++;
      } else {
        $score += $rolls[$i] + $rolls[$i + 1];
        $i += 2;
      }
    }
    return $score;
  }

  public function isStrike($i) {
    return $this->rolls[$i] == 10;
  }

  public function isSpare($i) {
    return $this->rolls[$i] + $this->rolls[$i + 1] == 10;
  }

  public function roll($pins) {
    $this->rolls[$this->roll] = $pins;
    $this->roll++;
  }
}





?>
