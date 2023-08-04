<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'training';

try {
    $conn = new PDO ("mysql:host=$servername; dbname=$dbname", $username, $password);
}catch (PDOException $e){
    echo 'Connection Failed' . $e -> getMessage();
}
