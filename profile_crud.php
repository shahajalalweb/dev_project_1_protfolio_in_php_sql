<?php
include("database.php");

// scial update 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // $editSocialID = $_POST['editSocialID'];
    $profile_name = $_POST['profile_name'];
    $profile_icon = $_POST['profile_icon'];
    $profile_link = $_POST['profile_link'];
    // menu update sql 
    $socialUpSql = "INSERT INTO `profiles`(`profile_name`, `profile_icon`, `profile_link`) VALUES ('$profile_name','$profile_icon','$profile_link')";
    if ($connectionDB->query($socialUpSql)) {
        $_SESSION["upSuc"] = true;
        header('Location: pages/protfolio_profile.php');
    }
}


// profile delete 
if (isset($_GET['deleteID'])) {
    $delID = $_GET['deleteID'];
    // Assuming id is an integer, no need for quotes
    $delSql = "DELETE FROM `profiles` WHERE `id` = $delID";
    if ($connectionDB->query($delSql)) {
        $_SESSION['socialDelSuc'] = true;
        header('Location: pages/protfolio_profile.php');
    }
}

// scial update 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['profile_edit'])) {
    $profile_edit = $_POST['profile_edit'];
    $profileName_edit = $_POST['profileName_edit'];
    $profileIcon_edit = $_POST['profileIcon_edit'];
    $profileLink_edit = $_POST['profileLink_edit'];
    // menu update sql 
    $socialUpSql = "UPDATE `profiles` SET `profile_name`='$profileName_edit',`profile_icon`='$profileIcon_edit', `profile_link`='$profileLink_edit' WHERE id=$profile_edit";
    if ($connectionDB->query($socialUpSql)) {
        $_SESSION["upSuc"] = true;
        header('Location: pages/protfolio_profile.php');
    }
}
