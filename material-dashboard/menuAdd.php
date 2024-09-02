<?php
session_start();
include("database.php");

// navbar added 
if (isset($_POST['submit'])) {
  $navNam = $_POST['menuName'];
  $menuDes = $_POST['menuDes'];
  $navAddSql = "INSERT INTO `menu_bar`(`name`, `description`) VALUES ('$navNam','$menuDes')";
  if ($navAdd = $connectionDB->query($navAddSql)) {
    $_SESSION['navAdded'] = true;
    header('Location: pages/tables.php');
  }
}

// nemu update 
if (isset($_GET['editID']) & isset($_POST['editSubmit'])) {
  $navEditID = $_GET['editID'];
  $upMenuName = $_POST['editName'];
  $upMenuDes = $_POST['editDes'];
  // menu update sql 
  $upNavSql = "UPDATE `menu_bar` SET `name`='$upMenuName',`description`='$upMenuDes' WHERE id=$navEditID";
  if ($connectionDB->query($upNavSql)) {
    $_SESSION["upSuc"] = true;
    header('Location: pages/tables.php');
  }
}

?>
