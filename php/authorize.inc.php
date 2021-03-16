<?php
if (!isset($_SESSION["username"])) {
    header("Location: ../index2.php");
}
