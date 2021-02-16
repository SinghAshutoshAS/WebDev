<?php
$hostname = "localhost"; //or 127.0.0.1
$username = "root"; //username of database
$password = ""; //password of database
$database = "web"; //the name of database that we create

$conn = mysqli_connect($hostname, $username, $password, $database);// command to connect to MySQL database

if($conn){
    echo "Connection Successful...";
}
else{
    echo "Connection Failed...";
}
?>