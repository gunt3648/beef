<?php include 'server.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 mt-5">
        <form method="post" action="login.php" class="col-12">
          <h2>Guide Login</h2>
          <br>
          <?php include 'errors.php';?>
          <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
          </div>
          <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
          </div>
          <br>
          <div class="input-group">
            <button type="submit" name="login_guide" class="btn">Login</button>
          </div>
          <p>
            Not our guide?
            <a href="register_guide.php">Sign up</a>
          </p>
        </form>
      </div>
      <div class="col-12 col-sm-6 mt-5">
        <form method="post" action="login.php" class="col-12">
          <h2>Traveller Login</h2>
          <br>
          <?php include 'errors_trav.php';?>
          <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
          </div>
          <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
          </div>
          <br>
          <div class="input-group">
            <button type="submit" name="login_traveller" class="btn">Login</button>
          </div>
          <p>
            Not our member?
            <a href="register_trav.php">Sign up</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>

</html>