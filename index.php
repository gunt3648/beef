<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <style>
    </style>
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
    <title>BEEF | Home</title>

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

    <div id="carouselExampleSlidesOnly" class="carousel slide"
      data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100"
            src="https://images.unsplash.com/photo-1519451241324-20b4ea2c4220?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8bffeba64fa20d6bf6198cf77ebf3c92&auto=format&fit=crop&w=1050&q=80"
            alt="First slide" width="600" height="600">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"
            src="https://images.unsplash.com/photo-1520524155947-ca0c3d96ec03?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=773f8c3c9fea438f9c0a635caedfd846&auto=format&fit=crop&w=1050&q=80"
            alt="Second slide" width="600" height="600">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"
            src="https://images.unsplash.com/photo-1525326551663-02d6b658a07e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=afd1c88a9613d8dbbaa10efd51624ed9&auto=format&fit=crop&w=1050&q=80"
            alt="Third slide" width="600" height="600">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev"
      role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next"
      role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12" style="margin: 10px 10px">
        <br>
        <h2 class="col-9 d-inline">Top Destinations :</h2>
      </div>
        <?php
        $db= mysqli_connect('localhost', 'root', '', 'registration');
        $query="SELECT * FROM destination ORDER BY click DESC LIMIT 3" ;
        $result= mysqli_query($db, $query);
        while ($row= mysqli_fetch_array($result))
        {
        $place= $row['place'];
        ?>
        <div class="col-lg-4 col-6">
        <img class="rounded-circle col-12 mt-5 mb-3" src="http://www.baytekgames.com/wp-content/uploads/2016/12/facebook-default-no-profile-pic1.jpg" alt="Generic placeholder image">
          <h2 class="text-center"><?php echo $place ?></h2>
            <p><a class="btn btn-secondary align-items-center d-flex justify-content-center" href="<?php echo $place ?>.php" role="button">View details
                &raquo;</a></p>
          </div>
          <?php } ?>
      <div class="col-12" style="margin: 10px 10px">
        <br>
        <h2 class="col-9 d-inline">Bangkok guide :</h2>
        <h3 class="col-3 d-inline"><a href="seeall.php">see all</a></h3>
      </div>
      <?php
        $db= mysqli_connect('localhost', 'root', '', 'registration');
        $query="SELECT * FROM user WHERE area = 'Bangkok' ORDER BY id DESC LIMIT 4" ;
        $result= mysqli_query($db, $query);
        while ($row= mysqli_fetch_array($result))
        {
        $first_name= $row['first_name'];
        $last_name= $row['last_name'];
        $id= $row['id'];
        ?>
        <div class="col-lg-3 col-6">
        <img class="rounded-circle col-12 mt-5 mb-3" src="http://www.baytekgames.com/wp-content/uploads/2016/12/facebook-default-no-profile-pic1.jpg" alt="Generic placeholder image">
          <h2 class="text-center"><?php echo $first_name." ".$last_name ?></h2>
            <p><a class="btn btn-secondary align-items-center d-flex justify-content-center" href="Profile.php?id=<?php echo $id ?>" role="button">View details
                &raquo;</a></p>
          </div>
          <?php } ?>
          <hr width="60%">
          <div class="col-12" style="margin: 10px 10px">
        <h2 class="col-9 d-inline">Chiang Mai guide :</h2>
        <h3 class="col-3 d-inline"><a href="seeall.php">see all</a></h3>
      </div>
      <?php
        $db= mysqli_connect('localhost', 'root', '', 'registration');
        $query="SELECT * FROM user WHERE area = 'Chiang Mai' ORDER BY id DESC LIMIT 4" ;
        $result= mysqli_query($db, $query);
        while ($row= mysqli_fetch_array($result))
        {
        $first_name= $row['first_name'];
        $last_name= $row['last_name'];
        ?>
        <div class="col-lg-3 col-6">
        <img class="rounded-circle col-12 mt-5 mb-3" src="http://www.baytekgames.com/wp-content/uploads/2016/12/facebook-default-no-profile-pic1.jpg" alt="Generic placeholder image">
          <h2 class="text-center"><?php echo $first_name." ".$last_name ?></h2>
            <p><a class="btn btn-secondary align-items-center d-flex justify-content-center" href="Profile.php?id=<?php echo $id ?>" role="button">View details
                &raquo;</a></p>
          </div>
          <?php } ?>
          <div class="col-12" style="margin: 10px 10px">
        <br>
        <h2 class="col-9 d-inline">Top Guide :</h2>
      </div>
        <?php
        $db= mysqli_connect('localhost', 'root', '', 'registration');
        $query="SELECT * FROM user WHERE type = '1' ORDER BY rating DESC LIMIT 3" ;
        $result= mysqli_query($db, $query);
        while ($row= mysqli_fetch_array($result))
        {
        $first_name= $row['first_name'];
        $last_name= $row['last_name'];
        $total_rating= $row['total_rating'];
        $count_rating= $row['count_rating'];
        ?>
        <div class="col-lg-4 col-6">
        <img class="rounded-circle col-12 mt-5 mb-3" src="http://www.baytekgames.com/wp-content/uploads/2016/12/facebook-default-no-profile-pic1.jpg" alt="Generic placeholder image">
          <h2 class="text-center"><?php echo $first_name." ".$last_name ?></h2>
          <p class="text-center"><?php if($count_rating == 0) { echo '0'; } else { echo $total_rating / $count_rating; } ?></p>
            <p><a class="btn btn-secondary align-items-center d-flex justify-content-center" href="Profile.php?id=<?php echo $id ?>" role="button">View details
                &raquo;</a></p>
          </div>
          <?php } ?>
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
              <div class="row">
                <div class="col-12 col-md">
                  <img class="mb-2"
                    src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg"
                    alt="" width="24" height="24">
                  <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
                </div>
                <div class="col-6 col-md">
                  <h5>Top Destinations</h5>
                  <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Amphawa Floating Market</a></li>
                    <li><a class="text-muted" href="#">Yaowarat</a></li>
                    <li><a class="text-muted" href="#">Rot Fai Market</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md">
                  <h5>Address</h5>
                  <h6>Contact
                    Address: 524/42 Asoke-Dindaeng Road
                    Soi PhoPan 55, Din Daeng
                    Bangkok, 10400
                    Phone: (+66) 2 999 9861
                    Email us for General Enquiries
                    Email us for Group Travel</h6>


                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>BEEF</h5>
                <h6>Recommend and understand you</h6>
                <h6>A Thai Social Enterprise </h6>
                <h6>Designed in Bangkok</h6>
                <h6> © 2018</h6>

              </div>
            </div>
          </footer>
        </div>
      </div>

    </body>
  </html>>