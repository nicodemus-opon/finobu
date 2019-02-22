<?php
$servername = "localhost";
$username = "nico";
$password = "Black11060!";
$dbname = "garimax";
//$dbport = 3306;
$con = mysqli_connect($servername, $username, $password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>