<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "db_tokokue";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    echo 'errpr';
    die;
}