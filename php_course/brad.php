<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="1">
    <title>Brad</title>
    <style>

        .ac { color:green; }
        .glob { color:red; }
    </style>
  </head>
  <body>

<?php

/*for ($c=0;$c<4;$c++) {
  $width = 10 + 5*$c;
  for ($i=(1 + 5*$c);$i<=$width;$i+=2) {
    echo '<div>';
    for ($j=0;$j<$i;$j++) {
      if (rand(0,10) > 1) echo '<span class="frunza">*</span>';
      else echo '<span class="glob">@</span>';
      echo '</div>';
    }
  }
}
for ($j=0;$j<3;$j++) {
  echo '<div>|#|</div>';
}*/
  $w = 10;
  for($k=0; $k<4; $k++) {
    for($i=7*$k; $i<$w+7*$k; $i++) {
      echo '<center>';
      for($j=0; $j<2*$i-1; $j++) {
        if(random_int(0, 10) > 1) echo '<span class="ac">+</span>';
        else echo '<span class="glob">o</span>';
      }
      echo '</center>';
    }
  }


?>

  </body>
</html>
