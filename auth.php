<?php
session_start();


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    include("database.php");
    // sql check admin 
    $sql_check_login = "SELECT * FROM `admin`";
    $result_check_login = $connectionDB->query($sql_check_login);

    if ($result_check_login->num_rows > 0) {
        while ($row = $result_check_login->fetch_assoc()) {
            if ($row["email"] == $email || $row["password"] == $password) {
                $_SESSION['isAdmin'] = true;
                header('Location: index.php');
            }
        }
    }
}
