<?php 
session_start();
include("database.php");

if (isset($_GET['deleteID'])) {
    $del_id = $_GET['deleteID'];
   // Assuming id is an integer, no need for quotes
   $delSql = "DELETE FROM `education` WHERE `id` = $del_id";
   if ($connectionDB->query($delSql)) {
       $_SESSION['socialDelSuc'] = true;
       header('Location: pages/education.php');
   }

}



?>