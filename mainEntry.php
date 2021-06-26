<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servomotordb";
$m1 = $_POST['motor1'];
$m2 = $_POST['motor2'];
$m3 = $_POST['motor3'];
$m4 = $_POST['motor4'];
$m5 = $_POST['motor5'];
$m6 = $_POST['motor6'];

$connection = new mysqli($servername, $username, $password, $dbname);

if($connection->connect_error){
    die("Connection to Database Failed: ". $connection->connect_error);
}
echo 'Connected to DataBase Successfully!';

$sql = "INSERT INTO servomotors_table (Enigne1,Enigne2,Enigne3,Enigne4,Enigne5,Enigne6) VALUES ('$m1', '$m2', '$m3', '$m4', '$m5', '$m6')";

if($connection->query($sql)==TRUE){
    echo 'The vaules have been saved to Database!';
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
header('location: main.html');
?>
