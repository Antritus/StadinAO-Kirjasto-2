<?php
$host = "localhost";
$database = "lib2";
$username = "root";
$password = "";

$conn = new mysqli($host,$database,$username,$password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}