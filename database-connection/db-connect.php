<?php

// $server = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'idspldb';

// $conn = new mysqli($server,$username, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$server = 'localhost';
$username = 'idspldev';
$password = 'Developer@123';
$database = 'idspldb';

$conn = new mysqli($server,$username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}