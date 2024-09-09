<?php 
session_start();
if (!isset($_SESSION['isAdmin'])) {
  header('Location: pages/sign-in.php');
}

header("Location: pages/dasboard.php");

?>