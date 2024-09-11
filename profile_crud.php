<?php
include("database.php");

// scial update 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $editSocialID = $_POST['editSocialID'];
    $addSocialName = $_POST['profile_name'];
    $addSocialIcon = $_POST['profile_icon'];
    $addSocialLink = $_POST['profile_link'];
    // menu update sql 
    $socialUpSql = "INSERT INTO `social`(`name`, `icon_name`, `info_details`) VALUES ('$addSocialName','$addSocialIcon','$addSocialLink')";
    if ($connectionDB->query($socialUpSql)) {
        $_SESSION["upSuc"] = true;
        header('Location: pages/social.php');
    }
}


// profile delete 
if (isset($_GET['id'])) {
    $delID = $_GET['id'];
    // Assuming id is an integer, no need for quotes
    $delSql = "DELETE FROM `social` WHERE `id` = $delID";
    if ($connectionDB->query($delSql)) {
        $_SESSION['socialDelSuc'] = true;
        header('Location: pages/social.php');
    }
}

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
