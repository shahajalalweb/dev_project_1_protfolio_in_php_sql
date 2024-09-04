<?php 
session_start();

$getNavID = $_GET['id'];
include('database.php');

$selSql = "DELETE FROM `menu_bar` WHERE id=$getNavID";

if ($connectionDB->query($selSql)) {
    $_SESSION['navDeleted'] = true;
    header('Location: pages/tables.php');
}

?>