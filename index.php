<?php


echo "Welcome to the stage where we are ready to get connected to a database <br>";

$servername = "localhost";
$username = "root";
$password = "1234";
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

?>