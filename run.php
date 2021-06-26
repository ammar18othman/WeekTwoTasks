<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servomotordb";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Failed to connect to database");
} else {
    echo "Connected to database! <br>";
}

$sql = "SELECT ON_OFF FROM on_off_table WHERE ID=(SELECT MAX(ID) FROM on_off_table);";

$result = mysqli_query($connection, $sql);

$stausOFF = FALSE;

while ($row = mysqli_fetch_assoc($result)) {
    $status = $row["ON_OFF"];
    if ($status == 1) {
        $insert = "INSERT INTO on_off_table (ON_OFF) VALUES (0);";
        if ($connection->query($insert) == TRUE) {
            echo 'The motors now are OFF!';
            $stausOFF = TRUE;
            header('location: main.html');
        } else {
            echo "Error: " . $insert . "<br>" . $connection->error;
        }
    }
}

if ($stausOFF == FALSE) {
    $insert = "INSERT INTO on_off_table (ON_OFF) VALUES (1);";
    if ($connection->query($insert) == TRUE) {
        echo 'The motors now are ON!';
    } else {
        echo "Error: " . $insert . "<br>" . $connection->error;
    }
    header('location: main.html');

}
?>