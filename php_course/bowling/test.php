<?php
  require_once('BowlingGame.php');

  function testZeroGame() {
    $game = new BowlingGame();

    for($i = 0; $i < 20; $i++) {
      $game->roll(0);
    }
    if($game->score() != 0) {
      echo "Test gresit, scor: ".$game->score()."\n";
    } else echo "ok\n";
  }

  function testSpare() {
    $game = new BowlingGame();

    $game->roll(5);
    $game->roll(5);
    $game->roll(3);

    if($game->score() != 16) {
      echo "Test gresit, scor: ".$game->score()."\n";
    } else echo "ok\n";
  }

  function testStrike() {
    $game = new BowlingGame();

    $game->roll(10);
    $game->roll(5);
    $game->roll(3);

    if($game->score() != 26) {
      echo "Test gresit, scor: ".$game->score()."\n";
    } else echo "ok\n";
  }

  testZeroGame();
  testSpare();
  testStrike();
?>
