<?php
session_start();
include("database.php");

// social delete 
if (isset($_GET['id'])) {
    $delID = $_GET['id'];
    // Assuming id is an integer, no need for quotes
    $delSql = "DELETE FROM `social` WHERE `id` = $delID";
    if ($connectionDB->query($delSql)) {
        $_SESSION['socialDelSuc'] = true;
        header('Location: pages/social.php');
    }
}


?>