<?php

$sname = "localhost";
$uname = "root";
$password = "";

$database_name = "foody";

$conn = mysqli_connect($sname, $uname, $password, $database_name);

if (!$conn) {
    echo "Connection Failed!";
    exit();
}