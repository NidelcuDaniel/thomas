<?php
  session_start();

  if(!isset($_SESSION['number'])) {
    $_SESSION['number'] = random_number();
  }
  if(!isset($_SESSION['tries'])) {
    $_SESSION['tries'] = [];
  }

  if(isset($_POST['userNumber'])) {
    $userNumber = (int) $_POST['userNumber'];
    if(is_valid_number($userNumber)) {
      $noOfCorrectDigits = count_correct_digits($userNumber);
      $noOfDigitsInPosition = count_digits_in_position($userNumber);

      $_SESSION['tries'][] = $userNumber . ': correct - ' . $noOfCorrectDigits . ', in place - ' . $noOfDigitsInPosition . '.<br/>';
      echo implode($_SESSION['tries']);

      if($userNumber == $_SESSION['number']) {
        echo "You win!";
        echo "<button type='submit' name='restart'> Reincearca</button>";
        die();
      }
    }
  }

  function count_correct_digits(int $userNumber): int {
    $sessionNumber = $_SESSION['number'];
    $commonDigits = array_intersect(
      str_split($sessionNumber),
      str_split($userNumber)
    );
    return count($commonDigits);
  }

  function count_digits_in_position(int $userNumber): int {
    $sessionNumber = $_SESSION['number'];
    $count = 0;
    for($i = 0; $i < 3; $i++) {
      if(substr($userNumber, $i, 1) == substr($sessionNumber, $i, 1)) $count++;
    }
    return $count;
  }

  function is_valid_number(int $userNumber): bool {
    return strlen($userNumber) == 3
      && !has_repeated_digits($userNumber);
  }
 ?>

<form action="mastermind.php" method="post">
  <label for="userNumber">Guess the number:</label>
  <input type="text" name="userNumber"/>
  <button type="submit">SEND</button>
</form>

<?php

function random_number(): int {
  do {
    $number = rand(102, 987);
  } while(has_repeated_digits($number));
  return $number;
}

function has_repeated_digits(int $number): bool {
  $digits = str_split($number);
  $uniqueDigits = array_unique($digits);

  if(count($uniqueDigits) === count($digits)) {
    return false;
  } else return true;
}
?>
