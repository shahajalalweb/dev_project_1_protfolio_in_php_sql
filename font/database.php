<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "protfolio_dev";

$connectionDB = new mysqli($servername, $username, $password, $database);

if ($connectionDB->connect_error) {
    die("Connection failed: ". $connectionDB->connect_error);
}