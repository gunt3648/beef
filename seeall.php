<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"></script>
    <title>BEEF | Guide</title>
    <link rel="stylesheet" href="test.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
      <a class="navbar-brand" href="index.php" style="padding: 0 0; font-size: 32px; font-weight: bold;">BEEF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>

        </ul>
        <span class="navbar-text">

        </span>
      </div>
      <?php  if (isset($_SESSION['username'])) { ?>
    	  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	  <p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
      <?php } else { ?>
      <a class="btn btn-outline-primary" href="login.php">Log in</a>
      <?php } ?>
    </nav>

    <div class="container marketing">
      <div class="row">
      <?php
        $db= mysqli_connect('localhost', 'root', '', 'registration');
        $query="SELECT * FROM user WHERE type = '1' ORDER BY id DESC" ;
        $result= mysqli_query($db, $query);
        while ($row= mysqli_fetch_array($result))
        {
        $first_name= $row['first_name'];
        $last_name= $row['last_name'];
        $area= $row['area'];
        $id= $row['id'];
        ?>
        <div class="col-lg-3 col-6">
        <img class="rounded-circle col-12 mt-5 mb-3" src="http://www.baytekgames.com/wp-content/uploads/2016/12/facebook-default-no-profile-pic1.jpg" alt="Generic placeholder image">
          <h2 class="text-center"><?php echo $first_name." ".$last_name ?></h2>
          <p class="text-center"><?php echo $area ?></p>
            <p><a class="btn btn-secondary align-items-center d-flex justify-content-center" href="Profile.php?id=<?php echo $id ?>" role="button">View details
                &raquo;</a></p>
          </div>
          <?php } ?>
      </div>
      </div>
    </body>
  </html>