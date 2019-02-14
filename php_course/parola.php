<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Parola</title>

  </head>
  <body>

<?php
  $pass = '';
  if(isset($_POST['pass'])) $pass = $_POST['pass'];

?>
  <form method="post">
    <input type="text" name="pass" value="<?=$pass?>" placeholder="Type your password" /> <br />
    <input type="submit" value="Send Password"></input>
  </form>

<?php
  $score = 0;

  function findString($pass, $score, $search) {
    $found = 0;
    for($i=0; $i<strlen($search); $i++) {
      if(strpos($pass,$search[$i])) $found++;
      if($found > 1) break;
    }
    return $score += $found*10;
  }

  // char length
  if(strlen($pass) > 4) $score += 10;
  if(strlen($pass) > 6) $score += 10;
  if(strlen($pass) > 8) $score += 10;
  if(strlen($pass) > 12) $score += 10;

  // case sensitive
  if((strtolower($pass) != $pass) && (strtoupper($pass) != $pass )) $score+=20;
  //
  $score = findString($pass, $score, '1234567890');
  $score = findString($pass, $score, '<>!@#$%ˆ&*()_+=,.;:\'/\\?±§[]{}');

  echo $score.'<br>';
  echo "Your password: $pass";

  $red = round(255*(100 - $score)/100);
  $green = round(255*$score/100);
  $color = 'rgb('.$red.','.$green.',0)';
?>
  <div id="container" style="width:200px; height:50px; border: 1px solid">
    <div id="bar" style="width:<?=$score*2?>px; height:50px; background-color: <?=$color?>">
    </div>
  </div>
  </body>
</html>
