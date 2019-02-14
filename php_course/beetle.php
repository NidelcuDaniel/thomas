<?php
  class Beetle {
    public $prod_year;
    public $km;
    public $color;
  }

  $beetle1 = new Beetle();
  $beetle1->prod_year = 1970;
  $beetle1->km = 5000;
  $beetle1->color = 'red';
  var_dump($beetle1);
  echo '<br><br>';

  $beetle2 = new Beetle();
  $beetle2->prod_year = 2019;
  $beetle2->km = 2000;
  $beetle2->color = 'blue';
  var_dump($beetle2);

?>
