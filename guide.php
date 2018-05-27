<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <?php
    $db = mysqli_connect('localhost', 'root', '', 'registration');
    $query = "SELECT * FROM user";
    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_array($result))
    {
      $first_name = $row['first_name'];
      $last_name = $row['last_name']; 
       ?>
      <div class="col-lg-4">
      <p><?php echo $first_name?></p>
      <p><?php echo $last_name?></p>
      </div>
      <?php  if (isset($_SESSION['username'])) { ?>
        <select class="custom-select">
          <option selected>Rating</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      <?php }
      } ?>
</body>
</html>