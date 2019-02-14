<?php
  function my_error_handler(int $errno, string $errstr) {
    echo "Eroare:".$errstr."<br />";
    die();
  }

  set_error_handler('my_error_handler');
  echo "salpa salpa<br />";

  $a = ['ceva','altceva'];
  echo $a[2];

  echo "salpa salpa <br />";

  $a = 2/0;

  echo "salpa salpa";

  functie();

  echo "salpa";
?>
