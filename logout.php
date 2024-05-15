<?php
$login = false;
session_start();
session_unset();
session_destroy();




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

    <link rel="stylesheet" href="style.css">

    <title>thanks</title>
</head>

<body>

    <section id="home">
        <h1 class="h-primary">Thank you for visiting SecureLogin!</h1>
        <p>
            Experience the pinnacle of online security and user-friendly design. Protecting your digital world has never been easier. Join us today and see the difference SecureLogin can make for you.. 
        </p>
        <!-- <a class="btn">Log in</button> -->
        <a class="btn" href="/login_sys/login.php">Log in</a>
        
    </section>

</body>

</html>