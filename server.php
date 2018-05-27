<?php
  session_start();

  $username = "";
  $email = "";
  $first_name = "";
  $last_name = "";
  $tel = "";
  $area = "";
  $errors = array();
  $errors2 = array();

  //connect to database
  $db = mysqli_connect('localhost', 'root', '', 'registration');

  //if regis button is clicked
  if(isset($_POST['register_guide'])) {
    $username= mysql_real_escape_string($_POST['username']);
    $email= mysql_real_escape_string($_POST['email']);
    $password= mysql_real_escape_string($_POST['password']);
    $password_confirmed= mysql_real_escape_string($_POST['password_confirmed']);
    $first_name= mysql_real_escape_string($_POST['first_name']);
    $last_name= mysql_real_escape_string($_POST['last_name']);
    $tel= mysql_real_escape_string($_POST['tel']);
    $area= mysql_real_escape_string($_POST['area']);

    if(empty($username)) {
      array_push($errors, "Username is required");
    }
    if(empty($email)) {
      array_push($errors, "Email is required");
    }
    if(empty($password)) {
      array_push($errors, "Password is required");
    }
    if(empty($first_name)) {
      array_push($errors, "First name is required");
    }
    if(empty($last_name)) {
      array_push($errors, "Last name is required");
    }
    if(empty($tel)) {
      array_push($errors, "Phone number is required");
    }
    if(empty($area)) {
      array_push($errors, "Area is required");
    }
    if($password != $password_confirmed) {
      array_push($errors, "Password do not match");
    }

    if(count($errors) == 0) {
      $password = md5($password); //security
      $sql = "INSERT INTO user (type, username, password, first_name, last_name, email, tel, area)
        VALUES ('1', '$username', '$password', '$first_name', '$last_name', '$email', '$tel', '$area')";
      mysqli_query($db, $sql);
      $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
    }
  }

  if(isset($_POST['register_trav'])) {
    $username= mysql_real_escape_string($_POST['username']);
    $email= mysql_real_escape_string($_POST['email']);
    $password= mysql_real_escape_string($_POST['password']);
    $password_confirmed= mysql_real_escape_string($_POST['password_confirmed']);
    $first_name= mysql_real_escape_string($_POST['first_name']);
    $last_name= mysql_real_escape_string($_POST['last_name']);
    $tel= mysql_real_escape_string($_POST['tel']);

    if(empty($username)) {
      array_push($errors2, "Username is required");
    }
    if(empty($email)) {
      array_push($errors2, "Email is required");
    }
    if(empty($password)) {
      array_push($errors2, "Password is required");
    }
    if(empty($first_name)) {
      array_push($errors2, "First name is required");
    }
    if(empty($last_name)) {
      array_push($errors2, "Last name is required");
    }
    if(empty($tel)) {
      array_push($errors2, "Phone number is required");
    }
    if($password != $password_confirmed) {
      array_push($errors2, "Password do not match");
    }

    if(count($errors2) == 0) {
      $password = md5($password); //security
      $sql = "INSERT INTO user (type, username, password, first_name, last_name, email, tel)
        VALUES ('2', '$username', $password, $first_name, $last_name, '$email', $tel)";
      mysqli_query($db, $sql);
      $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
    }
  }

  //login
  if(isset($_POST['login_guide'])) {
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    if(empty($username)) {
      array_push($errors, "Username is required");
    }
    if(empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND type='1'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
      }else {
        array_push($errors, "Wrong username or password");
      }
    }
  }

//login
  if(isset($_POST['login_traveller'])) {
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    if(empty($username)) {
      array_push($errors2, "Username is required");
    }
    if(empty($password)) {
      array_push($errors2, "Password is required");
    }

    if (count($errors2) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND type='2'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
      }else {
        array_push($errors2, "Wrong username or password");
      }
    }
  }  

  //logout
  if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }

  $db->close();
?>