<?php
  $foo = 10;
  $array = array(10 => $foo, "foo" => 20);
  print $array[$array[$foo]] * $array["foo"];


?>
