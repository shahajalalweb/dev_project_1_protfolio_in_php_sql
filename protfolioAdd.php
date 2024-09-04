<?php
session_start();
include("database.php");

// navbar added 
if (isset($_POST['submit'])) {
  $navNam = $_POST['menuName'];
//   $menuDes = $_POST['menuDes'];
  $navAddSql = "INSERT INTO `protfolio_name`(`name`) VALUES ('$navNam')";
  if ($navAdd = $connectionDB->query($navAddSql)) {
    $_SESSION['navAdded'] = true;
    header('Location: pages/protfolio-name.php');
  }
}