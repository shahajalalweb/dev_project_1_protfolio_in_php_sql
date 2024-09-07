<?php
session_start();
include("database.php");

// scial update 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $editSocialID = $_POST['editSocialID'];
    $editSocialName = $_POST['editSocialName'];
    $editSocialIcon = $_POST['editSocialIcon'];
    $editSocialLink = $_POST['editSocialLink'];
    // menu update sql 
    $socialUpSql = "UPDATE `social` SET `name`='$editSocialName',`icon_name`='$editSocialIcon', `info_details`='$editSocialLink' WHERE id=$editSocialID";
    if ($connectionDB->query($socialUpSql)) {
      $_SESSION["upSuc"] = true;
      header('Location: pages/social.php');
    }
  }
  


















?>