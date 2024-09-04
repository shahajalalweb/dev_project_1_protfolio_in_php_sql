<?php 
 session_start();
 include("database.php");

 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // admin registation connection sql 
    $sql_addAdmin = "INSERT INTO `admin`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

    if ($connectionDB->query($sql_addAdmin)) {
        $_SESSION['isAdmin'] = true;
        header('Location: index.php');
    }
   
}







?>