<?php 
include("database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $skillName = $_POST['skillName'];
    $skillValue = $_POST['skillValue'];

    $skillAdd_sql = "INSERT INTO `skills`(`name`, `value`) VALUES ('$skillName','$skillValue')";

    if ($connectionDB->query($skillAdd_sql)) {
        $_SESSION['skillAdd_suc'] = true;
        header('Location: pages/skills.php');
    }

}


//delete get id recive and delete skill 
if (isset($_GET['deleteID'])) {
    $delID = $_GET['deleteID'];
    $delSql = "DELETE FROM `skills` WHERE id = '$delID'"; //for delete sql 

    if ($connectionDB->query($delSql)) {
        $_SESSION['delSkill'] = true;
        header('Location: pages/skills.php');
    }
}













?>