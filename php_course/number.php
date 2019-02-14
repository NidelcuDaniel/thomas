<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Number</title>
  </head>
  <body>
    <form method="POST">
      <label>Introdu numarul</label>
      <input type="text" name="nr">
      <input type="submit" value="Ghiceste">
    </form>
  </body>
</html>

<?php

if(!isset($_COOKIE['random_nr'])) {
  $random_nr = rand(0,1);
  $tries_left = 5;
  setcookie('random_nr', $random_nr);
  setcookie('tries_left', $tries_left);
}
if(isset($_POST['nr'])) {
  $guess = $_POST['nr'];
  if($guess < $_COOKIE['random_nr']) {
    echo "Incearca mai mare";
  } elseif ($guess > $_COOKIE['random_nr']) {
    echo "Incearca mai mic";
  } else echo "Ai ghicit.";
}

?>
