<?php 
include("database.php");

if (isset($_GET['deleteID'])) {
    $delID = $_GET['deleteID'];
    $delSql = "DELETE FROM `contact_info` WHERE id = $delID";
    if ($connectionDB->query($delSql)) {
        header("Location: pages/contact-info.php");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nameAdd = $_POST['name'];
    $profetionAdd = $_POST['profetion'];
    $phoneAdd = $_POST['phone'];
    $emailAdd = $_POST['email'];
    $websiteAdd = $_POST['website'];
    // add sql in contact info taable 
    $addSql = "INSERT INTO `contact_info`(`name`, `profetion`, `phone`, `email`, `website`) VALUES ('$nameAdd', '$profetionAdd','$phoneAdd','$emailAdd','$websiteAdd')";

    if ($connectionDB->query($addSql)) {
        $_SESSION['contactAddS'] = true;
        header("Location: pages/contact-info.php");
    }


}


















?>