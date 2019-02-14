<?php
  $users = [
    'user1' => 'pass1',
    'user2' => 'pass2'
  ];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
<?php
session_start();
  if(isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if(isset($users[$user]) && $users[$user] == $pass) {
      echo "Bine ai venit $user";

      $_SESSION['user'] = $user;
    } else {
      echo "User sau parola incorecta.";
    }
  }
  elseif(isset($_SESSION['user'])) {
    echo "Bine ai venit,".$_SESSION['user'];
  } else {
?>
    <form method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" placeholder="Enter email" name="user">
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" placeholder="Enter password" name="pass">
      </div>
      <button type="submit" class="btn btn-primary" name="Send">Submit</button>
    </form>
<?php } ?>

  </body>
</html>
