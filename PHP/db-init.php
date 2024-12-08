<?php


$host = "localhost";
$username = "root";
$password = "";
$dbname = "bagsntops";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$productsql = "SELECT * FROM products";
$prodres = $conn->query($productsql);






$conn->close()
?>