<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Dahlia_Logo_gradient_icon.ico">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/3297aaa2b8.js" crossorigin="anonymous"></script>
    <title>Dahlia - Login</title>
</head>
<body>
<?php
include 'php/header.inc.php';
?>
<div class="content">
    <a><img src="img/sphere.png" alt="sphere" class="sphere"></a>
    <form action="#.php">
        <input type="text" id="fname" name="firstname" placeholder="Mail Address">
        <input type="password" id="lname" name="lastname" placeholder="Password">
        <input type="submit" value="Log In">
        <p class="smallText">Does not have an account yet ? Register <a href="register.php>">here</a> !</p>
    </form>
</div>
<?php
include 'php/footer.inc.php';
?>
</body>
</html>