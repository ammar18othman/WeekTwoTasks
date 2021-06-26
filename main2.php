<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robotmovementdb";


$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection to Database Failed: " . $connection->connect_error);
}
echo 'Connected to DataBase Successfully! <br>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Something posted

    if (isset($_POST['forward'])) {
        $sql = "INSERT INTO movement_table (movement) VALUES ('forward')";
        if ($connection->query($sql) == TRUE) {
            echo 'The vaule have been saved to Database!';

            header('location: main.html');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;

            header('location: main.html');
        }
    }

    if (isset($_POST['left'])) {
        $sql = "INSERT INTO movement_table (movement) VALUES ('left')";
        if ($connection->query($sql) == TRUE) {
            echo 'The vaule have been saved to Database!';

            header('location: main.html');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;

            header('location: main.html');
        }
    }


    if (isset($_POST['stop'])) {
        $sql = "INSERT INTO movement_table (movement) VALUES ('stop')";
        if ($connection->query($sql) == TRUE) {
            echo 'The vaule have been saved to Database!';

            header('location: main.html');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;

            header('location: main.html');
        }
    }

    if (isset($_POST['right'])) {
        $sql = "INSERT INTO movement_table (movement) VALUES ('right')";
        if ($connection->query($sql) == TRUE) {
            echo 'The vaule have been saved to Database!';

            header('location: main.html');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;

            header('location: main.html');
        }
    }

    if (isset($_POST['backward'])) {
        $sql = "INSERT INTO movement_table (movement) VALUES ('backward')";
        if ($connection->query($sql) == TRUE) {
            echo 'The vaule have been saved to Database!';

            header('location: main.html');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;

            header('location: main.html');
        }
    }
}

echo 'no movment button press were rigistered!';
header('location: main.html');
