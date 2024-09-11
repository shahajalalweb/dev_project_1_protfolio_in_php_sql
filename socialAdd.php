<?php
session_start();
include("database.php");

// scial add 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $editSocialID = $_POST['editSocialID'];
    $addSocialName = $_POST['addSocialName'];
    $addSocialIcon = $_POST['addSocialIcon'];
    $addSocialLink = $_POST['addSocialLink'];
    // menu update sql 
    $socialUpSql = "INSERT INTO `social`(`name`, `icon_name`, `info_details`) VALUES ('$addSocialName','$addSocialIcon','$addSocialLink')";
    if ($connectionDB->query($socialUpSql)) {
      $_SESSION["upSuc"] = true;
      header('Location: pages/social.php');
    }
  }
  