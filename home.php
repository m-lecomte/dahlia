<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Dahlia_Logo_gradient_icon.ico">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/3297aaa2b8.js" crossorigin="anonymous"></script>
    <title>Dahlia - Home</title>
</head>
<body>
<?php
include 'php/header.inc.php';
?>
<div class="content">
    <form action="#.php">
        <span class="post">
        <input type="text" name="post" id="post" placeholder="What's on your thoughts ?">
        <input type="submit" value="Post">
        </span>
    </form>
    <div class="feed">
    </div>
</div>
<?php
include 'php/footer.inc.php';
?>
</body>
</html>