<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File</title>
    <style>
    body {
      font-family: monospace;

    }
    </style>
  </head>
  <body>

<?php
  $w = $_GET['w'];
  $h = $_GET['h'];
  for($i = 0; $i < $h; $i++) {
    for($j = 0; $j < $w; $j++) {
      if($i==0 || $i==$h-1) echo '#';
      elseif( $j==0 || $j==$w-1) echo '#';
      else echo '0';
    }
    echo '<br>';
  }
?>

  </body>
</html>
