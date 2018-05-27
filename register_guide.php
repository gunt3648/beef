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
  <div class="header">
    <h2>Register</h2>
  </div>
  <form method="post" action="register_guide.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>" minlength="5">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" minlength="8">
    </div>
    <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password_confirmed">
    </div>
    <div class="input-group">
        <label>First Name</label>
        <input type="text" name="first_name" value="<?php echo $first_name; ?>">
    </div>
    <div class="input-group">
        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php echo $last_name; ?>">
    </div>
    <div class="input-group">
        <label>Tel.</label>
        <input type="text" name="tel" value="<?php echo $tel; ?>">
    </div>
    <div class="input-group">
        <label>Area</label>
        <input type="text" name="area" value="<?php echo $area; ?>">
    </div>
    <div class="input-group">
        <button type="submit" name="register_guide" class="btn">Register</button>
    </div>
    <p>
      Already a member?<a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>