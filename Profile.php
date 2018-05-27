<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <style>
        
        .center {
            margin: auto;
            width: 60%;
            padding: 10px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <title>BEEF | Profile</title>
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
      <a class="btn btn-outline-primary" href="#">Log in</a>
      <?php } ?>
    </nav>
    <?php
      $id = $_GET['id']; 
      $db= mysqli_connect('localhost', 'root', '', 'registration');
      $query="SELECT * FROM user WHERE id = '$id'";
      $result= mysqli_query($db, $query);
      while ($row= mysqli_fetch_array($result))
        {
        $first_name= $row['first_name'];
        $last_name= $row['last_name'];
        $area= $row['area'];
        } 
        ?>
    <div class="center">
        <img class="rounded-circle" src="http://www.baytekgames.com/wp-content/uploads/2016/12/facebook-default-no-profile-pic1.jpg"
            alt="Generic placeholder image" width="140" height="140">
            <h2 class="text-center"><?php echo $first_name." ".$last_name ?></h2>
        <p>
          <?php if(isset($_SESSION['username']) == false) { ?>
            <a class="btn btn-secondary" href="login.php" role="button">Hire &raquo;</a>
          <?php } 
              else {
                $username = $_SESSION['username'];
                $query = "SELECT * FROM user WHERE username = '$username' AND type = '2'";
                $result= mysqli_query($db, $query);
                if (mysqli_num_rows($result) == 1) { ?>
                  <form method="post" action="Profile.php?id=<?php echo $id ?>">
                    <input name="rate" type="number" min="1" max="5">
                    <button type="submit" name="rating" class="btn">submit</button>
                  </from>
                    <?php 
                    if(isset($_POST['rating'])){
                      $rate = $_POST['rate'];
                      $db = mysqli_connect('localhost', 'root', '', 'registration');
                      $query = "SELECT * FROM user WHERE id = '$id'";
                      $result = mysqli_query($db, $query);
                      $row = mysqli_fetch_array($result);
                      $add_total = $row['total_rating'] + $rate;
                      $add_count = $row['count_rating'] + 1;
                      $add_rating = $add_total / $add_count;
                      $query = "UPDATE user SET total_rating = '$add_total', count_rating = '$add_count', rating = '$add_rating' WHERE id ='$id'";
                      mysqli_query($db, $query);
                    }
                      ?>
                  <a class="btn btn-secondary" href="payment.php" role="button">Hire &raquo;</a>
                <?php }
              } ?>
        </p>


        <h2>Location</h2>
        <h2 class="text-center"><?php echo $area ?></h2>
        

    </div>
</body>

</html>