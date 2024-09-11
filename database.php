<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "protfolio_dev";

$connectionDB = new mysqli($servername, $username, $password);

if ($connectionDB->connect_error) {
    die("Connection failed: ". $connectionDB->connect_error);
}

// Create database if it doesn't exist
if ($connectionDB->query("CREATE DATABASE IF NOT EXISTS $database") === TRUE) {
    $connectionDB->select_db($database);
} else {
    $connectionDB->select_db($database);
}
