<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>While</title>
  </head>
  <body>

<?php
  $number = $_GET['number'];
  $sum = 0;
  $i = 0;
  do {
    $sum = $sum + $i;
    $i = $i + 1;
  } while ($i <= $number);
  echo $sum.PHP_EOL;



?>


  </body>
</html>
