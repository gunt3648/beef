<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Register</title>
</head>
<body>
  <div class="container">
    <div class="row">
  <form method="post" action="register_trav.php"  class="col-8 align-items-center mt-2">
    <?php include('errors.php'); ?>
    <h2>Register</h2>
    <div class="input-group mb-3">
      <label class="col-sm-3">Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>" minlength="5" class="col-sm-8">
    </div>
    <div class="input-group mb-3">
        <label class="col-sm-3">Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" class="col-sm-8">
    </div>
    <div class="input-group mb-3">
        <label class="col-sm-3">Password</label>
        <input type="password" name="password" minlength="8" class="col-sm-8">
    </div>
    <div class="input-group mb-3">
        <label class="col-sm-3">Confirm Password</label>
        <input type="password" name="password_confirmed" class="col-sm-8">
    </div>
    <div class="input-group mb-3">
        <label class="col-sm-3">First Name</label>
        <input type="text" name="first_name" value="<?php echo $first_name; ?>" class="col-sm-8">
    </div>
    <div class="input-group mb-3">
        <label class="col-sm-3">Last Name</label>
        <input type="text" name="last_name" value="<?php echo $last_name; ?>" class="col-sm-8">
    </div>
    <div class="input-group mb-3">
        <label class="col-sm-3">Tel.</label>
        <input type="text" name="tel" value="<?php echo $tel; ?>" class="col-sm-8">
    </div>
    <div class="input-group mb-3">
        <button type="submit" name="register_trav" class="btn">Register</button>
    </div>
    <p>
      Already a member?<a href="login.php">Sign in</a>
    </p>
  </form>
</div>
</div>
</body>
</html>