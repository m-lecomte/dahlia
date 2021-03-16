<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Dahlia_Logo_gradient_icon.ico">
    <link rel="stylesheet" href="css/loginRegister.css">
    <script src="https://kit.fontawesome.com/3297aaa2b8.js" crossorigin="anonymous"></script>
    <title>Dahlia - Register</title>
</head>
<body>
<?php
include 'php/headerIndex.inc.php';
?>
<div class="content">
    <a><img src="img/sphere.png" alt="sphere" class="sphere"></a>
    <form action="#.php">
        <input type="text" name="firstname" id="fname" placeholder="First Name">
        <input type="text" name="lastname" id="lname" placeholder="Last Name">
        <input type="date" name="birthday" id="bday">
        <span class="genderForm">
            <p>Your gender:</p>
        <span>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="male"/>
        </span>
        <span>
            <label for="female">Female</label>
            <input type="radio" name="gender" id="female"/>
        </span>
        <span>
            <label for="other">Other</label>
            <input type="radio" name="gender" id="other"/>
        </span>
        </span>
        <input type="email" name="mailaddress" id="mail" placeholder="Mail Address">
        <input type="password" id="pwd" name="password" placeholder="Password">
        <input type="submit" value="Register">
    </form>
</div>
<?php
include 'php/footer.inc.php';
?>
</body>
</html>