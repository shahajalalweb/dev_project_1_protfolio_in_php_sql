<?php 
session_start();

$getNavID = $_GET['id'];
include('database.php');

$selSql = "DELETE FROM `protfolio_name` WHERE id=$getNavID";

if ($connectionDB->query($selSql)) {
    $_SESSION['nameDeleted'] = true;
    header('Location: pages/protfolio-name.php');
}

?>