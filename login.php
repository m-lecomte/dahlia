<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Dahlia_Logo_gradient_icon.ico">
    <link rel="stylesheet" href="css/loginRegister.css">
    <script src="https://kit.fontawesome.com/3297aaa2b8.js" crossorigin="anonymous"></script>
    <title>Dahlia - Login</title>
</head>
<body>
<?php
include 'php/headerIndex.inc.php';
?>
<div class="content">
    <a><img src="img/sphere.png" alt="sphere" class="sphere"></a>
    <form action="#.php">
        <input type="text" name="mail_address" id="mail" placeholder="Mail Address">
        <input type="password" name="password" id="pwd" placeholder="Password">
        <input type="submit" value="Log In">
        <p class="smallText">Don't have an account yet ? Register <a href="register.php">here</a> !</br></br>Forget your
            password ? Click <a href="">here</a> !</p>
    </form>
</div>
<?php
include 'php/footer.inc.php';
?>
</body>
</html>