<?php
$dbhost = "localhost";
$dbuser = "user";
$dbpasswd = "password";
$dbname = "dahlia";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname); //or die("Connect failed: %s\n" . $conn->error);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
