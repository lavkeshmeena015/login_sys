<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $other = $_POST["other"];

    if($username !="" && $email !="" && $phone !=""){
        $sql = "INSERT INTO `queries` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";

        $sql = "INSERT INTO `queries` ( `name`, `email`, `phone` , `other`) VALUES ('$username', '$email' , '$phone' , '$other')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}    
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Contact Us</title>
  <!-- <link rel="icon" href="../rec/a_logo-r.png" type="image/x-icon" /> -->

  <style>
    .container {
      align-items: center;
      margin-top: 10%;
      background-image: url("/login_sys/rec/pexels-fwstudio-33348-129731.jpg");
    }

    .submit{
      align-items: center;
      align-content: center;
    }

    body {
      width: 100%;
      height: 672px;
      background-image: url("/login_sys/rec/pexels-fwstudio-33348-129731.jpg");
      background-size: cover;
      background-position: 50% 50%;
    }
  </style>

</head>
<body>
  <?php require 'partials/_nav.php' ?>
  <div class="my1">

  <?php
        if($showAlert == true){
          echo "<h1> thank you for contecting us </h1>";
          $showAlert =false;

        }
      ?>

    <div class="container">
      <h1 class="text-center">Contact Us</h1>
      <form action="/login_sys/contect.php" method="post">
        <div class="form-group">
          <!-- <label for="username">Username</label> -->
          <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter your name">

        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your phone">
        </div>
        <div class="form-group">
          <textarea class="form-control" cols="30" rows="10" id="other" name="other" placeholder="Enter any other information here"> </textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
