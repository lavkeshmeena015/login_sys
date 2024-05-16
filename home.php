<?php
session_start();
// $_SESSION['loggedin']=false;
$mnc = false;
echo $mnc;
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <section id="home">
        <h1 class="h-primary">Welcome to SecureLogin</h1>
        <p>
            Where Your Security Meets Simplicity.Unlock the future of online security with our cutting-edge login system
            designed for ultimate protection and ease of use. Join us in creating a safer digital world, one login at a
            time. 
        </p>
        <p>You can trust us with your important and personal information.</p>
        <p>
            Why SecureLogin?
            <p id="why">
                <ul>
                    <li>Unparalleled Security</li>
                    <li>Effortless User Experience</li>
                    <li>Tailored Solutions for Every Need</li>
                    <li>24/7 Dedicated Support</li>
                </ul>
            </p>
        </p>
    </section>
//all copyrights are reserved
</body>

</html>
