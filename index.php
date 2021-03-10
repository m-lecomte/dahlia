<html>

<head>
    <title>Dahlia : Home</title>
</head>

<body>
    <?php

    $mysqli = new mysqli("localhost", "me", "password", "quizz");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    $sql = "SELECT * FROM question WHERE id=1";
    $result = $mysqli->query($sql);

    // Associative array
    $row = $result->fetch_assoc();
    printf("%s <br>%s\n", $row["énoncé"], $row["r3"]);

    // Free result set
    $result->free_result();

    // function to send message
    /*function send_message($message)
    {

        //$mysqli = new mysqli("localhost","me","password","quizz");

        // Turn autocommit off
        $mysqli->autocommit(FALSE);

        // Insert some values
        $mysqli->query("INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Peter','Griffin',35)");
        $mysqli->query("INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Glenn','Quagmire',33)");

        // Commit transaction
        if (!$mysqli->commit()) {
            echo "Commit transaction failed";
            exit();
        }
    }*/

    $mysqli->close();
    ?>
    <form action="index.php" method="POST">

        <input type="submit" value="send">
    </form>
    <?php
    $mysqli->close();

    ?>
</body>

</html>