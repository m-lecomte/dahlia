<html>

<head>
    <title>Dahlia : Home</title>
</head>

<body>
    <?php

    $mysqli = new mysqli("localhost", "root", "", "dahlia");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    $sql = "SELECT * FROM chat";
    $result = $mysqli->query($sql);

    // Associative array
    $row = $result->fetch_assoc();
    printf("%s <br>%s\n", $row["author"], $row["title"]);

    // Free result set
    $result->free_result();


    if (isset($_POST["message"])) {
        echo "posted !";
        $message = $_POST["message"];
        //$mysqli = new mysqli("localhost","me","password","quizz");
        $mysqli->autocommit(FALSE);

        // post message
        $mysqli->query("INSERT INTO message (author, text, id_chat) VALUES ('1', '" . $message . "', '1')");
        //$mysqli->query("INSERT INTO test (test2) VALUES ('" . $message . "')");

        // Commit transaction
        if (!$mysqli->commit()) {
            echo "Commit transaction failed";
            exit();
        } else {

            echo "<br>commit<br>";

            $sql2 = "SELECT * FROM message";
            //$sql2 = "SELECT * FROM test";
            $result2 = $mysqli->query($sql2);

            // print commit content
            $row2 = $result2->fetch_assoc();
            printf("%s | %s\n", $row2["author"], $row2["text"]);
            //printf("%s | %s", $row2["test1"], $row2["test2"]);
        }
    }


    ?>
    <form action='index.php' method='POST'>
        <label for="message"><input type="text" id="message" name="message"></label>
        <input type='submit' value='send'>
    </form>
    <?php
    $mysqli->close();

    ?>
</body>

</html>