<?php
  $arr = ['arbore', 'analiza', 'banana', 'bere', 'copac', 'damigeana'];
  $n = 0;
  foreach ($arr as $item) {
    if(substr($item,0,1) == $_GET['lit']) echo $item.'<br>';
    break;
    $n++;
  }

  echo $n;
?>
