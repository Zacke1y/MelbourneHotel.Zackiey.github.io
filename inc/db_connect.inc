<?php

if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hotel";
}else{
    $servername = "talsprddb02.int.its.rmit.edu.au";
    $username = "s3944519";
    $password = "Zackerynova1234!";
    $database = "s3944519";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}